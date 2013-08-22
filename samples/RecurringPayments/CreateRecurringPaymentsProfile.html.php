<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>PayPal Merchant SDK - CreateRecurringPaymentsProfile</title>
<link rel="stylesheet" href="../Common/sdk.css"/>
<script language="JavaScript">
	function generateCC(){
		var cc_number = new Array(16);
		var cc_len = 16;
		var start = 0;
		var rand_number = Math.random();

		switch(document.CreateRPProfileForm.creditCardType.value)
        {
			case "Visa":
				cc_number[start++] = 4;
				break;
			case "Discover":
				cc_number[start++] = 6;
				cc_number[start++] = 0;
				cc_number[start++] = 1;
				cc_number[start++] = 1;
				break;
			case "MasterCard":
				cc_number[start++] = 5;
				cc_number[start++] = Math.floor(Math.random() * 5) + 1;
				break;
			case "Amex":
				cc_number[start++] = 3;
				cc_number[start++] = Math.round(Math.random()) ? 7 : 4 ;
				cc_len = 15;
				break;
        }

        for (var i = start; i < (cc_len - 1); i++) {
			cc_number[i] = Math.floor(Math.random() * 10);
        }

		var sum = 0;
		for (var j = 0; j < (cc_len - 1); j++) {
			var digit = cc_number[j];
			if ((j & 1) == (cc_len & 1)) digit *= 2;
			if (digit > 9) digit -= 9;
			sum += digit;
		}

		var check_digit = new Array(0, 9, 8, 7, 6, 5, 4, 3, 2, 1);
		cc_number[cc_len - 1] = check_digit[sum % 10];

		document.CreateRPProfileForm.creditCardNumber.value = "";
		for (var k = 0; k < cc_len; k++) {
			document.CreateRPProfileForm.creditCardNumber.value += cc_number[k];
		}
	}
</script>

