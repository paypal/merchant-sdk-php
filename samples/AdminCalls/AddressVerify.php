<?php
$path = '../../lib';
// Register auto loader
require($path . "/PayPal_Merchant_SDK_Autoloader.php");
PayPal_Merchant_SDK_Autoloader::register();

$logger = new PPLoggingManager('Address Verify');

$addressVerifyRequest = new AddressVerifyRequestType($_REQUEST['mail'], $_REQUEST['street'], $_REQUEST['zip']);
$addrVerifyReq = new AddressVerifyReq();
$addrVerifyReq->AddressVerifyRequest = $addressVerifyRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
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
