<?php
use PayPal\EBLBaseComponents\ManageRecurringPaymentsProfileStatusRequestDetailsType;
use PayPal\PayPalAPI\ManageRecurringPaymentsProfileStatusReq;
use PayPal\PayPalAPI\ManageRecurringPaymentsProfileStatusRequestType;
use PayPal\Service\PayPalAPIInterfaceServiceService;
require_once('../PPBootStrap.php');

/*
 * The ManageRecurringPaymentsProfileStatus API operation cancels, suspends, or reactivates a recurring payments profile. 
 */
$manageRPPStatusReqestDetails = new ManageRecurringPaymentsProfileStatusRequestDetailsType();
/*
 *  (Required) The action to be performed to the recurring payments profile. Must be one of the following:

    Cancel – Only profiles in Active or Suspended state can be canceled.

    Suspend – Only profiles in Active state can be suspended.

    Reactivate – Only profiles in a suspended state can be reactivated.

 */
$manageRPPStatusReqestDetails->Action =  $_REQUEST['action'];
/*
 * (Required) Recurring payments profile ID returned in the CreateRecurringPaymentsProfile response.
 */
$manageRPPStatusReqestDetails->ProfileID =  $_REQUEST['profileID'];

$manageRPPStatusReqest = new ManageRecurringPaymentsProfileStatusRequestType();
$manageRPPStatusReqest->ManageRecurringPaymentsProfileStatusRequestDetails = $manageRPPStatusReqestDetails;


$manageRPPStatusReq = new ManageRecurringPaymentsProfileStatusReq();
$manageRPPStatusReq->ManageRecurringPaymentsProfileStatusRequest = $manageRPPStatusReqest;

/*
 * 	 ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
try {
	/* wrap API method calls on the service object with a try catch */
	$manageRPPStatusResponse = $paypalService->ManageRecurringPaymentsProfileStatus($manageRPPStatusReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}

if(isset($manageRPPStatusResponse)) {

	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$manageRPPStatusResponse->Ack</div> </td></tr>";
	echo "<tr><td>ProfileID :</td><td><div id='ProfileID'>".$manageRPPStatusResponse->ManageRecurringPaymentsProfileStatusResponseDetails->ProfileID ."</div> </td></tr>";
	echo "</table>";

	echo "<pre>";
	print_r($manageRPPStatusResponse);
	echo "</pre>";
}
require_once '../Response.php';
