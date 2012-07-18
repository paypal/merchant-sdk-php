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
$billOutstandingAmtReqest->Version = 86;

$billOutstandingAmtReq =  new BillOutstandingAmountReq();
$billOutstandingAmtReq->BillOutstandingAmountRequest = $billOutstandingAmtReqest;

$paypalService = new PayPalAPIInterfaceServiceService();
$billOutstandingAmtResponse = $paypalService->BillOutstandingAmount($billOutstandingAmtReq);
echo "<pre>";
print_r($billOutstandingAmtResponse);
echo "</pre>";
require_once '../Response.php';