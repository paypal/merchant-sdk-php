<?php
use PayPal\CoreComponentTypes\BasicAmountType;
use PayPal\EBLBaseComponents\CreditCardDetailsType;
use PayPal\EBLBaseComponents\DoNonReferencedCreditRequestDetailsType;
use PayPal\PayPalAPI\DoNonReferencedCreditReq;
use PayPal\PayPalAPI\DoNonReferencedCreditRequestType;
use PayPal\Service\PayPalAPIInterfaceServiceService;
require_once('../PPBootStrap.php');

/*
 * The DoNonReferencedCredit API issues a credit to a card not referenced by the original transaction
*/

$currencyId = $_REQUEST['currencyID'];

/*
 * (Optional) Total amount of all items in this transaction.
*/
$itemAmount = new BasicAmountType();
$itemAmount->value = $_REQUEST['itemAmount'];
$itemAmount->currencyID = $currencyId;

/*
 * shipping address
*/
$shippingAmount = new BasicAmountType();
$shippingAmount->value = $_REQUEST['shippingAmount'];
$shippingAmount->currencyID = $currencyId;

/*
 * (Optional) Sum of tax for all items in this order.
*/
$taxAmount = new BasicAmountType();
$taxAmount->value = $_REQUEST['taxAmount'];
$taxAmount->currencyID = $currencyId;

/*
 * Total of order, including shipping, handling, and tax.
*/
$totalamount = new BasicAmountType();
$totalamount->value = ($taxAmount->value + $shippingAmount->value + $itemAmount->value);
$totalamount->currencyID = $currencyId;

/*
 * creditcard details
*/
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

/*
 * 	 ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
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
