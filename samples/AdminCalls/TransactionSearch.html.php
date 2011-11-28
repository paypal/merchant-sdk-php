<?php 
$currDate = getdate();
$endDate = $currDate['year'].'-'.$currDate['mon'].'-'.$currDate['mday'];
$endDate = strtotime($endDate);
$endDate = date('Y-m-d', mktime(0,0,0,date('m',$endDate),date('d',$endDate),date('Y',$endDate)));
$startDate = strtDate($endDate, 1);

function strtDate($orgDate,$yr){
	  $cd = strtotime($orgDate);
	  $retDAY = date('Y-m-d', mktime(0,0,0,date('m',$cd),date('d',$cd),date('Y',$cd)-$yr));
	  return $retDAY;
	}

?><html>
<head>
<title>PayPal SDK - TransactionSearch</title>
</head>
<body>
<div id="wrapper">
<div id="header">
<h3>TransactionSearch</h3>
<div id="apidetails">TransactionSearch API searches transaction
history for transactions that meet the specified criteria.</div>
</div>
<form method="POST" action ="TransactionSearch.php">

<div id="request_form">
<div class="params">
<div class="param_name">StartDate*</div>
<div class="param_value">
<input type="text" name="startDate"
value="<?php echo $startDate ?>" />
</div>
</div>
<div class="params">
<div class="param_name">EndDate</div>
<div class="param_value">
<input type="text" name="endDate"
value=<?php echo $endDate?> />(Optional)
</div>
</div>
<div class="params">
<div class="param_name">
Transaction ID(Get Transaction ID via <a
href="../DCC/DirectPayment">Direct Payment</a> or <a
href="../EC/SetExpressCheckout">ExpressCheckout</a>)
</div>
<div class="param_value">
<input type="text" name="transactionID" value="" size="50"
maxlength="260" />(Optional)
</div>
</div>
<div class="submit">
<input type="submit" name="TransactionSearchBtn"
value="TransactionSearch" /><br />
</div>
<a href="/merchant-sample/index.html">Home</a>

</div>
</form>

<div id="relatedcalls">
See also
<ul>
<li><a href="GetTransactionDetails">GetTransactionDetails</a>
</li>
<li><a href="GetPalDetails">GetPalDetails</a></li>
<li><a href="GetBalance">GetBalance</a>
</li>
<li><a href="AddressVerify">AddressVerify</a></li>
</ul>
</div>
</div>
</body>
</html>


