<?php
use PayPal\CoreComponentTypes\BasicAmountType;
use PayPal\EBLBaseComponents\ActivationDetailsType;
use PayPal\EBLBaseComponents\AddressType;
use PayPal\EBLBaseComponents\BillingPeriodDetailsType;
use PayPal\EBLBaseComponents\CreateRecurringPaymentsProfileRequestDetailsType;
use PayPal\EBLBaseComponents\CreditCardDetailsType;
use PayPal\EBLBaseComponents\RecurringPaymentsProfileDetailsType;
use PayPal\EBLBaseComponents\ScheduleDetailsType;
use PayPal\PayPalAPI\CreateRecurringPaymentsProfileReq;
use PayPal\PayPalAPI\CreateRecurringPaymentsProfileRequestType;
use PayPal\Service\PayPalAPIInterfaceServiceService;
require_once('../PPBootStrap.php');
/**
 *
 # CreateRecurringPaymentsProfile API
 The CreateRecurringPaymentsProfile API operation creates a recurring
 payments profile.
 You must invoke the CreateRecurringPaymentsProfile API operation for each
 profile you want to create. The API operation creates a profile and an
 associated billing agreement.
 `Note:
 There is a one-to-one correspondence between billing agreements and
 recurring payments profiles. To associate a recurring payments profile
 with its billing agreement, you must ensure that the description in the
 recurring payments profile matches the description of a billing
 agreement. For version 54.0 and later, use SetExpressCheckout to initiate
 creation of a billing agreement.`
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

/*
 *  You can include up to 10 recurring payments profiles per request. The
order of the profile details must match the order of the billing
agreement details specified in the SetExpressCheckout request which
takes mandatory argument:

* `billing start date` - The date when billing for this profile begins.
`Note:
The profile may take up to 24 hours for activation.`
*/
$RPProfileDetails = new RecurringPaymentsProfileDetailsType();
$RPProfileDetails->SubscriberName = $_REQUEST['subscriberName'];
$RPProfileDetails->BillingStartDate = $_REQUEST['billingStartDate'];
$RPProfileDetails->SubscriberShippingAddress  = $shippingAddress;

$activationDetails = new ActivationDetailsType();

/*
 * (Optional) Initial non-recurring payment amount due immediately upon profile creation. Use an initial amount for enrolment or set-up fees.
 */
$activationDetails->InitialAmount = new BasicAmountType($currencyCode, $_REQUEST['initialAmount']);
/*
 *  (Optional) Action you can specify when a payment fails. It is one of the following values:

    ContinueOnFailure – By default, PayPal suspends the pending profile in the event that the initial payment amount fails. You can override this default behavior by setting this field to ContinueOnFailure. Then, if the initial payment amount fails, PayPal adds the failed payment amount to the outstanding balance for this recurring payment profile.

    When you specify ContinueOnFailure, a success code is returned to you in the CreateRecurringPaymentsProfile response and the recurring payments profile is activated for scheduled billing immediately. You should check your IPN messages or PayPal account for updates of the payment status.

    CancelOnFailure – If this field is not set or you set it to CancelOnFailure, PayPal creates the recurring payment profile, but places it into a pending status until the initial payment completes. If the initial payment clears, PayPal notifies you by IPN that the pending profile has been activated. If the payment fails, PayPal notifies you by IPN that the pending profile has been canceled.

 */
$activationDetails->FailedInitialAmountAction = $_REQUEST['failedInitialAmountAction'];

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
$paymentBillingPeriod->Amount = new BasicAmountType($currencyCode, $_REQUEST['paymentAmount']);
$paymentBillingPeriod->ShippingAmount = new BasicAmountType($currencyCode, $_REQUEST['paymentShippingAmount']);
$paymentBillingPeriod->TaxAmount = new BasicAmountType($currencyCode, $_REQUEST['paymentTaxAmount']);

