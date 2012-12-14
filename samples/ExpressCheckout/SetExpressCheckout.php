<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('SetExpressCheckout');

$url = dirname('http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . $_SERVER['REQUEST_URI']);
$returnUrl = "$url/GetExpressCheckout.php";
$cancelUrl = "$url/SetExpressCheckout.php" ;

$currencyCode = $_REQUEST['currencyCode'];
$shippingTotal = new BasicAmountType($currencyCode, $_REQUEST['shippingTotal']);
$handlingTotal = new BasicAmountType($currencyCode, $_REQUEST['handlingTotal']);
$insuranceTotal = new BasicAmountType($currencyCode, $_REQUEST['insuranceTotal']);

$address = new AddressType();
$address->CityName = $_REQUEST['city'];
$address->Name = $_REQUEST['name'];
$address->Street1 = $_REQUEST['street'];
$address->StateOrProvince = $_REQUEST['state'];
$address->PostalCode = $_REQUEST['postalCode'];
$address->Country = $_REQUEST['countryCode'];
$address->Phone = $_REQUEST['phone'];

$paymentDetails = new PaymentDetailsType();
$itemTotalValue = 0;
$taxTotalValue = 0;
for($i=0; $i<count($_REQUEST['itemAmount']); $i++) {
	$itemAmount = new BasicAmountType($currencyCode, $_REQUEST['itemAmount'][$i]);	
	$itemTotalValue += $_REQUEST['itemAmount'][$i] * $_REQUEST['itemQuantity'][$i]; 
	$taxTotalValue += $_REQUEST['itemSalesTax'][$i] * $_REQUEST['itemQuantity'][$i];
	$itemDetails = new PaymentDetailsItemType();
	$itemDetails->Name = $_REQUEST['itemName'][$i];
	$itemDetails->Amount = $itemAmount;
	$itemDetails->Quantity = $_REQUEST['itemQuantity'][$i];
	$itemDetails->ItemCategory = $_REQUEST['itemCategory'][$i];
	$itemDetails->Tax = new BasicAmountType($currencyCode, $_REQUEST['itemSalesTax'][$i]);	
	
	$paymentDetails->PaymentDetailsItem[$i] = $itemDetails;	
}

$orderTotalValue = $shippingTotal->value + $handlingTotal->value +
$insuranceTotal->value +
$itemTotalValue + $taxTotalValue;

$paymentDetails->ShipToAddress = $address;
$paymentDetails->ItemTotal = new BasicAmountType($currencyCode, $itemTotalValue);
$paymentDetails->OrderTotal = new BasicAmountType($currencyCode, $orderTotalValue);
$paymentDetails->TaxTotal = new BasicAmountType($currencyCode, $taxTotalValue);
$paymentDetails->PaymentAction = $_REQUEST['paymentType'];

$paymentDetails->HandlingTotal = $handlingTotal;
$paymentDetails->InsuranceTotal = $insuranceTotal;
$paymentDetails->ShippingTotal = $shippingTotal;

if(isset($_REQUEST['notifyURL']))
{
	$paymentDetails->NotifyURL = $_REQUEST['notifyURL'];
}

$setECReqDetails = new SetExpressCheckoutRequestDetailsType();
$setECReqDetails->PaymentDetails[0] = $paymentDetails;
$setECReqDetails->CancelURL = $cancelUrl;
$setECReqDetails->ReturnURL = $returnUrl;

// Shipping details
$setECReqDetails->NoShipping = $_REQUEST['noShipping'];
$setECReqDetails->AddressOverride = $_REQUEST['addressOverride'];
$setECReqDetails->ReqConfirmShipping = $_REQUEST['reqConfirmShipping'];

// Billing agreement
$billingAgreementDetails = new BillingAgreementDetailsType($_REQUEST['billingType']);
$billingAgreementDetails->BillingAgreementDescription = $_REQUEST['billingAgreementText'];
$setECReqDetails->BillingAgreementDetails = array($billingAgreementDetails);

// Display options
$setECReqDetails->cppheaderimage = $_REQUEST['cppheaderimage'];
$setECReqDetails->cppheaderbordercolor = $_REQUEST['cppheaderbordercolor'];
$setECReqDetails->cppheaderbackcolor = $_REQUEST['cppheaderbackcolor'];
$setECReqDetails->cpppayflowcolor = $_REQUEST['cpppayflowcolor'];
$setECReqDetails->cppcartbordercolor = $_REQUEST['cppcartbordercolor'];
$setECReqDetails->cpplogoimage = $_REQUEST['cpplogoimage'];
$setECReqDetails->PageStyle = $_REQUEST['pageStyle'];
$setECReqDetails->BrandName = $_REQUEST['brandName'];

// Advanced options
$setECReqDetails->AllowNote = $_REQUEST['allowNote'];

$setECReqType = new SetExpressCheckoutRequestType();
$setECReqType->SetExpressCheckoutRequestDetails = $setECReqDetails;
$setECReq = new SetExpressCheckoutReq();
$setECReq->SetExpressCheckoutRequest = $setECReqType;

$paypalService = new PayPalAPIInterfaceServiceService();
try {
	/* wrap API method calls on the service object with a try catch */
	$setECResponse = $paypalService->SetExpressCheckout($setECReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($setECResponse)) {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$setECResponse->Ack</div> </td></tr>";
	echo "<tr><td>Token :</td><td><div id='Token'>$setECResponse->Token</div> </td></tr>";
	echo "</table>";
	echo '<pre>';
	print_r($setECResponse);
	echo '</pre>';
	if($setECResponse->Ack =='Success') {
		$token = $setECResponse->Token;
		// Redirect to paypal.com here
		$payPalURL = 'https://www.sandbox.paypal.com/webscr?cmd=_express-checkout&token=' . $token;
		echo" <a href=$payPalURL><b>* Redirect to PayPal to login </b></a><br>";
	}
}
require_once '../Response.php';