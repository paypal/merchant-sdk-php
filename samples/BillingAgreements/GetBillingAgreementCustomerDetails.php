<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
/**
 * Get required parameters from the web form for the request
 */
$logger = new PPLoggingManager('GetBillingAgreementCustomerDetails');

$BACustomerDetailRequest = new GetBillingAgreementCustomerDetailsRequestType();
$BACustomerDetailRequest->Token = $_REQUEST['token'];
$BACustomerDetailRequest->Version = 84;

$BACustomerDetailReq = new GetBillingAgreementCustomerDetailsReq();
$BACustomerDetailReq->GetBillingAgreementCustomerDetailsRequest = $BACustomerDetailRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
$BACustomerDetailResponse = $paypalService->GetBillingAgreementCustomerDetails($BACustomerDetailReq);
echo "<pre>";
print_r($BACustomerDetailResponse);
echo "</pre>";
require_once '../Response.php';