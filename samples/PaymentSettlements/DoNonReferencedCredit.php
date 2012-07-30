<?php
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PayPalAPIInterfaceService/PayPalAPIInterfaceServiceService.php');
require_once('PPLoggingManager.php');
/**
 * Get required parameters from the web form for the request
 */
$logger = new PPLoggingManager('DoNonReferencedCredit');

$amount = new BasicAmountType();
$amount->currencyID = $_REQUEST['currencyID'];
$amount->value = $_REQUEST['netAmount'];

$creditCard = new CreditCardDetailsType();
$creditCard->CreditCardNumber = $_REQUEST['creditCard'];
$creditCard->ExpMonth = $_REQUEST['expMonth'];
$creditCard->ExpYear =$_REQUEST['expYear'];
$creditCard->CreditCardType = $_REQUEST['creditCardType'];
$creditCard->CVV2 = $_REQUEST['cvv'];

$doNonRefCreditRequestDetails= new DoNonReferencedCreditRequestDetailsType();
$doNonRefCreditRequestDetails->CreditCard = $creditCard;
$doNonRefCreditRequestDetails->Comment =$_REQUEST['comment'];
$doNonRefCreditRequestDetails->NetAmount =$amount;


$doNonRefCreditRequest = new DoNonReferencedCreditRequestType();
$doNonRefCreditRequest->DoNonReferencedCreditRequestDetails =$doNonRefCreditRequestDetails ;
$doNonRefCreditRequest->Version = 92;

$doNonRefCreditReq = new DoNonReferencedCreditReq();
$doNonRefCreditReq->DoNonReferencedCreditRequest = $doNonRefCreditRequest;

$paypalService = new PayPalAPIInterfaceServiceService();
$doNonRefCreditResponse = $paypalService->DoNonReferencedCredit($doNonRefCreditReq);
echo "<pre>";
print_r($doNonRefCreditResponse);
echo "</pre>";
require_once '../Response.php';