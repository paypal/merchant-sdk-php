<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('GetRecurringPaymentsProfileDetails');

$getRPPDetailsReqest = new GetRecurringPaymentsProfileDetailsRequestType();
$getRPPDetailsReqest->ProfileID = $_REQUEST['profileID'];


$getRPPDetailsReq = new GetRecurringPaymentsProfileDetailsReq();
$getRPPDetailsReq->GetRecurringPaymentsProfileDetailsRequest = $getRPPDetailsReqest;

$paypalService = new PayPalAPIInterfaceServiceService();
$getRPPDetailsResponse = $paypalService->GetRecurringPaymentsProfileDetails($getRPPDetailsReq);
echo "<pre>";
print_r($getRPPDetailsResponse);
echo "</pre>";
require_once '../Response.php';