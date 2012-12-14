<?php

/********************************************
 RequestPermissionsReceipt.php
 Called by RequestPermissions.php
 ********************************************/
$path = '../../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/PermissionsService.php');

$serverName = $_SERVER['SERVER_NAME'];
$serverPort = $_SERVER['SERVER_PORT'];
$url = dirname('http://'.$serverName.':'.$serverPort.$_SERVER['REQUEST_URI']);
$returnURL = $url."/GetAccessToken.php";
$cancelURL = $url. "/RequestPermissions.php";
$scope = array();
if(isset($_POST['chkScope'])) {
	$i = 0;
	foreach ($_POST['chkScope'] as $value) {
		$scope[$i++] = $value;
	}
}
$requestEnvelope = new RequestEnvelope("en_US");
$request = new RequestPermissionsRequest($scope, $returnURL);
$request->requestEnvelope = $requestEnvelope;
$service = new PermissionsService('Permissions');
try {
	$response = $service->RequestPermissions($request);
} catch(Exception $ex) {
	require 'Error.php';
	exit;
}		
/* Display the API response back to the browser.
 If the response from PayPal was a success, display the response parameters'
 If the response was an error, display the errors received using APIError.php.
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<body>
<div id="request_form">
<h3>RequestPermissions - Response</h3>
<?php
$token = $response->token;
if(strtoupper($response->responseEnvelope->ack) == 'SUCCESS') {
	$payPalURL = 'https://www.sandbox.paypal.com/webscr&cmd='.'_grant-permission&request_token='.$token;
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>". $response->responseEnvelope->ack ."</div> </td></tr>";
	echo "<tr><td>Token :</td><td><div id='Token'>". $response->token ."</div> </td></tr>";
	echo "<tr><td><a href=$payPalURL><b>* Redirect URL to Complete RequestPermissions API operation </b></a></td></tr>";
	echo "</table>";
}
require_once 'ShowAllResponse.php';
?>

</div>
</body>
</html>
