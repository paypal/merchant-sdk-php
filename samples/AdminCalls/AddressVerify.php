<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('Address Verify');

$addressVerifyRequest = new AddressVerifyRequestType();
$addressVerifyRequest->Email = $_REQUEST['mail'];
$addressVerifyRequest->Street =$_REQUEST['street'];
$addressVerifyRequest->Zip = $_REQUEST['zip'];

$addrVerifyReq = new AddressVerifyReq();
$addrVerifyReq->AddressVerifyRequest = $addressVerifyRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
$addrVerifyResponse = $paypalService->AddressVerify($addrVerifyReq);

echo "<table>";
echo "<tr><td>Ack :</td><td><div id='Ack'>$addrVerifyResponse->Ack</div> </td></tr>";
echo "<tr><td>StreetMatch :</td><td><div id='StreetMatch'>$addrVerifyResponse->StreetMatch</div> </td></tr>";
echo "<tr><td>ZipMatch :</td><td><div id='ZipMatch'>$addrVerifyResponse->ZipMatch</div> </td></tr>";
echo "</table>";
echo "<pre>";
print_r($addrVerifyResponse);
echo "</pre>";
require_once '../Response.php';