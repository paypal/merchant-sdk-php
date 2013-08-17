<?php
use PayPal\PayPalAPI\GetTransactionDetailsReq;
use PayPal\PayPalAPI\GetTransactionDetailsRequestType;
use PayPal\Service\PayPalAPIInterfaceServiceService;
require_once('../PPBootStrap.php');

/*
 * The GetTransactionDetails API operation obtains information about a specific transaction.
*/
$transactionDetails = new GetTransactionDetailsRequestType();
/*
 * Unique identifier of a transaction.
*/
$transactionDetails->TransactionID = $_POST['transID'];

$request = new GetTransactionDetailsReq();
$request->GetTransactionDetailsRequest = $transactionDetails;

/*
 * 	 ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
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
