<?php
use PayPal\Service\PermissionsService;
use PayPal\Types\Common\RequestEnvelope;
use PayPal\Types\Perm\GetAccessTokenRequest;
/********************************************
 GetAccessTokenReceipt.php
 Called by GetAccessToken.php
 Use the GetAccessToken API operation to obtain an access token for a set of permissions. 
 ********************************************/
require_once('../PPBootStrap.php');

/*
 * (Required) Information common to each API operation, such as the language in which an error message is returned.
 */
$requestEnvelope = new RequestEnvelope();
$requestEnvelope->errorLanguage = "en_US";

$request = new GetAccessTokenRequest();
$request->requestEnvelope = $requestEnvelope;
/*
 * (Required) The request token from the response to RequestPermissions. 
 */
$request->token = $_REQUEST['Requesttoken'];
/*
 * (Required) The verification code returned in the redirect from PayPal to the return URL. 
 */
$request->verifier = $_REQUEST['Verifier'];

/*
 * 	 ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$service = new PermissionsService(Configuration::getAcctAndConfig());
try {
	/* wrap API method calls on the service object with a try catch */
	$response = $service->GetAccessToken($request);
} catch (Exception $ex) {
	require 'Error.php';
	exit;
}

/* Display the API response back to the browser. */
$ack = strtoupper($response->responseEnvelope->ack);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
	<title>GetAccessToken - Response</title>
</head>

<body>

<div id="request_form">
<center>
<h3>GetAccessToken</h3>
<br />
</center>

<?php
echo "<table>";
echo "<tr><td>Ack :</td><td><div id='Ack'>". $response->responseEnvelope->ack ."</div> </td></tr>";
echo "<tr><td>Token :</td><td><div id='Token'>". $response->token ."</div> </td></tr>";
echo "<tr><td>TokenSecret :</td><td><div id='TokenSecret'>". $response->tokenSecret ."</div> </td></tr>";
echo "</table>";

require_once 'ShowAllResponse.php';
?>
</div>
</body>
</html>