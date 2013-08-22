<?php
use PayPal\CoreComponentTypes\BasicAmountType;
use PayPal\PayPalAPI\DoCaptureReq;
use PayPal\PayPalAPI\DoCaptureRequestType;
use PayPal\Service\PayPalAPIInterfaceServiceService;
require_once('../PPBootStrap.php');
/*
 *  # DoCapture API
Captures an authorized payment.
This sample code uses Merchant PHP SDK to make API call
*/

/*
 *
`Amount` to capture which takes mandatory params:

* `currencyCode`
* `amount`
*/
$amount = new BasicAmountType($_REQUEST['currencyCode'], $_REQUEST['amt']);

/*
 *  `DoCaptureRequest` which takes mandatory params:

* `Authorization ID` - Authorization identification number of the
payment you want to capture. This is the transaction ID returned from
DoExpressCheckoutPayment, DoDirectPayment, or CheckOut. For
point-of-sale transactions, this is the transaction ID returned by
the CheckOut call when the payment action is Authorization.
* `amount` - Amount to capture
* `CompleteCode` - Indicates whether or not this is your last capture.
It is one of the following values:
* Complete – This is the last capture you intend to make.
* NotComplete – You intend to make additional captures.
`Note:
If Complete, any remaining amount of the original authorized
transaction is automatically voided and all remaining open
authorizations are voided.`
*/
$doCaptureReqest = new DoCaptureRequestType($_REQUEST['authID'], $amount, $_REQUEST['completeCodeType']);
$doCaptureReq = new DoCaptureReq();
$doCaptureReq->DoCaptureRequest = $doCaptureReqest;

/*
 *  ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
try {
	/* wrap API method calls on the service object with a try catch */
	$doCaptureResponse = $paypalService->DoCapture($doCaptureReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($doCaptureResponse)) {
	echo "<pre>";
	print_r($doCaptureResponse);
	echo "</pre>";
}
require_once '../Response.php';
