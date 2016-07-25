<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PayPal Merchant SDK - SetAuthFlowParam</title>
<link rel="stylesheet" href="../Common/sdk.css"/>
</head>
<?php 
$serverName = $_SERVER['SERVER_NAME'];
$serverPort = $_SERVER['SERVER_PORT'];
$url=dirname('http://'.$serverName.':'.$serverPort.$_SERVER['REQUEST_URI']);
$returnUrl = $url."/GetAuthDetails.html.php";
$cancelUrl = $url. "/SetAuthFlowParam.html.php" ;
?>
<body>
	<div id="wrapper">
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png"/>
		<div id="header">
			<h3>SetAuthFlowParam</h3>
			<div id="apidetails"></div>
		</div>
		<form id="form1" action="SetAuthFlowParam.php">
			<div id="request_form">
				<div class="param_name">Return URL</div>
				<div class="param_value">
					<input type="text" name="returnURL" id="returnURL" size="90"
						value=<?php echo $returnUrl?> />
				</div>
				<div class="param_name">Cancel URL</div>
				<div class="param_value">
					<input type="text" name="cancelURL" id="cancelURL" size="90"
						value=<?php echo $cancelUrl?> />
				</div>

				<div class="param_name">Logout URL</div>
				<div class="param_value">
					<input type="text" name="logoutURL" id="LogoutURL" size="90"
						value=<?php echo $cancelUrl ?> />
				</div>

				<div class="submit">
					<input id="Submit1" type="submit" name="submit" value="Submit" />
				</div>
			</div>
			<a href="../index.php">Home</a>
		</form>
	</div>
</body>
</html>
