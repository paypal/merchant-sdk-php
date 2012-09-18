<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
/**
 * Get required parameters from the web form for the request
 */
$logger = new PPLoggingManager('DoVoid');

$doVoidRequest = new DoVoidRequestType();
$doVoidRequest->AuthorizationID = $_REQUEST['authID'];


$doVoidReq = new DoVoidReq();
$doVoidReq->DoVoidRequest =$doVoidRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
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