<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
session_start();

$logger = new PPLoggingManager('DoExpressCheckout');

$token =urlencode( $_SESSION['token']);
$payerId=urlencode(  $_SESSION['payerId']);

$orderTotal = new BasicAmountType();
$orderTotal->currencyID = $_SESSION['currencyCode'];
$orderTotal->value = $_SESSION['amount'];

$PaymentDetails= new PaymentDetailsType();
$PaymentDetails->OrderTotal = $orderTotal;

$DoECRequestDetails = new DoExpressCheckoutPaymentRequestDetailsType();
$DoECRequestDetails->PayerID = $payerId;
$DoECRequestDetails->Token = $token;
$DoECRequestDetails->PaymentDetails[0] = $PaymentDetails;

$DoECRequest = new DoExpressCheckoutPaymentRequestType();
$DoECRequest->DoExpressCheckoutPaymentRequestDetails = $DoECRequestDetails;
$DoECRequest->Version = '84.0';

$DoECReq = new DoExpressCheckoutPaymentReq();
$DoECReq->DoExpressCheckoutPaymentRequest = $DoECRequest;
$paypalService = new PayPalAPIInterfaceServiceService();
$DoECResponse = $paypalService->DoExpressCheckoutPayment($DoECReq);
echo "<pre>";
var_dump($DoECResponse);
echo "</pre>";
require_once '../Response.php';
