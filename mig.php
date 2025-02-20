<?php
require_once("modules/com_vtiger_workflow/include.inc");
require_once("modules/com_vtiger_workflow/tasks/VTEntityMethodTask.inc");
require_once("modules/com_vtiger_workflow/VTEntityMethodManager.inc");
require_once("include/database/PearDatabase.php");
$adb = PearDatabase::getInstance();
$emm = new VTEntityMethodManager($adb);
require_once 'vtlib/Vtiger/Module.php';
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('Contacts');
$blockInstance = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('chargeable_outside_war', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'chargeable_outside_war';
        $field->column = 'chargeable_outside_war';
        $field->table = $invoiceModule->basetable;
        $field->label = 'Chargeable For Outside Warranty';
        $field->uitype = 56;
        $field->columntype = 'INT(1) DEFAULT 0';
        $field->typeofdata = 'I~O';
        $field->displaytype = 2;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- chargeable_outside_war In Contacts Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_BLOCK_GENERAL_INFORMATION in Contacts -- <br>";
}
?>