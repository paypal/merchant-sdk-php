<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
/**
 * Get required parameters from the web form for the request
 */
$logger = new PPLoggingManager('DoAuthorization');

$amount = new BasicAmountType();
$amount->currencyID = $_REQUEST['currencyCode'];
$amount->value = $_REQUEST['amt'];

$doAuthRequest = new DoAuthorizationRequestType();
$doAuthRequest->Amount = $amount;
$doAuthRequest->TransactionID = $_REQUEST['transID'];
$doAuthRequest->Version = '86.0';

$doAuthReq = new DoAuthorizationReq();
$doAuthReq->DoAuthorizationRequest =$doAuthRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
$doAuthResponse = $paypalService->DoAuthorization($doAuthReq);
echo "<pre>";
print_r($doAuthResponse);
echo "</pre>";
require_once '../Response.php';
?>