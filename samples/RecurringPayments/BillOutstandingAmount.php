<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
/**
 * Get required parameters from the web form for the request
 */
$logger = new PPLoggingManager('BillOutstandingAmount');

$amount = new BasicAmountType();
$amount->currencyID = "USD";
$amount->value = $_REQUEST['amt'];

$billOutstandingAmtReqestDetail = new BillOutstandingAmountRequestDetailsType();
$billOutstandingAmtReqestDetail->Amount = $amount;
$billOutstandingAmtReqestDetail->ProfileID = $_REQUEST['profileID'];

$billOutstandingAmtReqest = new BillOutstandingAmountRequestType();
$billOutstandingAmtReqest->BillOutstandingAmountRequestDetails = $billOutstandingAmtReqestDetail;


$billOutstandingAmtReq =  new BillOutstandingAmountReq();
$billOutstandingAmtReq->BillOutstandingAmountRequest = $billOutstandingAmtReqest;

$paypalService = new PayPalAPIInterfaceServiceService();
try {
	/* wrap API method calls on the service object with a try catch */
	$billOutstandingAmtResponse = $paypalService->BillOutstandingAmount($billOutstandingAmtReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}

if(isset($billOutstandingAmtResponse)) {
	echo "<pre>";
	print_r($billOutstandingAmtResponse);
	echo "</pre>";
}
require_once '../Response.php';