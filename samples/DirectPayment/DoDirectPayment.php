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


$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

$address = new AddressType();
$address->Name = "$firstName $lastName";
$address->Street1 = $_POST['address1'];
$address->Street2 = $_POST['address2'];
$address->CityName = $_POST['city'];
$address->StateOrProvince = $_POST['state'];
$address->PostalCode = $_POST['zip'];
$address->Country = $_POST['country'];
$address->Phone = $_POST['phone'];

$paymentDetails = new PaymentDetailsType();
$paymentDetails->ShipToAddress = $address;
$paymentDetails->OrderTotal = new BasicAmountType('USD', $_POST['amount']);
if(isset($_REQUEST['notifyURL']))
{
	$paymentDetails->NotifyURL = $_REQUEST['notifyURL'];
}

$personName = new PersonNameType();
$personName->FirstName = $firstName;
$personName->LastName = $lastName;

$payer = new PayerInfoType();
$payer->PayerName = $personName;
$payer->Address = $address;
$payer->PayerCountry = $_POST['country'];

$cardDetails = new CreditCardDetailsType();
$cardDetails->CreditCardNumber = $_POST['creditCardNumber'];
$cardDetails->CreditCardType = $_POST['creditCardType'];
$cardDetails->ExpMonth = $_POST['expDateMonth'];
$cardDetails->ExpYear = $_POST['expDateYear'];
$cardDetails->CVV2 = $_POST['cvv2Number'];
$cardDetails->CardOwner = $payer;

$ddReqDetails = new DoDirectPaymentRequestDetailsType();
$ddReqDetails->CreditCard = $cardDetails;
$ddReqDetails->PaymentDetails = $paymentDetails;

$doDirectPaymentReq = new DoDirectPaymentReq();
$doDirectPaymentReq->DoDirectPaymentRequest = new DoDirectPaymentRequestType($ddReqDetails);
$logger->info("created doDirectPaymentReq Object");
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