<?php
require_once('../PPBootStrap.php');

$transactionSearchRequest = new TransactionSearchRequestType();
$transactionSearchRequest->StartDate = $_REQUEST['startDate'];
$transactionSearchRequest->EndDate = $_REQUEST['endDate'];
$transactionSearchRequest->TransactionID = $_REQUEST['transactionID'];

$tranSearchReq = new TransactionSearchReq();
$tranSearchReq->TransactionSearchRequest = $transactionSearchRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
try {
	/* wrap API method calls on the service object with a try catch */
	$transactionSearchResponse = $paypalService->TransactionSearch($tranSearchReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($transactionSearchResponse)) {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$transactionSearchResponse->Ack</div> </td></tr>";
	echo "</table>";
	echo "<pre>";
	print_r($transactionSearchResponse);
	echo "</pre>";
}
require_once '../Response.php';
