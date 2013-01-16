<?php
$path = '../../lib';
// Register auto loader
require($path . "/PayPal_Merchant_SDK_Autoloader.php");
PayPal_Merchant_SDK_Autoloader::register();

$logger = new PPLoggingManager('billing agreement update');

$BAUpdateRequest = new BAUpdateRequestType($_REQUEST['referenceID']);
$BAUpdateRequest->BillingAgreementStatus = $_REQUEST['billingAgreementStatus'];
$BAUpdateRequest->BillingAgreementDescription = $_REQUEST['billingAgreementDescription'];

$billingAgreementUpdateReq = new BillAgreementUpdateReq();
$billingAgreementUpdateReq->BAUpdateRequest = $BAUpdateRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
try {
	/* wrap API method calls on the service object with a try catch */
	$BAUpdatResponse = $paypalService->BillAgreementUpdate($billingAgreementUpdateReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($BAUpdatResponse)) {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$BAUpdatResponse->Ack</div> </td></tr>";
	echo "</table>";
	echo "<pre>";
	print_r($BAUpdatResponse);
	echo "</pre>";
}
require_once '../Response.php';
