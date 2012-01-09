<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
session_start();

$logger = new PPLoggingManager('GetExpressCheckout');

$token = $_REQUEST['token'];

//to use in DoExpressCheckout
$_SESSION['token'] = $token;
$_SESSION['payerId'] = $_REQUEST['PayerID'];

$getExpressCheckoutDetailsRequest = new GetExpressCheckoutDetailsRequestType($token);
$getExpressCheckoutDetailsRequest->Version = 84.0;
$getExpressCheckoutReq = new GetExpressCheckoutDetailsReq();
$getExpressCheckoutReq->GetExpressCheckoutDetailsRequest = $getExpressCheckoutDetailsRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
$getECResponse = $paypalService->GetExpressCheckoutDetails($getExpressCheckoutReq);
var_dump($getECResponse);

if($getECResponse->Ack =='Success')
{
	?>
	<html>
	<body>
	<div class="submit">
	<form action = "DoExpressCheckout.php" >
<input type="submit" name="Pay"
value="Pay" /> <br />
</form>
</div>
	</body>
	</html>
	<?php 
	require_once '../Response.php';
}