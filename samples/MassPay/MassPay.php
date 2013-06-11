<?php
require_once('../PPBootStrap.php');
require_once('Constants.php');
/*
 *  # MassPay API
The MassPay API operation makes a payment to one or more PayPal account
holders.
This sample code uses Merchant PHP SDK to make API call
*/
$massPayRequest = new MassPayRequestType();
$massPayRequest->MassPayItem = array();
for($i=0; $i<count($_REQUEST['mail']); $i++) {
	$masspayItem = new MassPayRequestItemType();
	/*
	 *  `Amount` for the payment which contains

	* `Currency Code`
	* `Amount`
	*/
	$masspayItem->Amount = new BasicAmountType($_REQUEST['currencyCode'][$i], $_REQUEST['amount'][$i]);
	if($_REQUEST['receiverInfoCode'] == 'EmailAddress') {
		/*
		 *  (Optional) How you identify the recipients of payments in this call to MassPay. It is one of the following values:
		EmailAddress
		UserID
		PhoneNumber
		*/
		$masspayItem->ReceiverEmail = $_REQUEST['mail'][$i];
	} elseif ($_REQUEST['receiverInfoCode'] == 'UserID') {
		$masspayItem->ReceiverID = $_REQUEST['id'][$i];
	} elseif ($_REQUEST['receiverInfoCode'] == 'PhoneNumber') {
		$masspayItem->ReceiverPhone = $_REQUEST['phone'][$i];
	}
	$massPayRequest->MassPayItem[] = $masspayItem;
}

/*
 *  ## MassPayReq
Details of each payment.
`Note:
A single MassPayRequest can include up to 250 MassPayItems.`
*/
$massPayReq = new MassPayReq();
$massPayReq->MassPayRequest = $massPayRequest;

/*
 * 	 ## Creating service wrapper object
Creating service wrapper object to make API call and loading
configuration file for your credentials and endpoint
*/
$paypalService = new PayPalAPIInterfaceServiceService();

// required in third party permissioning
if(($_POST['accessToken']!= null) && ($_POST['tokenSecret'] != null)) {
		$cred = new PPSignatureCredential(USERNAME, PASSWORD, SIGNATURE);
	    $cred->setThirdPartyAuthorization(new PPTokenAuthorization($_POST['accessToken'], $_POST['tokenSecret']));
}

try {
	/* wrap API method calls on the service object with a try catch */
	if(($_POST['accessToken']!= null) && ($_POST['tokenSecret'] != null)) {
		$massPayResponse = $paypalService->MassPay($massPayReq, $cred);
	}
	else{
		$massPayResponse = $paypalService->MassPay($massPayReq);
	}
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
