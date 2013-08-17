<?php
use PayPal\PayPalAPI\GetBillingAgreementCustomerDetailsReq;
use PayPal\PayPalAPI\GetBillingAgreementCustomerDetailsRequestType;
use PayPal\Service\PayPalAPIInterfaceServiceService;
require_once('../PPBootStrap.php');
/*
 * The GetBillingAgreementCustomerDetails API operation obtains information about a billing agreement’s PayPal account holder. 
 */

/*
 *  The time-stamped token returned in the SetCustomerBillingAgreement response
 */
$BACustomerDetailRequest = new GetBillingAgreementCustomerDetailsRequestType($_REQUEST['token']);
$BACustomerDetailReq = new GetBillingAgreementCustomerDetailsReq();
$BACustomerDetailReq->GetBillingAgreementCustomerDetailsRequest = $BACustomerDetailRequest;

/*
 * 	 ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
try {
	/* wrap API method calls on the service object with a try catch */
	$BACustomerDetailResponse = $paypalService->GetBillingAgreementCustomerDetails($BACustomerDetailReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($BACustomerDetailResponse)) {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$BACustomerDetailResponse->Ack</div> </td></tr>";
	echo "</table>";
	echo "<pre>";
	print_r($BACustomerDetailResponse);
	echo "</pre>";
}
require_once '../Response.php';
