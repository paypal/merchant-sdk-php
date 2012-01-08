<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>PayPal SDK - BMGetButtonDetails</title>

</head>
<body>
<div id="wrapper">
<div id="header">
<h3>BMGetButtonDetails</h3>
<div id="apidetails">
<p>BMGetButtonDetails API operation is used to obtain
information about a hosted Website Payments Standard button.</p>
</div>
</div>
<form method="POST" action = "BMGetButtonDetails.php">
<div id="request_form">
<div class="params">
<div class="param_name">
HostedID*(Get hosted ID via <a href='BMCreateButton'>BMCreateButton</a>)
</div>
<div class="param_value">
<input type="text" name="hostedID" value="" size="50"
maxlength="260" />
</div>
</div>
<div class="submit">
<input type="submit" name="BMGetButtonDetailsBtn"
value="BMGetButtonDetails" /><br />
</div>
<a href="/merchant-sample/index.html">Home</a>
</div>
</form>
<div id="relatedcalls">
See also
<ul>
<li><a href="BMCreateButton">BMCreateButton</a></li>
<li><a href="BMUpdateButton">BMUpdateButton</a></li>
<li><a href="BMButtonSearch">BMButtonSearch</a></li>
<li><a href="BMManageButtonStatus">BMManageButtonStatus</a></li>
<li><a href="BMSetInventory">BMSetInventory</a></li>
<li><a href="BMGetInventory">BMGetInventory</a></li>
</ul>
</div>
</div>
</body>
</html>