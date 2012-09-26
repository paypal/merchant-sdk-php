<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
/**
 * Get required parameters from the web form for the request
 */
$logger = new PPLoggingManager('DoAuthorization');

$amount = new BasicAmountType($_REQUEST['currencyCode'], $_REQUEST['amt']);
$doAuthRequest = new DoAuthorizationRequestType($_REQUEST['transID'], $amount);
$doAuthReq = new DoAuthorizationReq();
$doAuthReq->DoAuthorizationRequest =$doAuthRequest;

$paypalService = new PayPalAPIInterfaceServiceService();

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