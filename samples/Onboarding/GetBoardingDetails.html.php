<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>PayPal Merchant SDK - GetBoardingDetails</title>
<link rel="stylesheet" href="../Common/sdk.css"/>
</head>
<body>
	<div id="wrapper">
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png">
		<div id="header">
			<h3>GetBoardingDetails</h3>
			<div id="apidetails">GetBoardingDetails queries the state of a
				merchant's account and retrieves a merchant's PayPal API
				credentials.</div>
		</div>
		<form method="POST" action="GetBoardingDetails.php">
			<div id="request_form">
				<div class="params">
					<div class="param_name">
						Onboarding Token: (Get OnboardingToken via <a
							href="EnterBoarding.html.php">EnterBoarding</a>
					</div>
					<div class="param_value">
						<input type="text" name="onboardingToken" value="" maxlength="260" />
					</div>

				</div>
				<div class="submit">
					<input type="submit" name="GetBoardingDetails"
						value="GetBoardingDetails" /> <br />
				</div>
				<a href="../index.php">Home</a>
			</div>
		</form>

	</div>
</body>
</html>
