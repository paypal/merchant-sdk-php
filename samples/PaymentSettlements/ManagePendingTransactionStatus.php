<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
/**
 * Get required parameters from the web form for the request
 */
$logger = new PPLoggingManager('ManagePendingTransactionStatus');
 
$MPTranStatusReqest= new ManagePendingTransactionStatusRequestType();
$MPTranStatusReqest->TransactionID = $_REQUEST['transactionID'];
$MPTranStatusReqest->Action = $_REQUEST['action'];
$MPTranStatusReqest->Version = 86;

$MPTranStatusReq = new ManagePendingTransactionStatusReq();
$MPTranStatusReq->ManagePendingTransactionStatusRequest = $MPTranStatusReqest;

$paypalService = new PayPalAPIInterfaceServiceService();
$MPTranStatusResponse = $paypalService->ManagePendingTransactionStatus($MPTranStatusReq);
echo "<pre>";
print_r($MPTranStatusResponse);
echo "</pre>";
require_once '../Response.php';
?>