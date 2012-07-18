<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('GetPlaDetails');

$getPalDetailsRequest = new GetPalDetailsRequestType();
$getPalDetailsRequest->Version = 86.0;

$getPalDetailsReq = new GetPalDetailsReq();
$getPalDetailsReq->GetPalDetailsRequest = $getPalDetailsRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
$getPalDetailsResponse = $paypalService->GetPalDetails($getPalDetailsReq);
echo "<pre>";
print_r($getPalDetailsResponse);
echo "</pre>";
require_once '../Response.php';