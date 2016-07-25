<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>PayPal Merchant SDK - GetTransactionDetails</title>
<link rel="stylesheet" href="../Common/sdk.css"/>
</head>
<body>
	<div id="wrapper">
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png">
		<div id="header">
			<h3>GetTransactionDetails</h3>
			<div id="apidetails">GetTransactionDetails API operation obtains
				information about a specific transaction.</div>
		</div>
		<form method="POST" action="GetTransactionDetails.php">
			<div id="request_form">
				<div class="params">
					<div class="param_name">
						Transaction ID * (Get Transaction ID via <a
							href="../DirectPayment/DoDirectPayment.html.php">Direct Payment</a>
						or <a href="../ExpressCheckout/SetExpressCheckout.html.php">ExpressCheckout</a>)
					</div>
					<div class="param_value">
						<input type="text" name="transID" value="" size="50"
							maxlength="260" />
					</div>
				</div>
				<div class="submit">
					<input type="submit" name="GetTransactionDetailsBtn"
						value="GetTransactionDetails" /><br />
				</div>
				<a href="../index.php">Home</a>
			</div>
		</form>


	</div>
</body>
</html>
