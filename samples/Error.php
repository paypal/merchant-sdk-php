<?php

$ex_message = "";
$ex_detailed_message = "";
$ex_type = "Unknown";

if(isset($ex)) {

	$ex_message = $ex->getMessage();
	$ex_type = get_class($ex);

	if($ex instanceof PPConnectionException) {
		$ex_detailed_message = "Error connecting to " . $ex->getUrl();
	} else if($ex instanceof PPMissingCredentialException || $ex instanceof PPInvalidCredentialException) {
		$ex_detailed_message = $ex->errorMessage();
	} else if($ex instanceof PPConfigurationException) {
		$ex_detailed_message = "Invalid configuration. Please check your configuration file";
	}
}
?>

<html>
<title>PayPal SDK Sample - Exception</title>
<body>
	<div id="error_info" style="text-align: center;">
		<div id="error_title">
			<b>SDK Exception</b><br /> <br />
		</div>
		<table style="margin: auto;">
			<tr>
				<td><b>Type</b></td>
				<td><?php echo $ex_type;?>
				</td>
			</tr>

			<tr>
				<td><b>Message</b></td>
				<td><?php echo $ex_message;?>
				</td>
			</tr>
			<tr>
				<td><b>Detail</b></td>
				<td><?php echo $ex_detailed_message;?>
				</td>
			</tr>

		</table>
		<br> <a href="index.php">Home</a>
	</div>
</body>
</html>
