<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('Get Balance');

$getBalanceRequest = new GetBalanceRequestType();

$getBalanceRequest->ReturnAllCurrencies = $_REQUEST['returnAllCurrencies'];

$getBalanceReq = new GetBalanceReq();
$getBalanceReq->GetBalanceRequest = $getBalanceRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
$getBalanceResponse = $paypalService->GetBalance($getBalanceReq);
echo "<table>";
echo "<tr><td>Ack :</td><td><div id='Ack'>$getBalanceResponse->Ack</div> </td></tr>";
echo "</table>";
echo "<pre>";
print_r($getBalanceResponse);
echo "</pre>";
require_once '../Response.php';