<?php 
/**
 *  Downloads and Installs PayPal PHP SDK
 *  custom installer is invoked if composer is not installed
 */

define('DS', DIRECTORY_SEPARATOR);
define('COMPOSER_FILE', 'composer.json');
$useComposer = false;
// name of the bootstrap file in custom installation
$bootStrap = 'PPBootStrap.php';
// Required : URL from where the composer.json is downloaded if not present
$composerUrl = 'https://raw.github.com/paypal/merchant-sdk-php/composer/samples/composer.json';

/**
 *  initiates and installs the SDK
 */
init($useComposer, $composerUrl);

/**
 * Autoloads all the classes
*/
createAutoload();
if(!file_exists($bootStrap))
{
	createBootStrap($bootStrap);
}
echo "installation successful";
function init($useComposer, $composerUrl)
{

	// download if composer.json is not present
	if(!file_exists(COMPOSER_FILE))
	{
		$fp = fopen(COMPOSER_FILE, "w");
		curlExec($composerUrl, $fp);
		fclose($fp);
	}
	/**
	 * check if composer is installed
	 */
	if($useComposer)
	{
		@exec('composer',$output,$status);
		if( $status == 0)
		{
			@exec('composer update',$output,$status);
			var_dump($output);
			exit();
		}
		else
		{
			@exec('composer.phar',$output,$status);
			if( $status == 0)
			{
				@exec('composer.phar update',$output,$status);
				var_dump($output);
				exit();
			}
		}
	}
	else
	{
		echo "composer not installed or 'useComposer' is set to false in install.php...".PHP_EOL;
		echo "running custom installation... ".PHP_EOL;
		if (!extension_loaded('zip')) {
			echo PHP_EOL . "Please enable zip extension in php.ini...";
			exit;
		}

		$json = file_get_contents(COMPOSER_FILE);
		$json_a = json_decode($json, true);
		//array $skipDir contains list of directories already scanned for dependency
		$skipDir = array();
		$dependencies =  getDependency($json_a);
		foreach ($dependencies as $dependency )
		{

			$downloadUrl = 'https://api.github.com/repos/'.$dependency['group'].'/'.$dependency['artifact'].'/zipball/'.$dependency['branch'];
			echo "downloading dependency " .$dependency['artifact'] . PHP_EOL;
			customInstall($downloadUrl, $dependency['group'], $skipDir);

		}


	}
}
/**
 * @param array $json_a content of composer.json
 * @param array $skipDir contains list of directories already scanned for dependency
 */
function customInstall($downloadUrl, $installDir, $skipDir)
{

	/**
	 *  download zip from github
	 */
	$fileZip = "tempZip.zip";
	$dest= 'vendor/'.$installDir.'/';
	$tempSourceDir = 'sdk-core-php-composer';
	$fp = fopen("$fileZip", "w");

	curlExec($downloadUrl, $fp);


	$zip = new ZipArchive;
	if($zip->open($fileZip) != "true") {
		echo PHP_EOL . "Could not open $fileZip";
		exit;
	}

	/**
	 * extract the downloaded zip
	 **/

	$zip->extractTo($dest);
	$zip->close();
	fclose($fp);
	unlink($fileZip);
	/**
	 * scan extracted directory for nested dependency
	*/
	$results = scandir($dest);
	foreach ($results as $result) {
		if ($result === '.' or $result === '..') continue;
		if (is_dir($dest . '/' . $result)) {
			/**
			 *  skip the directories already scanned
			 */
			if( !in_array($result, $skipDir))
			{
				$scannedFiles = scandir($dest . '/' . $result);
				foreach ($scannedFiles as $file)
				{
					/**
					 * copy the config file to root directory
					 */
					if($file == 'config')
					{
						if (!is_dir("config"))
							mkdir("config");
						copyConfig($dest . '/' . $result.'/'.$file.'/' , 'config/');
						rmdir($dest . '/' . $result.'/'.$file);
					}
					if($file == COMPOSER_FILE)
					{
						$json = file_get_contents($dest. '/' . $result.'/'.COMPOSER_FILE);
						$json_a = json_decode($json, true);
						$skipDir[] =  $result;
						$dependencies =  getDependency($json_a);
						if(!empty($dependencies))
						{
							foreach ($dependencies as $dependency )
							{

								$downloadUrl = 'https://api.github.com/repos/'.$dependency['group'].'/'.$dependency['artifact'].'/zipball/'.$dependency['branch'];
								echo "downloading dependency " .$dependency['artifact'].'...'.PHP_EOL;
								customInstall($downloadUrl, $dependency['group'], $skipDir);
							}

						}

					}
				}
			}
		}
	}

}

