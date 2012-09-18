<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('GetBoardingDetails');

$getBoardingDetailsReqest = new GetBoardingDetailsRequestType();
$getBoardingDetailsReqest->Token = $_REQUEST['onboardingToken'];


$getBoardingDetailsReq =  new GetBoardingDetailsReq();
$getBoardingDetailsReq->GetBoardingDetailsRequest = $getBoardingDetailsReqest;

$paypalService = new PayPalAPIInterfaceServiceService();
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