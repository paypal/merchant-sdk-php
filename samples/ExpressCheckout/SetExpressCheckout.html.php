<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>PayPal SDK - SetExpressCheckout</title>
<script type=text/javascript>
function display(value) {
switch (value) {
case 'Ground':
document.getElementById('shippingAmount').value = '3.00';
break;
case 'UPS Air':
document.getElementById('shippingAmount').value = '17.00';
break;
}
}
</script>
</head>
<body>
<div id="wrapper">
<div id="header">
<h3>SetExpressCheckout</h3>

<br>
<form method="POST" action ="SetExpressCheckout.php">
<div id="request_form">
<div class="param_name">Item Details</div>
<table class="line_item">
<tr>
<th class="param_name">Name</th>
<th class="param_name">Cost</th>
<th class="param_name">Quantity</th>
<th class="param_name">Item Category</th>
<th class="param_name">Description (optional)</th>
</tr>

<tr>
<td><div class="param_value">
<input type="text" name="itemName" id="itemName"
value="Item Name" />
</div>
</td>

<td><div class="param_value">
<input type="text" name="itemAmount" id="itemAmount"
value="5.27" />
</div>
</td>

<td><div class="param_value">
<input type="text" name="itemQuantity" id="itemQuantity"
value="1" />
</div>
</td>


<td><div class="param_value">
<select name="itemCategory">
<option Value="Physical">Physical</option>
<option Value="Digital">Digital</option>
</select>
</div>
</td>

<td><div class="param_value">
<input type="text" name="itemDescription" id="itemDescription"
value="" />
</div>
</td>
</tr>
</table>
<div class="params">
<div class="param_name">Requires shipping</div>
<div class="param_value">
<select name="noShipping">
<option value="0">Display shipping address in PayPal
pages</option>
<option value="1">Do not display shipping address in
PayPal pages</option>
<option value="2">If shipping address not passed, use
value in buyer's profile</option>
</select>
</div>
</div>
<div class="params">
<div class="param_name">PaymentType</div>
<div class="param_value">
<select name="paymentType">
<option value="Sale">Sale</option>
<option value="Authorization">Authorization</option>
<option value="Order">Order</option>
</select>
</div>
</div>
<div class="params">
<div class="param_name">Order description</div>
<div class="param_value">
<textarea cols="40" rows="5" name="orderDescription"></textarea>
</div>
</div>
<div class="section_header">Payment Details</div>
<div class="params">
</div>

<div class="params">
<div class="param_name">CurrencyCode</div>
<div class="param_value">
<input type="text" name="currencyCode" value="USD" size="50"
maxlength="260" />
</div>
</div>
<div class="params">
<div class="param_name">Total Tax</div>
<div class="param_value">
<input type="text" name="taxTotal" id="taxTotal" value="0.0" />
</div>
</div>



<div class="section_header">Ship To Address:</div>
<table class="params">
<tr>
<th class="param_name">Shipping Method</th>
<th class="param_name">Shipping Amount</th>
</tr>
<tr>
<td class="param_value"><select name="shippingMethod"
onclick="display(this.value)">
<option value="Ground">Ground</option>
<option value="UPS Air">UPS Air</option>
</select></td>
<td class="param_value"><input type="text"
name="shippingAmount" id="shippingAmount" value="3.00" size="25"
maxlength="260" /></td>
</tr>
</table>
<div class="params">
<div class="param_name">Name</div>
<div class="param_value">
<input type="text" name="name" value="John" size="50"
maxlength="260" />
</div>
</div>
<div class="params">
<div class="param_name">Address Line1</div>
<div class="param_value">
<input type="text" name="street" value="1,Main St" size="50"
maxlength="260" />
</div>
</div>

<div class="params">
<div class="param_name">City</div>
<div class="param_value">
<input type="text" name="city" value="Austin" size="50"
maxlength="260" />
</div>

</div>
<div class="params">
<div class="param_name">State</div>
<div class="param_value">
<input type="text" name="state" value="TX" size="50"
maxlength="260" />
</div>
</div>
<div class="params">
<div class="param_name">PostalCode</div>
<div class="param_value">
<input type="text" name="postalCode" value="86750" size="50"
maxlength="260" />
</div>
</div>

<div class="params">
<div class="param_name">CountryCode</div>
<div class="param_value">
<input type="text" name="countryCode" value="US" size="50"
maxlength="260" />
</div>
</div>



<div class="submit">
<input type="submit" name="SetExpressCheckoutBtn"
value="SetExpressCheckout" /> <br />
</div>
<a href="../index.php">Home</a>
</div>
</form>


</div>
</body>
</html>