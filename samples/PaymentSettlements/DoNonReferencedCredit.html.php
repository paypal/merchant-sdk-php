<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>PayPal Merchant SDK - DoNonReferencedCredit</title>
<link rel="stylesheet" href="../Common/sdk.css"/>
</head>
<body>
	<div id="wrapper">
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png">
		<div id="header">
			<h3>DoNonReferencedCredit</h3>
			<div id="apidetails">
				<p>Non-referenced credits allow the merchant to issue credits to CC
					of buyers even if there is no prior record of a transaction with
					the buyers. This feature was introduced primarily to help merchants
					who recently migrated from other acquirers and need to refund
					transactions processed through other acquirers</p>
			</div>
		</div>
		<form method="POST" action="DoNonReferencedCredit.php">
			<div id="request_form">
				<div id="section_header">Credit Card Details</div>
				<table class="params">
					<tr>
						<th class="param_name">Credit Card number</th>
						<th class="param_name">Expiry date</th>
						<th class="param_name">Credit Card type</th>
						<th class="param_name">CVV</th>
					</tr>
					<tr>
						<td><div class="param_value">
								<input type="text" name="creditCard" id="creditCardNumber"
									value="" />
							</div>
						</td>
						<td><div class="param_value">
								<select name="expMonth">
									<option value="1">Jan</option>
									<option value="2">Feb</option>
									<option value="3">Mar</option>
									<option value="4">Apr</option>
									<option value="5">May</option>
									<option value="6">Jun</option>
									<option value="7">Jul</option>
									<option value="8">Aug</option>
									<option value="9">Sep</option>
									<option value="10">Oct</option>
									<option value="11">Nov</option>
									<option value="12">Dec</option>
								</select> <select name="expYear">
									<option value="2013">2013</option>
									<option value="2014">2014</option>
									<option value="2015">2015</option>
									<option value="2016">2016</option>
									<option value="2017">2017</option>
								</select>
							</div>
						</td>
						<td><div class="param_value">
								<select name="creditCardType">
									<option value="Visa">Visa</option>
									<option value="MasterCard">MasterCard</option>
									<option value="Discover">Discover</option>
									<option value="Amex">Amex</option>
								</select>
							</div>
						</td>
						<td><div class="param_value">
								<input type="text" name="cvv" id="cvv" />
							</div>
						</td>
					</tr>
				</table>
				<div class="params">
					<div class="param_name">Comment</div>
					<div class="param_value">
						<input type=text size=30 maxlength=32 name="comment"
							value="NonReferencedCredit">
					</div>
				</div>
				<table class="params">
					<tr>
						<th class="param_name">Item Cost*</th>
						<th class="param_name">Shipping cost</th>
						<th class="param_name">Tax Amount</th>
						<th class="param_name">Currency Code*</th>
					</tr>
					<tr>
						<td class="param_value"><input type="text" name="itemAmount"
							value="0.50" /></td>
						<td class="param_value"><input type="text" name="shippingAmount"
							value="0.50" /></td>
						<td class="param_value"><input type="text" name="taxAmount"
							value="0.0" /></td>
						<td class="param_value"><input type="text" name="currencyID"
							value="USD" /></td>
					</tr>
				</table>
				<div class="submit">
					<input type="submit" name="DoNonReferencedCreditBtn"
						value="DoNonReferencedCredit" /><br />
				</div>
				<a href="../index.php">Home</a>
			</div>
		</form>
		<div id="relatedcalls">
			See also
			<ul>
				<li><a href="DoCapture.html.php">DoCapture</a>
				</li>

				<li><a href="Refund.html.php">Refund</a>
				</li>

				<li><a href="DoAuthorization.html.php">DoAuthorization</a></li>

				<li><a href="ReverseTransaction.html.php">ReverseTransaction</a>
				</li>

				<li><a href="ManagePendingTransactionStatus.html.php">ManagePendingTransactionStatus</a>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>
