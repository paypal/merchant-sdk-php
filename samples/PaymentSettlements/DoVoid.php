<?php
use PayPal\PayPalAPI\DoVoidReq;
use PayPal\PayPalAPI\DoVoidRequestType;
use PayPal\Service\PayPalAPIInterfaceServiceService;
require_once('../PPBootStrap.php');

/*
 *  # DoVoid API
 Void an order or an authorization.
 This sample code uses Merchant PHP SDK to make API call
 */


$doVoidRequest = new DoVoidRequestType();
/*
 *  DoVoidRequest which takes mandatory params:

 * `Authorization ID` - Original authorization ID specifying the
 authorization to void or, to void an order, the order ID.
 `Important:
 If you are voiding a transaction that has been reauthorized, use the
 ID from the original authorization, and not the reauthorization.`
*/
$doVoidRequest->AuthorizationID = $_REQUEST['authID'];


$doVoidReq = new DoVoidReq();
$doVoidReq->DoVoidRequest =$doVoidRequest;

/*
 * 	 ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
try {
	/* wrap API method calls on the service object with a try catch */
	$doVoidResponse = $paypalService->DoVoid($doVoidReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($doVoidResponse)) {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>".$doVoidResponse->Ack."</div> </td></tr>";
	echo "<tr><td>AuthorizationID :</td><td><div id='AuthorizationID'>".$doVoidResponse->AuthorizationID."</div></td></tr>";
	echo "</table>";

	echo "<pre>";
	print_r($doVoidResponse);
	echo "</pre>";
}
require_once '../Response.php';
?>
