<table>
	<tr>
		<td>Request:</td>
	</tr>
	<tr>
		<td><textarea rows="10" cols="100">
				<?php echo $paypalService->getLastRequest()?>
			</textarea></td>
	</tr>
	<tr>
		<td>Response:</td>
	</tr>
	<tr>
		<td><textarea rows="10" cols="100">
				<?php echo $paypalService->getLastResponse()?>
			</textarea></td>
	</tr>
</table>
<br>
<a href="../Index.php">Home</a>
