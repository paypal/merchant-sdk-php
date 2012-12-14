<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
/**
 * Get required parameters from the web form for the request
 */
$logger = new PPLoggingManager('DoReferenceTransaction');

$amount = new BasicAmountType($_REQUEST['currencyID'], $_REQUEST['amount']);

$shippingAddress = new AddressType();
$shippingAddress->Name = $_REQUEST['firstName'].' '.$_REQUEST['lastName'];
$shippingAddress->Street1 = $_REQUEST['address1'];
$shippingAddress->CityName = $_REQUEST['city'];
$shippingAddress->StateOrProvince = $_REQUEST['state'];
$shippingAddress->Country = $_REQUEST['country'];
$shippingAddress->PostalCode = $_REQUEST['zip'];

if(isset($_REQUEST['ReferenceCreditCardDetails']) && $_REQUEST['ReferenceCreditCardDetails'] == "ON" )
{
	$billingAddress = new AddressType();
	$billingAddress->Name = $_REQUEST['OfirstName'].' '.$_REQUEST['OlastName'];
	$billingAddress->Street1 = $_REQUEST['Baddress1'];
	$billingAddress->CityName = $_REQUEST['Bcity'];
	$billingAddress->StateOrProvince = $_REQUEST['Bstate'];
	$billingAddress->Country = $_REQUEST['Bcountry'];
	$billingAddress->PostalCode = $_REQUEST['Bzip'];

	$cardOwner = new PersonNameType();
	$cardOwner->FirstName = $_REQUEST['OfirstName'];
	$cardOwner->LastName =  $_REQUEST['OlastName'];

	$creditCardNumberType= new CreditCardNumberTypeType();
	$creditCardNumberType->CreditCardNumber = $_REQUEST['creditCardNumber'];
	$creditCardNumberType->CreditCardType = $_REQUEST['creditCardType'];

	$creditCard = new ReferenceCreditCardDetailsType();
	$creditCard->CardOwnerName = $cardOwner;
	$creditCard->BillingAddress = $billingAddress;
	$creditCard->CreditCardNumberType = $creditCardNumberType;
	$creditCard->CVV2 = $_REQUEST['CVV2'];
	$creditCard->ExpMonth = $_REQUEST['expMonth'];
	$creditCard->ExpYear = $_REQUEST['expYear'];
}

$paymentDetails = new PaymentDetailsType();
$paymentDetails->OrderTotal = $amount;
$paymentDetails->ShipToAddress = $shippingAddress;

if(isset($_REQUEST['notifyURL']))
{
	$paymentDetails->NotifyURL = $_REQUEST['notifyURL'];
}

$RTRequestDetails = new DoReferenceTransactionRequestDetailsType();
if(isset($_REQUEST['ReferenceCreditCardDetails']) && $_REQUEST['ReferenceCreditCardDetails'] == "ON" )
{
	$RTRequestDetails->CreditCard = $creditCard;
}

$RTRequestDetails->PaymentDetails = $paymentDetails;
$RTRequestDetails->ReferenceID = $_REQUEST['referenceID'];
$RTRequestDetails->PaymentAction =$_REQUEST['paymentAction'];
$RTRequestDetails->PaymentType = $_REQUEST['paymentType'];

$RTRequest = new DoReferenceTransactionRequestType();
$RTRequest->DoReferenceTransactionRequestDetails  = $RTRequestDetails;

$RTReq = new DoReferenceTransactionReq();
$RTReq->DoReferenceTransactionRequest = $RTRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
try {
	/* wrap API method calls on the service object with a try catch */
	$RTResponse = $paypalService->DoReferenceTransaction($RTReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($RTResponse)) {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$RTResponse->Ack</div> </td></tr>";
	echo "</table>";
	echo "<pre>";
	print_r($RTResponse);
	echo "</pre>";
}
require_once '../Response.php';