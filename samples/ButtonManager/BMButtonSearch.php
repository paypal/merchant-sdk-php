<?php 
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('Button Search');

$buttonSearchRequest = new BMButtonSearchRequestType();
$buttonSearchRequest->Version = 84.0;
$buttonSearchRequest->StartDate = $_REQUEST['startDate'];
$buttonSearchRequest->EndDate = $_REQUEST['endDate'];

$buttonSearchReq = new BMButtonSearchReq();
$buttonSearchReq->BMButtonSearchRequest = $buttonSearchRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
$buttonSearchResponse = $paypalService->BMButtonSearch($buttonSearchReq);
echo "<pre>";
	print_r($buttonSearchResponse);
echo "</pre>";
require_once '../Response.php';