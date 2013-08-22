<?php
require_once('../PPBootStrap.php');

/*
 * The SetExpressCheckout API operation initiates an Express Checkout transaction
 * This sample code uses Merchant PHP SDK to make API call
 */
$url = dirname('http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . $_SERVER['REQUEST_URI']);
$returnUrl = "$url/../ExpressCheckout/GetExpressCheckout.php";
$cancelUrl = "$url/SetExpressCheckout.php" ;

$currencyCode = $_REQUEST['currencyCode'];

$sellerDetails = new SellerDetailsType();
$sellerDetails->PayPalAccountID = $_REQUEST['receiverEmail_0'];
// details about payment
$paymentDetails = new PaymentDetailsType();
$paymentDetails->SellerDetails = $sellerDetails;
$paymentDetails->PaymentRequestID = 'CART286-PAYMENT0';
// total order amount
$paymentDetails->OrderTotal = new BasicAmountType($currencyCode, $_REQUEST['orderTotal']);

/*
 * How you want to obtain payment. When implementing parallel payments, this field is required and must be set to Order. When implementing digital goods, this field is required and must be set to Sale. If the transaction does not include a one-time purchase, this field is ignored. It is one of the following values:

    Sale – This is a final sale for which you are requesting payment (default).

    Authorization – This payment is a basic authorization subject to settlement with PayPal Authorization and Capture.

    Order – This payment is an order authorization subject to settlement with PayPal Authorization and Capture.

 */
$paymentDetails->PaymentAction = $_REQUEST['paymentType'];

$sellerDetails1 = new SellerDetailsType();
$sellerDetails1->PayPalAccountID = $_REQUEST['receiverEmail_1'];
$paymentDetails1 = new PaymentDetailsType();
$paymentDetails1->SellerDetails = $sellerDetails1;
$paymentDetails->PaymentRequestID = 'CART286-PAYMENT1';
// total order amount
$paymentDetails1->OrderTotal = new BasicAmountType($currencyCode, $_REQUEST['orderTotal']);

/*
 * How you want to obtain payment. When implementing parallel payments, this field is required and must be set to Order. When implementing digital goods, this field is required and must be set to Sale. If the transaction does not include a one-time purchase, this field is ignored. It is one of the following values:

Sale – This is a final sale for which you are requesting payment (default).

Authorization – This payment is a basic authorization subject to settlement with PayPal Authorization and Capture.

Order – This payment is an order authorization subject to settlement with PayPal Authorization and Capture.

*/
$paymentDetails1->PaymentAction = $_REQUEST['paymentType'];

$setECReqDetails = new SetExpressCheckoutRequestDetailsType();
$setECReqDetails->PaymentDetails[0] = $paymentDetails;
$setECReqDetails->PaymentDetails[1] = $paymentDetails1;
/*
 * (Required) URL to which the buyer is returned if the buyer does not approve the use of PayPal to pay you. For digital goods, you must add JavaScript to this page to close the in-context experience.
 */
$setECReqDetails->CancelURL = $cancelUrl;
/*
 * (Required) URL to which the buyer's browser is returned after choosing to pay with PayPal. For digital goods, you must add JavaScript to this page to close the in-context experience.
 */
$setECReqDetails->ReturnURL = $returnUrl;

$setECReqType = new SetExpressCheckoutRequestType();
$setECReqType->SetExpressCheckoutRequestDetails = $setECReqDetails;
$setECReq = new SetExpressCheckoutReq();
$setECReq->SetExpressCheckoutRequest = $setECReqType;

/*
 * 	 ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
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
