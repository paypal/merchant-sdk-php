<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>PayPal SDK - DoUATPAuthorization</title>

</head>
<body>
<div id="wrapper">
<div id="header">
<h3>Refund</h3>
<div id="apidetails">Used to authorize a payment for airline
merchants</div>
</div>
<form method="POST">
<div id="request_form">
<div class="params">
<div class="param_name">
UATP Number(Get UATP Number via <a
href="../EC/DoUATPExpressCheckoutPayment">UATPExpressCheckout</a>)
</div>
<div class="param_value">
<input type="text" name="UATPNum" value="" size="50"
maxlength="260" />
</div>
</div>
<div class="params">
<div class="param_name">Expiry Month</div>
<div class="param_value">
<input type="text" name="expMonth" value="" size="50"
maxlength="260" />
</div>
</div>
<div class="params">
<div class="param_name">expYear</div>
<div class="param_value">
<input type="text" name="expYear" value="" size="50"
maxlength="260" />
</div>
</div>
<div class="params">
<div class="param_name">Amount</div>
<div class="param_value">
<input type="text" name="amt" value="" size="50" maxlength="260" />
</div>
</div>
<div class="params">
<div class="param_name">CurrencyID</div>
<div class="param_value">
<input type="text" name="currencyID" value="" size="50"
maxlength="260" />
</div>
</div>
<div class="params">
<div class="param_name">TransactionEntityType</div>
<div class="param_value">
<select name="transactionEntity">
<option value="None">None</option>
<option value="Auth">Auth</option>
<option value="Reauth">Reauth</option>
<option value="Order">Order</option>
<option value="Payment">Payment</option>
</select>
</div>
</div>
<div class="submit">
<input type="submit" name="DoUATPAuthorizationBtn"
value="DoUATPAuthorization" /> <br />
</div>
<a href="/merchant-sample/index.html">Home</a>
</div>
</form>
<div id="relatedcalls">
See also
<ul>
<li><a href="DoCapture">DoCapture</a></li>
<li><a href="DoVoid">DoVoid</a></li>
<li><a href="DoReauthorization">DoReauthorization</a></li>
<li><a href="DoAuthorization">DoAuthorization</a>
</li>
<li><a href="DoUATPAuthorization">DoUATPAuthorization</a>
</li>
<li><a href="ReverseTransaction">ReverseTransaction</a><li><a href="DoNonReferencedCredit">DoNonReferencedCredit</a></li>
<li><a href="ManagePendingTransactionStatus">ManagePendingTransactionStatus</a>
</li>
</li>

</ul>
</div>
</div>
</body>
</html>