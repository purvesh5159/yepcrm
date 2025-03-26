<?php
header('Content-Type: text/json');
header("Access-Control-Allow-Origin: *");
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);
ini_set('display_warnings', 0);

$uriSegments = explode("/", trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), "/"));
$_POST['_operation'] = $uriSegments[3]; // Adjust if your URL structure differs

chdir(dirname(__FILE__) . '/../../');

require_once 'vendor/autoload.php';
require_once 'config.php';
if (file_exists('config_override.php')) {
    include_once 'config_override.php';
}

include_once dirname(__FILE__) . '/api/Relation.php';
include_once dirname(__FILE__) . '/api/Request.php';
include_once dirname(__FILE__) . '/api/Response.php';
include_once dirname(__FILE__) . '/api/Session.php';
include_once dirname(__FILE__) . '/api/ws/Controller.php';
require_once 'includes/main/WebUI.php';

function stripslashes_recursive($value) {
    return is_array($value) ? array_map('stripslashes_recursive', $value) : stripslashes($value);
}

if (!defined('MOBILE_API_CONTROLLER_AVOID_TRIGGER')) {
    $clientRequestValues = null;

    if (stripos($_SERVER['CONTENT_TYPE'], 'application/json') !== false) {
        $clientRequestValues = json_decode(file_get_contents("php://input"), true);
        $clientRequestValues['_operation'] = $uriSegments[3]; // Adjust if needed
    } else {
        $clientRequestValues = array_merge($_GET, $_POST);
        $clientRequestValues['_operation'] = $uriSegments[3]; // Adjust if needed
    }

    $clientRequestValuesRaw = [];

    if (get_magic_quotes_gpc()) {
        $clientRequestValues = stripslashes_recursive($clientRequestValues);
    }

    global $log;
    $log->debug("<<<<<<<<<<<<<<<<<<<<<<Received From Mobile>>>>>>>>>>>>>>>>>>>>>"); 
    $log->debug(json_encode($clientRequestValues)); 
    $log->debug("<<<<<<<<<<<<<<<<<<<<<<Received From Mobile End>>>>>>>>>>>>>>>>>>>>>"); 

    require_once dirname(__FILE__) . '/api.v1.php';
    $targetController = Mobile_APIV1_Controller::getInstance();
    $targetController->process(new Mobile_API_Request($clientRequestValues, $clientRequestValuesRaw));
}
