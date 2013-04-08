<?php

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
configuration file for your credentials and endpoint
*/
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
