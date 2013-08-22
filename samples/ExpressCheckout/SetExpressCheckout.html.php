<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>PayPal Merchant SDK - SetExpressCheckout</title>
<link rel="stylesheet" type="text/css" href="../Common/sdk.css" />
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
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png">
		<div id="header">
			<h3>SetExpressCheckout</h3>
		</div>
		<br>
		<div id="request_form">
			<form method="POST" action="SetExpressCheckout.php">
				<div class="params">
					<div class="param_name">Buyer email (Email address of the buyer as entered during checkout.
					 PayPal uses this value to pre-fill the PayPal membership sign-up portion of the PayPal login page)</div>
					<div class="param_value">
						<input type="text" name="buyerEmail"
							value="platfo_1255077030_biz@gmail.com" size="50" maxlength="260" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Payment Type</div>
					<div class="param_value">
						<select name="paymentType">
							<option value="Sale">Sale</option>
							<option value="Authorization">Authorization</option>
							<option value="Order">Order</option>
						</select>
					</div>
				</div>
				<div class="section_header">Payment Details</div>
				<div class="params"></div>

				<div class="params">
					<div class="param_name">CurrencyCode</div>
					<div class="param_value">
						<input type="text" name="currencyCode" value="USD" size="50"
							maxlength="260" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Total Shipping costs</div>
					<div class="param_value">
						<input type="text" name="shippingTotal" id="shippingTotal"
							value="0.50" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Total insurance cost</div>
					<div class="param_value">
						<input type="text" name="insuranceTotal" id="insuranceTotal"
							value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Total handling cost</div>
					<div class="param_value">
						<input type="text" name="handlingTotal" id="handlingTotal"
							value="" />
					</div>
				</div>								
				<div class="params">
					<div class="param_name">Item Details</div>
					<table class="line_item">
					
						<tr>
							<th class="param_name">Name</th>
							<th class="param_name">Cost</th>
							<th class="param_name">Quantity</th>
							<th class="param_name">Sales tax</th>
							<th class="param_name">Item Category</th>
							<th class="param_name">Description (optional)</th>
						</tr>
	
						<tr>
							<td><div class="param_value">
									<input type="text" name="itemName[]" id="itemName0"
										value="Item 1" />
								</div>
							</td>	
							<td><div class="param_value">
									<input type="text" name="itemAmount[]" id="itemAmount0"
										value="5.50" />
								</div>
							</td>	
							<td><div class="param_value">
									<input type="text" name="itemQuantity[]" id="itemQuantity0"
										value="2" />
								</div>
							</td>							
							<td><div class="param_value">
									<input type="text" name="itemSalesTax[]" id="itemSalesTax0"
										value="1.5" />
								</div>
							</td>	
							<td><div class="param_value">
									<select name="itemCategory[]" id="itemCategory0">
										<option Value="Physical">Physical</option>
										<option Value="Digital">Digital</option>
									</select>
								</div>
							</td>	
							<td><div class="param_value">
									<input type="text" name="itemDescription[]" id="itemDescription0"
										value="" />
								</div>
							</td>
						</tr>
						
						<tr>
							<td><div class="param_value">
									<input type="text" name="itemName[]" id="itemName1"
										value="Item 2" />
								</div>
							</td>	
							<td><div class="param_value">
									<input type="text" name="itemAmount[]" id="itemAmount1"
										value="1.00" />
								</div>
							</td>	
							<td><div class="param_value">
									<input type="text" name="itemQuantity[]" id="itemQuantity1"
										value="1" />
								</div>
							</td>							
							<td><div class="param_value">
									<input type="text" name="itemSalesTax[]" id="itemSalesTax1"
										value="0.0" />
								</div>
							</td>	
							<td><div class="param_value">
									<select name="itemCategory[]" id="itemCategory1">
										<option Value="Physical">Physical</option>
										<option Value="Digital">Digital</option>
									</select>
								</div>
							</td>	
							<td><div class="param_value">
									<input type="text" name="itemDescription[]" id="itemDescription1"
										value="" />
								</div>
							</td>
						</tr>						
					</table>
				</div>
				<div class="params">
					<div class="param_name">Order description</div>
					<div class="param_value">
						<textarea cols="40" rows="5" name="orderDescription"></textarea>
					</div>
				</div>
				<div class="params">
					<div class="param_name">IPN listener URL</div>
					<div class="param_value">
					<input type="text" size="80" maxlength="200" name="notifyURL" value="">
					</div>
				</div>
				
				<div class="section_header">Shipping information:</div>
				<div class="params">
					<div class="param_name">Requires shipping</div>
					<div class="param_value">
						<select name="noShipping">
							<option value="0">Display shipping address in PayPal pages</option>
							<option value="1">Do not display shipping address in PayPal
								pages</option>
							<option value="2">If shipping address not passed, use value in
								buyer's profile</option>
						</select>
					</div>
				</div>
				<div class="params">
					<div class="param_name">Require buyer's PayPal Shipping address to be a confirmed address</div>
		            <div class="param_value">
		                <select name="reqConfirmShipping">
		                    <option value="0">No</option>
		                    <option value="1">Yes</option>
		                </select>
		            </div>
	            </div>
	            <div class="params">				
					<div class="param_name">Allow Address override</div>
		            <div class="param_value">
		                <select name="addressOverride">
		                    <option value="">-Select a value-</option>
		                    <option value="0">No - PayPal should not display shipping address</option>
		                    <option value="1">Yes - PayPal should display shipping address</option>
		                </select>
		            </div>				
	            </div>				
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
						<td class="param_value"><input type="text" name="shippingAmount"
							id="shippingAmount" value="3.00" size="25" maxlength="260" /></td>
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
						<input type="text" name="postalCode" value="78701" size="50"
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
				
				<div class="params">
					<div class="param_name">Phone</div>
					<div class="param_value">
						<input type="text" name="phone" value="" size="50"
							maxlength="260" />
					</div>
				</div>
				
				<div class="section_header">Billing Agreement (Required for
					Recurring payments/Reference transactions only)</div>
				<div class="param_name">Billing Agreement Description *</div>
				<div class="param_value">
					<textarea cols="80" rows="10" name="billingAgreementText"></textarea>
				</div>
				<div class="param_name">Billing type *</div>
				<div class="param_value">
					<select name="billingType">
						<option value="None">None</option>
						<option value="MerchantInitiatedBilling">Merchant Initiated
							Billing</option>
						<option value="RecurringPayments">Recurring Payments</option>
						<option value="MerchantInitiatedBillingSingleAgreement">Merchant
							Initiated Billing Single Agreement</option>
						<option value="ChannelInitiatedBilling">Channel Initiated Billing</option>
					</select>
				</div>

				<!-- PayPal page styling attributes -->
				<div class="section_header">PayPal page styling attributes
					(optional)</div>
				<div class="param_name">Business name to display in the PayPal
					account on the PayPal hosted checkout pages</div>
				<div class="param_value">
					<input type="text" name="brandName" id="brandName" value="" />
				</div>
				<div class="param_name">Custom page style for payment pages
					(as configured in Merchant's account profile)</div>
				<div class="param_value">
					<input type="text" name="pageStyle" id="pageStyle" value="" />
				</div>
				<div class="param_name">URL for header image</div>
				<div class="param_value">
					<input type="text" name="cppheaderimage" id="cppheaderimage"
						value="" />
				</div>
				<div class="param_name">Border color around header</div>
				<div class="param_value">
					<input type="text" name="cppheaderbordercolor"
						id="cppheaderbordercolor" value="" />
				</div>
				<div class="param_name">Background color for header</div>
				<div class="param_value">
					<input type="text" name="cppheaderbackcolor"
						id="cppheaderbackcolor" value="" />
				</div>
				<div class="param_name">Background color for payment page</div>
				<div class="param_value">
					<input type="text" name="cpppayflowcolor" id="cpppayflowcolor"
						value="" />
				</div>
				<div class="param_name">Gradient color for the Mini Cart on 1X flow</div>
				<div class="param_value">
					<input type="text" name="cppcartbordercolor" id="cppcartbordercolor"
						value="" />
				</div>
				<div class="param_name">A URL for the image you want to appear above the mini-cart</div>
				<div class="param_value">
					<input type="text" name="cpplogoimage" id="cpplogoimage"
						value="" />
				</div>
												
				<!-- Advanced features -->
				<div class="section_header">Advanced features (optional)</div>
				<div class="param_name">Allow buyer to enter note to merchant
					on PayPal pages</div>
				<div class="param_value">
					<select name="allowNote">
						<option value="0">False</option>
						<option value="1">True</option>
					</select>
				</div>				

				<div class="submit">
					<input type="submit" name="SetExpressCheckoutBtn"
						value="SetExpressCheckout" /> <br />
				</div>
				<a href="../index.php">Home</a>
			</form>
		</div>			
	</div>	
</body>
</html>
