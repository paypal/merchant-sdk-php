<?php

$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('TransactionDetails');

$req = new GetTransactionDetailsRequestType();

$req->TransactionID = $_POST['transID'];


$req->Version = 78.0;
$trans = new GetTransactionDetailsReq();
$trans->GetTransactionDetailsRequest = $req;

$logger->error("created transDetailRequest Object");
$trans_service = new PayPalAPIInterfaceServiceService();
$TransDetailsResponse = $trans_service->GetTransactionDetails($trans);
//$logger->error("Received $createTransDetailsResponse:");
var_dump($TransDetailsResponse);

?>