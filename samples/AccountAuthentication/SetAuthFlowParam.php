<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('SetAuthFlowParam');

$reqDetails = new SetAuthFlowParamRequestDetailsType();
$reqDetails->CancelURL = $_REQUEST['cancelURL'];
$reqDetails->ReturnURL = $_REQUEST['returnURL'];
$reqDetails->LogoutURL = $_REQUEST['logoutURL'];

$reqType = new SetAuthFlowParamRequestType();
$reqType->Version = 84.0;
$reqType->SetAuthFlowParamRequestDetails = $reqDetails;
$req = new SetAuthFlowParamReq();
$req->SetAuthFlowParamRequest = $reqType;

$paypalService = new PayPalAPIInterfaceServiceService();
$setAuthFlowParamResponse = $paypalService->SetAuthFlowParam($req);
var_dump($setAuthFlowParamResponse);

if($setAuthFlowParamResponse->Ack == 'Success')
{
$token = $setAuthFlowParamResponse->Token;
$payPalURL = 'https://www.sandbox.paypal.com/webscr&cmd=_account-authenticate-login&token='.$token;

echo"<a href=$payPalURL><b>* Redirect to paypal to login</b></a><br>";
}
require_once '../Response.php';