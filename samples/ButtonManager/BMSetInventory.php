<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalApi/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('BMGetButtonDetails');

$itemTrackingDetails = new ItemTrackingDetailsType();
$itemTrackingDetails->ItemQty = $_REQUEST['itemQty'];
$itemTrackingDetails->ItemCost = $_REQUEST['itemCost'];

$BMSetInventoryReqest = new BMSetInventoryRequestType();
$BMSetInventoryReqest->HostedButtonID = $_REQUEST['hostedID'];
$BMSetInventoryReqest->Version = 84;
$BMSetInventoryReqest->TrackInv = $_REQUEST['trackInv'];
$BMSetInventoryReqest->TrackPnl = $_REQUEST['trackPnl'];
$BMSetInventoryReqest->ItemTrackingDetails = $itemTrackingDetails;

$BMSetInventoryReq = new BMSetInventoryReq();
$BMSetInventoryReq->BMSetInventoryRequest = $BMSetInventoryReqest;

$paypalService = new PayPalAPIInterfaceServiceService();
$BMSetInventoryResponse = $paypalService->BMSetInventory($BMSetInventoryReq);
echo "<pre>";
print_r($BMSetInventoryResponse);
echo "</pre>";
require_once '../Response.php';