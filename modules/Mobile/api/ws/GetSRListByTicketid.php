<?php
include_once dirname(__FILE__) . '/models/Alert.php';
include_once dirname(__FILE__) . '/models/Paging.php';

class Mobile_WS_GetSRListByTicketid extends Mobile_WS_Controller {

    function process(Mobile_API_Request $request) {
        $parentId = $request->get('parent_id'); // Get the parent_id from the request
        $smownerId = $request->get('useruniqid'); // Get the assigned user ID

        // Validate parent_id
        if (empty($parentId)) {
            return $this->errorResponse("parent_id is required.");
        }

        global $adb;

        // Create a SQL query to fetch stock transfers with an inner join on vtiger_crmentity
        $query = "
            SELECT st.*, ce.*
            FROM vtiger_stocktransfer st
            INNER JOIN vtiger_crmentity ce ON st.stocktransferid = ce.crmid
            WHERE st.parent_id = ? AND ce.smownerid = ? AND ce.deleted = 0";

        $result = $adb->pquery($query, [$parentId, $smownerId]);

        $records = [];
        while ($row = $adb->fetch_array($result)) {
            $records[] = [
                'sparereqdate' => $row['sparereqdate'],
                'sparename' => $row['sparename'],
                'sparedetails' => $row['sparedetails'],
                'transferdate' => $row['transferdate'],
                'status' => $row['st_status'],
                'servicecordinator_id' => '41x' . $row['servicecordinator_id'],
                'parent_id' => $row['parent_id'],
                'stocktransferid' => '43x' . $row['stocktransferid'], // Modify as needed
				'assigned_user_id' => '19x' . $row['smownerid']
            ];
        }

        $response = new Mobile_API_Response();
        $response->setResult([
            'records' => $records,
            'records_per_page' => count($records),
            'moreRecords' => false, // Set this based on your pagination logic
            'page' => 1 // Adjust according to your pagination
        ]);
        $response->setApiSucessMessage('Successfully Fetched Data');
        return $response;
    }

    private function errorResponse($message) {
        $response = new Mobile_API_Response();
        $response->setError(400, $message);
        return $response;
    }
}
