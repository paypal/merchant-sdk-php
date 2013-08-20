<?php
require_once('../PPBootStrap.php');

$profileDetails = new RecurringPaymentsProfileDetailsType();
$profileDetails->BillingStartDate = $_REQUEST['billingStartDate'];

$paymentBillingPeriod = new BillingPeriodDetailsType();
$paymentBillingPeriod->BillingFrequency = urlencode($_REQUEST['billingFrequency']);
$paymentBillingPeriod->BillingPeriod = urlencode($_REQUEST['billingPeriod']);
$paymentBillingPeriod->Amount = new BasicAmountType(urlencode($_REQUEST['currencyCode']), urlencode($_REQUEST['billingAmount']));

$scheduleDetails = new ScheduleDetailsType();
$scheduleDetails->Description = urlencode($_REQUEST['profileDescription']);
$scheduleDetails->PaymentPeriod = $paymentBillingPeriod;

$createRPProfileRequestDetails = new CreateRecurringPaymentsProfileRequestDetailsType();
$creditCard = new CreditCardDetailsType();
$creditCard->CreditCardNumber = urlencode($_REQUEST['creditCardNumber']);
$creditCard->CreditCardType = urlencode($_REQUEST['creditCardType']);
$creditCard->CVV2 = urlencode($_REQUEST['cvv']);
$creditCard->ExpMonth = urlencode($_REQUEST['expMonth']);
$creditCard->ExpYear = urlencode($_REQUEST['expYear']);
$createRPProfileRequestDetails->CreditCard = $creditCard;

$createRPProfileRequestDetails->ScheduleDetails = $scheduleDetails;
$createRPProfileRequestDetails->RecurringPaymentsProfileDetails = $profileDetails;

$createRPProfileRequest = new CreateRecurringPaymentsProfileRequestType();
$createRPProfileRequest->CreateRecurringPaymentsProfileRequestDetails = $createRPProfileRequestDetails;

$createRPProfileReq = new CreateRecurringPaymentsProfileReq();
$createRPProfileReq->CreateRecurringPaymentsProfileRequest = $createRPProfileRequest;

$config = array (
		'mode' => 'sandbox' ,
		'acct1.UserName' => 'jb-us-seller_api1.paypal.com',
		'acct1.Password' => 'WX4WTU3S8MY44S7F',
		'acct1.Signature' => 'AFcWxV21C7fd0v3bYYYRCpSSRl31A7yDhhsPUU2XhtMoZXsWHFxu-RWy'
);
$paypalService = new PayPalAPIInterfaceServiceService($config);
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
