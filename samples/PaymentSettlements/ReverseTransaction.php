<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
/**
 * Get required parameters from the web form for the request
 */
$logger = new PPLoggingManager('ReverseTransaction');

$reverseTransactionReqestDetails = new ReverseTransactionRequestDetailsType();
$reverseTransactionReqestDetails->TransactionID = $_REQUEST['transID'];

$reverseTransactionReqest = new ReverseTransactionRequestType();
$reverseTransactionReqest->ReverseTransactionRequestDetails = $reverseTransactionReqestDetails;
$reverseTransactionReqest->Version = 84;

$reverseTransactionReq = new ReverseTransactionReq();
$reverseTransactionReq->ReverseTransactionRequest = $reverseTransactionReqest;

$paypalService = new PayPalAPIInterfaceServiceService();
$reverseTransactionResponse = $paypalService->ReverseTransaction($reverseTransactionReq);
echo "<pre>";
var_dump($reverseTransactionResponse);
echo "</pre>";
require_once '../Response.php';