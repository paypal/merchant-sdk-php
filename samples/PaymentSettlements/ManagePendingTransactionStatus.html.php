<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>PayPal SDK - ManagePendingTransactionStatus</title>
</head>
<body>
<div id="wrapper">
<div id="header">
<h3>ManagePendingTransactionStatus</h3>
<div id="apidetails">
<p>ManagePendingTransactionStatus API operation accepts or denys
a pending transaction held by Fraud Management Filters.</p>
</div>
</div>
<form method="POST">
<div id="request_form">
<div class="params">
<div class="param_name">Transaction ID*</div>
<div class="param_value">
<input type="text" name="transactionID" value="" />
</div>
</div>

<div class="params">
<div class="param_name">Action*</div>
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
<a href="/merchant-sample/index.html">Home</a>

</div>
</form>
<div id="relatedcalls">
See also
<ul>
<li><a href="DoAuthorization">DoAuthorization</a></li>
<li><a href="DoVoid">DoVoid</a></li>
<li><a href="DoReauthorization">DoReauthorization</a></li>
<li><a href="Refund">Refund</a>
</li>
<li><a href="DoUATPAuthorization">DoUATPAuthorization</a>
</li>
<li><a href="ReverseTransaction">ReverseTransaction</a></li>
<li><a href="DoCapture">DoCapture</a>
</li>
<li><a href="DoNonReferencedCredit">DoNonReferencedCredit</a></li>
</ul>
</div>
</div>
</body>
</html>