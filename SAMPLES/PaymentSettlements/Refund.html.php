<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>PayPal Merchant SDK - Refund</title>
<link rel="stylesheet" href="../Common/sdk.css"/>
</head>
<body>
	<div id="wrapper">
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png">
		<div id="header">
			<h3>Refund</h3>
			<div id="apidetails">RefundTransaction API operation issues a refund
				to the PayPal account holder associated with a transaction.</div>
		</div>
		<form method="POST" action="Refund.php">
			<div id="request_form">
				<div class="params">
					<div class="param_name">
						TransactionID * (Get Transaction ID via<a
							href="../DirectPayment/DoDirectPayment.html.php">Direct Payment</a>
						or <a href="../ExpressCheckout/SetExpressCheckout.html.php">ExpressCheckout</a>)
					</div>
					<div class="param_value">
						<input type="text" name="transID" value="" size="50"
							maxlength="260" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Refund Type</div>
					<div class="param_value">
						<select name="refundType">
							<option value=""></option>
							<option value="Other">Other</option>
							<option value="Full" selected="selected">Full (Default)</option>
							<option value="Partial">Partial</option>
							<option value="ExternalDispute">ExternalDispute</option>
						</select>
					</div>
				</div>
				<div class="params">
					<div class="param_name">Refund Source</div>
					<div class="param_value">
						<select name="refundSource">
							<option value=""></option>
							<option value="any">Use any available funding source</option>
							<option value="default">Use the preferred funding source, as
								configured in the profile</option>
							<option value="instant">Use the balance as the funding source</option>
							<option value="echeck">Use the eCheck funding source</option>
						</select>
					</div>
				</div>
				<div class="params">
					<div class="param_name">Amount to be refunded (If RefundType is
						full, do not set the amount)</div>
					<div class="param_value">
						<input type="text" name="amt" value=""/>
					</div>
				</div>
				<div class="params">
					<div class="param_name">Currency Code</div>
					<div class="param_value">
						<input type="text" name="currencyID" value=""/>
					</div>
				</div>
				<div class="param_name">Memo</div>
	            <div class="param_value">
	                <input type="text" name="memo" id="memo" size="50" value="" />
	            </div>
	            <div class="param_name">Maximum time until which refund must be retried</div>
	            <div class="param_value">	                
	                <input type="text" name="retryUntil" value="" />
	            </div>

				<div class="submit">
					<input type="submit" name="RefundBtn" value="Refund" /><br />
				</div>
				<a href="../index.php">Home</a>
			</div>
		</form>
	</div>
</body>
</html>
