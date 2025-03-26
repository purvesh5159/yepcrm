<?php
class Mobile_WS_GetProfileInfo extends Mobile_WS_Controller {

    function process(Mobile_API_Request $request) {
        global $adb;

        $response = new Mobile_API_Response();
        $current_user = $this->getActiveUser();
        $userName = $current_user->user_name;
        $useruniqid = $request->get('useruniqueid');
    
        $recordModel = Vtiger_Record_Model::getInstanceById($current_user->id, 'Users');
        $imageObject = $recordModel->getImageDetails();
        $imageArray = $imageObject[0];
        $imageName = $imageArray['url'];
        if (empty($imageArray['id'])) {
            $imageArray['id'] = '';
        }

        $sql = 'select engineerid from vtiger_engineer ' .
            ' inner join vtiger_crmentity on vtiger_crmentity.crmid = vtiger_engineer.engineerid' .
            ' where engineer_code = ? and vtiger_crmentity.deleted= 0 ORDER BY engineerid DESC LIMIT 1';
        $sqlResult = $adb->pquery($sql, array($userName));
        $dataRow = $adb->fetchByAssoc($sqlResult, 0);

        if (empty($dataRow)) {
            $response->setError(100, 'Error In Finding The Profile Information');
            return $response;
        } else {
            $recordModel = Vtiger_Record_Model::getInstanceById($dataRow['engineerid'], 'Engineer');
            $data = $recordModel->getData();
            $response->setApiSucessMessage('Successfully Fetched Data');
            $data['imagename'] = $imageName;
     
            $tabId = Mobile_WS_Utils::getEntityModuleWSId('Users');
            $data['record_id'] = $tabId . 'x' . $request->get('useruniqueid');
            $data['attachmentid'] = $imageArray['id'];

             // Add ticket statistics for the current user
             $ticketStats = $this->getTicketStatistics($current_user->id);
             $data['ticket_stats'] = $ticketStats;
             
             $response->setResult(array('profileInfo' => $data));

            $response->setResult(array('profileInfo' => $data));
            return $response;
        }
    }

     /**
     * Get ticket statistics for the user
     * 
     * @param int $userId User ID
     * @return array Ticket statistics
     */
    private function getTicketStatistics($userId) {
        global $adb;
        
        // Get module instance
        $moduleInstance = Vtiger_Module::getInstance('Tickets'); // Replace with your custom module name if different
        if (!$moduleInstance) {
            return array(
                'error' => 'Tickets module not found',
                'total' => 0,
                'by_status' => array()
            );
        }
        
        $tableName = $moduleInstance->basetable;
        $tableIndex = $moduleInstance->basetableid;
        
        // Get total tickets count
        $totalQuery = "SELECT COUNT(*) as count FROM $tableName 
                      INNER JOIN vtiger_crmentity ON vtiger_crmentity.crmid = $tableName.$tableIndex
                      WHERE vtiger_crmentity.deleted = 0 AND vtiger_crmentity.smownerid = ?";
        
        $totalResult = $adb->pquery($totalQuery, array($userId));
        $totalTickets = $adb->query_result($totalResult, 0, 'count');
        
        // Get tickets by status
        $statusQuery = "SELECT tickets_status, COUNT(*) as count 
                      FROM $tableName 
                      INNER JOIN vtiger_crmentity ON vtiger_crmentity.crmid = $tableName.$tableIndex
                      WHERE vtiger_crmentity.deleted = 0 AND vtiger_crmentity.smownerid = ?
                      GROUP BY tickets_status";
        
        $statusResult = $adb->pquery($statusQuery, array($userId));
        $ticketsByStatus = array();
        
        $rows = $adb->num_rows($statusResult);
        for ($i = 0; $i < $rows; $i++) {
            $status = $adb->query_result($statusResult, $i, 'tickets_status');
            $count = $adb->query_result($statusResult, $i, 'count');
            $ticketsByStatus[$status] = intval($count);
        }
        
        return array(
            'total' => intval($totalTickets),
            'by_status' => $ticketsByStatus
        );
    }
}

