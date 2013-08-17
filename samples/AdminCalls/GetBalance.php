<?php
use PayPal\PayPalAPI\GetBalanceReq;
use PayPal\PayPalAPI\GetBalanceRequestType;
use PayPal\Service\PayPalAPIInterfaceServiceService;
require_once('../PPBootStrap.php');

/*
 *  The GetBalance API Operation obtains the available balance for a PayPal account.
*  This sample code uses Merchant PHP SDK to make API call
*/
$getBalanceRequest = new GetBalanceRequestType();

/*
 *  Indicates whether to return all currencies. It is one of the
following values:

* 0 – Return only the balance for the primary currency holding.
* 1 – Return the balance for each currency holding.
*/
$getBalanceRequest->ReturnAllCurrencies = $_REQUEST['returnAllCurrencies'];

$getBalanceReq = new GetBalanceReq();
$getBalanceReq->GetBalanceRequest = $getBalanceRequest;

/*
 * 	 ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
try {
	/* wrap API method calls on the service object with a try catch */
	$getBalanceResponse = $paypalService->GetBalance($getBalanceReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($getBalanceResponse)) {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$getBalanceResponse->Ack</div> </td></tr>";
	echo "</table>";
	echo "<pre>";
	print_r($getBalanceResponse);
	echo "</pre>";
}
require_once '../Response.php';
