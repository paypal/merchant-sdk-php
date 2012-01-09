<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('Get Balance');

$getBalanceRequest = new GetBalanceRequestType();
$getBalanceRequest->Version = 84.0;
$getBalanceRequest->ReturnAllCurrencies = $_REQUEST['returnAllCurrencies'];

$getBalanceReq = new GetBalanceReq();
$getBalanceReq->GetBalanceRequest = $getBalanceRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
$getBalanceResponse = $paypalService->GetBalance($getBalanceReq);
echo "<pre>";
var_dump($getBalanceResponse);
echo "</pre>";
require_once '../Response.php';