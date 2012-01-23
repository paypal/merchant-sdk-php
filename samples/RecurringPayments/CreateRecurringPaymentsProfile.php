<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
/**
 * Get required parameters from the web form for the request
 */
$logger = new PPLoggingManager('CreateRecurringPaymentsProfile');

$trialAmount = new BasicAmountType();
$trialAmount->currencyID = 'USD';
$trialAmount->value = $_REQUEST['billingAmount'];

$paymentAmount = new BasicAmountType();
$paymentAmount->currencyID = 'USD';
$paymentAmount->value = $_REQUEST['trialBillingAmount'];

$creditCard = new CreditCardDetailsType();
$creditCard->CreditCardNumber = $_REQUEST['creditCardNumber'];
$creditCard->CreditCardType = $_REQUEST['creditCardType'];
$creditCard->CVV2 = $_REQUEST['cvv'];
$creditCard->ExpMonth = $_REQUEST['expMonth'];
$creditCard->ExpYear = $_REQUEST['expYear'];

$shppingAddress = new AddressType();
$shppingAddress->Name = $_REQUEST['shippingName'];
$shppingAddress->Street1 = $_REQUEST['shippingStreet1'];
$shppingAddress->CityName = $_REQUEST['shippingCity'];
$shppingAddress->StateOrProvince = $_REQUEST['shippingState'];
$shppingAddress->PostalCode = $_REQUEST['shippingPostalCode'];
$shppingAddress->Country = $_REQUEST['shippingCountry'];
$shppingAddress->Phone = $_REQUEST['shippingPhone'];


$RPProfileDetails = new RecurringPaymentsProfileDetailsType();
$RPProfileDetails->SubscriberName = $_REQUEST['subscriberName'];
$RPProfileDetails->BillingStartDate = $_REQUEST['billingStartDate'];
$RPProfileDetails->SubscriberShippingAddress  = $shppingAddress;

$activationDetails = new ActivationDetailsType();
$activationDetails->InitialAmount = $_REQUEST['initialAmount'];
$activationDetails->FailedInitialAmountAction = $_REQUEST['failedInitialAmountAction'];

$paymentBillingPeriod =  new BillingPeriodDetailsType();
$paymentBillingPeriod->BillingFrequency = $_REQUEST['billingFrequency'];
$paymentBillingPeriod->BillingPeriod = $_REQUEST['billingPeriod'];
$paymentBillingPeriod->Amount = $trialAmount;
$paymentBillingPeriod->TotalBillingCycles = $_REQUEST['totalBillingCycles'];

$trialBillingPeriod =  new BillingPeriodDetailsType();
$trialBillingPeriod->BillingFrequency = $_REQUEST['trialBillingFrequency'];
$trialBillingPeriod->BillingPeriod = $_REQUEST['trialBillingPeriod'];
$trialBillingPeriod->Amount = $trialAmount;
$trialBillingPeriod->TotalBillingCycles = $_REQUEST['trialBillingCycles'];

$scheduleDetails = new ScheduleDetailsType();
$scheduleDetails->Description = $_REQUEST['profileDescription'];
$scheduleDetails->ActivationDetails = $activationDetails;
$scheduleDetails->TrialPeriod  = $trialBillingPeriod;
$scheduleDetails->PaymentPeriod = $paymentBillingPeriod;
$scheduleDetails->MaxFailedPayments =  $_REQUEST['maxFailedPayments'];
$scheduleDetails->AutoBillOutstandingAmount = $_REQUEST['autoBillOutstandingAmount'];

$createRPProfileRequestDetail = new CreateRecurringPaymentsProfileRequestDetailsType();
$createRPProfileRequestDetail->CreditCard = $creditCard;
//$createRPProfileRequestDetail->Token  = $_REQUEST['token'];
$createRPProfileRequestDetail->ScheduleDetails = $scheduleDetails;
$createRPProfileRequestDetail->RecurringPaymentsProfileDetails = $RPProfileDetails;
$createRPProfileRequest = new CreateRecurringPaymentsProfileRequestType();
$createRPProfileRequest->CreateRecurringPaymentsProfileRequestDetails = $createRPProfileRequestDetail;
$createRPProfileRequest->Version = 84;

$createRPProfileReq =  new CreateRecurringPaymentsProfileReq();
$createRPProfileReq->CreateRecurringPaymentsProfileRequest = $createRPProfileRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
$createRPProfileResponse = $paypalService->CreateRecurringPaymentsProfile($createRPProfileReq);

echo "<pre>";
print_r($createRPProfileResponse);
echo "</pre>";
require_once '../Response.php';