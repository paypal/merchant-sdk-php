<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>PayPal Merchant SDK - ManagePendingTransactionStatus</title>
<link rel="stylesheet" href="../Common/sdk.css"/>
</head>
<body>
	<div id="wrapper">
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png">
		<div id="header">
			<h3>ManagePendingTransactionStatus</h3>
			<div id="apidetails">
				<p>ManagePendingTransactionStatus API operation accepts or denys a
					pending transaction held by Fraud Management Filters.</p>
			</div>
		</div>
		<form method="POST" action="ManagePendingTransactionStatus.php">
			<div id="request_form">
				<div class="params">
					<div class="param_name">Transaction ID *</div>
					<div class="param_value">
						<input type="text" name="transactionID" value="" />
					</div>
				</div>

				<div class="params">
					<div class="param_name">Action *</div>
					<div class="param_value">
						<select name="action">
							<option value="Accept">Accept</option>
							<option value="Deny">Deny</option>
						</select>
					</div>
				</div>
				<div class="submit">
					<input type="submit" name="ManagePendingTransactionStatusBtn"
						value="ManagePendingTransactionStatus" /><br />
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

				<li><a href="ReverseTransaction.html.php">ReverseTransaction</a>
				</li>
				<li><a href="DoNonReferencedCredit.html.php">DoNonReferencedCredit</a>
				</li>

			</ul>
		</div>
	</div>
</body>
</html>
