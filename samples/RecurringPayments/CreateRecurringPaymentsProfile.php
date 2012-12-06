<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
/**
 * Get required parameters from the web form for the request
 */
$logger = new PPLoggingManager('CreateRecurringPaymentsProfile');

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

$RPProfileDetails = new RecurringPaymentsProfileDetailsType();
$RPProfileDetails->SubscriberName = $_REQUEST['subscriberName'];
$RPProfileDetails->BillingStartDate = $_REQUEST['billingStartDate'];
$RPProfileDetails->SubscriberShippingAddress  = $shippingAddress;

$activationDetails = new ActivationDetailsType();
$activationDetails->InitialAmount = new BasicAmountType($currencyCode, $_REQUEST['initialAmount']);
$activationDetails->FailedInitialAmountAction = $_REQUEST['failedInitialAmountAction'];

$paymentBillingPeriod =  new BillingPeriodDetailsType();
$paymentBillingPeriod->BillingFrequency = $_REQUEST['billingFrequency'];
$paymentBillingPeriod->BillingPeriod = $_REQUEST['billingPeriod'];
$paymentBillingPeriod->TotalBillingCycles = $_REQUEST['totalBillingCycles'];
$paymentBillingPeriod->Amount = new BasicAmountType($currencyCode, $_REQUEST['paymentAmount']);
$paymentBillingPeriod->ShippingAmount = new BasicAmountType($currencyCode, $_REQUEST['paymentShippingAmount']);
$paymentBillingPeriod->TaxAmount = new BasicAmountType($currencyCode, $_REQUEST['paymentTaxAmount']);

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

$createRPProfileRequestDetail = new CreateRecurringPaymentsProfileRequestDetailsType();
if(trim($_REQUEST['token']) != "") {
	$createRPProfileRequestDetail->Token  = $_REQUEST['token'];
} else {
	$creditCard = new CreditCardDetailsType();
	$creditCard->CreditCardNumber = $_REQUEST['creditCardNumber'];
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

$paypalService = new PayPalAPIInterfaceServiceService();
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