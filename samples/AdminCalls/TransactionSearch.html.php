<?php 
$currDate = getdate();
$endDate = $currDate['year'].'-'.$currDate['mon'].'-'.$currDate['mday'];
$endDate = strtotime($endDate);
$endDate = date("Y-m-d\TH:i:sO", mktime(0,0,0,date('m',$endDate),date('d',$endDate),date('Y',$endDate)));
$startDate = strtDate($endDate, 1);

function strtDate($orgDate,$dy){
	$cd = strtotime($orgDate);
	$retDAY = date("Y-m-d\TH:i:sO", mktime(0,0,0,date('m',$cd),date('d',$cd)-$dy,date('Y',$cd)));
	return $retDAY;
}

?>
<html>
<head>
<title>PayPal Merchant SDK - TransactionSearch</title>
<link href="../Common/sdk.css" rel="stylesheet"/>
</head>
<body>
	<div id="wrapper">
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png">
		<div id="header">
			<h3>TransactionSearch</h3>
			<div id="apidetails">TransactionSearch API searches transaction
				history for transactions that meet the specified criteria.</div>
		</div>
		<form method="POST" action="TransactionSearch.php">

			<div id="request_form">
				<div class="params">
					<div class="param_name">Start date *</div>
					<div class="param_value">
						<input type="text" name="startDate" size="30"
							value="<?php echo $startDate ?>" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">End date</div>
					<div class="param_value">
						<input type="text" name="endDate" size="30"
							value=<?php echo $endDate?> />
					</div>
				</div>
				<div class="params">
					<div class="param_name">
						Transaction ID (Get Transaction ID via <a
							href="../DirectPayment/DoDirectPayment.html.php">Direct Payment</a>
						or <a href="../ExpressCheckout/SetExpressCheckout.html.php">ExpressCheckout</a>)
					</div>
					<div class="param_value">
						<input type="text" name="transactionID" value="" size="50"
							maxlength="260" />
					</div>
				</div>
				<div class="submit">
					<input type="submit" name="TransactionSearchBtn"
						value="TransactionSearch" /><br />
				</div>
				<a href="../index.php">Home</a>

			</div>
		</form>


	</div>
</body>
</html>


