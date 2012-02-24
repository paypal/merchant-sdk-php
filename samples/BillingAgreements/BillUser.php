<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('Bill User');

$amount = new BasicAmountType();
$amount->currencyID = $_REQUEST['currencyID'];
$amount->value = $_REQUEST['amt'];

$MPPaymentDetails = new MerchantPullPaymentType();
$MPPaymentDetails->Amount = $amount;
$MPPaymentDetails->PaymentType = $_REQUEST['paymentCodeType'];
$MPPaymentDetails->EmailSubject = $_REQUEST['mailSubject'];
$MPPaymentDetails->ItemName = $_REQUEST['itemName'];
$MPPaymentDetails->ItemNumber = $_REQUEST['itemNum'];
$MPPaymentDetails->Memo = $_REQUEST['memo'];
$MPPaymentDetails->MpID = $_REQUEST['billingAgreementID'];

$billUserReqest = new BillUserRequestType();
$billUserReqest->MerchantPullPaymentDetails = $MPPaymentDetails;
$billUserReqest->Version = 86;

$billUserReq = new BillUserReq();
$billUserReq->BillUserRequest = $billUserReqest;

$paypalService = new PayPalAPIInterfaceServiceService();
$billUserResponse = $paypalService->BillUser($billUserReq);
echo "<pre>";
print_r($billUserResponse);
echo "</pre>";
require_once '../Response.php';