/*
 * 	 Describes the recurring payments schedule, including the regular
payment period, whether there is a trial period, and the number of
payments that can fail before a profile is suspended which takes
mandatory params:

* `Description` - Description of the recurring payment.
`Note:
You must ensure that this field matches the corresponding billing
agreement description included in the SetExpressCheckout request.`
* `Payment Period`
*/
$scheduleDetails = new ScheduleDetailsType();
$scheduleDetails->Description = $_REQUEST['profileDescription'];
$scheduleDetails->ActivationDetails = $activationDetails;

if( $_REQUEST['trialBillingFrequency'] != "" && $_REQUEST['trialAmount'] != "") {
	$trialBillingPeriod =  new BillingPeriodDetailsType();
	$trialBillingPeriod->BillingFrequency = $_REQUEST['trialBillingFrequency'];
	$trialBillingPeriod->BillingPeriod = $_REQUEST['trialBillingPeriod'];
	$trialBillingPeriod->TotalBillingCycles = $_REQUEST['trialBillingCycles'];
	$trialBillingPeriod->Amount = new BasicAmountType($currencyCode, $_REQUEST['trialAmount']);
	$trialBillingPeriod->ShippingAmount = new BasicAmountType($currencyCode, $_REQUEST['trialShippingAmount']);
	$trialBillingPeriod->TaxAmount = new BasicAmountType($currencyCode, $_REQUEST['trialTaxAmount']);
	$scheduleDetails->TrialPeriod  = $trialBillingPeriod;
}

$scheduleDetails->PaymentPeriod = $paymentBillingPeriod;
if($_REQUEST['maxFailedPayments'] != "") {
	$scheduleDetails->MaxFailedPayments =  $_REQUEST['maxFailedPayments'];
}
if($_REQUEST['autoBillOutstandingAmount'] != "") {
	$scheduleDetails->AutoBillOutstandingAmount = $_REQUEST['autoBillOutstandingAmount'];
}

/*
 * 	 `CreateRecurringPaymentsProfileRequestDetailsType` which takes
mandatory params:

* `Recurring Payments Profile Details`
* `Schedule Details`
*/
$createRPProfileRequestDetail = new CreateRecurringPaymentsProfileRequestDetailsType();
if(trim($_REQUEST['token']) != "") {
	$createRPProfileRequestDetail->Token  = $_REQUEST['token'];
} else {

	/*
	 * 	 Either EC token or a credit card number is required.If you include
	both token and credit card number, the token is used and credit card number is
	ignored
	In case of setting EC token,
	`createRecurringPaymentsProfileRequestDetails.setToken("EC-5KH01765D1724703R");`
	A timestamped token, the value of which was returned in the response
	to the first call to SetExpressCheckout. Call
	CreateRecurringPaymentsProfile once for each billing
	agreement included in SetExpressCheckout request and use the same
	token for each call. Each CreateRecurringPaymentsProfile request
	creates a single recurring payments profile.
	`Note:
	Tokens expire after approximately 3 hours.`

	Credit card information for recurring payments using direct payments.
	*/
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
	$createRPProfileRequestDetail->CreditCard = $creditCard;
}
$createRPProfileRequestDetail->ScheduleDetails = $scheduleDetails;
$createRPProfileRequestDetail->RecurringPaymentsProfileDetails = $RPProfileDetails;
$createRPProfileRequest = new CreateRecurringPaymentsProfileRequestType();
$createRPProfileRequest->CreateRecurringPaymentsProfileRequestDetails = $createRPProfileRequestDetail;


$createRPProfileReq =  new CreateRecurringPaymentsProfileReq();
$createRPProfileReq->CreateRecurringPaymentsProfileRequest = $createRPProfileRequest;

/*
 *  ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
try {
	/* wrap API method calls on the service object with a try catch */
	$createRPProfileResponse = $paypalService->CreateRecurringPaymentsProfile($createRPProfileReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}

if(isset($createRPProfileResponse)) {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$createRPProfileResponse->Ack</div> </td></tr>";
	echo "<tr><td>ProfileID :</td><td><div id='ProfileID'>".$createRPProfileResponse->CreateRecurringPaymentsProfileResponseDetails->ProfileID ."</div> </td></tr>";
	echo "</table>";

	echo "<pre>";
	print_r($createRPProfileResponse);
	echo "</pre>";
}
require_once '../Response.php';
