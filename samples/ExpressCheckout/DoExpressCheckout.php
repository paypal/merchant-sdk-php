<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
session_start();

$logger = new PPLoggingManager('DoExpressCheckout');

$token =urlencode( $_REQUEST['token']);
$payerId=urlencode(  $_REQUEST['payerID']);

// ------------------------------------------------------------------
// this section is optional if parameters required for DoExpressCheckout is retrieved from your database
$getExpressCheckoutDetailsRequest = new GetExpressCheckoutDetailsRequestType($token);
$getExpressCheckoutDetailsRequest->Version = 92.0;
$getExpressCheckoutReq = new GetExpressCheckoutDetailsReq();
$getExpressCheckoutReq->GetExpressCheckoutDetailsRequest = $getExpressCheckoutDetailsRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
$getECResponse = $paypalService->GetExpressCheckoutDetails($getExpressCheckoutReq);

//----------------------------------------------------------------------------

$orderTotal = new BasicAmountType();
$orderTotal->currencyID = $_REQUEST['currencyCode'];
$orderTotal->value = $_REQUEST['amt'];

$PaymentDetails= new PaymentDetailsType();
$PaymentDetails->OrderTotal = $orderTotal;

$DoECRequestDetails = new DoExpressCheckoutPaymentRequestDetailsType();
$DoECRequestDetails->PayerID = $payerId;
$DoECRequestDetails->Token = $token;
$DoECRequestDetails->PaymentDetails[0] = $PaymentDetails;

$DoECRequest = new DoExpressCheckoutPaymentRequestType();
$DoECRequest->DoExpressCheckoutPaymentRequestDetails = $DoECRequestDetails;
$DoECRequest->Version = '92.0';

$DoECReq = new DoExpressCheckoutPaymentReq();
$DoECReq->DoExpressCheckoutPaymentRequest = $DoECRequest;

$DoECResponse = $paypalService->DoExpressCheckoutPayment($DoECReq);
echo "<pre>";
print_r($DoECResponse);
echo "</pre>";
require_once '../Response.php';
