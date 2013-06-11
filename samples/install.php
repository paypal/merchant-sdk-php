<?php 

/**
 *  Downloads PayPal PHP SDK dependencies based on your composer.json file
 */

define('DS', DIRECTORY_SEPARATOR);

define('COMPOSER_FILE', 'composer.json');

// name of the bootstrap file in custom installation
define('BOOTSTRAP_FILE', 'PPBootStrap.php');

// name of the SDK configuration file
define('CONFIGURATION_FILE', 'sdk_config.ini');

// URL from where the composer.json is downloaded if not present
define('COMPOSER_URL', 'https://raw.github.com/paypal/merchant-sdk-php/stable/samples/composer.json');

// Flag to control whether composer should be used for installation
$useComposer = false;

init($useComposer);
createAutoload();
createConfig(CONFIGURATION_FILE);
createBootStrap(BOOTSTRAP_FILE);
echo "Installation successful";
exit(0);


function init($useComposer) {

	// download if composer.json is not present
	if(!file_exists(COMPOSER_FILE)) {
		$fp = fopen(COMPOSER_FILE, "w");
		curlExec(COMPOSER_URL, $fp);
		fclose($fp);
	}

	// check if composer is installed
	if($useComposer) {
		@exec('composer', $output, $status);
		if( $status == 0) {
			@exec('composer update', $output, $status);
			var_dump($output);
			exit($status);
		} else {
			@exec('composer.phar', $output, $status);
			if( $status == 0)
			{
				@exec('composer.phar update', $output, $status);
				var_dump($output);
				exit($status);
			}
		}
	} else {
		echo "composer not installed or 'useComposer' is set to false in install.php." . PHP_EOL;
		echo "Running custom installation ... " . PHP_EOL;
		$extensions = array('zip', 'curl', 'openssl');
		foreach($extensions as $e) {
			if (!extension_loaded($e)) {
				echo PHP_EOL . "Please enable the $e extension. This script requires the " . implode(", ", $extensions) . " extensions to work correctly.";
				exit(1);
			}
		}

		$json = @file_get_contents(COMPOSER_FILE);
		$json_a = json_decode($json, true);
		//array $processsed contains list of dependencies that have already been downloaded
		$processed = array();
		foreach (getDependency($json_a) as $dependency ) {		
			customInstall($dependency, $dependency['group'], $processed);
		}
	}
}

/*
 * get the correct tag based on the tag in composer.json
* ex: get v3.1.4 if the entry in composer.json is 3.1.*
* @param $inputTag the tag in composer.json
* @param array $array array of all the tags fetched from github
*/
function getTag($inputTag, $tagArray, $branchArray)
{
	natsort($tagArray);
	if(strpos($inputTag, '*') === 0 )
	{
		return end($tagArray);
	}
	else if(((strpos($inputTag, '>')) !== false) && (strpos($inputTag, '>') >=0))
	{
		if(!in_array($inputTag, $tagArray))
		{
			echo "error: invalid version tag in composer.json";
			exit();
		}
		return end($tagArray);
	}
	else
	{
		if(strpos($inputTag, '<=') === 0)
		{
			$strippedTag = 'v'.str_replace('<=', '', $inputTag);
			foreach ($tagArray as $version)
			{
				if(version_compare($strippedTag, strtolower($version)) == 1 || version_compare($strippedTag, strtolower($version)) == 0)
				{
					$tag = $version;
				}
			}
			if(!in_array($tag, $tagArray))
			{
				echo "error: invalid version tag in composer.json";
				exit();
			}
			return $tag;
		}
		else if(strpos($inputTag, '<') === 0)
		{
			$strippedTag = 'v'.str_replace('<', '', $inputTag);
			foreach ($tagArray as $version)
			{
				if(version_compare($strippedTag, strtolower($version)) == 1)
				{
					$tag = $version;
				}
			}
			if(!in_array($tag, $tagArray))
			{
				echo "error: invalid version tag in composer.json";
				exit();
			}
			return $tag;
		}
		else if(strpos($inputTag, '*'))
		{
			$exp = explode('*', $inputTag);
			$tag = 'v'.str_replace('*', '0', $inputTag);

			foreach ($tagArray as $version)
			{
				if(strpos($version, $exp['0']) == 1 && version_compare($tag, $version) == -1)
				{
					$tag = $version;
				}
			}
			if(!in_array($tag, $tagArray))
			{
				echo "error: invalid version tag in composer.json";
				exit();
			}
			return $tag;
		}
		else
		{
			$inputTag = str_replace('dev-', '', $inputTag);
			if(!in_array($inputTag, $tagArray) && !in_array($inputTag, $branchArray))
			{
				echo "error: invalid version tag or branch in composer.json";
				exit();
			}
			return $inputTag;
		}
	}
}

