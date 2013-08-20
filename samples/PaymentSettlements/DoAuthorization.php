<?php
use PayPal\CoreComponentTypes\BasicAmountType;
use PayPal\PayPalAPI\DoAuthorizationReq;
use PayPal\PayPalAPI\DoAuthorizationRequestType;
use PayPal\Service\PayPalAPIInterfaceServiceService;
require_once('../PPBootStrap.php');
/*
 *  # DoAuthorization API
Authorize a payment.
This sample code uses Merchant PHP SDK to make API call
*/

/*
 *  `Amount` which takes mandatory params:

* `currencyCode`
* `amount`
*/
$amount = new BasicAmountType($_REQUEST['currencyCode'], $_REQUEST['amt']);

/*
 *  `DoAuthorizationRequest` which takes mandatory params:

* `Transaction ID` - Value of the order's transaction identification
number returned by PayPal.
* `Amount` - Amount to authorize.
*/
$doAuthRequest = new DoAuthorizationRequestType($_REQUEST['transID'], $amount);
$doAuthReq = new DoAuthorizationReq();
$doAuthReq->DoAuthorizationRequest =$doAuthRequest;

/*
 *  ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());

try {
	/* wrap API method calls on the service object with a try catch */
	$doAuthResponse = $paypalService->DoAuthorization($doAuthReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($doAuthResponse)) {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>".$doAuthResponse->Ack."</div> </td></tr>";
	echo "<tr><td>TransactionID :</td><td><div id='TransactionID'>".$doAuthResponse->TransactionID."</div></td></tr>";
	echo "</table>";

	echo "<pre>";
	print_r($doAuthResponse);
	echo "</pre>";
}
require_once '../Response.php';
?>
