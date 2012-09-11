<?php

$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('TransactionDetails');

$req = new GetTransactionDetailsRequestType();

$req->TransactionID = $_POST['transID'];



$trans = new GetTransactionDetailsReq();
$trans->GetTransactionDetailsRequest = $req;

$logger->error("created transDetailRequest Object");
$paypalService = new PayPalAPIInterfaceServiceService();
$TransDetailsResponse = $paypalService->GetTransactionDetails($trans);
//$logger->error("Received $createTransDetailsResponse:");
echo "<table>";
echo "<tr><td>Ack :</td><td><div id='Ack'>$TransDetailsResponse->Ack</div> </td></tr>";
echo "</table>";
echo "<pre>";
print_r($TransDetailsResponse);
echo "</pre>";
require_once '../Response.php';

?>