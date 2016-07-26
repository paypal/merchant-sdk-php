<?php

use PayPal\Merchant\EBLBaseComponents\ReverseTransactionRequestDetailsType;
use PayPal\Merchant\API\ReverseTransactionReq;
use PayPal\Merchant\API\ReverseTransactionRequestType;
use PayPal\Merchant\Service\APIInterfaceServiceService;
require_once('../PPBootStrap.php');
/**
 * Get required parameters from the web form for the request
 */

$reverseTransactionReqestDetails = new ReverseTransactionRequestDetailsType();
$reverseTransactionReqestDetails->TransactionID = $_REQUEST['transID'];

$reverseTransactionReqest = new ReverseTransactionRequestType();
$reverseTransactionReqest->ReverseTransactionRequestDetails = $reverseTransactionReqestDetails;


$reverseTransactionReq = new ReverseTransactionReq();
$reverseTransactionReq->ReverseTransactionRequest = $reverseTransactionReqest;
/*
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new APIInterfaceServiceService(Configuration::getAcctAndConfig());
try {
	/* wrap API method calls on the service object with a try catch */
	$reverseTransactionResponse = $paypalService->ReverseTransaction($reverseTransactionReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($reverseTransactionResponse)) {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$reverseTransactionResponse->Ack</div> </td></tr>";
	//echo "<tr><td>Ack :</td><td><div id='Ack'>$reverseTransactionResponse->ReverseTransactionResponseDetails->ReverseTransactionID</div> </td></tr>";
	echo "</table>";
	echo "<pre>";
	print_r($reverseTransactionResponse);
	echo "</pre>";
}
require_once '../Response.php';
