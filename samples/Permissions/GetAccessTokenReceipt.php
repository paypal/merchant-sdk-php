<?php

/********************************************
 GetAccessTokenReceipt.php
 Called by GetAccessToken.php
 ********************************************/
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PermissionsService.php');

$requestEnvelope = new RequestEnvelope();
$requestEnvelope->errorLanguage = "en_US";
$request = new GetAccessTokenRequest();
$request->requestEnvelope = $requestEnvelope;
$request->token = $_REQUEST['Requesttoken'];
$request->verifier = $_REQUEST['Verifier'];
$service = new PermissionsService('Permissions');
try {
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