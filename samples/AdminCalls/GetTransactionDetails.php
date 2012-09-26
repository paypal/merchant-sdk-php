<?php

$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('TransactionDetails');

$transactionDetails = new GetTransactionDetailsRequestType();
$transactionDetails->TransactionID = $_POST['transID'];

$request = new GetTransactionDetailsReq();
$request->GetTransactionDetailsRequest = $transactionDetails;
$paypalService = new PayPalAPIInterfaceServiceService();
try {
	/* wrap API method calls on the service object with a try catch */
	$transDetailsResponse = $paypalService->GetTransactionDetails($request);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($transDetailsResponse)) {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$transDetailsResponse->Ack</div> </td></tr>";
	echo "</table>";
	echo "<pre>";
	print_r($transDetailsResponse);
	echo "</pre>";
}
require_once '../Response.php';

?>