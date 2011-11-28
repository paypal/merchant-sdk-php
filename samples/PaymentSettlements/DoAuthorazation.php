<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
/**
 * Get required parameters from the web form for the request
 */
$logger = new PPLoggingManager('DoDirectPayment');

$amount = new BasicAmountType();
$amount->currencyID = $_REQUEST['currencyCode'];
$amount->value = $_REQUEST['amt'];

$doAuthRequest = new DoAuthorizationRequestType();
$doAuthRequest->Amount = $amount;
$doAuthRequest->TransactionID = $_REQUEST['transID'];
$doAuthRequest->Version = '78.0';

$doAuthReq = new DoAuthorizationReq();
$doAuthReq->DoAuthorizationRequest =$doAuthRequest;

$PayPal_service = new PayPalAPIInterfaceServiceService();
$doAuthResponse = $PayPal_service->DoAuthorization($doAuthReq);
var_dump($doAuthResponse);
?>