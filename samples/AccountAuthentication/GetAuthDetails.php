<?php
use PayPal\PayPalAPI\GetAuthDetailsReq;
use PayPal\PayPalAPI\GetAuthDetailsRequestType;
use PayPal\Service\PayPalAPIInterfaceServiceService;
require_once('../PPBootStrap.php');

/*
 *  If a token from the SetAuthFlowParam call is specified on input, the GetAuthDetails call can return a customer's Payer ID, PayPal email address, first name, and last name. 
 */
$reqType = new GetAuthDetailsRequestType($_REQUEST['token']);
$req = new GetAuthDetailsReq();
$req->GetAuthDetailsRequest = $reqType;

$logger->info("created GetAuthDetailsRequest Object");
/*
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
try {
	/* wrap API method calls on the service object with a try catch */
	$getAuthDetailsResponse = $paypalService->GetAuthDetails($req);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}

if(isset($getAuthDetailsResponse)) {
	echo "<pre>";
	print_r($getAuthDetailsResponse);
	echo "</pre>";
	if($getAuthDetailsResponse->Ack == 'Success') {
		$payPalURL = 'https://www.sandbox.paypal.com/webscr&cmd=_account-authenticate-logout&token='.$token;
		echo "<a href=$payPalURL><b>* Redirect to paypal to logout</b></a><br>";
	}
}
/*
 * Note that the GetAuthDetails call is used after you have specified a set of customer data in the SetAuthFlowParam call (in the example above, the customer name and email address), and the customer has logged into PayPal and then was redirected back to your site
 */
require_once '../Response.php';
