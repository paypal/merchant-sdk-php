<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('GetAuthDetails');
$token = $_REQUEST['token'];
$reqType = new GetAuthDetailsRequestType();
$reqType->Token = $token;
$reqType->Version = 86.0;

$req = new GetAuthDetailsReq();
$req->GetAuthDetailsRequest = $reqType;

$logger->error("created GetAuthDetailsRequest Object");
$paypalService = new PayPalAPIInterfaceServiceService();
$getAuthDetailsResponse = $paypalService->GetAuthDetails($req);
//$logger->error("");
echo "<pre>";
print_r($getAuthDetailsResponse);
echo "</pre>";
if($getAuthDetailsResponse->Ack == 'Success')
{

$payPalURL = 'https://www.sandbox.paypal.com/webscr&cmd=_account-authenticate-logout&token='.$token;

echo"<a href=$payPalURL><b>* Redirect to paypal to logout</b></a><br>";
}
require_once '../Response.php';