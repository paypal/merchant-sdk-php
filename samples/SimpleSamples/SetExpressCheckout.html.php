<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>PayPal Merchant SDK - SetExpressCheckout</title>
<link rel="stylesheet" type="text/css" href="../Common/sdk.css" />
<script type=text/javascript>
function display(value) {
	switch (value) {
	case 'Ground':
		document.getElementById('shippingAmount').value = '3.00';
		break;
	case 'UPS Air':
		document.getElementById('shippingAmount').value = '17.00';
		break;
	}
}
</script>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<h3>SetExpressCheckout</h3>
		</div>
		<br>
		<div id="request_form">
			<form method="POST" action="SetExpressCheckout.php">
				<div class="params">
					<div class="param_name">Buyer email (Email address of the buyer as entered during checkout.
					 PayPal uses this value to pre-fill the PayPal membership sign-up portion of the PayPal login page)</div>
					<div class="param_value">
						<input type="text" name="buyerEmail"
							value="platfo_1255077030_biz@gmail.com" size="50" maxlength="260" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Payment Type</div>
					<div class="param_value">
						<select name="paymentType">
							<option value="Sale">Sale</option>
							<option value="Authorization">Authorization</option>
							<option value="Order">Order</option>
						</select>
					</div>
				</div>
				<div class="section_header">Payment Details</div>
				<div class="params"></div>

				<div class="params">
					<div class="param_name">CurrencyCode</div>
					<div class="param_value">
						<input type="text" name="currencyCode" value="USD" size="50"
							maxlength="260" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Order Total</div>
					<div class="param_value">
						<input type="text" name="orderTotal" id="orderTotal"
							value="1.00" />
					</div>
				</div>
								
	
				<div class="submit">
					<input type="submit" name="SetExpressCheckoutBtn"
						value="SetExpressCheckout" /> <br />
				</div>
				<a href="../index.php">Home</a>
			</form>
		</div>			
	</div>	
</body>
</html>
