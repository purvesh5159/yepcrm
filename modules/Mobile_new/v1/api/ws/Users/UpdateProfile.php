<?php

class Mobile_WS_UpdateProfile extends Mobile_WS_Controller {
    function process(Mobile_API_Request $request) {
        global $current_user, $adb;
        $response = new Mobile_API_Response();
        $recordId = $current_user->id;
        $userName = $current_user->user_name;

        $officeValue = $request->get('service_engineer_name');
        if (empty($officeValue)) {
            $response->setError(100, 'service_engineer_name Value is Empty');
            return $response;
        }
        $officeValue = $request->get('email');
        if (empty($officeValue)) {
            $response->setError(100, 'email Value is Empty');
            return $response;
        }
        
        $sql = 'select serviceengineerid from vtiger_serviceengineer ' .
            ' inner join vtiger_crmentity on vtiger_crmentity.crmid = vtiger_serviceengineer.serviceengineerid' .
            ' where badge_no = ? and vtiger_crmentity.deleted= 0 ORDER BY serviceengineerid DESC LIMIT 1';
        $sqlResult = $adb->pquery($sql, array($userName));
        // $employeeRecordModel = '';
        $num_rows = $adb->num_rows($sqlResult);
        if ($num_rows > 0) {
            $dataRow = $adb->fetchByAssoc($sqlResult, 0);
            // $employeeRecordModel = Vtiger_Record_Model::getInstanceById($dataRow['serviceengineerid'], 'ServiceEngineer');

            $updateSql = "update vtiger_serviceengineer set service_engineer_name = ?,
                    email = ?,designaion =? where serviceengineerid = ?";
            $adb->pquery($updateSql, array(
                $request->get('service_engineer_name'),
                $request->get('email'),
                $request->get('designaion'),
                $dataRow['serviceengineerid']
            ));
        }
        $recordModel = Vtiger_Record_Model::getInstanceById($recordId, 'Users');
        if (!empty($recordModel)) {
            $recordModel->set('mode', 'edit');
            $recordModel->set('last_name', $request->get('service_engineer_name'));
            $recordModel->set('email1', $request->get('email'));
            $recordModel->save();

            // $employeeRecordModel->set('mode', 'edit');
            // $employeeRecordModel->set('service_engineer_name', $request->get('service_engineer_name'));
            // $employeeRecordModel->set('email', $request->get('email'));
            // $employeeRecordModel->save();

            $response->setApiSucessMessage('User Profile Is Updated Successfully');
            $responseObject['userDetails'] = $this->getUserDetailsForProfile($recordId, $request->get('designaion'));
            $response->setResult($responseObject);
            return $response;
        } else {
            $response->setError(100, 'Not Able To Update User Profile');
            return $response;
        }
    }

    function getUserDetailsForProfile($recordId, $designation) {
        $userDetails = [];
        $recordModel = Vtiger_Record_Model::getInstanceById($recordId, 'Users');
        $imageObject = $recordModel->getImageDetails();
        $imageArray = $imageObject[0];
        $imageName = $imageArray['url'];
        $userDetails['imagename'] = $imageName;
        $userDetails['email'] = $recordModel->get('email1');
        $userDetails['designaion'] = $designation;
        $userDetails['service_engineer_name'] = $recordModel->get('last_name');
        return $userDetails;
    }
}
