<?php
use PayPal\PayPalAPI\AddressVerifyReq;
use PayPal\PayPalAPI\AddressVerifyRequestType;
use PayPal\Service\PayPalAPIInterfaceServiceService;
require_once('../PPBootStrap.php');

/*
 * The AddressVerify API operation confirms whether a postal address and postal code match those of the specified PayPal account holder.
 */

/*
 * Email address of a PayPal member to verify
 * First line of the billing or shipping postal address to verify. To pass verification, the value of Street must match the first 3 single-byte characters of a postal address on file for the PayPal member. 
 * Postal code to verify. To pass verification, the value of Zip must match the first 5 single-byte characters of the postal code of the verified postal address for the verified PayPal member.
 */

$addressVerifyRequest = new AddressVerifyRequestType($_REQUEST['mail'], $_REQUEST['street'], $_REQUEST['zip']);
$addrVerifyReq = new AddressVerifyReq();
$addrVerifyReq->AddressVerifyRequest = $addressVerifyRequest;

/*
 * 		// ## Creating service wrapper object
		// Creating service wrapper object to make API call and loading
		Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
try {
	/* wrap API method calls on the service object with a try catch */
	$addrVerifyResponse = $paypalService->AddressVerify($addrVerifyReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($addrVerifyResponse)) {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$addrVerifyResponse->Ack</div> </td></tr>";
	echo "<tr><td>StreetMatch :</td><td><div id='StreetMatch'>$addrVerifyResponse->StreetMatch</div> </td></tr>";
	echo "<tr><td>ZipMatch :</td><td><div id='ZipMatch'>$addrVerifyResponse->ZipMatch</div> </td></tr>";
	echo "</table>";
	echo "<pre>";
	print_r($addrVerifyResponse);
	echo "</pre>";
}
require_once '../Response.php';
