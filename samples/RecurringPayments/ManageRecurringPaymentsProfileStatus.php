<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('ManageRecurringPaymentsProfileStatus');

$manageRPPStatusReqestDetails = new ManageRecurringPaymentsProfileStatusRequestDetailsType();
$manageRPPStatusReqestDetails->Action =  $_REQUEST['action'];
$manageRPPStatusReqestDetails->ProfileID =  $_REQUEST['profileID'];

$manageRPPStatusReqest = new ManageRecurringPaymentsProfileStatusRequestType();
$manageRPPStatusReqest->ManageRecurringPaymentsProfileStatusRequestDetails = $manageRPPStatusReqestDetails;


$manageRPPStatusReq = new ManageRecurringPaymentsProfileStatusReq();
$manageRPPStatusReq->ManageRecurringPaymentsProfileStatusRequest = $manageRPPStatusReqest;

$paypalService = new PayPalAPIInterfaceServiceService();
$manageRPPStatusResponse = $paypalService->ManageRecurringPaymentsProfileStatus($manageRPPStatusReq);

echo "<table>";
echo "<tr><td>Ack :</td><td><div id='Ack'>$manageRPPStatusResponse->Ack</div> </td></tr>";
echo "<tr><td>ProfileID :</td><td><div id='ProfileID'>".$manageRPPStatusResponse->ManageRecurringPaymentsProfileStatusResponseDetails->ProfileID ."</div> </td></tr>";
echo "</table>";

echo "<pre>";
print_r($manageRPPStatusResponse);
echo "</pre>";
require_once '../Response.php';