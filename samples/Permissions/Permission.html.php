<br/>
<input type="checkbox" id="permissions" <?php if (isset($_GET['permToken'])) echo ' checked ';?> onclick="javascript: toggleDisplay('permissionsdata');"/>
<label for="permissions"> Use Permission Credentials </label><br/>
<div id="permissionsdata" style="display: <?php if (isset($_GET['permToken'])) echo 'block'; else echo 'none'; ?>">
	<div class="overview">The PayPal Permissions API allows you to request and obtain permissions to execute one or more APIs on behalf of your customers (third party). The granted permission is represented by a access token and token secret pair that you must store securely.</div>
	<div class="param_name">Access Token</div>
	<div class="param_value">
		<input type="text" name="accessToken"
			value="<?php if(isset($_GET['permToken'])) echo $_GET['permToken'];?>"
			size="50" />
	</div>
	<div class="param_name">Token Secret</div>
	<div class="param_value">
		<input type="text" name="tokenSecret" id="auth"
			value="<?php if(isset($_GET['permTokenSecret'])) echo $_GET['permTokenSecret'];?>"
			size="50" />
	</div>
	Click <a href="../Permissions/RequestPermissions.php" target="_blank">here</a> to get AccessToken and TokenSecret<br />
</div>
<br/>