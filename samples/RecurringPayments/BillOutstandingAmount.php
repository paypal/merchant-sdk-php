<?php
use PayPal\CoreComponentTypes\BasicAmountType;
use PayPal\EBLBaseComponents\BillOutstandingAmountRequestDetailsType;
use PayPal\PayPalAPI\BillOutstandingAmountReq;
use PayPal\PayPalAPI\BillOutstandingAmountRequestType;
use PayPal\Service\PayPalAPIInterfaceServiceService;
require_once('../PPBootStrap.php');

/*
 * The BillOutstandingAmount API operation bills the buyer for the outstanding balance associated with a recurring payments profile. 
 */

$billOutstandingAmtReqestDetail = new BillOutstandingAmountRequestDetailsType();

/*
 * (Optional) The amount to bill. The amount must be less than or equal to the current outstanding balance of the profile. If no value is specified, PayPal attempts to bill the entire outstanding balance amount.
 */
$billOutstandingAmtReqestDetail->Amount = new BasicAmountType($_REQUEST['currencyCode'], $_REQUEST['amt']);

/*
 *  (Required) Recurring payments profile ID returned in the CreateRecurringPaymentsProfile response.
Note:The profile must have a status of either Active or Suspended. 
 */
$billOutstandingAmtReqestDetail->ProfileID = $_REQUEST['profileID'];

$billOutstandingAmtReqest = new BillOutstandingAmountRequestType();
$billOutstandingAmtReqest->BillOutstandingAmountRequestDetails = $billOutstandingAmtReqestDetail;


$billOutstandingAmtReq =  new BillOutstandingAmountReq();
$billOutstandingAmtReq->BillOutstandingAmountRequest = $billOutstandingAmtReqest;

/*
 * 	 ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
try {
	/* wrap API method calls on the service object with a try catch */
	$billOutstandingAmtResponse = $paypalService->BillOutstandingAmount($billOutstandingAmtReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}

if(isset($billOutstandingAmtResponse)) {
	echo "<pre>";
	print_r($billOutstandingAmtResponse);
	echo "</pre>";
}
require_once '../Response.php';
