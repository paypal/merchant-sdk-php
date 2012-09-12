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


$returnUrl = $url."/GetExpressCheckout.php";
$cancelUrl = $url. "/SetExpressCheckout.php" ;


/*$taxTotal = new BasicAmountType();
$taxTotal->currencyID = $_REQUEST['currencyCode'];
$taxTotal->value = $_REQUEST['taxTotal'];*/

$shippingTotal = new BasicAmountType();
$shippingTotal->currencyID = $_REQUEST['currencyCode'];
$shippingTotal->value = $_REQUEST['shippingAmount'];

$itemAmount = new BasicAmountType();
$itemAmount->currencyID = $_REQUEST['currencyCode'];
$itemAmount->value = $_REQUEST['itemAmount'];

//total amount of the order
$orderTotal = new BasicAmountType();
$orderTotal->currencyID = $_REQUEST['currencyCode'];
//$orderTotal->value = $taxTotal->value + $shippingTotal->value + $itemAmount->value;
$orderTotal->value =  $shippingTotal->value + $itemAmount->value;

$itemDetails = new PaymentDetailsItemType();
$itemDetails->Name = $_REQUEST['itemName'];
$itemDetails->Amount = $itemAmount;
$itemDetails->Quantity = $_REQUEST['itemQuantity'];
$itemDetails->ItemCategory = $_REQUEST['itemCategory'];

$address =new AddressType();
$address->city = $_REQUEST['itemQuantity'];
$address->Name = $_REQUEST['name'];
$address->line1 = $_REQUEST['street'];
$address->state = $_REQUEST['state'];
$address->PostalCode = $_REQUEST['postalCode'];
$address->countryCode = $_REQUEST['countryCode'];

$PaymentDetails= new PaymentDetailsType();
$PaymentDetails->PaymentDetailsItem[0] = $itemDetails;
$PaymentDetails->ShipToAddress = $address;

$PaymentDetails->OrderTotal = $orderTotal;
$PaymentDetails->PaymentAction = $_REQUEST['paymentType'];
$PaymentDetails->ItemTotal = $itemAmount;
//$PaymentDetails->TaxTotal = $taxTotal;
$PaymentDetails->ShippingTotal = $shippingTotal;

$billingAgreementDetails = new BillingAgreementDetailsType($_REQUEST['billingType']);
$billingAgreementDetails->BillingAgreementDescription = $_REQUEST['billingAgreementText'];
$billAgreementArray = array($billingAgreementDetails);
$setECReqDetails = new SetExpressCheckoutRequestDetailsType();
$setECReqDetails->PaymentDetails[0] = $PaymentDetails;
$setECReqDetails->CancelURL = $cancelUrl;
$setECReqDetails->ReturnURL = $returnUrl;
$setECReqDetails->BillingAgreementDetails = $billAgreementArray;
//$setECReqDetails->NoShipping = $_REQUEST['noShipping'];;


$setECReqType = new SetExpressCheckoutRequestType();
$setECReqType->SetExpressCheckoutRequestDetails = $setECReqDetails;
$setECReq = new SetExpressCheckoutReq();
$setECReq->SetExpressCheckoutRequest = $setECReqType;

// storing in session to use in DoExpressCheckout


$paypalService = new PayPalAPIInterfaceServiceService();
$setECResponse = $paypalService->SetExpressCheckout($setECReq);
echo "<table>";
echo "<tr><td>Ack :</td><td><div id='Ack'>$setECResponse->Ack</div> </td></tr>";
echo "<tr><td>Token :</td><td><div id='Token'>$setECResponse->Token</div> </td></tr>";
echo "</table>";
echo '<pre>';
print_r($setECResponse);
echo '</pre>';


if($setECResponse->Ack =='Success')
{
		$token = $setECResponse->Token;
	// Redirect to paypal.com here
	$payPalURL = 'https://www.sandbox.paypal.com/webscr?cmd=_express-checkout&token=' . $token;

	echo" <a href=$payPalURL><b>* Redirect to PayPal to login </b></a><br>";
}

require_once '../Response.php';