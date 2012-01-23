<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('BMManageButtonStatus');

$BMManageButtonStatusReqest = new BMManageButtonStatusRequestType();
$BMManageButtonStatusReqest->HostedButtonID = $_REQUEST['hostedID'];
$BMManageButtonStatusReqest->Version = 84;
$BMManageButtonStatusReqest->ButtonStatus = $_REQUEST['buttonStatus'];

$BMManageButtonStatusReq = new BMManageButtonStatusReq();
$BMManageButtonStatusReq->BMManageButtonStatusRequest = $BMManageButtonStatusReqest;

$paypalService = new PayPalAPIInterfaceServiceService();
$BMManageButtonStatusResponse = $paypalService->BMManageButtonStatus($BMManageButtonStatusReq);
echo "<pre>";
print_r($BMManageButtonStatusResponse);
echo "</pre>";
require_once '../Response.php';