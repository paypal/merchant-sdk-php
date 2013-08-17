<?php
use PayPal\CoreComponentTypes\BasicAmountType;
use PayPal\PayPalAPI\RefundTransactionReq;
use PayPal\PayPalAPI\RefundTransactionRequestType;
use PayPal\Service\PayPalAPIInterfaceServiceService;
require_once('../PPBootStrap.php');

/*
 * The RefundTransaction API operation issues a refund to the PayPal account holder associated with a transaction. 
 This sample code uses Merchant PHP SDK to make API call
 */
$refundReqest = new RefundTransactionRequestType();

/*
 * 	 Type of refund you are making. It is one of the following values:
		
		 * `Full` - Full refund (default).
		 * `Partial` - Partial refund.
		 * `ExternalDispute` - External dispute. (Value available since
		 version
		 82.0)
		 * `Other` - Other type of refund. (Value available since version
		 82.0)
 */
if($_REQUEST['amt'] != "" && strtoupper($_POST['refundType']) != "FULL") {
	/*
	 * 		 `Refund amount`, which contains
		
		 * `Currency Code`
		 * `Amount`
		 The amount is required if RefundType is Partial.
		 `Note:
		 If RefundType is Full, do not set the amount.`
	 */
	$refundReqest->Amount = new BasicAmountType($_REQUEST['currencyID'], $_REQUEST['amt']);
}
$refundReqest->RefundType = $_REQUEST['refundType'];

/*
 *  Either the `transaction ID` or the `payer ID` must be specified.
		 PayerID is unique encrypted merchant identification number
		 For setting `payerId`,
		 `refundTransactionRequest.setPayerID("A9BVYX8XCR9ZQ");`

		 Unique identifier of the transaction to be refunded.
 */
$refundReqest->TransactionID = $_REQUEST['transID'];

/*
 *  (Optional)Type of PayPal funding source (balance or eCheck) that can be used for auto refund. It is one of the following values:

    any – The merchant does not have a preference. Use any available funding source.

    default – Use the merchant's preferred funding source, as configured in the merchant's profile.

    instant – Use the merchant's balance as the funding source.

    eCheck – The merchant prefers using the eCheck funding source. If the merchant's PayPal balance can cover the refund amount, use the PayPal balance.

 */
$refundReqest->RefundSource = $_REQUEST['refundSource'];
$refundReqest->Memo = $_REQUEST['memo'];
/*
 * 
   (Optional) Maximum time until you must retry the refund. 
 */
$refundReqest->RetryUntil = $_REQUEST['retryUntil'];

$refundReq = new RefundTransactionReq();
$refundReq->RefundTransactionRequest = $refundReqest;

/*
 * 	 ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
try {
	/* wrap API method calls on the service object with a try catch */
	$refundResponse = $paypalService->RefundTransaction($refundReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($refundResponse)) {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$refundResponse->Ack</div> </td></tr>";
	//echo "<tr><td>RefundStatus :</td><td><div id='RefundStatus'>$refundResponse->RefundInfo->RefundStatus</div> </td></tr>";
	echo "</table>";
	echo "<pre>";
	print_r($refundResponse);
	echo "</pre>";
}
require_once '../Response.php';
