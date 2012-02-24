<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('billing agreement update');

$BAUpdateRequest = new BAUpdateRequestType();
$BAUpdateRequest->Version = 86.0;
$BAUpdateRequest->ReferenceID = $_REQUEST['referenceID'];
$BAUpdateRequest->BillingAgreementStatus = $_REQUEST['billingAgreementStatus'];
$BAUpdateRequest->BillingAgreementDescription = $_REQUEST['billingAgreementDescription'];

$billingAgreementUpdateReq = new BillAgreementUpdateReq();
$billingAgreementUpdateReq->BAUpdateRequest = $BAUpdateRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
$BAUpdatResponse = $paypalService->BillAgreementUpdate($billingAgreementUpdateReq);
echo "<pre>";
print_r($BAUpdatResponse);
echo "</pre>";
require_once '../Response.php';