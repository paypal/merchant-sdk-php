<?php
use PayPal\CoreComponentTypes\BasicAmountType;
use PayPal\EBLBaseComponents\AddressType;
use PayPal\EBLBaseComponents\BillingPeriodDetailsType;
use PayPal\EBLBaseComponents\UpdateRecurringPaymentsProfileRequestDetailsType;
use PayPal\EBLBaseComponents\CreditCardDetailsType;
use PayPal\PayPalAPI\UpdateRecurringPaymentsProfileReq;
use PayPal\PayPalAPI\UpdateRecurringPaymentsProfileRequestType;
use PayPal\Service\PayPalAPIInterfaceServiceService;
require_once('../PPBootStrap.php');
/**
 *
 # UpdateRecurringPaymentsProfile API
 The UpdateRecurringPaymentsProfile API operation updates a recurring
 payments profile.

 This sample code uses Merchant PHP SDK to make API call
*/

$currencyCode = "USD";

$shippingAddress = new AddressType();
$shippingAddress->Name = $_REQUEST['shippingName'];
$shippingAddress->Street1 = $_REQUEST['shippingStreet1'];
$shippingAddress->Street2 = $_REQUEST['shippingStreet2'];
$shippingAddress->CityName = $_REQUEST['shippingCity'];
$shippingAddress->StateOrProvince = $_REQUEST['shippingState'];
$shippingAddress->PostalCode = $_REQUEST['shippingPostalCode'];
$shippingAddress->Country = $_REQUEST['shippingCountry'];
$shippingAddress->Phone = $_REQUEST['shippingPhone'];

$updateRPProfileRequestDetail = new UpdateRecurringPaymentsProfileRequestDetailsType();

$updateRPProfileRequestDetail->SubscriberName = $_REQUEST['subscriberName'];
$updateRPProfileRequestDetail->BillingStartDate = $_REQUEST['billingStartDate'];
$updateRPProfileRequestDetail->SubscriberShippingAddress  = $shippingAddress;

/*
 *  Regular payment period for this schedule which takes mandatory
params:

* `Billing Period` - Unit for billing during this subscription period. It is one of the
following values:
* Day
* Week
* SemiMonth
* Month
* Year
For SemiMonth, billing is done on the 1st and 15th of each month.
`Note:
The combination of BillingPeriod and BillingFrequency cannot exceed
one year.`
* `Billing Frequency` - Number of billing periods that make up one billing cycle.
The combination of billing frequency and billing period must be less
than or equal to one year. For example, if the billing cycle is
Month, the maximum value for billing frequency is 12. Similarly, if
the billing cycle is Week, the maximum value for billing frequency is
52.
`Note:
If the billing period is SemiMonth, the billing frequency must be 1.`
* `Billing Amount`
*/
$paymentBillingPeriod =  new BillingPeriodDetailsType();
$paymentBillingPeriod->BillingFrequency = $_REQUEST['billingFrequency'];
$paymentBillingPeriod->BillingPeriod = $_REQUEST['billingPeriod'];
$paymentBillingPeriod->TotalBillingCycles = $_REQUEST['totalBillingCycles'];
$paymentBillingPeriod->Amount = new BasicAmountType($currencyCode, $_REQUEST['billingAmount']);
$paymentBillingPeriod->ShippingAmount = new BasicAmountType($currencyCode, $_REQUEST['shippingAmount']);
$paymentBillingPeriod->TaxAmount = new BasicAmountType($currencyCode, $_REQUEST['taxAmount']);

/*
* `Description` - Description of the recurring payment.
*/
$updateRPProfileRequestDetail->Description = $_REQUEST['profileDescription'];


if( $_REQUEST['trialBillingFrequency'] != "" && $_REQUEST['trialBillingAmount'] != "") {
	$trialBillingPeriod =  new BillingPeriodDetailsType();
	$trialBillingPeriod->BillingFrequency = $_REQUEST['trialBillingFrequency'];
	$trialBillingPeriod->BillingPeriod = $_REQUEST['trialBillingPeriod'];
	$trialBillingPeriod->TotalBillingCycles = $_REQUEST['trialBillingCycles'];
	$trialBillingPeriod->Amount = new BasicAmountType($currencyCode, $_REQUEST['trialBillingAmount']);
	$trialBillingPeriod->ShippingAmount = new BasicAmountType($currencyCode, $_REQUEST['trialShippingAmount']);
	$trialBillingPeriod->TaxAmount = new BasicAmountType($currencyCode, $_REQUEST['trialTaxAmount']);
	$updateRPProfileRequestDetail->TrialPeriod  = $trialBillingPeriod;
}

$updateRPProfileRequestDetail->PaymentPeriod = $paymentBillingPeriod;
if($_REQUEST['maxFailedPayments'] != "") {
	$updateRPProfileRequestDetail->MaxFailedPayments =  $_REQUEST['maxFailedPayments'];
}
if($_REQUEST['autoBillOutstandingAmount'] != "") {
	$updateRPProfileRequestDetail->AutoBillOutstandingAmount = $_REQUEST['autoBillOutstandingAmount'];
}

if($_REQUEST['creditCardNumber'] != null){
	// Credit card information cannot be updated for profiles created through Express Checkout, since the payment is tied to the PayPal account and not a credit card.
	$creditCard = new CreditCardDetailsType();
	$creditCard->CreditCardNumber = $_REQUEST['creditCardNumber'];

	/*
	 *  Type of credit card. For UK, only Maestro, MasterCard, Discover, and
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
	$creditCard->CreditCardType = $_REQUEST['creditCardType'];
	$creditCard->CVV2 = $_REQUEST['cvv'];
	$creditCard->ExpMonth = $_REQUEST['expMonth'];
	$creditCard->ExpYear = $_REQUEST['expYear'];
	$updateRPProfileRequestDetail->CreditCard = $creditCard;
}

//(Required) Recurring payments profile ID returned in the CreateRecurringPaymentsProfile response.
$updateRPProfileRequestDetail->ProfileID = $_REQUEST['profileID'];

$updateRPProfileRequest = new UpdateRecurringPaymentsProfileRequestType();
$updateRPProfileRequest->UpdateRecurringPaymentsProfileRequestDetails = $updateRPProfileRequestDetail;


$updateRPProfileReq =  new UpdateRecurringPaymentsProfileReq();
$updateRPProfileReq->UpdateRecurringPaymentsProfileRequest = $updateRPProfileRequest;

/*
 *  ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());;
try {
	/* wrap API method calls on the service object with a try catch */
	$updateRPProfileResponse = $paypalService->UpdateRecurringPaymentsProfile($updateRPProfileReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}

if(isset($updateRPProfileResponse)) {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$updateRPProfileResponse->Ack</div> </td></tr>";
	echo "<tr><td>ProfileID :</td><td><div id='ProfileID'>".$updateRPProfileResponse->UpdateRecurringPaymentsProfileResponseDetails->ProfileID ."</div> </td></tr>";
	echo "</table>";

	echo "<pre>";
	print_r($updateRPProfileResponse);
	echo "</pre>";
}
require_once '../Response.php';