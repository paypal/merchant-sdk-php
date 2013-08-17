<?php
use PayPal\PayPalAPI\ManagePendingTransactionStatusReq;
use PayPal\PayPalAPI\ManagePendingTransactionStatusRequestType;
use PayPal\Service\PayPalAPIInterfaceServiceService;
require_once('../PPBootStrap.php');

/*
 * The ManagePendingTransactionStatus API operation accepts or denys a pending transaction held by Fraud Management Filters. 
 */

/*
 * (Required) The transaction ID of the payment transaction. 
 * 
 * (Required) The operation you want to perform on the transaction. It is one of the following values:

    Accept – Accepts the payment

    Deny – Rejects the payment

 */
$MPTranStatusReqest= new ManagePendingTransactionStatusRequestType($_REQUEST['transactionID'], $_REQUEST['action']);
$MPTranStatusReq = new ManagePendingTransactionStatusReq();
$MPTranStatusReq->ManagePendingTransactionStatusRequest = $MPTranStatusReqest;

/*
 * 	 ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
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
