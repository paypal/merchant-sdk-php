<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
session_start();

$logger = new PPLoggingManager('DoExpressCheckout');

$token =urlencode( $_REQUEST['token']);
$payerId=urlencode(  $_REQUEST['payerID']);
$paymentAction = urlencode(  $_REQUEST['paymentAction']);

// ------------------------------------------------------------------
// this section is optional if parameters required for DoExpressCheckout is retrieved from your database
$getExpressCheckoutDetailsRequest = new GetExpressCheckoutDetailsRequestType($token);
$getExpressCheckoutReq = new GetExpressCheckoutDetailsReq();
$getExpressCheckoutReq->GetExpressCheckoutDetailsRequest = $getExpressCheckoutDetailsRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
try {
	/* wrap API method calls on the service object with a try catch */
	$getECResponse = $paypalService->GetExpressCheckoutDetails($getExpressCheckoutReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
//----------------------------------------------------------------------------

$orderTotal = new BasicAmountType();
$orderTotal->currencyID = $_REQUEST['currencyCode'];
$orderTotal->value = $_REQUEST['amt'];

$paymentDetails= new PaymentDetailsType();
$paymentDetails->OrderTotal = $orderTotal;
if(isset($_REQUEST['notifyURL']))
{
	$paymentDetails->NotifyURL = $_REQUEST['notifyURL'];
}

$DoECRequestDetails = new DoExpressCheckoutPaymentRequestDetailsType();
$DoECRequestDetails->PayerID = $payerId;
$DoECRequestDetails->Token = $token;
$DoECRequestDetails->PaymentAction = $paymentAction;
$DoECRequestDetails->PaymentDetails[0] = $paymentDetails;

$DoECRequest = new DoExpressCheckoutPaymentRequestType();
$DoECRequest->DoExpressCheckoutPaymentRequestDetails = $DoECRequestDetails;


$DoECReq = new DoExpressCheckoutPaymentReq();
$DoECReq->DoExpressCheckoutPaymentRequest = $DoECRequest;

try {
	/* wrap API method calls on the service object with a try catch */
	$DoECResponse = $paypalService->DoExpressCheckoutPayment($DoECReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($DoECResponse)) {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$DoECResponse->Ack</div> </td></tr>";
	if(isset($DoECResponse->DoExpressCheckoutPaymentResponseDetails->PaymentInfo)) {
		echo "<tr><td>TransactionID :</td><td><div id='TransactionID'>". $DoECResponse->DoExpressCheckoutPaymentResponseDetails->PaymentInfo[0]->TransactionID."</div> </td></tr>";
	}
	echo "</table>";
	echo "<pre>";
	print_r($DoECResponse);
	echo "</pre>";
}
require_once '../Response.php';