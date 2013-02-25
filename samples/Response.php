<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>PayPal Merchant SDK - API response</title>
</head>
<body>
	<table>
		<tr>
			<td>Request:</td>
		</tr>
		<tr>
			<td><textarea rows="10" cols="100"><?php echo htmlspecialchars($paypalService->getLastRequest())?></textarea></td>
		</tr>
		<tr>
			<td>Response:</td>
		</tr>
		<tr>
			<td><textarea rows="10" cols="100"><?php echo htmlspecialchars($paypalService->getLastResponse());?></textarea></td>
		</tr>
	</table>
	<br>
	<a href="../index.php">Home</a>
</body>
</html>