<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('Address Verify');

$addressVerifyRequest = new AddressVerifyRequestType();
$addressVerifyRequest->Email = $_REQUEST['mail'];
$addressVerifyRequest->Street =$_REQUEST['street'];
$addressVerifyRequest->Zip = $_REQUEST['zip'];
$addressVerifyRequest->Version = 78.0;
$addrVerifyReq = new AddressVerifyReq();
$addrVerifyReq->AddressVerifyRequest = $AddressVerifyRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
$addrVerifyResponse = $paypalService->AddressVerify($addrVerifyReq);
echo "<pre>";
var_dump($addrVerifyResponse);
echo "</pre>";