function getDependency($json_a)
{
	$requiredArray = $json_a['require'];
	foreach ($requiredArray as $key => $val)
	{
		if(strpos($key, '/'))
		{
			$parts = explode('/', $key);
			$pos = strpos($val, '-');
            if($pos == null || empty($pos))
            {
                $branch = $val;
            }
            else
            {
                $branch = substr($val, $pos+1);
            }
			$batch['group'] = $parts[0] ;
			$batch['artifact'] = $parts[1];
			$batch['branch'] = $branch;
			$res[] = $batch;
		}

	}
	if(empty($res))
		return null;
	else
		return $res;
}
function curlExec($targetUrl, $writeToFile)
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$targetUrl);
	curl_setopt($ch, CURLOPT_FAILONERROR, true);
	curl_setopt($ch, CURLOPT_HEADER,0);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'curl/installScript');
	curl_setopt($ch, CURLOPT_BINARYTRANSFER,true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_FILE, $writeToFile);
	$res = curl_exec($ch);
	if (!$res) {
		echo PHP_EOL . "cURL error number:" .curl_errno($ch);
		echo PHP_EOL . "cURL error:" . curl_error($ch);
		exit;
	}
	curl_close($ch);
}

/**
 *
 * contributor: https://github.com/rrehbeindoi
 */
function createAutoload()
{

	$libraryPath = dirname(__FILE__).'/';
	$loaderClass = 'PPAutoloader';
	$loaderFile  = $loaderClass . '.php';
	echo "generating autoload file ".PHP_EOL;
	/**
	 * From comment by "Mike" on http://us2.php.net/manual/en/function.glob.php
	 *
	 * @param string $pattern
	 * @param int $flags - as per glob function
	 * @return array of strings
	 */
	function glob_recursive($pattern, $flags = 0)
	{
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
	function get_classes_defined($source)
	{

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
 * Basic class-map auto loader, generated by ant target "create-autoloader"
	 * Do not modify
	 */
	 class {$loaderClass}
	 {
	 private static \$map = {$classList};

	 public static function loadClass(\$class)
    {
        \$class = strtolower(trim(\$class, '\\\\'));

        if (isset(self::\$map[\$class])) {
            require dirname(__FILE__) . '/' . self::\$map[\$class];
        }
    }

    public static function register()
    {
        spl_autoload_register(array(__CLASS__, 'loadClass'), true);
    }
}

SCRIPT;

	file_put_contents($loaderFile, $script);

}
function copyConfig($source, $destination )
{
	$files = scandir($source);

	// Cycle through all source files
	foreach ($files as $file) {
		if (in_array($file, array(".",".."))) continue;
		// If we copied this successfully, mark it for deletion
		if (copy($source.$file, $destination.$file)) {
			$delete[] = $source.$file;
		}
	}
	// Delete all successfully-copied files
	foreach ($delete as $file) {
		unlink($file);
	}
}
function createBootStrap($bootStrap)
{
	$script = <<< SCRIPT
		<?php
/**
 *  Include this file in your application
 *  this file includes autoloader.php if using composer. includes custom actoloader if it is a custom installation of SDK
 */
define('PP_CONFIG_PATH',dirname(__FILE__).'/config/');
if(file_exists('vendor/autoload.php'))
    require 'vendor/autoload.php';

else
{
    require 'PPAutoloader.php';
    PPAutoloader::register();
}

SCRIPT;
	file_put_contents($bootStrap, $script);
}