<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('GetAuthDetails');
 
$reqType = new GetAuthDetailsRequestType($_REQUEST['token']);
$req = new GetAuthDetailsReq();
$req->GetAuthDetailsRequest = $reqType;

$logger->info("created GetAuthDetailsRequest Object");
$paypalService = new PayPalAPIInterfaceServiceService();
try {
	/* wrap API method calls on the service object with a try catch */
	$getAuthDetailsResponse = $paypalService->GetAuthDetails($req);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}

if(isset($getAuthDetailsResponse)) {
	echo "<pre>";
	print_r($getAuthDetailsResponse);
	echo "</pre>";
	if($getAuthDetailsResponse->Ack == 'Success') {
		$payPalURL = 'https://www.sandbox.paypal.com/webscr&cmd=_account-authenticate-logout&token='.$token;
		echo"<a href=$payPalURL><b>* Redirect to paypal to logout</b></a><br>";
	}
}
require_once '../Response.php';