<?php
/**
 * This is a sample implementation of an IPN listener
 * that uses the SDK's PPIPNMessage class to process IPNs
 * 
 * This sample simply validates the incoming IPN message
 * and logs IPN variables. In a real application, you will
 * validate the IPN and initiate some action based on the 
 * incoming IPN variables.
 */
set_include_path(get_include_path() . PATH_SEPARATOR . '../../lib');
require_once 'ipn/PPIPNMessage.php';

$ipnMessage = new PPIPNMessage();
foreach($ipnMessage->getRawData() as $key => $value) {
	error_log("IPN: $key => $value");
}

if($ipnMessage->validate()) {
	error_log("Success: Got valid IPN data");		
} else {
	error_log("Error: Got invalid IPN data");	
}