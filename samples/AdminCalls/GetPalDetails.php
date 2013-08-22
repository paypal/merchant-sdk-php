<?php
use PayPal\PayPalAPI\GetPalDetailsReq;
use PayPal\PayPalAPI\GetPalDetailsRequestType;
use PayPal\Service\PayPalAPIInterfaceServiceService;
require_once('../PPBootStrap.php');
/*
 * Obtain your Pal ID, which is the PayPal-assigned merchant account number, and other informaton about your account. You need the account number when working with dynamic versions of PayPalbuttons and logos
 */
$getPalDetailsRequest = new GetPalDetailsRequestType();
$getPalDetailsReq = new GetPalDetailsReq();
$getPalDetailsReq->GetPalDetailsRequest = $getPalDetailsRequest;

/*
 * 	 ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
try {
	/* wrap API method calls on the service object with a try catch */
	$getPalDetailsResponse = $paypalService->GetPalDetails($getPalDetailsReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($getPalDetailsResponse)) {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$getPalDetailsResponse->Ack</div> </td></tr>";
	echo "<tr><td>Pal :</td><td><div id='Pal'>$getPalDetailsResponse->Pal</div> </td></tr>";
	echo "</table>";
	echo "<pre>";
	print_r($getPalDetailsResponse);
	echo "</pre>";
}
require_once '../Response.php';
