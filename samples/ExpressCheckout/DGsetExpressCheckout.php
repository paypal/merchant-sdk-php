<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
session_start();

$logger = new PPLoggingManager('SetExpressCheckout');

$serverName = $_SERVER['SERVER_NAME'];
$serverPort = $_SERVER['SERVER_PORT'];
$url=dirname('http://'.$serverName.':'.$serverPort.$_SERVER['REQUEST_URI']);
$returnUrl = $url."/DGdoExpressCheckout.php";
$cancelUrl = $url. "/DGsetEC.html.php" ;

$orderTotal = new BasicAmountType();
$orderTotal->currencyID = $_REQUEST['currencyId'];
$orderTotal->value = $_REQUEST['amount'];

$taxTotal = new BasicAmountType();
$taxTotal->currencyID = 'USD';
$taxTotal->value = '0.0';

$itemDetails = new PaymentDetailsItemType();
$itemDetails->Name = 'sample item';


$itemDetails->Amount = $orderTotal;
$itemDetails->Quantity = '1';
$itemDetails->ItemCategory =  'Digital';

$PaymentDetails= new PaymentDetailsType();
$PaymentDetails->PaymentDetailsItem[0] = $itemDetails;

//$PaymentDetails->ShipToAddress = $address;
$PaymentDetails->OrderTotal = $orderTotal;
$PaymentDetails->PaymentAction = 'Sale';
$PaymentDetails->ItemTotal = $orderTotal;
$PaymentDetails->TaxTotal = $taxTotal;

$setECReqDetails = new SetExpressCheckoutRequestDetailsType();
$setECReqDetails->PaymentDetails[0] = $PaymentDetails;
$setECReqDetails->CancelURL = $cancelUrl;
$setECReqDetails->ReturnURL = $returnUrl;
$setECReqDetails->ReqConfirmShipping = 0;
$setECReqDetails->NoShipping = 1;

$setECReqType = new SetExpressCheckoutRequestType();
$setECReqType->SetExpressCheckoutRequestDetails = $setECReqDetails;

$setECReq = new SetExpressCheckoutReq();
$setECReq->SetExpressCheckoutRequest = $setECReqType;

// storing in session to use in DoExpressCheckout
$_SESSION['amount'] = $_REQUEST['amount'];
$_SESSION['currencyID'] = $_REQUEST['currencyId'];
$PayPal_service = new PayPalAPIInterfaceServiceService();
$setECResponse = $PayPal_service->SetExpressCheckout($setECReq);
// echo '<pre>';
//print_r($setECResponse);
// echo '</pre>';
if($setECResponse->Ack == 'Success')
{

	$token = $setECResponse->Token;
	/*
		$payPalURL = 'https://www.sandbox.paypal.com/incontext?token=' . $token;
	header("Location: ".$payPalURL);*/
	echo "<br><br><br><br><br><br><br><br><a href=https://www.sandbox.paypal.com/incontext?token=$token />Click here to continue to https://www.sandbox.paypal.com/incontext?token=$token</a>";

}
else {
	var_dump($setECResponse);
	echo "error in SetEC API call";
}
?>
