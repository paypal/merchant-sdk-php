<?php
use PayPal\PayPalAPI\BAUpdateRequestType;
use PayPal\PayPalAPI\BillAgreementUpdateReq;
use PayPal\Service\PayPalAPIInterfaceServiceService;
require_once('../PPBootStrap.php');
/*
 * update billing agreement
 */
$BAUpdateRequest = new BAUpdateRequestType($_REQUEST['referenceID']);
$BAUpdateRequest->BillingAgreementStatus = $_REQUEST['billingAgreementStatus'];
$BAUpdateRequest->BillingAgreementDescription = $_REQUEST['billingAgreementDescription'];

$billingAgreementUpdateReq = new BillAgreementUpdateReq();
$billingAgreementUpdateReq->BAUpdateRequest = $BAUpdateRequest;
/*
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
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
