<?php
require_once('../PPBootStrap.php');
/**
 * Get required parameters from the web form for the request
 */

$BACustomerDetailRequest = new GetBillingAgreementCustomerDetailsRequestType($_REQUEST['token']);
$BACustomerDetailReq = new GetBillingAgreementCustomerDetailsReq();
$BACustomerDetailReq->GetBillingAgreementCustomerDetailsRequest = $BACustomerDetailRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
try {
	/* wrap API method calls on the service object with a try catch */
	$BACustomerDetailResponse = $paypalService->GetBillingAgreementCustomerDetails($BACustomerDetailReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($BACustomerDetailResponse)) {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$BACustomerDetailResponse->Ack</div> </td></tr>";
	echo "</table>";
	echo "<pre>";
	print_r($BACustomerDetailResponse);
	echo "</pre>";
}
require_once '../Response.php';
