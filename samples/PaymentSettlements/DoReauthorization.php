<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
/**
 * Get required parameters from the web form for the request
 */
$logger = new PPLoggingManager('DoReAuthorization');

$amount = new BasicAmountType($_REQUEST['currencyCode'], $_REQUEST['amt']);
$doReAuthRequest = new DoReauthorizationRequestType($_REQUEST['authID'], $amount);
$doReAuthReq = new DoReauthorizationReq();
$doReAuthReq->DoReauthorizationRequest =$doReAuthRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
try {
	/* wrap API method calls on the service object with a try catch */
	$doReAuthResponse = $paypalService->DoReauthorization($doReAuthReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($doReAuthResponse)) {
	echo "<pre>";
	print_r($doReAuthResponse);
	echo "</pre>";
}
require_once '../Response.php';