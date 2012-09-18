<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('SetAuthFlowParam');

$reqDetails = new SetAuthFlowParamRequestDetailsType();
$reqDetails->CancelURL = $_REQUEST['cancelURL'];
$reqDetails->ReturnURL = $_REQUEST['returnURL'];
$reqDetails->LogoutURL = $_REQUEST['logoutURL'];

$reqType = new SetAuthFlowParamRequestType();

$reqType->SetAuthFlowParamRequestDetails = $reqDetails;
$req = new SetAuthFlowParamReq();
$req->SetAuthFlowParamRequest = $reqType;

$paypalService = new PayPalAPIInterfaceServiceService();
try {
	/* wrap API method calls on the service object with a try catch */
	$setAuthFlowParamResponse = $paypalService->SetAuthFlowParam($req);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}

if(isset($setAuthFlowParamResponse)) {
	echo "<pre>";
	print_r($setAuthFlowParamResponse);
	echo "</pre>";
	if($setAuthFlowParamResponse->Ack == 'Success') {
		$token = $setAuthFlowParamResponse->Token;
		$payPalURL = 'https://www.sandbox.paypal.com/webscr&cmd=_account-authenticate-login&token='.$token;
		echo"<a href=$payPalURL><b>* Redirect to paypal to login</b></a><br>";
	}
}
require_once '../Response.php';