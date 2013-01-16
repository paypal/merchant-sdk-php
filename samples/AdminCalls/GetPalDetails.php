<?php
$path = '../../lib';
// Register auto loader
require($path . "/PayPal_Merchant_SDK_Autoloader.php");
PayPal_Merchant_SDK_Autoloader::register();

$logger = new PPLoggingManager('GetPlaDetails');
$getPalDetailsRequest = new GetPalDetailsRequestType();
$getPalDetailsReq = new GetPalDetailsReq();
$getPalDetailsReq->GetPalDetailsRequest = $getPalDetailsRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
try {
	/* wrap API method calls on the service object with a try catch */
	$getPalDetailsResponse = $paypalService->GetPalDetails($getPalDetailsReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($getPalDetailsResponse)) {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$getPalDetailsResponse->Ack</div> </td></tr>";
	echo "<tr><td>Pal :</td><td><div id='Pal'>$getPalDetailsResponse->Pal</div> </td></tr>";
	echo "</table>";
	echo "<pre>";
	print_r($getPalDetailsResponse);
	echo "</pre>";
}
require_once '../Response.php';
