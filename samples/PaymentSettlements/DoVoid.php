<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
/**
 * Get required parameters from the web form for the request
 */
$logger = new PPLoggingManager('DoVoid');

$doVoidRequest = new DoVoidRequestType();
$doVoidRequest->AuthorizationID = $_REQUEST['authID'];


$doVoidReq = new DoVoidReq();
$doVoidReq->DoVoidRequest =$doVoidRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
$doVoidResponse = $paypalService->DoVoid($doVoidReq);
echo "<pre>";
print_r($doVoidResponse);
echo "</pre>";
require_once '../Response.php';
?>