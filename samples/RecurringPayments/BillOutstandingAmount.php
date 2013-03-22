<?php
require_once('../PPBootStrap.php');
/**
 * Get required parameters from the web form for the request
 */

$billOutstandingAmtReqestDetail = new BillOutstandingAmountRequestDetailsType();
$billOutstandingAmtReqestDetail->Amount = new BasicAmountType($_REQUEST['currencyCode'], $_REQUEST['amt']);
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
