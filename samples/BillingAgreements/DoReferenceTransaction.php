<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
/**
 * Get required parameters from the web form for the request
 */
$logger = new PPLoggingManager('DoReferenceTransaction');

$amount = new BasicAmountType();
$amount->currencyID = $_REQUEST['currencyID'];
$amount->value = $_REQUEST['amount'];

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
	$cardOwner->LastName =  $_REQUEST['OfirstName'];
	
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
$RTRequest->Version = 86;

$RTReq = new DoReferenceTransactionReq();
$RTReq->DoReferenceTransactionRequest = $RTRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
$RTResponse = $paypalService->DoReferenceTransaction($RTReq);
echo "<pre>";
print_r($RTResponse);
echo "</pre>";
require_once '../Response.php';