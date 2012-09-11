<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
session_start();

$logger = new PPLoggingManager('GetExpressCheckout');

$token = $_REQUEST['token'];

$getExpressCheckoutDetailsRequest = new GetExpressCheckoutDetailsRequestType($token);

$getExpressCheckoutReq = new GetExpressCheckoutDetailsReq();
$getExpressCheckoutReq->GetExpressCheckoutDetailsRequest = $getExpressCheckoutDetailsRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
$getECResponse = $paypalService->GetExpressCheckoutDetails($getExpressCheckoutReq);
echo "<table>";
echo "<tr><td>Ack :</td><td><div id='Ack'>".$getECResponse->Ack."</div> </td></tr>";
echo "<tr><td>Token :</td><td><div id='Token'>".$getECResponse->GetExpressCheckoutDetailsResponseDetails->Token."</div></td></tr>";
echo "<tr><td>PayerID :</td><td><div id='PayerID'>".$getECResponse->GetExpressCheckoutDetailsResponseDetails->PayerInfo->PayerID."</div></td></tr>";
echo "<tr><td>PayerStatus :</td><td><div id='PayerStatus'>".$getECResponse->GetExpressCheckoutDetailsResponseDetails->PayerInfo->PayerStatus."</div></td></tr>";
echo "</table>";
echo '<pre>';
print_r($getECResponse);
echo '</pre>';

if($getECResponse->Ack =='Success')
{
	?>
	<html>
	<body>

	</body>
	</html>
	<?php 
	require_once '../Response.php';
}