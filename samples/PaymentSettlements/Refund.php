<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
/**
 * Get required parameters from the web form for the request
 */
$logger = new PPLoggingManager('RefundTransaction');


$refundReqest = new RefundTransactionRequestType();

if($_REQUEST['amt'] != "" && strtoupper($_POST['refundType']) != "FULL") {
	$refundReqest->Amount = new BasicAmountType($_REQUEST['currencyID'], $_REQUEST['amt']);
}
$refundReqest->RefundType = $_REQUEST['refundType'];
$refundReqest->TransactionID = $_REQUEST['transID'];
$refundReqest->RefundSource = $_REQUEST['refundSource'];
$refundReqest->Memo = $_REQUEST['memo'];
$refundReqest->RetryUntil = $_REQUEST['retryUntil'];

$refundReq = new RefundTransactionReq();
$refundReq->RefundTransactionRequest = $refundReqest;

$paypalService = new PayPalAPIInterfaceServiceService();
try {
	/* wrap API method calls on the service object with a try catch */
	$refundResponse = $paypalService->RefundTransaction($refundReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($refundResponse)) {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$refundResponse->Ack</div> </td></tr>";
	//echo "<tr><td>RefundStatus :</td><td><div id='RefundStatus'>$refundResponse->RefundInfo->RefundStatus</div> </td></tr>";
	echo "</table>";
	echo "<pre>";
	print_r($refundResponse);
	echo "</pre>";
}
require_once '../Response.php';