<?php
$path = '../../lib';
// Register auto loader
require($path . "/PayPal_Merchant_SDK_Autoloader.php");
PayPal_Merchant_SDK_Autoloader::register();

$logger = new PPLoggingManager('ManageRecurringPaymentsProfileStatus');

$manageRPPStatusReqestDetails = new ManageRecurringPaymentsProfileStatusRequestDetailsType();
$manageRPPStatusReqestDetails->Action =  $_REQUEST['action'];
$manageRPPStatusReqestDetails->ProfileID =  $_REQUEST['profileID'];

$manageRPPStatusReqest = new ManageRecurringPaymentsProfileStatusRequestType();
$manageRPPStatusReqest->ManageRecurringPaymentsProfileStatusRequestDetails = $manageRPPStatusReqestDetails;


$manageRPPStatusReq = new ManageRecurringPaymentsProfileStatusReq();
$manageRPPStatusReq->ManageRecurringPaymentsProfileStatusRequest = $manageRPPStatusReqest;

$paypalService = new PayPalAPIInterfaceServiceService();
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
