<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
/**
 * Get required parameters from the web form for the request
 */
$logger = new PPLoggingManager('DoReAuthorization');
$amount = new BasicAmountType();
$amount->currencyID = $_REQUEST['currencyCode'];
$amount->value = $_REQUEST['amt'];

$doReAuthRequest = new DoReauthorizationRequestType();
$doReAuthRequest->Amount = $amount;
$doReAuthRequest->TransactionID = $_REQUEST['authID'];
$doReAuthRequest->Version = '84.0';

$doReAuthReq = new DoReauthorizationReq();
$doReAuthReq->DoReauthorizationRequest =$doReAuthRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
$doReAuthResponse = $paypalService->DoReauthorization($doReAuthReq);
echo "<pre>";
var_dump($doReAuthResponse);
echo "</pre>";
require_once '../Response.php';