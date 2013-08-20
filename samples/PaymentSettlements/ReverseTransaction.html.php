<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>PayPal Merchant SDK - ReverseTransaction</title>
<link rel="stylesheet" href="../Common/sdk.css"/>
</head>
<body>
	<div id="wrapper">
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png">
		<div id="header">
			<h3>ReverseTransaction</h3>
			<div id="apidetails">ReverseTransaction API operation reverses a
				transaction.</div>
		</div>
		<form method="POST" action="ReverseTransaction.php">
			<div id="request_form">
				<div class="params">
					<div class="param_name">
						Transaction ID *(Get Transaction ID via <a
							href="../DirectPayment/DoDirectPayment.html.php">Direct Payment</a>
						or <a href="../ExpressCheckout/SetExpressCheckout.html.php">ExpressCheckout</a>)
					</div>
					<div class="param_value">
						<input type="text" name="transID" value="" size="50"
							maxlength="260" />
					</div>
				</div>
				<div class="submit">
					<input type="submit" name="ReverseTransactionBtn"
						value="ReverseTransaction" /><br />
				</div>
				<a href="../index.php">Home</a>
			</div>
		</form>

		<div id="relatedcalls">
			See also
			<ul>
				<li><a href="DoCapture.html.php">DoCapture</a>
				</li>
				<li><a href="DoVoid.html.php">DoVoid</a>
				</li>
				<li><a href="Refund.html.php">Refund</a>
				</li>
				<li><a href="DoReauthorization.html.php">DoReauthorization</a>
				</li>
				<li><a href="DoAuthorization.html.php">DoAuthorization</a></li>

				<li><a href="DoNonReferencedCredit.html.php">DoNonReferencedCredit</a>
				</li>
				<li><a href="ManagePendingTransactionStatus.html.php">ManagePendingTransactionStatus</a>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>
