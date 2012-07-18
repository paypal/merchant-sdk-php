<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('GetBoardingDetails');

$getBoardingDetailsReqest = new GetBoardingDetailsRequestType();
$getBoardingDetailsReqest->Token = $_REQUEST['onboardingToken'];
$getBoardingDetailsReqest->Version = 86;

$getBoardingDetailsReq =  new GetBoardingDetailsReq();
$getBoardingDetailsReq->GetBoardingDetailsRequest = $getBoardingDetailsReqest;

$paypalService = new PayPalAPIInterfaceServiceService();
$getBoardingDetailsResponse = $paypalService->GetBoardingDetails($getBoardingDetailsReq);

echo "<pre>";
print_r($getBoardingDetailsResponse);
echo "</pre>";
require_once '../Response.php';