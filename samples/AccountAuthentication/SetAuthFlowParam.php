<?php
use PayPal\EBLBaseComponents\SetAuthFlowParamRequestDetailsType;
use PayPal\PayPalAPI\SetAuthFlowParamReq;
use PayPal\PayPalAPI\SetAuthFlowParamRequestType;
use PayPal\Service\PayPalAPIInterfaceServiceService;
require_once('../PPBootStrap.php');

/*
 * Sets up the account authentication flow and returns a token
 * To validate a PayPal account in the sandbox:

    1. Set up the account authentication flow.
    2. Redirect the customer to PayPal for authorization.
    3. Retrieve the customer data for identifying the customer on your site.

 */
$reqDetails = new SetAuthFlowParamRequestDetailsType();
$reqDetails->CancelURL = $_REQUEST['cancelURL'];
$reqDetails->ReturnURL = $_REQUEST['returnURL'];
$reqDetails->LogoutURL = $_REQUEST['logoutURL'];

$reqType = new SetAuthFlowParamRequestType();

$reqType->SetAuthFlowParamRequestDetails = $reqDetails;
$req = new SetAuthFlowParamReq();
$req->SetAuthFlowParamRequest = $reqType;

/*
 * 	 ## Creating service wrapper object
		 Creating service wrapper object to make API call and loading
		Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
try {
	/* wrap API method calls on the service object with a try catch */
	$setAuthFlowParamResponse = $paypalService->SetAuthFlowParam($req);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}

if(isset($setAuthFlowParamResponse)) {
	echo "<pre>";
	print_r($setAuthFlowParamResponse);
	echo "</pre>";
	if($setAuthFlowParamResponse->Ack == 'Success') {
		$token = $setAuthFlowParamResponse->Token;
		$payPalURL = 'https://www.sandbox.paypal.com/webscr&cmd=_account-authenticate-login&token='.$token;
		echo"<a href=$payPalURL><b>* Redirect to paypal to login</b></a><br>";
	}
}
require_once '../Response.php';
