<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('GetAuthDetails');
$token = $_REQUEST['token'];
$reqType = new GetAuthDetailsRequestType();
$reqType->Token = $token;
$reqType->Version = 78.0;

$req = new GetAuthDetailsReq();
$req->GetAuthDetailsRequest = $reqType;

$logger->error("created GetAuthDetailsRequest Object");
$auth_service = new PayPalAPIInterfaceServiceService();
$getAuthDetailsResponse = $auth_service->GetAuthDetails($req);
//$logger->error("");
var_dump($getAuthDetailsResponse);
if($getAuthDetailsResponse->Ack == 'Success')
{

$payPalURL = 'https://www.sandbox.paypal.com/webscr&cmd=_account-authenticate-logout&token='.$token;

echo"<a href=$payPalURL><b>* Redirect to paypal to logout</b></a><br>";
}