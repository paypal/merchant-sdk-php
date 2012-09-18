<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
/**
 * Get required parameters from the web form for the request
 */
$logger = new PPLoggingManager('DoNonReferencedCredit');

$currencyId = $_REQUEST['currencyID'];

$itemAmount = new BasicAmountType();
$itemAmount->value = $_REQUEST['itemAmount'];
$itemAmount->currencyID = $currencyId;

$shippingAmount = new BasicAmountType();
$shippingAmount->value = $_REQUEST['shippingAmount'];
$shippingAmount->currencyID = $currencyId;

$taxAmount = new BasicAmountType();
$taxAmount->value = $_REQUEST['taxAmount'];
$taxAmount->currencyID = $currencyId;

$totalamount = new BasicAmountType();
$totalamount->value = ($taxAmount->value + $shippingAmount->value + $itemAmount->value);
$totalamount->currencyID = $currencyId;

$creditCard = new CreditCardDetailsType();
$creditCard->CreditCardNumber = $_REQUEST['creditCard'];
$creditCard->ExpMonth = $_REQUEST['expMonth'];
$creditCard->ExpYear =$_REQUEST['expYear'];
$creditCard->CreditCardType = $_REQUEST['creditCardType'];
$creditCard->CVV2 = $_REQUEST['cvv'];

$doNonRefCreditRequestDetails= new DoNonReferencedCreditRequestDetailsType();
$doNonRefCreditRequestDetails->CreditCard = $creditCard;
$doNonRefCreditRequestDetails->Comment =$_REQUEST['comment'];
$doNonRefCreditRequestDetails->NetAmount =$itemAmount;
$doNonRefCreditRequestDetails->ShippingAmount = $shippingAmount;
$doNonRefCreditRequestDetails->TaxAmount = $taxAmount;
$doNonRefCreditRequestDetails->Amount = $totalamount;

$doNonRefCreditRequest = new DoNonReferencedCreditRequestType();
$doNonRefCreditRequest->DoNonReferencedCreditRequestDetails =$doNonRefCreditRequestDetails;


$doNonRefCreditReq = new DoNonReferencedCreditReq();
$doNonRefCreditReq->DoNonReferencedCreditRequest = $doNonRefCreditRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
try {
	/* wrap API method calls on the service object with a try catch */
	$doNonRefCreditResponse = $paypalService->DoNonReferencedCredit($doNonRefCreditReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($doNonRefCreditResponse)) {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$doNonRefCreditResponse->Ack</div> </td></tr>";
	echo "</table>";
	echo "<pre>";
	print_r($doNonRefCreditResponse);
	echo "</pre>";
}
require_once '../Response.php';