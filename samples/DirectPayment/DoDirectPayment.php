<?php
use PayPal\CoreComponentTypes\BasicAmountType;
use PayPal\EBLBaseComponents\AddressType;
use PayPal\EBLBaseComponents\CreditCardDetailsType;
use PayPal\EBLBaseComponents\DoDirectPaymentRequestDetailsType;
use PayPal\EBLBaseComponents\PayerInfoType;
use PayPal\EBLBaseComponents\PaymentDetailsType;
use PayPal\EBLBaseComponents\PersonNameType;
use PayPal\PayPalAPI\DoDirectPaymentReq;
use PayPal\PayPalAPI\DoDirectPaymentRequestType;
use PayPal\Service\PayPalAPIInterfaceServiceService;
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

require_once('../PPBootStrap.php');
/**
 * Get required parameters from the web form for the request
*/


$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

/*
 * shipping adress
*/
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

/*
 *  Total cost of the transaction to the buyer. If shipping cost and tax
charges are known, include them in this value. If not, this value
should be the current sub-total of the order.

If the transaction includes one or more one-time purchases, this field must be equal to
the sum of the purchases. Set this field to 0 if the transaction does
not include a one-time purchase such as when you set up a billing
agreement for a recurring payment that is not immediately charged.
When the field is set to 0, purchase-specific fields are ignored.

* `Currency Code` - You must set the currencyID attribute to one of the
3-character currency codes for any of the supported PayPal
currencies.
* `Amount`
*/
$paymentDetails->OrderTotal = new BasicAmountType('USD', $_POST['amount']);
/*
 * 		Your URL for receiving Instant Payment Notification (IPN) about this transaction. If you do not specify this value in the request, the notification URL from your Merchant Profile is used, if one exists.

*/
if(isset($_REQUEST['notifyURL']))
{
	$paymentDetails->NotifyURL = $_REQUEST['notifyURL'];
}

$personName = new PersonNameType();
$personName->FirstName = $firstName;
$personName->LastName = $lastName;

//information about the payer
$payer = new PayerInfoType();
$payer->PayerName = $personName;
$payer->Address = $address;
$payer->PayerCountry = $_POST['country'];

$cardDetails = new CreditCardDetailsType();
$cardDetails->CreditCardNumber = $_POST['creditCardNumber'];

/*
 *
Type of credit card. For UK, only Maestro, MasterCard, Discover, and
Visa are allowable. For Canada, only MasterCard and Visa are
allowable and Interac debit cards are not supported. It is one of the
following values:

* Visa
* MasterCard
* Discover
* Amex
* Solo
* Switch
* Maestro: See note.
`Note:
If the credit card type is Maestro, you must set currencyId to GBP.
In addition, you must specify either StartMonth and StartYear or
IssueNumber.`
*/
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

/*
 * 		 ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
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
