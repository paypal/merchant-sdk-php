<?php
use PayPal\CoreComponentTypes\BasicAmountType;
use PayPal\EBLBaseComponents\MerchantPullPaymentType;
use PayPal\PayPalAPI\BillUserReq;
use PayPal\PayPalAPI\BillUserRequestType;
use PayPal\Service\PayPalAPIInterfaceServiceService;
require_once('../PPBootStrap.php');

/*
 * Initiate a "merchant pull" (or "prepparoved payment") transaction - transfer money from the user's account to the merchant's account in accordance with a previously established billing agreement
 */
$currencyId = $_REQUEST['currencyID'];

/*
 * payment details
 */
$MPPaymentDetails = new MerchantPullPaymentType();
$MPPaymentDetails->Amount = new BasicAmountType($currencyId, $_REQUEST['amt']);
$MPPaymentDetails->Shipping = new BasicAmountType($currencyId, $_REQUEST['shipping']);
$MPPaymentDetails->Handling = new BasicAmountType($currencyId, $_REQUEST['handling']);
$MPPaymentDetails->Tax = new BasicAmountType($currencyId, $_REQUEST['tax']);
$MPPaymentDetails->PaymentType = $_REQUEST['paymentCodeType'];
$MPPaymentDetails->EmailSubject = $_REQUEST['mailSubject'];
$MPPaymentDetails->ItemName = $_REQUEST['itemName'];
$MPPaymentDetails->ItemNumber = $_REQUEST['itemNum'];
$MPPaymentDetails->Memo = $_REQUEST['memo'];
$MPPaymentDetails->MpID = $_REQUEST['billingAgreementID'];

$billUserReqest = new BillUserRequestType();
$billUserReqest->MerchantPullPaymentDetails = $MPPaymentDetails;


$billUserReq = new BillUserReq();
$billUserReq->BillUserRequest = $billUserReqest;


/*
 * 	 ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
try {
	/* wrap API method calls on the service object with a try catch */
	$billUserResponse = $paypalService->BillUser($billUserReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($billUserResponse)) {
	echo "<pre>";
	print_r($billUserResponse);
	echo "</pre>";
}
require_once '../Response.php';
