<?php
use PayPal\CoreComponentTypes\BasicAmountType;
use PayPal\EBLBaseComponents\PaymentDetailsItemType;
use PayPal\EBLBaseComponents\PaymentDetailsType;
use PayPal\EBLBaseComponents\SetExpressCheckoutRequestDetailsType;
use PayPal\PayPalAPI\SetExpressCheckoutReq;
use PayPal\PayPalAPI\SetExpressCheckoutRequestType;
use PayPal\Service\PayPalAPIInterfaceServiceService;
require_once('../PPBootStrap.php');
session_start();
/*
 * Digital goods payments combine JavaScript with the Express Checkout API to streamline the checkout process for buyers of digital goods.
* Digital goods are items such as e-books, music files, and digital images distributed in electronic format. The buyer can conveniently purchase digital goods during checkout with a minimum of clicks without leaving your website or interrupting their online activities
*
*/
$serverName = $_SERVER['SERVER_NAME'];
$serverPort = $_SERVER['SERVER_PORT'];
$url = dirname('http://'.$serverName.':'.$serverPort.$_SERVER['REQUEST_URI']);

/*
 * URL to which the buyer's browser is returned after choosing to pay with PayPal. For digital goods, you must add JavaScript to this page to close the in-context experience.
 */
$returnUrl = $url."/DGdoExpressCheckout.php";
/*
 * URL to which the buyer is returned if the buyer does not approve the use of PayPal to pay you. For digital goods, you must add JavaScript to this page to close the in-context experience
 */
$cancelUrl = $url. "/DGsetEC.html.php" ;

/*
 * Total cost of the transaction to the buyer. If shipping cost and tax charges are known, include them in this value. If not, this value should be the current sub-total of the order. If the transaction includes one or more one-time purchases, this field must be equal to the sum of the purchases. Set this field to 0 if the transaction does not include a one-time purchase such as when you set up a billing agreement for a recurring payment that is not immediately charged. When the field is set to 0, purchase-specific fields are ignored
 */
$orderTotal = new BasicAmountType();
$orderTotal->currencyID = $_REQUEST['currencyId'];
$orderTotal->value = $_REQUEST['amount'];

$taxTotal = new BasicAmountType();
$taxTotal->currencyID = 'USD';
$taxTotal->value = '0.0';

$itemDetails = new PaymentDetailsItemType();
$itemDetails->Name = 'sample item';


$itemDetails->Amount = $orderTotal;
/*
 * Item quantity. This field is required when you pass a value for ItemCategory. For digital goods (ItemCategory=Digital), this field is required. 
 */
$itemDetails->Quantity = '1';
/*
 * Indicates whether an item is digital or physical. For digital goods, this field is required and must be set to Digital
 */
$itemDetails->ItemCategory =  'Digital';

$PaymentDetails= new PaymentDetailsType();
$PaymentDetails->PaymentDetailsItem[0] = $itemDetails;

//$PaymentDetails->ShipToAddress = $address;
$PaymentDetails->OrderTotal = $orderTotal;
/*
 * How you want to obtain payment. When implementing parallel payments, this field is required and must be set to Order. When implementing digital goods, this field is required and must be set to Sale
 */
$PaymentDetails->PaymentAction = 'Sale';
/*
 * Sum of cost of all items in this order. For digital goods, this field is required. 
 */
$PaymentDetails->ItemTotal = $orderTotal;
$PaymentDetails->TaxTotal = $taxTotal;

$setECReqDetails = new SetExpressCheckoutRequestDetailsType();
$setECReqDetails->PaymentDetails[0] = $PaymentDetails;
$setECReqDetails->CancelURL = $cancelUrl;
$setECReqDetails->ReturnURL = $returnUrl;
/*
 * Indicates whether or not you require the buyer's shipping address on file with PayPal be a confirmed address. For digital goods, this field is required, and you must set it to 0. It is one of the following values:

    0 � You do not require the buyer's shipping address be a confirmed address.

    1 � You require the buyer's shipping address be a confirmed address.

 */
$setECReqDetails->ReqConfirmShipping = 0;
/*
 * Determines where or not PayPal displays shipping address fields on the PayPal pages. For digital goods, this field is required, and you must set it to 1. It is one of the following values:

    0 � PayPal displays the shipping address on the PayPal pages.

    1 � PayPal does not display shipping address fields whatsoever.

    2 � If you do not pass the shipping address, PayPal obtains it from the buyer's account profile.

 */
$setECReqDetails->NoShipping = 1;

$setECReqType = new SetExpressCheckoutRequestType();
$setECReqType->SetExpressCheckoutRequestDetails = $setECReqDetails;

$setECReq = new SetExpressCheckoutReq();
$setECReq->SetExpressCheckoutRequest = $setECReqType;

// storing in session to use in DoExpressCheckout
$_SESSION['amount'] = $_REQUEST['amount'];
$_SESSION['currencyID'] = $_REQUEST['currencyId'];

/*
 * 	 ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
$setECResponse = $paypalService->SetExpressCheckout($setECReq);
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
