<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('MassPay');

$amt1 = new BasicAmountType();
$amt1->currencyID = $_REQUEST['currencyCode1'];
$amt1->value = $_REQUEST['amount1'];

$amt2 = new BasicAmountType();
$amt2->currencyID = $_REQUEST['currencyCode2'];
$amt2->value = $_REQUEST['amount2'];

$amt3 = new BasicAmountType();
$amt3->currencyID = $_REQUEST['currencyCode2'];
$amt3->value = $_REQUEST['amount2'];

$masspayItem1 = new MassPayRequestItemType();
$masspayItem2 = new MassPayRequestItemType();
$masspayItem3 = new MassPayRequestItemType();

$masspayItem1->Amount = $amt1;
$masspayItem2->Amount = $amt2;
$masspayItem3->Amount = $amt3;

if($_REQUEST['receiverInfoCode'] == 'EmailAddress')
{
	$masspayItem1->ReceiverEmail =$_REQUEST['mail1'];
	$masspayItem2->ReceiverEmail =$_REQUEST['mail2'];
	$masspayItem3->ReceiverEmail =$_REQUEST['mail3'];
}
elseif ($_REQUEST['receiverInfoCode'] == 'UserID')
{
	$masspayItem1->ReceiverID =$_REQUEST['id1'];
	$masspayItem2->ReceiverID =$_REQUEST['id2'];
	$masspayItem3->ReceiverID =$_REQUEST['id3'];
}

elseif ($_REQUEST['receiverInfoCode'] == 'PhoneNumber')
{
	$masspayItem1->ReceiverPhone =$_REQUEST['phone1'];
	$masspayItem2->ReceiverPhone =$_REQUEST['phone2'];
	$masspayItem3->ReceiverPhone =$_REQUEST['phone3'];
}

$massPayRequest = new MassPayRequestType();
$massPayRequest->MassPayItem = Array($masspayItem1,$masspayItem2,$masspayItem3);
$massPayRequest->Version = 86;

$massPayReq = new MassPayReq();
$massPayReq->MassPayRequest = $massPayRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
$massPayResponse = $paypalService->MassPay($massPayReq);

echo "<pre>";
print_r($massPayResponse);
echo "</pre>";
require_once '../Response.php';