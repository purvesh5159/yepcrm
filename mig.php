<?php
require_once 'vendor/autoload.php';
require_once("modules/com_vtiger_workflow/include.inc");
require_once("modules/com_vtiger_workflow/tasks/VTEntityMethodTask.inc");
require_once("modules/com_vtiger_workflow/VTEntityMethodManager.inc");
require_once("include/database/PearDatabase.php");
$adb = PearDatabase::getInstance();
$emm = new VTEntityMethodManager($adb);
require_once 'vtlib/Vtiger/Module.php';
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('boid', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'boid';
        $fieldInstance->label = 'BOID';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'boid';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
//        $fieldInstance->setPicklistValues(array('PUTTUR'));
    } else {
        echo "field is present -- boid In HelpDesk Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_TICKET_INFORMATION in HelpDesk -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sapcode', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sapcode';
        $fieldInstance->label = 'SAP Code';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'sapcode';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
//        $fieldInstance->setPicklistValues(array('PUTTUR'));
    } else {
        echo "field is present -- sapcode In HelpDesk Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_TICKET_INFORMATION in HelpDesk -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('custcode', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'custcode';
        $fieldInstance->label = 'Customer/Primary Code';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'custcode';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
//        $fieldInstance->setPicklistValues(array('PUTTUR'));
    } else {
        echo "field is present -- boid In HelpDesk Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_TICKET_INFORMATION in HelpDesk -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('depocode', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'depocode';
        $fieldInstance->label = 'Depo Code';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'depocode';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
//        $fieldInstance->setPicklistValues(array('PUTTUR'));
    } else {
        echo "field is present -- sapcode In HelpDesk Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_TICKET_INFORMATION in HelpDesk -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('depotname', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'depotname';
        $fieldInstance->label = 'Depot Name';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'depotname';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
//        $fieldInstance->setPicklistValues(array('PUTTUR'));
    } else {
        echo "field is present -- sapcode In HelpDesk Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_TICKET_INFORMATION in HelpDesk -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('zone', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'zone';
        $fieldInstance->label = 'Zone';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'zone';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        $fieldInstance->setPicklistValues(array('North', 'East', 'West', 'South'));
    } else {
        echo "field is already Present --- ticket_type in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('serviceengineer', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'serviceengineer';
        $fieldInstance->label = 'Service Cordinator';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'serviceengineer';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
//        $fieldInstance->setPicklistValues(array('PUTTUR'));
    } else {
        echo "field is present -- sapcode In HelpDesk Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_TICKET_INFORMATION in HelpDesk -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('typeofmc', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'typeofmc';
        $fieldInstance->label = 'Type Of M/c';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'typeofmc';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        $fieldInstance->setPicklistValues(array('Dispenser', 'Gyro', 'Vibro', 'ATI'));
    } else {
        echo "field is already Present --- ticket_type in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('model', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'model';
        $fieldInstance->label = 'Model';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'model';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
//        $fieldInstance->setPicklistValues(array('PUTTUR'));
    } else {
        echo "field is present -- sapcode In HelpDesk Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_TICKET_INFORMATION in HelpDesk -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('serialno', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'serialno';
        $fieldInstance->label = 'Machine Serial No';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'serialno';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
//        $fieldInstance->setPicklistValues(array('PUTTUR'));
    } else {
        echo "field is present -- sapcode In HelpDesk Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_TICKET_INFORMATION in HelpDesk -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('doi', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'doi';
        $fieldInstance->label = 'Date Of Installation';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'doi';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- doi in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('vendor_id', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'vendor_id';
        $field->column = 'vendor_id';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Dealer Name';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(10)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- vendor_id HelpDesk --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_USERLOGIN_ROLE in HelpDesk -- <br>";
}

$invoiceModule = null;
$blockInstance = null;
$fieldInstance = null;
$invoiceModule = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $invoiceModule);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('engineer_name', $invoiceModule);
    if (!$fieldInstance) {
        $field = new Vtiger_Field();
        $field->name = 'engineer_name';
        $field->column = 'engineer_name';
        $field->uitype = 10;
        $field->table = $invoiceModule->basetable;
        $field->label = 'Engineer Name';
        $field->summaryfield = 1;
        $field->readonly = 1;
        $field->presence = 2;
        $field->typeofdata = 'I~O';
        $field->columntype = 'INT(10)';
        $field->quickcreate = 3;
        $field->displaytype = 1;
        $field->masseditable = 1;
        $field->defaultvalue = 0;
        $blockInstance->addField($field);
    } else {
        echo "field is present -- vendor_id HelpDesk --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_USERLOGIN_ROLE in HelpDesk -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('service_location', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'service_location';
        $fieldInstance->label = 'Service Location';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'service_location';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
//        $fieldInstance->setPicklistValues(array('PUTTUR'));
    } else {
        echo "field is present -- sapcode In HelpDesk Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_TICKET_INFORMATION in HelpDesk -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('tat', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'tat';
        $fieldInstance->label = 'Tat';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'tat';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
//        $fieldInstance->setPicklistValues(array('PUTTUR'));
    } else {
        echo "field is present -- sapcode In HelpDesk Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_TICKET_INFORMATION in HelpDesk -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('gdata', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'gdata';
        $fieldInstance->label = 'G-DATA Version';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'gdata';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
//        $fieldInstance->setPicklistValues(array('PUTTUR'));
    } else {
        echo "field is present -- sapcode In HelpDesk Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_TICKET_INFORMATION in HelpDesk -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('connectivity', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'connectivity';
        $fieldInstance->label = 'Connectivity';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'connectivity';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        $fieldInstance->setPicklistValues(array('RT', 'PC', 'MOBILE'));
    } else {
        echo "field is already Present --- ticket_type in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('device_details', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'device_details';
        $fieldInstance->label = 'Device Details';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'device_details';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
//        $fieldInstance->setPicklistValues(array('PUTTUR'));
    } else {
        echo "field is present -- sapcode In HelpDesk Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_TICKET_INFORMATION in HelpDesk -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('gyro_type', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'gyro_type';
        $fieldInstance->label = 'Gyro Details';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'gyro_type';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        $fieldInstance->setPicklistValues(array('New', 'Old', 'Not Available'));
    } else {
        echo "field is already Present --- ticket_type in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('gyro_model', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'gyro_model';
        $fieldInstance->label = 'Gyro Model';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'gyro_model';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
//        $fieldInstance->setPicklistValues(array('PUTTUR'));
    } else {
        echo "field is present -- sapcode In HelpDesk Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_TICKET_INFORMATION in HelpDesk -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('gyro_serialno', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'gyro_serialno';
        $fieldInstance->label = 'Gyro Serial No';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'gyro_serialno';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
//        $fieldInstance->setPicklistValues(array('PUTTUR'));
    } else {
        echo "field is present -- sapcode In HelpDesk Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_TICKET_INFORMATION in HelpDesk -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ups_details', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'ups_details';
        $fieldInstance->label = 'UPS Details';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'ups_details';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
//        $fieldInstance->setPicklistValues(array('PUTTUR'));
    } else {
        echo "field is present -- sapcode In HelpDesk Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_TICKET_INFORMATION in HelpDesk -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ups_serialno', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'ups_serialno';
        $fieldInstance->label = 'UPS Serial No';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'ups_serialno';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
//        $fieldInstance->setPicklistValues(array('PUTTUR'));
    } else {
        echo "field is present -- sapcode In HelpDesk Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_TICKET_INFORMATION in HelpDesk -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('warranty_month', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'warranty_month';
        $fieldInstance->label = 'Warranty Month';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'warranty_month';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        $fieldInstance->setPicklistValues(array('12', '24'));
    } else {
        echo "field is already Present --- ticket_type in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('warranty_start_date', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'warranty_start_date';
        $fieldInstance->label = 'Warranty Start Date';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'warranty_start_date';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- doi in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('warranty_end_date', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'warranty_end_date';
        $fieldInstance->label = 'Warranty End Date';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'warranty_end_date';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- doi in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('Call Logging Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('subcalltype', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'subcalltype';
        $fieldInstance->label = 'Sub Call Type';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'subcalltype';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        $fieldInstance->setPicklistValues(array('Installation', 'Machine Breakdown', 'Software Issue'));
    } else {
        echo "field is already Present --- ticket_type in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('Call Logging Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('problemdesc', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'problemdesc';
        $fieldInstance->label = 'Problem Description';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'problemdesc';
        $fieldInstance->uitype = '19';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(64)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- user_password in ServiceEngineer Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_USERLOGIN_ROLE -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('Call Logging Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('contact_mobileno', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'contact_mobileno';
        $fieldInstance->label = 'Customer Contact No';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'contact_mobileno';
        $fieldInstance->uitype = '11';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(64)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- user_password in ServiceEngineer Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_USERLOGIN_ROLE -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('Call Logging Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('usercomment', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'usercomment';
        $fieldInstance->label = 'User Comments';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'usercomment';
        $fieldInstance->uitype = '19';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(64)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- user_password in ServiceEngineer Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_USERLOGIN_ROLE -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('Call Closing Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('engreachdate', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'engreachdate';
        $fieldInstance->label = 'Engineer Reach Date';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'engreachdate';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- doi in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('Call Closing Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('engreachtime', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'engreachtime';
        $fieldInstance->label = 'Engineer Reach Time';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'engreachtime';
        $fieldInstance->uitype = 14;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'T~O';
        $fieldInstance->columntype = 'TIME';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- engreachtime in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('Call Closing Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('tickedcloseddate', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'tickedcloseddate';
        $fieldInstance->label = 'Ticket Closed Date';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'tickedcloseddate';
        $fieldInstance->uitype = 5;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'D~O';
        $fieldInstance->columntype = 'DATE';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- doi in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('Call Closing Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('ticketclosedtime', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'ticketclosedtime';
        $fieldInstance->label = 'Ticket Closed Time';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'ticketclosedtime';
        $fieldInstance->uitype = 14;
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'T~O';
        $fieldInstance->columntype = 'TIME';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- engreachtime in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('Call Closing Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('closingcomment', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'closingcomment';
        $fieldInstance->label = 'Closing Comments';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'closingcomment';
        $fieldInstance->uitype = '19';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(64)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- user_password in ServiceEngineer Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_USERLOGIN_ROLE -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('Call Closing Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('fcr', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'fcr';
        $fieldInstance->label = 'FCR/IR';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'fcr';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        $fieldInstance->setPicklistValues(array('Pending', 'Received'));
    } else {
        echo "field is already Present --- ticket_type in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('Call Closing Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('spareused', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'spareused';
        $fieldInstance->label = 'SpareUsed';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'spareused';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        $fieldInstance->setPicklistValues(array('Yes', 'No'));
    } else {
        echo "field is already Present --- ticket_type in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}
$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('Call Closing Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('sparechargable', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'sparechargable';
        $fieldInstance->label = 'SpareChargeable';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'sparechargable';
        $fieldInstance->uitype = '16';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(100)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
        $fieldInstance->setPicklistValues(array('Yes', 'No'));
    } else {
        echo "field is already Present --- ticket_type in HelpDesk Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_CUSTOM_INFORMATION -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('Call Closing Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('spare1', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'spare1';
        $fieldInstance->label = 'Spare Name 1';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'spare1';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
//        $fieldInstance->setPicklistValues(array('PUTTUR'));
    } else {
        echo "field is present -- boid In HelpDesk Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_TICKET_INFORMATION in HelpDesk -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('Call Closing Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('spareqty1', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'spareqty1';
        $fieldInstance->label = 'Spare QTY 1';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'spareqty1';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
//        $fieldInstance->setPicklistValues(array('PUTTUR'));
    } else {
        echo "field is present -- boid In HelpDesk Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_TICKET_INFORMATION in HelpDesk -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('Call Closing Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('spare2', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'spare2';
        $fieldInstance->label = 'Spare Name 2';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'spare2';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
//        $fieldInstance->setPicklistValues(array('PUTTUR'));
    } else {
        echo "field is present -- boid In HelpDesk Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_TICKET_INFORMATION in HelpDesk -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('Call Closing Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('spareqty2', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'spareqty2';
        $fieldInstance->label = 'Spare QTY 2';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'spareqty2';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
//        $fieldInstance->setPicklistValues(array('PUTTUR'));
    } else {
        echo "field is present -- boid In HelpDesk Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_TICKET_INFORMATION in HelpDesk -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('address', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'address';
        $fieldInstance->label = 'Address';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'address';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
//        $fieldInstance->setPicklistValues(array('PUTTUR'));
    } else {
        echo "field is present -- sapcode In HelpDesk Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_TICKET_INFORMATION in HelpDesk -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('city', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'city';
        $fieldInstance->label = 'City';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'city';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
//        $fieldInstance->setPicklistValues(array('PUTTUR'));
    } else {
        echo "field is present -- sapcode In HelpDesk Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_TICKET_INFORMATION in HelpDesk -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('state', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'state';
        $fieldInstance->label = 'State';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'state';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
//        $fieldInstance->setPicklistValues(array('PUTTUR'));
    } else {
        echo "field is present -- sapcode In HelpDesk Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_TICKET_INFORMATION in HelpDesk -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('LBL_TICKET_INFORMATION', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('pincode', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'pincode';
        $fieldInstance->label = 'PinCode';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'pincode';
        $fieldInstance->uitype = '2';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(200)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
//        $fieldInstance->setPicklistValues(array('PUTTUR'));
    } else {
        echo "field is present -- sapcode In HelpDesk Module --- <br>";
    }
} else {
    echo "Block Does not exits -- LBL_TICKET_INFORMATION in HelpDesk -- <br>";
}

$moduleInstance = null;
$blockInstance = null;
$fieldInstance = null;
$moduleInstance = Vtiger_Module::getInstance('HelpDesk');
$blockInstance = Vtiger_Block::getInstance('Call Closing Details', $moduleInstance);
if ($blockInstance) {
    $fieldInstance = Vtiger_Field::getInstance('eng_mobileno', $moduleInstance);
    if (!$fieldInstance) {
        $fieldInstance = new Vtiger_Field();
        $fieldInstance->name = 'eng_mobileno';
        $fieldInstance->label = 'Engineer Contact No';
        $fieldInstance->table = $moduleInstance->basetable;
        $fieldInstance->column = 'eng_mobileno';
        $fieldInstance->uitype = '11';
        $fieldInstance->presence = '0';
        $fieldInstance->typeofdata = 'V~O';
        $fieldInstance->columntype = 'VARCHAR(64)';
        $fieldInstance->defaultvalue = NULL;
        $blockInstance->addField($fieldInstance);
    } else {
        echo "field is already Present --- user_password in ServiceEngineer Module --- <br>";
    }
} else {
    echo " block does not exits --- LBL_USERLOGIN_ROLE -- <br>";
}
?>