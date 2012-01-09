<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('BMGetButtonDetails');

$BMGetButtonDetailsReqest = new BMGetButtonDetailsRequestType();
$BMGetButtonDetailsReqest->HostedButtonID = $_REQUEST['hostedID'];
$BMGetButtonDetailsReqest->Version = 84;

$BMGetButtonDetailsReq = new BMGetButtonDetailsReq();
$BMGetButtonDetailsReq->BMGetButtonDetailsRequest = $BMGetButtonDetailsReqest;

$paypalService = new PayPalAPIInterfaceServiceService();
$BMGetButtonDetailsResponse = $paypalService->BMGetButtonDetails($BMGetButtonDetailsReq);
echo "<pre>";
print_r($BMGetButtonDetailsResponse);
echo "</pre>";
require_once '../Response.php';