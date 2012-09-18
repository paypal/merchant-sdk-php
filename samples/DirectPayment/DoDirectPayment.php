<?php
/***********************************************************
 DoDirectPayment.php

Submits a credit card transaction to PayPal using a
DoDirectPayment request.

The code collects transaction parameters from the form
displayed by DoDirectPayment.php then constructs and sends
the DoDirectPayment request string to the PayPal server.
The paymentType variable becomes the PAYMENTACTION parameter
of the request string.

After the PayPal server returns the response, the code
displays the API request and response in the browser.
If the response from PayPal was a success, it displays the
response parameters. If the response was an error, it
displays the errors.

Called by DoDirectPayment.html.php.

***********************************************************/
session_start();
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
/**
 * Get required parameters from the web form for the request
 */
$logger = new PPLoggingManager('DoDirectPayment');
$paymentType = $_POST['paymentType'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$creditCardType = $_POST['creditCardType'];
$creditCardNumber = $_POST['creditCardNumber'];
$expDateMonth = $_POST['expDateMonth'];
// Month must be padded with leading zero
$padDateMonth = str_pad($expDateMonth, 2, '0', STR_PAD_LEFT);

$expDateYear = $_POST['expDateYear'];
$cvv2Number = $_POST['cvv2Number'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$country = 'US';
$amount = $_POST['amount'];

$orderTotal = new BasicAmountType();
$orderTotal->currencyID = 'USD';
$orderTotal->value = $amount;

$address = new AddressType();
$address->Name = $firstName.' '.$lastName;
$address->Street1 = $address1;
$address->Street2 = $address2;
$address->CityName = $city;
$address->StateOrProvince = $state;
$address->PostalCode = $zip;
$address->Country = $country;

$PaymentDetails= new PaymentDetailsType();
$PaymentDetails->ShipToAddress = $address;
$PaymentDetails->OrderTotal = $orderTotal;

$person_name = new PersonNameType();
$person_name->FirstName = $firstName;
$person_name->LastName = $lastName;

$payer = new PayerInfoType();
$payer->PayerName = $person_name;
$payer->Address = $address;
$payer->PayerCountry = 'US';




$cardDetails = new CreditCardDetailsType();
$cardDetails->CreditCardNumber = $creditCardNumber;
$cardDetails->CreditCardType = $creditCardType;
$cardDetails->ExpMonth = $padDateMonth;
$cardDetails->ExpYear = $expDateYear;
$cardDetails->CVV2 = $cvv2Number;
$cardDetails->CardOwner = $payer;

$ddReqDetails = new DoDirectPaymentRequestDetailsType();
$ddReqDetails->CreditCard = $cardDetails;
$ddReqDetails->PaymentDetails =$PaymentDetails;

$ddReq= new DoDirectPaymentRequestType($ddReqDetails);


$doDirectPaymentReq = new DoDirectPaymentReq();
$doDirectPaymentReq->DoDirectPaymentRequest = $ddReq;


$logger->error("created doDirectPaymentReq Object");
$paypalService = new PayPalAPIInterfaceServiceService();
try {
	/* wrap API method calls on the service object with a try catch */
	$doDirectPaymentResponse = $paypalService->DoDirectPayment($doDirectPaymentReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($doDirectPaymentResponse)) {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$doDirectPaymentResponse->Ack</div> </td></tr>";
	echo "<tr><td>TransactionID :</td><td><div id='TransactionID'>$doDirectPaymentResponse->TransactionID</div> </td></tr>";
	echo "</table>";
	echo "<pre>";
	print_r($doDirectPaymentResponse);
	echo "</pre>";
}
require_once '../Response.php';
?>