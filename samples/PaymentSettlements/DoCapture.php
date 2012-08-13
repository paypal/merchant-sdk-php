<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
/**
 * Get required parameters from the web form for the request
 */
$logger = new PPLoggingManager('DoDirectPayment');

$amount = new BasicAmountType();
$amount->currencyID = $_REQUEST['currencyCode'];
$amount->value = $_REQUEST['amt'];

$doCaptureReqest = new DoCaptureRequestType();
$doCaptureReqest->AuthorizationID = $_REQUEST['authID']; 
$doCaptureReqest->Amount = $amount;
$doCaptureReqest->CompleteType = $_REQUEST['completeCodeType'];


$doCaptureReq = new DoCaptureReq();
$doCaptureReq->DoCaptureRequest = $doCaptureReqest;

$paypalService = new PayPalAPIInterfaceServiceService();
$doCaptureResponse = $paypalService->DoCapture($doCaptureReq);
echo "<pre>";
print_r($doCaptureResponse);
echo "</pre>";
require_once '../Response.php';