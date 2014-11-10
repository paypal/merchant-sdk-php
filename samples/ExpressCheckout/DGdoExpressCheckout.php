<?php
use PayPal\CoreComponentTypes\BasicAmountType;
use PayPal\EBLBaseComponents\DoExpressCheckoutPaymentRequestDetailsType;
use PayPal\EBLBaseComponents\PaymentDetailsItemType;
use PayPal\EBLBaseComponents\PaymentDetailsType;
use PayPal\PayPalAPI\DoExpressCheckoutPaymentReq;
use PayPal\PayPalAPI\DoExpressCheckoutPaymentRequestType;
use PayPal\PayPalAPI\GetExpressCheckoutDetailsReq;
use PayPal\PayPalAPI\GetExpressCheckoutDetailsRequestType;
use PayPal\Service\PayPalAPIInterfaceServiceService;
require_once('../PPBootStrap.php');

/*
 * Digital goods payments combine JavaScript with the Express Checkout API to streamline the checkout process for buyers of digital goods.
 * Digital goods are items such as e-books, music files, and digital images distributed in electronic format. The buyer can conveniently purchase digital goods during checkout with a minimum of clicks without leaving your website or interrupting their online activities
 *
*/
$token =urlencode( $_REQUEST['token']);

/*
 *  Unique PayPal buyer account identification number as returned in the GetExpressCheckoutDetails response
*/
$payerId=urlencode( $_REQUEST['PayerID']);

//--------------------------------------------------------------
// this section is optional if values are retrieved from your database
$token = $_REQUEST['token'];


$getExpressCheckoutDetailsRequest = new GetExpressCheckoutDetailsRequestType($token);
$getExpressCheckoutReq = new GetExpressCheckoutDetailsReq();
$getExpressCheckoutReq->GetExpressCheckoutDetailsRequest = $getExpressCheckoutDetailsRequest;

$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
try {
    /** @var \PayPal\PayPalAPI\GetExpressCheckoutDetailsResponseType $getECResponse */
    $getECResponse = $paypalService->GetExpressCheckoutDetails($getExpressCheckoutReq);
} catch (Exception $ex) {
    echo $ex->getMessage();
}

//--------------------------------------------------------------------

/*
 * The total cost of the transaction to the buyer. If shipping cost (not applicable to digital goods) and tax charges are known, include them in this value. If not, this value should be the current sub-total of the order. If the transaction includes one or more one-time purchases, this field must be equal to the sum of the purchases. Set this field to 0 if the transaction does not include a one-time purchase such as when you set up a billing agreement for a recurring payment that is not immediately charged. When the field is set to 0, purchase-specific fields are ignored.
*/
$orderTotal = new BasicAmountType();
$orderTotal->currencyID = $getECResponse->GetExpressCheckoutDetailsResponseDetails->PaymentDetails[0]->OrderTotal->currencyID;
$orderTotal->value = $getECResponse->GetExpressCheckoutDetailsResponseDetails->PaymentDetails[0]->OrderTotal->value;

//Details about each individual item included in the order.
$itemDetails = new PaymentDetailsItemType();
$itemDetails->Name = 'sample item';
$itemDetails->Amount = $orderTotal;
$itemDetails->Quantity = '1';

/*
 * Item quantity. This field is required when you pass a value for ItemCategory. For digital goods (ItemCategory=Digital), this field is required
*/
$itemDetails->ItemCategory =  'Digital';

$PaymentDetails= new PaymentDetailsType();
$PaymentDetails->PaymentDetailsItem[0] = $itemDetails;

//$PaymentDetails->ShipToAddress = $address;
$PaymentDetails->OrderTotal = $orderTotal;

/*
 * How you want to obtain payment. When implementing parallel payments, this field is required and must be set to Order. When implementing digital goods, this field is required and must be set to Sale.
*/
$PaymentDetails->PaymentAction = 'Sale';

/*
 * Sum of cost of all items in this order. For digital goods, this field is required. PayPal recommends that you pass the same value in the call to DoExpressCheckoutPayment that you passed in the call to SetExpressCheckout
*/
$PaymentDetails->ItemTotal = $orderTotal;

$DoECRequestDetails = new DoExpressCheckoutPaymentRequestDetailsType();
$DoECRequestDetails->PayerID = $payerId;
$DoECRequestDetails->Token = $token;
$DoECRequestDetails->PaymentDetails[0] = $PaymentDetails;

$DoECRequest = new DoExpressCheckoutPaymentRequestType();
$DoECRequest->DoExpressCheckoutPaymentRequestDetails = $DoECRequestDetails;


$DoECReq = new DoExpressCheckoutPaymentReq();
$DoECReq->DoExpressCheckoutPaymentRequest = $DoECRequest;

/*
 * 	 ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
$DoECResponse = $paypalService->DoExpressCheckoutPayment($DoECReq);
//var_dump($DoECResponse);
if($DoECResponse->Ack == 'Success')
{
	?>
<html>
<head>
<script>
alert("Payment Successful")
top.dg.closeFlow();
</script>
<?php 
/*
 * TODO: add your logic that handles successful payment
*/
}
else
{
	?>
<script>
alert("Payment failed")
top.dg.closeFlow();
</script>
<?php 
}
?>


<script type="text/javascript"
	src="https://www.paypalobjects.com/js/external/dg.js"></script>
</head>
<body>
</body>
</html>
