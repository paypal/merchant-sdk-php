<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('DoExpressCheckout');

$token =urlencode( $_REQUEST['token']);
$payerId=urlencode( $_REQUEST['PayerID']);

//--------------------------------------------------------------
// this section is optional if values are retrieved from your database
$token = $_REQUEST['token'];

$getExpressCheckoutDetailsRequest = new GetExpressCheckoutDetailsRequestType($token);
$getExpressCheckoutReq = new GetExpressCheckoutDetailsReq();
$getExpressCheckoutReq->GetExpressCheckoutDetailsRequest = $getExpressCheckoutDetailsRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
$getECResponse = $paypalService->GetExpressCheckoutDetails($getExpressCheckoutReq);

//--------------------------------------------------------------------

$orderTotal = new BasicAmountType();
$orderTotal->currencyID = $getECResponse->GetExpressCheckoutDetailsResponseDetails->PaymentDetails[0]->OrderTotal->currencyID;
$orderTotal->value = $getECResponse->GetExpressCheckoutDetailsResponseDetails->PaymentDetails[0]->OrderTotal->value;

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

$DoECRequestDetails = new DoExpressCheckoutPaymentRequestDetailsType();
$DoECRequestDetails->PayerID = $payerId;
$DoECRequestDetails->Token = $token;
$DoECRequestDetails->PaymentDetails[0] = $PaymentDetails;

$DoECRequest = new DoExpressCheckoutPaymentRequestType();
$DoECRequest->DoExpressCheckoutPaymentRequestDetails = $DoECRequestDetails;


$DoECReq = new DoExpressCheckoutPaymentReq();
$DoECReq->DoExpressCheckoutPaymentRequest = $DoECRequest;
$paypalService = new PayPalAPIInterfaceServiceService();
$DoECResponse = $paypalService->DoExpressCheckoutPayment($DoECReq);
//var_dump($DoECResponse);
if($DoECResponse->Ack == 'Success')
{
	?>
<html>
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
