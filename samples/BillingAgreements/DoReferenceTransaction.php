<?php
use PayPal\CoreComponentTypes\BasicAmountType;
use PayPal\EBLBaseComponents\AddressType;
use PayPal\EBLBaseComponents\CreditCardNumberTypeType;
use PayPal\EBLBaseComponents\DoReferenceTransactionRequestDetailsType;
use PayPal\EBLBaseComponents\PaymentDetailsType;
use PayPal\EBLBaseComponents\PersonNameType;
use PayPal\EBLBaseComponents\ReferenceCreditCardDetailsType;
use PayPal\PayPalAPI\DoReferenceTransactionReq;
use PayPal\PayPalAPI\DoReferenceTransactionRequestType;
use PayPal\Service\PayPalAPIInterfaceServiceService;
require_once('../PPBootStrap.php');

/*
 *  # DoReferenceTransaction API
The DoReferenceTransaction API operation processes a payment from a
buyer's account, which is identified by a previous transaction.
This sample code uses Merchant PHP SDK to make API call
*/

/*
 *  The total cost of the transaction to the buyer. If shipping cost and
tax charges are known, include them in this value. If not, this value
should be the current subtotal of the order.

If the transaction includes one or more one-time purchases, this field must be equal to
the sum of the purchases. Set this field to 0 if the transaction does
not include a one-time purchase such as when you set up a billing
agreement for a recurring payment that is not immediately charged.
When the field is set to 0, purchase-specific fields are ignored

* `Currency ID` - You must set the currencyID attribute to one of the
3-character currency codes for any of the supported PayPal
currencies.
* `Amount`
*/
$amount = new BasicAmountType($_REQUEST['currencyID'], $_REQUEST['amount']);

// Address the order is shipped to.
$shippingAddress = new AddressType();
$shippingAddress->Name = $_REQUEST['firstName'].' '.$_REQUEST['lastName'];
$shippingAddress->Street1 = $_REQUEST['address1'];
$shippingAddress->CityName = $_REQUEST['city'];
$shippingAddress->StateOrProvince = $_REQUEST['state'];
$shippingAddress->Country = $_REQUEST['country'];
$shippingAddress->PostalCode = $_REQUEST['zip'];

if(isset($_REQUEST['ReferenceCreditCardDetails']) && $_REQUEST['ReferenceCreditCardDetails'] == "ON" )
{
	// biling address
	$billingAddress = new AddressType();
	$billingAddress->Name = $_REQUEST['OfirstName'].' '.$_REQUEST['OlastName'];
	$billingAddress->Street1 = $_REQUEST['Baddress1'];
	$billingAddress->CityName = $_REQUEST['Bcity'];
	$billingAddress->StateOrProvince = $_REQUEST['Bstate'];
	$billingAddress->Country = $_REQUEST['Bcountry'];
	$billingAddress->PostalCode = $_REQUEST['Bzip'];

	// credit card details
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

// Information about the payment.
$paymentDetails = new PaymentDetailsType();
$paymentDetails->OrderTotal = $amount;
$paymentDetails->ShipToAddress = $shippingAddress;

/*
 * 		//Your URL for receiving Instant Payment Notification (IPN) about this transaction. If you do not specify this value in the request, the notification URL from your Merchant Profile is used, if one exists.

*/
if(isset($_REQUEST['notifyURL']))
{
	$paymentDetails->NotifyURL = $_REQUEST['notifyURL'];
}

/*
 * 	 `DoReferenceTransactionRequestDetails` takes mandatory params:

* `Reference Id` - A transaction ID from a previous purchase, such as a
credit card charge using the DoDirectPayment API, or a billing
agreement ID.
* `Payment Action Code` - How you want to obtain payment. It is one of
the following values:
* Authorization
* Sale
* Order
* None
* `Payment Details`
*/
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

/*
## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
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
