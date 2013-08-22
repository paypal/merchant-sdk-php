<?php
require_once('../PPBootStrap.php');

$getBoardingDetailsReqest = new GetBoardingDetailsRequestType();
$getBoardingDetailsReqest->Token = $_REQUEST['onboardingToken'];


$getBoardingDetailsReq =  new GetBoardingDetailsReq();
$getBoardingDetailsReq->GetBoardingDetailsRequest = $getBoardingDetailsReqest;
/*
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$paypalService = new PayPalAPIInterfaceServiceService(Configuration::getAcctAndConfig());
try {
	/* wrap API method calls on the service object with a try catch */
	$getBoardingDetailsResponse = $paypalService->GetBoardingDetails($getBoardingDetailsReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($getBoardingDetailsResponse)) {
	echo "<pre>";
	print_r($getBoardingDetailsResponse);
	echo "</pre>";
}
require_once '../Response.php';
