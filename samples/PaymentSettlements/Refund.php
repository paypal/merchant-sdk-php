<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
/**
 * Get required parameters from the web form for the request
 */
$logger = new PPLoggingManager('RefundTransaction');

$amount = new BasicAmountType();
$amount->currencyID = $_REQUEST['currencyID'];
$amount->value = $_REQUEST['amt'];

$refundReqest = new RefundTransactionRequestType();
$refundReqest->Version = 84;
if(!empty($amount->value))
{
	$refundReqest->Amount = $amount;
	
}
$refundReqest->RefundType = $_REQUEST['refundType'];
$refundReqest->TransactionID = $_REQUEST['transID'];
$refundReqest->RefundSource = $_REQUEST['refundSource'];

$refundReq = new RefundTransactionReq();
$refundReq->RefundTransactionRequest = $refundReqest;

$paypalService = new PayPalAPIInterfaceServiceService();
$refundResponse = $paypalService->RefundTransaction($refundReq);
echo "<pre>";
print_r($refundResponse);
echo "</pre>";
require_once '../Response.php';