<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>PayPal Merchant SDK - DoExpressCheckout</title>
<link rel="stylesheet" type="text/css" href="../Common/sdk.css" />
</head>
<body>
	<div id="wrapper">
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png">
		<div id="header">
			<h3>DoExpressCheckout</h3>
			<div id="apidetails">Used to make checkout payment</div>
		</div>
		<form method="POST" action="DoExpressCheckout.php">
			<div id="request_form">
				<div class="params">
					<div class="param_name">
						Token(Get Token via <a href="SetExpressCheckout.html.php">SetExpressCheckout</a>)
					</div>
					<div class="param_value">
						<input type="text" name="token" value="EC-8UT96070TG172711X"
							size="50" maxlength="260" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Payer ID</div>
					<div class="param_value">
						<input type="text" name="payerID" value="TWLK53YN7GDM6" size="50"
							maxlength="260" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">PaymentType</div>
					<div class="param_value">
						<select name="paymentAction">
							<option value="Sale">Sale</option>
							<option value="Authorization">Authorization</option>
							<option value="Order">Order</option>
						</select>
					</div>
				</div>
				<div class="params">
					<div class="param_name">Amount</div>
					<div class="param_value">
						<input type="text" name="amt" value="2.00" size="50"
							maxlength="260" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">CurrencyCode</div>
					<div class="param_value">
						<input type="text" name="currencyCode" value="USD" size="50"
							maxlength="260" />
					</div>
				</div>
				
				<div class="params">
					<div class="param_name">IPN listener URL</div>
					<div class="param_value">
						<input type="text" name="notifyURL" value="" size="50"
							maxlength="260" />
					</div>
				</div>

				<div class="submit">
					<input type="submit" name="DoExpressCheckoutBtn"
						value="DoExpressCheckout" /> <br />
				</div>
				<a href="../index.php">Home</a>
			</div>
		</form>
	</div>
	<div id="relatedcalls"></div>
</body>
</html>
