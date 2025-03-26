<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
include_once dirname(__FILE__) . '/../../../include/Zend/Json.php';

class Mobile_API_Response {
	private $error = NULL;
	private $result = NULL;
	private $apiSuccessMessage = '';
	
	function setError($code, $message) {
		$error = array('code' => $code, 'message' => $message);
		$this->error = $error;
	}

	function setApiSucessMessage($apiSuccessMessage) {
			$this->apiSuccessMessage = $apiSuccessMessage;
 	}
	
	function getError() {
		return $this->error;
	}
	
	function hasError() {
		return !is_null($this->error);
	}
	
	function setResult($result) {
		$this->result = $result;
	}
	
	function getResult() {
		return $this->result;
	}
	
	function addToResult($key, $value) {
		$this->result[$key] = $value;
	}
	
	function prepareResponse() {
		$response = array();
		if($this->result === NULL) {
			// $response['success'] = false;
			$response['statuscode'] = 0;
			$response['statusMessage'] =  $this->error['message'];
			if (!empty($this->error['id'])) {
				$response['id'] =  $this->error['id'];
			}
			$newEmptyObject = new stdClass();
			$response['data'] = $newEmptyObject;
		} else {
			// $response['success'] = true;
			$response['statuscode'] = 1;
			$response['data'] = $this->result;
			$response['statusMessage'] = $this->apiSuccessMessage;
		}
		return $response;
	}

	function emitJSON() {
		return Zend_Json::encode($this->prepareResponse());
	}
	
	function emitHTML() {
		if($this->result === NULL) return (is_string($this->error))? $this->error : var_export($this->error, true);
		return $this->result;
	}
	
}