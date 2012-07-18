<?php

$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('TransactionDetails');

$req = new GetTransactionDetailsRequestType();

$req->TransactionID = $_POST['transID'];


$req->Version = 86.0;
$trans = new GetTransactionDetailsReq();
$trans->GetTransactionDetailsRequest = $req;

$logger->error("created transDetailRequest Object");
$paypalService = new PayPalAPIInterfaceServiceService();
$TransDetailsResponse = $paypalService->GetTransactionDetails($trans);
//$logger->error("Received $createTransDetailsResponse:");
echo "<pre>";
print_r($TransDetailsResponse);
echo "</pre>";
require_once '../Response.php';

?>