<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('Crete Button');

$buttonVar = Array("item_name" => $_REQUEST['itemName'],
					"return" => $_REQUEST['returnURL'],
					"business" => $_REQUEST['businessMail'],
					"amount" => $_REQUEST['amt']);

if($_REQUEST['buttonType'] == "PAYMENTPLAN")
{
	$paymentPeriod = new InstallmentDetailsType();
	$paymentPeriod->Amount = $_REQUEST['installmentAmt'];
	$paymentPeriod->BillingFrequency = $_REQUEST['billingFreq'];
	$paymentPeriod->BillingPeriod = $_REQUEST['billingPeriod'];
	$paymentPeriod->TotalBillingCycles  = $_REQUEST['billingCycles'];

	$optionSelectionDetails = new OptionSelectionDetailsType();
	$optionSelectionDetails->OptionType = $_REQUEST['optionType'];
	$optionSelectionDetails->PaymentPeriod = $paymentPeriod;


	$optionDetails = new OptionDetailsType();
	$optionDetails->OptionName = "CreateButton";
	$optionDetails->OptionSelectionDetails = $optionSelectionDetails;
}

elseif($_REQUEST['buttonType'] == "AUTOBILLING")
{
	$buttonVar["min_amount"] =  $_REQUEST['minAmount'];
}
elseif($_REQUEST['buttonType'] == "GIFTCERTIFICATE")
{
	$buttonVar["shopping_url"] =  $_REQUEST['shoppingUrl'];
}

elseif($_REQUEST['buttonType'] == "PAYMENT")
{
	$buttonVar["subtotal"] =  $_REQUEST['subTotal'];
}

elseif($_REQUEST['buttonType'] == "SUBSCRIBE")
{
	$buttonVar["a3"] =  $_REQUEST['subAmt'];
	$buttonVar["p3"] =  $_REQUEST['subPeriod'];
	$buttonVar["t3"] =  $_REQUEST['subInterval'];
}
$createButtonRequest = new BMCreateButtonRequestType();
$createButtonRequest->ButtonCode = $_REQUEST['buttonCode'];
$createButtonRequest->ButtonType = $_REQUEST['buttonType'];
$createButtonRequest->Version = 84;
$createButtonRequest->ButtonVar = $buttonVar;
if($_REQUEST['buttonType'] == "PAYMENTPLAN")
{
	$createButtonRequest->OptionDetails = $optionDetails;
}

$createButtonReq = new BMCreateButtonReq();
$createButtonReq->BMCreateButtonRequest = $createButtonRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
$createButtonResponse = $paypalService->BMCreateButton($createButtonReq);
echo "<pre>";
print_r($createButtonResponse);
echo "</pre>";
require_once '../Response.php';