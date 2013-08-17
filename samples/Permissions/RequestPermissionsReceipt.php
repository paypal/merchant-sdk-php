<?php
use PayPal\Service\PermissionsService;
use PayPal\Types\Common\RequestEnvelope;
use PayPal\Types\Perm\RequestPermissionsRequest;
/********************************************
 RequestPermissionsReceipt.php
 Called by RequestPermissions.php
 Use the RequestPermissions API operation to request permissions to execute API operations on a PayPal account holder’s behalf. 
 ********************************************/
require_once('../PPBootStrap.php');
$serverName = $_SERVER['SERVER_NAME'];
$serverPort = $_SERVER['SERVER_PORT'];
$url = dirname('http://'.$serverName.':'.$serverPort.$_SERVER['REQUEST_URI']);

$returnURL = $url."/GetAccessToken.php";
$cancelURL = $url. "/RequestPermissions.php";

/*
 *  (Required) At least 1 of the following permission categories:

    EXPRESS_CHECKOUT - Express Checkout

    DIRECT_PAYMENT - Direct payment by debit or credit card

    SETTLEMENT_CONSOLIDATION - Settlement consolidation

    SETTLEMENT_REPORTING - Settlement reporting

    AUTH_CAPTURE - Payment authorization and capture

    MOBILE_CHECKOUT - Mobile checkout

    BILLING_AGREEMENT - Billing agreements

    REFERENCE_TRANSACTION - Reference transactions

    AIR_TRAVEL - Express Checkout for UTAP

    MASS_PAY - Mass pay

    TRANSACTION_DETAILS - Transaction details

    TRANSACTION_SEARCH - Transaction search

    RECURRING_PAYMENTS - Recurring payments

    ACCOUNT_BALANCE - Account balance

    ENCRYPTED_WEBSITE_PAYMENTS - Encrypted website payments

    REFUND - Refunds

    NON_REFERENCED_CREDIT - Non-referenced credit

    BUTTON_MANAGER - Button Manager

    MANAGE_PENDING_TRANSACTION_STATUS includes ManagePendingTransactionStatus

    RECURRING_PAYMENT_REPORT - Reporting for recurring payments

    EXTENDED_PRO_PROCESSING_REPORT - Extended Pro processing

    EXCEPTION_PROCESSING_REPORT - Exception processing

    ACCOUNT_MANAGEMENT_PERMISSION - Account Management Permission (MAM)

    ACCESS_BASIC_PERSONAL_DATA - User attributes

    ACCESS_ADVANCED_PERSONAL_DATA - User attributes

    INVOICING - Invoicing

 */
$scope = array();
if(isset($_POST['chkScope'])) {
	$i = 0;
	foreach ($_POST['chkScope'] as $value) {
		$scope[$i++] = $value;
	}
}

/*
 * (Required) Information common to each API operation, such as the language in which an error message is returned.
 */
$requestEnvelope = new RequestEnvelope("en_US");
$request = new RequestPermissionsRequest($scope, $returnURL);
$request->requestEnvelope = $requestEnvelope;

/*
 * 	 ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$service = new PermissionsService(Configuration::getAcctAndConfig());
try {
	/* wrap API method calls on the service object with a try catch */
	$response = $service->RequestPermissions($request);
} catch(Exception $ex) {
	require 'Error.php';
	exit;
}		
/* Display the API response back to the browser.
 If the response from PayPal was a success, display the response parameters'
 If the response was an error, display the errors received using APIError.php.
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<body>
<div id="request_form">
<h3>RequestPermissions - Response</h3>
<?php
$token = $response->token;
if(strtoupper($response->responseEnvelope->ack) == 'SUCCESS') {
	$payPalURL = 'https://www.sandbox.paypal.com/webscr&cmd='.'_grant-permission&request_token='.$token;
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>". $response->responseEnvelope->ack ."</div> </td></tr>";
	echo "<tr><td>Token :</td><td><div id='Token'>". $response->token ."</div> </td></tr>";
	echo "<tr><td><a href=$payPalURL><b>* Redirect URL to Complete RequestPermissions API operation </b></a></td></tr>";
	echo "</table>";
}
require_once 'ShowAllResponse.php';
?>

</div>
</body>
</html>
