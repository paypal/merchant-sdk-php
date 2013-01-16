<?php
$path = '../../lib';
// Register auto loader
require($path . "/PayPal_Merchant_SDK_Autoloader.php");
PayPal_Merchant_SDK_Autoloader::register();
/**
 * Get required parameters from the web form for the request
 */
$logger = new PPLoggingManager('DoDirectPayment');

$amount = new BasicAmountType($_REQUEST['currencyCode'], $_REQUEST['amt']);
$doCaptureReqest = new DoCaptureRequestType($_REQUEST['authID'], $amount, $_REQUEST['completeCodeType']);
$doCaptureReq = new DoCaptureReq();
$doCaptureReq->DoCaptureRequest = $doCaptureReqest;

$paypalService = new PayPalAPIInterfaceServiceService();
try {
	/* wrap API method calls on the service object with a try catch */
	$doCaptureResponse = $paypalService->DoCapture($doCaptureReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($doCaptureResponse)) {
	echo "<pre>";
	print_r($doCaptureResponse);
	echo "</pre>";
}
require_once '../Response.php';