/*
 * extract the tags/branches from github reference API response
 */
function extractRef($url)
{
	$reference = json_decode(curlExec($url));
	if(strpos($reference['0']->ref, 'refs/tags/') === 0)
	{
		foreach ($reference as $ref)
		{
			$array[] = str_replace('refs/tags/', '', $ref->ref);
		}
	}
	else 
	{
		foreach ($reference as $ref)
		{
			$array[] = str_replace('refs/heads/', '', $ref->ref);
		}
	}
	
	return $array;
}
/**
 * @param array $dependency
 * @param array $installDir	directory where the dependency must be copied to
 * @param array $processed contains list of directories already scanned for dependency
 */
function customInstall($dependency, $installDir, &$processed) {
	if(isset($dependency['autoload']['psr-0']))
	{
		echo "error: The SDK you are trying to install or one of its dependeincies is namespace based. enter the specific version in composer.json to install non-namespace based SDK. Else download the latest SDK from github for namespace based SDK";
		exit();
	}
	$tagUrl = sprintf('https://api.github.com/repos/%s/%s/git/refs/tags/',
			$dependency['group'], $dependency['artifact']);
	$branchUrl = sprintf('https://api.github.com/repos/%s/%s/git/refs/heads/',
			$dependency['group'], $dependency['artifact']);
	$branchArray = extractRef($branchUrl);
	$tagsArray = extractRef($tagUrl);
	$dependency['branch'] = getTag($dependency['branch'], $tagsArray, $branchArray);
	// download zip from github
	$downloadUrl = sprintf('https://api.github.com/repos/%s/%s/zipball/%s',
			$dependency['group'], $dependency['artifact'], $dependency['branch']);
	if(!in_array($downloadUrl, $processed)) {
		echo "Downloading " . $dependency['artifact'] . ' - ' . $dependency['branch'] . PHP_EOL;
		$dest = 'vendor/' . $installDir . '/';
		$fileZip = tempnam(sys_get_temp_dir(), 'ppzip');
		$fp = fopen($fileZip, "w");

		curlExec($downloadUrl, $fp);
		$processed[] = $downloadUrl;
		
		// extract the downloaded zip		
		$zip = new ZipArchive;
		if($zip->open($fileZip) != "true") {
			echo PHP_EOL . "Could not open $fileZip";
			exit;
		}
		$zip->extractTo($dest);
		$zip->close();
		fclose($fp);
		unlink($fileZip);
		
		// scan extracted directory for nested dependency
		foreach (glob("$dest/**/composer.json") as $composer) {			
			$json = file_get_contents($composer);
			$json_a = json_decode($json, true);			
			$dependencies =  getDependency($json_a);
			foreach ($dependencies as $dependency ) {										
				customInstall($dependency, $dependency['group'], $processed);
			}
		}
	}
}

/*
 * @param array $json_a composer.json converted to array
*/
function getDependency($json_a) {
	if( !array_key_exists('require', $json_a)) {
		return array();
	}

	$res = array();
	foreach ($json_a['require'] as $key => $val) {
		if(strpos($key, '/')) {
			$parts = explode('/', $key);
			// Convert versions such as "dev-xyz" to "xyz"
			$pos = strpos($val, '-');
            if($pos == null || empty($pos)) {
                $branch = $val;
            } else {
                $branch = substr($val, $pos+1);
            }
			$batch['group'] = $parts[0] ;
			$batch['artifact'] = $parts[1];
			$batch['branch'] = $branch;
			$res[] = $batch;
		}

	}
	return $res;
}

/*
 * curl execute
* @param $targetUrl url to hit
* @param $writeToFile file to which the received data to be written
*/
function curlExec($targetUrl, $writeToFile = null) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $targetUrl);
	curl_setopt($ch, CURLOPT_FAILONERROR, true);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'curl/installScript');
	curl_setopt($ch, CURLOPT_BINARYTRANSFER,true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
	if($writeToFile != null)
	{
		curl_setopt($ch, CURLOPT_FILE, $writeToFile);
	}
	$res = curl_exec($ch);
	if (!$res) {
		echo PHP_EOL . "cURL error number:" .curl_errno($ch) . " for $targetUrl";
		echo PHP_EOL . "cURL error:" . curl_error($ch);
		exit;
	}
	curl_close($ch);
	return $res;
}