</head>
<body>
	<div id="wrapper">
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png">
		<div id="header">
			<h3>CreateRecurringPaymentsProfile</h3>
			<div id="apidetails">
				<p>CreateRecurringPaymentsProfile API operation creates a recurring
					payments profile. You must invoke the
					CreateRecurringPaymentsProfile API operation for each profile you
					want to create. The API operation creates a profile and an
					associated billing agreement.</p>
			</div>
		</div>
		<form method="POST" name="CreateRPProfileForm"
			action="CreateRecurringPaymentsProfile.php">
			<div id="request_form">
				<div class="note">You must set either Token or Credit Card number</div>
				<div class="params">
					<div class="param_name">Express Checkout Token *</div>
					<div class="param_value">
						<input type="text" name="token" id="token" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Credit Card *</div>
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
						<td>
							<div class="param_value">
								<input type="text" name="creditCardNumber" id="creditCardNumber"
									value="" />
							</div>
						</td>
						<td>
							<div class="param_value">
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
									<?php
									foreach (range(date("Y") + 1, date("Y") + 5) as $year) {
										echo "<option>$year</option>";
									}
									?>
								</select>
							</div>
						</td>
						<td>
							<div class="param_value">
								<input type="text" name="cardOnName" id="cardOnName" value="" />
							</div>
						</td>
						<td>
							<div class="param_value">
								<select name="creditCardType"
									onChange="javascript:generateCC(); return false;">
									<option value="Visa">Visa</option>
									<option value="MasterCard">MasterCard</option>
									<option value="Discover">Discover</option>
									<option value="Amex">Amex</option>
								</select>
							</div>
						</td>
						<td>
							<div class="param_value">
								<input type="text" name="cvv" id="cvv" value="962" />
							</div>
						</td>
					</tr>
				</table>

				<div class="section_header">Recurring payments profile details</div>
				<div class="param_name">Subscriber Name</div>
				<div class="param_value">
					<input type="text" name="subscriberName" id="subscriberName"
						value="" value="" />
				</div>
				<div class="param_name">Billing start date</div>
				<div class="param_value">
					<input type="text" name="billingStartDate" id="billingStartDate"
						value="<?php echo date(DATE_ATOM)?>" />
				</div>
				<div class="param_name">Subscriber address - if missing, the address
					in buyer's account will be used</div>
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
						</span></td>
						<td><span class="param_value"> <input type="text"
								id="shippingStreet1" name="shippingStreet1" value="" />
						</span></td>
						<td><span class="param_value"> <input type="text"
								id="shippingStreet2" name="shippingStreet2" value="" />
						</span></td>
						<td><span class="param_value"> <input type="text"
								id="shippingCity" name="shippingCity" value="" />
						</span></td>
						<td><span class="param_value"> <input type="text"
								id="shippingState" name="shippingState" value="" />
						</span></td>
						<td><span class="param_value"> <input type="text"
								id="shippingPostalCode" name="shippingPostalCode" value="" />
						</span>
						</td>
						<td><span class="param_value"> <input type="text"
								id="shippingCountry" name="shippingCountry" value="" />
						</span></td>
						<td><span class="param_value"> <input type="text"
								id="shippingPhone" name="shippingPhone" value="" />
						</span></td>
					</tr>
				</table>
				<div class="section_header">Schedule details</div>
				<div class="params">
					<div class="param_name">Description (must match billing agreement
						if using Express Checkout token)</div>
					<div class="param_value">
						<textarea rows="5" cols="60" name="profileDescription">Welcome to the world of shopping where you get everything</textarea>
					</div>
				</div>
				<div class="section_header">Activation Details</div>
				<table class="params">
					<tr>
						<th>Initial Amount</th>
						<th>Failed Payment Action</th>
					</tr>
					<tr>
						<td><span class="param_value"> <input id="initialAmount"
								name="initialAmount" />
						</span></td>
						<td><span class="param_value"> <select
								name="failedInitialAmountAction">
									<option value="ContinueOnFailure">Continue On Failure</option>
									<option value="CancelOnFailure">Cancel On Failure</option>
							</select>
						</span></td>
					</tr>
				</table>

				<div class="section_header">Trial Period</div>
				<table class="params">
					<tr>
						<th>Billing frequency</th>
						<th>Billing period</th>
						<th>Total billing cycles</th>
						<th>Amount (per billing cycle)</th>
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
						</span>
						</td>
						<td><span class="param_value"> <input type="text" id="trialAmount"
								name="trialAmount" value="2.0" />
						</span>
						</td>
						<td><span class="param_value"> <input type="text"
								id="trialShippingAmount" name="trialShippingAmount" value="0.0" />
						</span>
						</td>
						<td><span class="param_value"> <input type="text"
								id="trialTaxAmount" name="trialTaxAmount" value="0.0" />
						</span>
						</td>
				
				</table>

				<div class="section_header">Payment Period</div>
				<table class="params_name">
					<tr>
						<th>Billing frequency</th>
						<th>Billing period</th>
						<th>Total billing cycles</th>
						<th>Amount (per billing cycle)</th>
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
						</span>
						</td>
						<td><span class="param_value"> <input type="text"
								id="paymentAmount" name="paymentAmount" value="5.0" />
						</span></td>
						<td><span class="param_value"> <input type="text"
								id="paymentShippingAmount" name="paymentShippingAmount"
								value="0.0" />
						</span></td>
						<td><span class="param_value"> <input type="text"
								id="paymentTaxAmount" name="paymentTaxAmount" value="0.0" />
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
						<option value="">- Select a value -</option>
						<option value="NoAutoBill">No Auto billing</option>
						<option value="AddToNextBilling">Add to next billing</option>
					</select>
				</div>

				<div class="submit">
					<input type="submit" name="CreateRecurringPaymentsProfileBtn"
						value="CreateRecurringPaymentsProfile" /><br />
				</div>
				<a href="../index.php">Home</a> <br /> <br />
			</div>
		</form>
	</div>
	<script language="javascript">
	generateCC();
</script>
</body>
</html>
