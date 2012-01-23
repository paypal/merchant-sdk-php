<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
session_start();

$logger = new PPLoggingManager('GetExpressCheckout');

$token = $_REQUEST['token'];

$getExpressCheckoutDetailsRequest = new GetExpressCheckoutDetailsRequestType($token);
$getExpressCheckoutDetailsRequest->Version = 84.0;
$getExpressCheckoutReq = new GetExpressCheckoutDetailsReq();
$getExpressCheckoutReq->GetExpressCheckoutDetailsRequest = $getExpressCheckoutDetailsRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
$getECResponse = $paypalService->GetExpressCheckoutDetails($getExpressCheckoutReq);
echo '<pre>';
print_r($getECResponse);
echo '</pre>';

//to use in DoExpressCheckout
$_SESSION['token'] = $token;
if(isset($_REQUEST['PayerID']))
{
	$_SESSION['payerId'] = $_REQUEST['PayerID'];
}
else 
{
		$_SESSION['payerId'] = $getECResponse->GetExpressCheckoutDetailsResponseDetails->PayerInfo->PayerID;
}
$_SESSION['amount'] =$getECResponse->GetExpressCheckoutDetailsResponseDetails->PaymentDetails->OrderTotal->value;
$_SESSION['currencyCode'] = $getECResponse->GetExpressCheckoutDetailsResponseDetails->PaymentDetails->OrderTotal->currencyID;

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