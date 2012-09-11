<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
/**
 * Get required parameters from the web form for the request
 */
$logger = new PPLoggingManager('RefundTransaction');

$amount = new BasicAmountType();
$amount->currencyID = $_REQUEST['currencyID'];
$amount->value = $_REQUEST['amt'];

$refundReqest = new RefundTransactionRequestType();

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
echo "<table>";
echo "<tr><td>Ack :</td><td><div id='Ack'>$refundResponse->Ack</div> </td></tr>";
//echo "<tr><td>RefundStatus :</td><td><div id='RefundStatus'>$refundResponse->RefundInfo->RefundStatus</div> </td></tr>";
echo "</table>";
echo "<pre>";
print_r($refundResponse);
echo "</pre>";
require_once '../Response.php';