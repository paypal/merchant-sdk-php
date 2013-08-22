<?php
use PayPal\PayPalAPI\TransactionSearchReq;
use PayPal\PayPalAPI\TransactionSearchRequestType;
use PayPal\Service\PayPalAPIInterfaceServiceService;
require_once('../PPBootStrap.php');

/*
 *  # TransactionSearch API
The TransactionSearch API searches transaction history for transactions
that meet the specified criteria.
`Note:
The maximum number of transactions that can be returned from a
TransactionSearch API call is 100.`
This sample code uses Merchant PHP SDK to make API call
*/

/*
 *  `TransactionSearchRequestType` which takes mandatory argument:

* `Start Date` - The earliest transaction date at which to start the
search.
*/
$transactionSearchRequest = new TransactionSearchRequestType();
$transactionSearchRequest->StartDate = $_REQUEST['startDate'];
$transactionSearchRequest->EndDate = $_REQUEST['endDate'];
$transactionSearchRequest->TransactionID = $_REQUEST['transactionID'];

$tranSearchReq = new TransactionSearchReq();
$tranSearchReq->TransactionSearchRequest = $transactionSearchRequest;

/*
 * 		 ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
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
