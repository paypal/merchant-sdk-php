<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
session_start();
?>
<html>
<head>
<title>PayPal PHP SDK - SetExpressCheckout API</title>
<script type="text/javascript"
	src="https://www.paypalobjects.com/js/external/dg.js"></script>
<script>
top.dg.closeFlow();
</script>
<?php

$logger = new PPLoggingManager('SetExpressCheckout');
if($_SERVER['REQUEST_METHOD'] == 'POST') {

	$serverName = $_SERVER['SERVER_NAME'];
	$serverPort = $_SERVER['SERVER_PORT'];
	$url=dirname('http://'.$serverName.':'.$serverPort.$_SERVER['REQUEST_URI']);
	$returnUrl = $url."/DGdoExpressCheckout.php";
	$cancelUrl = $url. "/DGsetExpressCheckout.php" ;

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
	$setECReqDetails->PaymentDetails = $PaymentDetails;
	$setECReqDetails->CancelURL = $cancelUrl;
	$setECReqDetails->ReturnURL = $returnUrl;
	$setECReqDetails->ReqConfirmShipping = 0;
	$setECReqDetails->NoShipping = 1;

	$setECReqType = new SetExpressCheckoutRequestType();
	$setECReqType->SetExpressCheckoutRequestDetails = $setECReqDetails;
	$setECReqType->Version = '78.0';
	$setECReq = new SetExpressCheckoutReq();
	$setECReq->SetExpressCheckoutRequest = $setECReqType;

	// storing in session to use in DoExpressCheckout
	$_SESSION['amount'] = $_REQUEST['amount'];
	$_SESSION['currencyID'] = $_REQUEST['currencyId'];
	$PayPal_service = new PayPalAPIInterfaceServiceService();
	$setECResponse = $PayPal_service->SetExpressCheckout($setECReq);
	var_dump($setECResponse);
	if($setECResponse->Ack == 'Success')
	{
		?>

		<?php
		$token = $setECResponse->Token;
		?>
<p>At this point you would have had the user add everything to the cart,
then you would do the SetEC Call and display this button</p>
		<?php echo "<a href=https://www.sandbox.paypal.com/incontext?token=$token id='submitBtn'><img src='https://www.paypal.com/en_US/i/btn/btn_dg_pay_w_paypal.gif' border='0' /></a>"; ?>
<script> var dg = new PAYPAL.apps.DGFlow({ // the HTML ID of the form submit button which calls setEC 
	trigger: "submitBtn" }); </script>
</head>

		<?php

	}
	else {
		echo "error in SetEC API call";
	}
} else { ?>

<body alink=#0000FF vlink=#0000FF>
<br>
<center><font size=2 color=black face=Verdana><b>SetExpressCheckout -
digital goods</b></font> <br>
<br>
<form method="POST" action="DGsetExpressCheckout.php"
	name="DoDirectPaymentForm">

<table width=600>

	<tr>
		<td align=right>Currency:</td>
		<td align=left><input type=text size=30 maxlength=32 name=currencyId
			value=USD></td>
	</tr>
	<tr>
		<td align=right>Amount:</td>
		<td align=left><input type=text size=30 maxlength=32 name=amount
			value=1.00></td>
	</tr>
	<tr>
		<td />
		<td align=left><b></b></td>
	</tr>
	<tr>
		<td />
		<td><input type=Submit value=Submit></td>
	</tr>
</table>
</form>
</center>
<a id="CallsLink" href="index.html">Home</a>
</body>
</html>
<?php
}
?>