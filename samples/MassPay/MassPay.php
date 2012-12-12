<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('MassPay');

$massPayRequest = new MassPayRequestType();
$massPayRequest->MassPayItem = array();
for($i=0; $i<count($_REQUEST['mail']); $i++) {	
	$masspayItem = new MassPayRequestItemType();	
	$masspayItem->Amount = new BasicAmountType($_REQUEST['currencyCode'][$i], $_REQUEST['amount'][$i]);
	if($_REQUEST['receiverInfoCode'] == 'EmailAddress') {
		$masspayItem->ReceiverEmail = $_REQUEST['mail'][$i];
	} elseif ($_REQUEST['receiverInfoCode'] == 'UserID') {
		$masspayItem->ReceiverID = $_REQUEST['id'][$i];
	} elseif ($_REQUEST['receiverInfoCode'] == 'PhoneNumber') {
		$masspayItem->ReceiverPhone = $_REQUEST['phone'][$i];
	}
	$massPayRequest->MassPayItem[] = $masspayItem;
}
$massPayReq = new MassPayReq();
$massPayReq->MassPayRequest = $massPayRequest;

$paypalService = new PayPalAPIInterfaceServiceService();

// required in third party permissioning
if(($_POST['accessToken']!= null) && ($_POST['tokenSecret'] != null)) {
	$paypalService->setAccessToken($_POST['accessToken']);
	$paypalService->setTokenSecret($_POST['tokenSecret']);
}

try {
	/* wrap API method calls on the service object with a try catch */
	$massPayResponse = $paypalService->MassPay($massPayReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}
if(isset($massPayResponse)) {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$massPayResponse->Ack</div> </td></tr>";
	echo "</table>";

	echo "<pre>";
	print_r($massPayResponse);
	echo "</pre>";
}
require_once '../Response.php';