<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>PayPal Merchant SDK - UpdateRecurringPaymentsProfile</title>
<link rel="stylesheet" href="../Common/sdk.css"/>
</head>
<body>
	<div id="wrapper">
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png">
		<div id="header">
			<h3>UpdateRecurringPaymentsProfile</h3>
			<div id="apidetails">
				<p>UpdateRecurringPaymentsProfile API operation updates a recurring
					payments profile.</p>
			</div>
		</div>
		<form method="POST" name="UpdateRPProfileForm"
			action="UpdateRecurringPaymentsProfile.php">
			<div id="request_form" >
				<div class="params">
					<div class="param_name">
						Profile ID *(Get Profile ID via <a
							href='CreateRecurringPaymentsProfile'>CreateRecurringPaymentsProfile</a>)
					</div>
					<div class="param_value">
						<input type="text" name="profileID" value="" size="50"
							maxlength="260" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Credit Card</div>
				</div>
				<table class="params">
					<tr>
						<th class="param_name">Credit Card number</th>
						<th class="param_name">Expiry date</th>
						<th class="param_name">Name on card</th>
						<th class="param_name">Credit Card type</th>
						<th class="param_name">CVV</th>
					</tr>
					<tr>
						<td><div class="param_value">
								<input type="text" name="creditCardNumber" id="creditCardNumber"
									value="" />
							</div></td>
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
									<option value="2011">2011</option>
									<option value="2012">2012</option>
									<option value="2013">2013</option>
									<option value="2014">2014</option>
								</select>
							</div></td>
						<td><div class="param_value">
								<input type="text" name="cardOnName" id="cardOnName" value="" />
							</div></td>
						<td><div class="param_value">
								<select name="creditCardType">
									<option value="Visa">Visa</option>
									<option value="MasterCard">MasterCard</option>
									<option value="Discover">Discover</option>
									<option value="Amex">Amex</option>
								</select>
							</div></td>
						<td><div class="param_value">
								<input type="text" name="cvv" id="cvv" />
							</div></td>
					</tr>
				</table>
				<div class="param_name">Subscriber Name</div>
				<div class="param_value">
					<input type="text" name="subscriberName" id="subscriberName"
						value="" value="" />
				</div>
				<div class="param_name">Billing start date</div>
				<div class="param_value">
					<input type="text" name="billingStartDate" id="billingStartDate"
						value= <?php echo date(DATE_ATOM)?>/>
				</div>
				<div class="param_name">Subscriber shipping address (if different
					from buyer's PayPal account address)</div>
				<table class="line_item">
					<tr>
						<th>Name</th>
						<th>Street 1</th>
						<th>Street 2</th>
						<th>City</th>
						<th>State</th>
						<th>Postal Code</th>
						<th>Country</th>
						<th>Phone</th>
					</tr>
					<tr>
						<td><span class="param_value"> <input type="text"
								id="shippingName" name="shippingName" value="" />
						</span>
						</td>
						<td><span class="param_value"> <input type="text"
								id="shippingStreet1" name="shippingStreet1" value="" />
						</span>
						</td>
						<td><span class="param_value"> <input type="text"
								id="shippingStreet2" name="shippingStreet2" value="" />
						</span>
						</td>
						<td><span class="param_value"> <input type="text"
								id="shippingCity" name="shippingCity" value="" />
						</span>
						</td>
						<td><span class="param_value"> <input type="text"
								id="shippingState" name="shippingState" value="" />
						</span>
						</td>
						<td><span class="param_value"> <input type="text"
								id="shippingPostalCode" name="shippingPostalCode" value="" />
						</span>
						</td>
						<td><span class="param_value"> <input type="text"
								id="shippingCountry" name="shippingCountry" value="" />
						</span>
						</td>
						<td><span class="param_value"> <input type="text"
								id="shippingPhone" name="shippingPhone" value="" />
						</span>
						</td>
					</tr>
				</table>

				<div class="params">
					<div class="param_name">Description (must match billing agreement
						if using Express Checkout token)</div>
					<div class="param_value">
						<textarea rows="5" cols="60" name="profileDescription"></textarea>
					</div>
				</div>

				<table class="params">
					<tr>
						<th>Amount</th>
						<th>Shipping Amount</th>
						<th>Tax Amount</th>
						<th>Additonal Billing Cycles</th>
					</tr>
					<tr>
						<td><span class="param_value"> <input id="amount" name="amount" />
						</span>
						</td>
						<td><span class="param_value"> <input id="shippingAmount"
								name="shippingAmount" />
						</span>
						</td>
						<td><span class="param_value"> <input id="taxAmount"
								name="taxAmount" />
						</span>
						</td>
						<td><span class="param_value"> <input id="additionalBillingCycles"
								name="additionalBillingCycles" />
						</span>
						</td>
					</tr>
				</table>

				<div class="section_header">Trial Period</div>
				<table class="params">
					<tr>
						<th>Billing frequency</th>
						<th>Billing period</th>
						<th>Total billing cycles</th>
						<th>Per billing cycle amount</th>
						<th>Shipping amount</th>
						<th>Tax</th>
					</tr>
					<tr>
						<td><span class="param_value"> <input type="text"
								id="trialBillingFrequency" name="trialBillingFrequency"
								value="10" />
						</span></td>
						<td><span class="param_value"> <select name="trialBillingPeriod">
									<option value="Day">Day</option>
									<option value="Week">Week</option>
									<option value="SemiMonth">SemiMonth</option>
									<option value="Month">Month</option>
									<option value="Year">Year</option>
							</select>
						</span></td>
						<td><span class="param_value"> <input type="text"
								id="trialBillingCycles" name="trialBillingCycles" value="2" />
						</span></td>
						<td><span class="param_value"> <input type="text"
								id="trialBillingAmount" name="trialBillingAmount" value="2.0" />
						</span></td>
						<td><span class="param_value"> <input type="text"
								id="trialShippingAmount" name="trialShippingAmount" value="0.0" />
						</span></td>
						<td><span class="param_value"> <input type="text"
								id="trialTaxAmount" name="trialTaxAmount" value="0.0" />
						</span></td>
					</tr>
				</table>

				<div class="section_header">Payment Period</div>
				<table class="params_name">
					<tr>
						<th>Billing frequency</th>
						<th>Billing period</th>
						<th>Total billing cycles</th>
						<th>Per billing cycle amount</th>
						<th>Shipping amount</th>
						<th>Tax</th>
					</tr>
					<tr>
						<td><span class="param_value"> <input type="text"
								id="billingFrequency" name="billingFrequency" value="10" />
						</span></td>
						<td><span class="param_value"> <select name="billingPeriod">
									<option value="Day">Day</option>
									<option value="Week">Week</option>
									<option value="SemiMonth">SemiMonth</option>
									<option value="Month">Month</option>
									<option value="Year">Year</option>
							</select>
						</span></td>
						<td><span class="param_value"> <input type="text"
								id="totalBillingCycles" name="totalBillingCycles" value="8" />
						</span></td>
						<td><span class="param_value"> <input type="text"
								id="billingAmount" name="billingAmount" value="5.0" />
						</span></td>
						<td><span class="param_value"> <input type="text"
								id="shippingAmount" name="shippingAmount" value="1.0" />
						</span></td>
						<td><span class="param_value"> <input type="text" id="taxAmount"
								name="taxAmount" value="0.0" />
						</span></td>
					</tr>
				</table>
				<div class="params">
					<div class="param_name">Maximum failed payments before profile
						suspension</div>
					<div class="param_value">
						<input type="text" name="maxFailedPayments" id="maxFailedPayments"
							value="3" />
					</div>
				</div>
				<div class="param_name">Auto billing of outstanding amount</div>
				<div class="param_value">
					<select name="autoBillOutstandingAmount">
						<option value="NoAutoBill">No Auto billing</option>
						<option value="AddToNextBilling">Add to next billing</option>
					</select>
				</div>
				<div class="submit">
					<input type="submit" name="UpdateRecurringPaymentsProfileBtn"
						value="UpdateRecurringPaymentsProfile" /><br />
				</div>
				<a href="../index.php">Home</a>
			</div>
		</form>
	</div>
</body>
</html>


