<?php 
define('DS', DIRECTORY_SEPARATOR);
$useComposer = false;
exec('composer',$output,$status);
if($useComposer && $status == 0)
{
	 exec('composer update',$output,$status);
	 echo $output;
}
else 
{
	customInstall();
}
function customInstall()
{
	//$json = file_get_contents("composer.json");
	//$json_a = json_decode($json, true);
	/**
	 *  download zip from github
	*/
	$target_url = "https://github.com/paypal/sdk-core-php/archive/composer.zip";
	$fileZip = "tempZip.zip";
	$dest= 'vendor/paypal/';
	$tempSourceDir = 'sdk-core-php-composer';
	$ch = curl_init();
	$fp = fopen("$fileZip", "w");
	curl_setopt($ch, CURLOPT_URL,$target_url);
	curl_setopt($ch, CURLOPT_FAILONERROR, true);
	curl_setopt($ch, CURLOPT_HEADER,0);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_AUTOREFERER, true);
	curl_setopt($ch, CURLOPT_BINARYTRANSFER,true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_FILE, $fp);
	$res = curl_exec($ch);
	if (!$res) {
		echo "<br />cURL error number:" .curl_errno($ch);
		echo "<br />cURL error:" . curl_error($ch);
		exit;
	}
	curl_close($ch);

	/**
	 * check if zip extension is enabled
	*/
	if (!extension_loaded('zip')) {
		echo "<br>Please enable zip extension in php.ini";
		exit;
	}

	$zip = new ZipArchive;
	if($zip->open($fileZip) != "true") {
		echo "<br>Could not open $fileZip";
		exit;
	}
	$t =$zip->extractTo($dest);
	$zip->close();

	fclose($fp);
	unlink($fileZip);
	require_once '../bin/createAutoloader.php';
}