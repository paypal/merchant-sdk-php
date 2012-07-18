<?php

$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('TransactionSearch');

$transactionSearchRequest = new TransactionSearchRequestType();
$transactionSearchRequest->Version = 86.0;
$transactionSearchRequest->StartDate = $_REQUEST['startDate'];
$transactionSearchRequest->EndDate = $_REQUEST['endDate'];

$tranSearchReq = new TransactionSearchReq();
$tranSearchReq->TransactionSearchRequest = $transactionSearchRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
$transactionSearchResponse = $paypalService->TransactionSearch($tranSearchReq);
echo "<pre>";
print_r($transactionSearchResponse);
echo "</pre>";
require_once '../Response.php';