/**
 * Autoloads all the classes
 * contributor: https://github.com/rrehbeindoi
 */
function createAutoload() {

	$libraryPath = dirname(__FILE__) . '/';
	$loaderClass = 'PPAutoloader';
	$loaderFile  = $loaderClass . '.php';
	echo "Generating autoload file ".PHP_EOL;
	/**
	 * From comment by "Mike" on http://us2.php.net/manual/en/function.glob.php
	 *
	 * @param string $pattern
	 * @param int $flags - as per glob function
	 * @return array of strings
	 */
	function glob_recursive($pattern, $flags = 0) {
		$files = glob($pattern, $flags);

		foreach (glob(dirname($pattern).'/*', GLOB_ONLYDIR|GLOB_NOSORT) as $dir)
		{
			$files = array_merge($files, glob_recursive($dir.'/'.basename($pattern), $flags));
		}

		return $files;
	}

	/**
	 * Use built in parser to get class and interface names from a script
	 *
	 * Based on code from http://stackoverflow.com/questions/7153000/get-class-name-from-file
	 *
	 * @param string $source php source to parse
	 * @return array of strings
	 */
	function get_classes_defined($source) {

		$classes = array();
		$i       = 0;
		$tokens  = token_get_all($source);

		$length = count($tokens);
		for ($i = 0; $i < $length; $i++) {
			if (in_array($tokens[$i][0], array(T_CLASS, T_INTERFACE))) {
				for ($j = $i + 1; $j < $length; $j++) {
					if ($tokens[$j] === '{') {
						$classes[] = $tokens[$i+2][1];
						break;
					}
				}
			}
		}

		return $classes;
	}

	$fileList = glob_recursive($libraryPath . '*.php');
	$classes  = array();

	foreach ($fileList as $file) {
		// Trim off the absolute path
		$filename = str_replace($libraryPath, '', $file);
		if ($filename === $loaderFile) {
			// Don't include the autoloader in the autoloader map
			continue;
		}

		$found = get_classes_defined(file_get_contents($file));

		foreach ($found as $class) {
			$class = strtolower($class);

			if (isset($classes[$class])) {
				;
				//echo "Warning: class [{$class}] is defined in both\n\t{$filename}\n\t{$classes[$class]}\n";
			}

			$classes[$class] = $filename;
		}
	}

	ksort($classes, SORT_STRING);
	$classList = var_export($classes, true);

	$script = <<< SCRIPT
<?php
	 /**
      * Basic class-map auto loader generated by install.php.
	  * Do not modify.
	  */
	 class {$loaderClass} {
	 	private static \$map = {$classList};

		public static function loadClass(\$class) {
	        \$class = strtolower(trim(\$class, '\\\\'));

    	    if (isset(self::\$map[\$class])) {
            	require dirname(__FILE__) . '/' . self::\$map[\$class];
        	}
    	}

		public static function register() {
	        spl_autoload_register(array(__CLASS__, 'loadClass'), true);
    	}
}
SCRIPT;

	file_put_contents($loaderFile, $script);

}

/**
 * Creates a config file if one is not present
 * @param string $configFile name of the configuration file
 */
function createConfig($configFile) {
	if(!file_exists($configFile)) {
		echo "Generating $configFile. You must update it with your account details." . PHP_EOL;
		$script = <<< SCRIPT

; Integration mode - Must be one of sandbox/live
mode = sandbox

;Account credentials
[Account]
; Update your account credentials from developer portal here
acct1.UserName = 
acct1.Password = 
acct1.Signature = 

;Connection Information
[Http]
http.ConnectionTimeOut = 30
http.Retry = 1

;Logging Information
[Log]
log.FileName=PayPal.log
log.LogLevel=INFO
log.LogEnabled=true

SCRIPT;
		file_put_contents($configFile, $script);
	}	
}

/**
 *  initiates and installs the SDK
 */
function createBootStrap($bootstrapFile) {

	if(!file_exists($bootstrapFile)) {
		$script = <<< SCRIPT
<?php
/**
 * Include this file in your application. This file sets up the required classloader based on 
 * whether you used composer or the custom installer.
 */

// Let the SDK know where the config file resides.
define('PP_CONFIG_PATH', dirname(__FILE__));

if(file_exists( dirname(__FILE__). '/vendor/autoload.php')) {
    require 'vendor/autoload.php';
} else {
    require 'PPAutoloader.php';
    PPAutoloader::register();
}
SCRIPT;
		file_put_contents($bootstrapFile, $script);
	}
}