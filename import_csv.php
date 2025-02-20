<?php
ini_set('max_execution_time', 0);
ini_set('memory_limit', '-1');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);  

require_once 'vendor/autoload.php';
include_once 'config.php';
include_once 'include/Webservices/Relation.php';
include_once 'vtlib/Vtiger/Module.php';
include_once 'includes/main/WebUI.php';

global $adb;
global $current_user;
$current_user = CRMEntity::getInstance('Users');
$userid = Users::getActiveAdminId();
$current_user->retrieveCurrentUserInfoFromFile($userid);

// Initialize record counter
$totalRecordsImported = 0;

// Make sure file upload is properly handled
if (isset($_POST['upload']) && isset($_FILES['csv_file'])) {
    $file = $_FILES['csv_file'];

    // Check if file was uploaded without errors
    if ($file['error'] === UPLOAD_ERR_OK) {
        $fileTmpName = $file['tmp_name'];
        $fileName = $file['name'];

        // Ensure the file is a CSV
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        if ($fileExtension !== 'csv') {
            echo "Please upload a CSV file.";
            exit;
        }

        // Open the file in read mode
        if (($handle = fopen($fileTmpName, 'r')) !== FALSE) {
            fgetcsv($handle, 1000, ',');
            // Loop through each line of the CSV file
            while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
                // Ensure there is valid data in the row
                    if(!empty($data)){
                    // Process the row
                    $email = $data[0];
                    $firstname = $data[1];
                    $lastname = $data[2];
                    $accountname = $data[3];
                    $phone = $data[4];
                    $ticket_title = $data[5];

                    // Check if account and contact exist
                    $accval = isaccRecordExits($email, $accountname);
                    $val = isRecordExits($email, $firstname, $lastname);

                    // Check and create or update Account
                    if (empty($accval)) {
                        // Create a new Account
                        $Accounts = CRMEntity::getInstance('Accounts');
                        $Accounts->column_fields['assigned_user_id'] = 1;
                        $Accounts->column_fields['accountname'] = $accountname;
                        $Accounts->column_fields['phone'] = $phone;
                        $Accounts->column_fields['email1'] = $email;
                        $Accounts->save('Accounts');
                        $AccountsModuleId = $Accounts->id;
                    } else {
                        // Update existing Account
                        $recordModel = Accounts_Record_Model::getInstanceById($accval);
                        $recordModel->set('mode', 'edit');
                        $recordModel->set("accountname", $accountname);
                        $recordModel->set("phone", $phone);
                        $recordModel->set("email1", $email);
                        $recordModel->save();
                        $AccountsModuleId = $accval;
                    }

                    // Check and create or update Contact
                    if (empty($val)) {
                        // Create a new Contact
                        $Contacts = CRMEntity::getInstance('Contacts');
                        $Contacts->column_fields['assigned_user_id'] = 1;
                        $Contacts->column_fields['firstname'] = $firstname;
                        $Contacts->column_fields['lastname'] = $lastname;
                        $Contacts->column_fields['email'] = $email;
                        $Contacts->column_fields['account_id'] = $AccountsModuleId;
                        $Contacts->save('Contacts');
                        $ContactsModuleId = $Contacts->id;
                    } else {
                        // Update existing Contact
                        $recordModel = Contacts_Record_Model::getInstanceById($val);
                        $recordModel->set('mode', 'edit');
                        $recordModel->set("firstname", $firstname);
                        $recordModel->set("lastname", $lastname);
                        $recordModel->set("email", $email);
                        $recordModel->save();
                        $ContactsModuleId = $val;
                    }

                    // Create or update HelpDesk record
                    $HelpDesk = CRMEntity::getInstance('HelpDesk');
                    $HelpDesk->column_fields['assigned_user_id'] = $current_user->id;
                    $HelpDesk->column_fields['ticket_title'] = $ticket_title;
                    $HelpDesk->column_fields['ticketpriorities'] = 'High';
                    $HelpDesk->column_fields['ticketstatus'] = 'Open';
                    $HelpDesk->column_fields['contact_id'] = $ContactsModuleId;
                    $HelpDesk->column_fields['parent_id'] = $AccountsModuleId;
                    $HelpDesk->save('HelpDesk');
                    $HelpDeskModuleId = $HelpDesk->id;

                    // Optional Relations
                   // createRelationBetweenAccountAndContact($AccountsModuleId, $ContactsModuleId);
                  //  createRelationBetweenHelpDeskAndContact($ContactsModuleId, $HelpDeskModuleId);

                    // Increment the total records imported
                    $totalRecordsImported++;
                }
            }

            // Close the file after processing
            fclose($handle);

            // Success message with total records imported
            echo "File imported successfully! Total records imported: " . $totalRecordsImported;
        } else {
            echo "Failed to open the file.";
        }
        
    } else {
        echo "File upload failed.";
    }
}

// Functions to create relations
function createRelationBetweenAccountAndContact($AccountsModuleId, $ContactsModuleId)
{
    global $adb;
    $relation = new Relation();
    $relation->addRelation('Accounts', $AccountsModuleId, 'Contacts', $ContactsModuleId);
}

function createRelationBetweenHelpDeskAndContact($ContactsModuleId, $HelpDeskModuleId)
{
    global $adb;
    $relation = new Relation();
    $relation->addRelation('Contacts', $ContactsModuleId, 'HelpDesk', $HelpDeskModuleId);
}

function isRecordExits($email, $firstname, $lastname)
{
    global $adb;
    $sql = 'SELECT contactid FROM vtiger_contactdetails
            INNER JOIN vtiger_crmentity
            ON vtiger_crmentity.crmid = vtiger_contactdetails.contactid
            WHERE email = ? AND firstname= ? AND lastname= ? AND vtiger_crmentity.deleted = 0';
    $sqlResult = $adb->pquery($sql, array($email, $firstname, $lastname));
    $num_rows = $adb->num_rows($sqlResult);
    if ($num_rows > 0) {
        $dataRow = $adb->fetchByAssoc($sqlResult, 0);
        return $dataRow['contactid'];
    } else {
        return '';
    }
}

function isaccRecordExits($email, $accountname)
{
    global $adb;
    $sql = 'SELECT accountid FROM vtiger_account
            INNER JOIN vtiger_crmentity
            ON vtiger_crmentity.crmid = vtiger_account.accountid
            WHERE email1 = ? AND accountname= ? AND vtiger_crmentity.deleted = 0';
    $sqlResult = $adb->pquery($sql, array($email, $accountname));
    $num_rows = $adb->num_rows($sqlResult);
    if ($num_rows > 0) {
        $dataRow = $adb->fetchByAssoc($sqlResult, 0);
        return $dataRow['accountid'];
    } else {
        return '';
    }
}
?>
