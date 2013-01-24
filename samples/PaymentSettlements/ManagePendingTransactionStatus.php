<?php
require_once('../PPBootStrap.php');
/**
 * Get required parameters from the web form for the request
 */
$logger = new PPLoggingManager('ManagePendingTransactionStatus');

$MPTranStatusReqest= new ManagePendingTransactionStatusRequestType($_REQUEST['transactionID'], $_REQUEST['action']);
$MPTranStatusReq = new ManagePendingTransactionStatusReq();
$MPTranStatusReq->ManagePendingTransactionStatusRequest = $MPTranStatusReqest;

$paypalService = new PayPalAPIInterfaceServiceService();
try {
	/* wrap API method calls on the service object with a try catch */
	$MPTranStatusResponse = $paypalService->ManagePendingTransactionStatus($MPTranStatusReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($MPTranStatusResponse)) {
	echo "<pre>";
	print_r($MPTranStatusResponse);
	echo "</pre>";
}
require_once '../Response.php';
?>
