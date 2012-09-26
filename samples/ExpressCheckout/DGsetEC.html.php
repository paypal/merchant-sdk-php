<html>
<head>
<title>PayPal Merchant SDK - SetExpressCheckout for Digital Goods</title>

</head>
<body alink=#0000FF vlink=#0000FF>
	<script>

top.dg.closeFlow();
</script>
	<br>
	<div style="align: auto;">
		<font size=2 color=black face=Verdana><b>SetExpressCheckout - digital
				goods</b> </font> <br> <br>
		<form method="POST" action="DGsetExpressCheckout.php">

			<table style="align: auto;">
				<tr>
					<td align=right></td>
					<td align=left>Digital Download</td>
				</tr>

				<tr>
					<td align=right>Currency:</td>
					<td align=left><input type=text size=30 maxlength=32
						name=currencyId value=USD></td>
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
					<td><input type="image"
						src='https://www.paypal.com/en_US/i/btn/btn_dg_pay_w_paypal.gif'
						id="submitBtn" name="submitBtn" value="Pay with PayPal" /></td>
				</tr>


			</table>
			<script type="text/javascript"
				src="https://www.paypalobjects.com/js/external/dg.js"></script>
			<script>
    var dg = new PAYPAL.apps.DGFlow({
        
        trigger: "submitBtn"
    });
</script>
		</form>
	</div>
	<a id="CallsLink" href="../index.php">Home</a>
</body>
</html>
