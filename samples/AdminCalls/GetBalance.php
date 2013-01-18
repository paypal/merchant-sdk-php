<?php
$path = '../../lib';
// Register auto loader
require($path . "/PayPal_Merchant_SDK_Autoloader.php");
PayPal_Merchant_SDK_Autoloader::register();

$logger = new PPLoggingManager('Get Balance');

$getBalanceRequest = new GetBalanceRequestType();

$getBalanceRequest->ReturnAllCurrencies = $_REQUEST['returnAllCurrencies'];

$getBalanceReq = new GetBalanceReq();
$getBalanceReq->GetBalanceRequest = $getBalanceRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
try {
	/* wrap API method calls on the service object with a try catch */
	$getBalanceResponse = $paypalService->GetBalance($getBalanceReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($getBalanceResponse)) {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$getBalanceResponse->Ack</div> </td></tr>";
	echo "</table>";
	echo "<pre>";
	print_r($getBalanceResponse);
	echo "</pre>";
}
require_once '../Response.php';
