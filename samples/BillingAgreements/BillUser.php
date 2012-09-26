<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('Bill User');


$currencyId = $_REQUEST['currencyID'];


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

$paypalService = new PayPalAPIInterfaceServiceService();
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