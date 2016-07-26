<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>PayPal Merchant SDK - MassPay</title>
	<link rel="stylesheet" href="../Common/sdk.css"/>
	<script type="text/javascript" src="../Common/sdk.js"></script>
</head>
<body>
	<div id="wrapper">
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png">
		<div id="header">
			<h3>MassPay</h3>
			<div id="apidetails">MassPay API operation makes a payment to one or
				more PayPal account holders.</div>
		</div>
		<form method="POST" action="MassPay.php">
			<div id="request_form">
				<div class="params">
					<div class="param_name">Receiver Info Code Type</div>
					<div class="param_value">
						<select name=receiverInfoCode>
							<option value=EmailAddress>Email</option>
							<option value=UserID>UserID</option>
							<option value=PhoneNumber>Phone</option>
						</select>
					</div>
				</div>
				<table class="params">
					<tr>
						<th class="param_name">Mail</th>
						<th class="param_name">UserID</th>
						<th class="param_name">Phone Number</th>
						<th class="param_name">Amount</th>
						<th class="param_name">Currency Code</th>
					</tr>
					<tr>
						<td class="param_value"><input type="text" name="mail[]"
							value="enduser_biz@gmail.com" size="25" maxlength="260" /></td>
						<td class="param_value"><input type="text" name="id[]" value=""
							size="25" maxlength="260" /></td>
						<td class="param_value"><input type="text" name="phone[]" value=""
							size="25" maxlength="260" /></td>
						<td class="param_value"><input type="text" name="amount[]"
							value="3.00" size="25" maxlength="260" /></td>
						<td class="param_value"><input type="text" name="currencyCode[]"
							value="USD" size="25" maxlength="260" /></td>
					</tr>
					<tr>
						<td class="param_value"><input type="text" name="mail[]"
							value="sdk-three@paypal.com" size="25" maxlength="260" /></td>
						<td class="param_value"><input type="text" name="id[]" value=""
							size="25" maxlength="260" /></td>
						<td class="param_value"><input type="text" name="phone[]" value=""
							size="25" maxlength="260" /></td>
						<td class="param_value"><input type="text" name="amount[]"
							value="3.00" size="25" maxlength="260" /></td>
						<td class="param_value"><input type="text" name="currencyCode[]"
							value="USD" size="25" maxlength="260" /></td>
					</tr>
					<tr>
						<td class="param_value"><input type="text" name="mail[]"
							value="jb-us-seller@paypal.com" size="25" maxlength="260" /></td>
						<td class="param_value"><input type="text" name="id[]" value=""
							size="25" maxlength="260" /></td>
						<td class="param_value"><input type="text" name="phone[]" value=""
							size="25" maxlength="260" /></td>
						<td class="param_value"><input type="text" name="amount[]"
							value="3.00" size="25" maxlength="260" /></td>
						<td class="param_value"><input type="text" name="currencyCode[]"
							value="USD" size="25" maxlength="260" /></td>
					</tr>
				</table>
				<?php
					include('../Permissions/Permission.html.php');
				?>
					
				<input type="submit" name="MassPayBtn" value="MassPay" /><br />
			</div>
			<a href="../index.php">Home</a>
		</form>
	</div>
</body>
</html>
