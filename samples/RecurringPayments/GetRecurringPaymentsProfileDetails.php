<?php
use PayPal\PayPalAPI\GetRecurringPaymentsProfileDetailsReq;
use PayPal\PayPalAPI\GetRecurringPaymentsProfileDetailsRequestType;
use PayPal\Service\PayPalAPIInterfaceServiceService;
require_once('../PPBootStrap.php');

/*
 * Obtain information about a recurring payments profile. 
 */
$getRPPDetailsReqest = new GetRecurringPaymentsProfileDetailsRequestType();
/*
 * (Required) Recurring payments profile ID returned in the CreateRecurringPaymentsProfile response. 19-character profile IDs are supported for compatibility with previous versions of the PayPal API.
 */
$getRPPDetailsReqest->ProfileID = $_REQUEST['profileID'];


$getRPPDetailsReq = new GetRecurringPaymentsProfileDetailsReq();
$getRPPDetailsReq->GetRecurringPaymentsProfileDetailsRequest = $getRPPDetailsReqest;

/*
 * 	 ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
try {
	/* wrap API method calls on the service object with a try catch */
	$getRPPDetailsResponse = $paypalService->GetRecurringPaymentsProfileDetails($getRPPDetailsReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}

if(isset($getRPPDetailsResponse)) {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$getRPPDetailsResponse->Ack</div> </td></tr>";
	echo "<tr><td>ProfileID :</td><td><div id='ProfileID'>". $getRPPDetailsResponse->GetRecurringPaymentsProfileDetailsResponseDetails->ProfileID ."</div> </td></tr>";
	echo "</table>";

	echo "<pre>";
	print_r($getRPPDetailsResponse);
	echo "</pre>";
}
require_once '../Response.php';
