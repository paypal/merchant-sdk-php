<?php 

$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
session_start();


$logger = new PPLoggingManager('TransactionDetails');
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	// send request
$req = new GetTransactionDetailsRequestType();

$req->TransactionID = $_POST['TransactionID'];


$req->Version = 78.0;
$trans = new GetTransactionDetailsReq();
$trans->GetTransactionDetailsRequest = $req;
	
	$logger->error("created transDetailRequest Object");
	$trans_service = new PayPalAPIInterfaceServiceService();
	$createTransDetailsResponse = $trans_service->GetTransactionDetails($trans);
	//$logger->error("Received $createTransDetailsResponse:");
	var_dump($createTransDetailsResponse);
} else {

	?>
<html>
<head>
<title>Merchant Sample API Page</title>
</head>
<body>
<h2>Merchant API Test Page</h2>
<form method="POST">
<div class="params">
<div class="param_name">TransactionID</div>
<div class="param_value"><input type="text" name="TransactionID"
	value="6MS29234D79035902" size="50" maxlength="260" /></div>


<input type="submit" name="Merchant" value="Get Details" /></div>
</form>
</body>
</html>
	<?php

}
?>