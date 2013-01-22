<?php 
define('DS', DIRECTORY_SEPARATOR);
$useComposer = false;

/**
 * check if composer is installed
 */
exec('composer',$output,$status);
if($useComposer && $status == 0)
{
	exec('composer update',$output,$status);
	echo $output;
}
else
{
	if(file_exists('composer.json'))
	{
		/**
		 * check if zip extension is enabled
		 */
		if (!extension_loaded('zip')) {
			echo "<br>Please enable zip extension in php.ini";
			exit;
		}

		$json = file_get_contents("composer.json");
		$json_a = json_decode($json, true);
		$dirArray = array();
		customInstall($json_a , $dirArray);
	}
	else
	{
		//exit('composer.json not found');
		$target_url = 'https://raw.github.com/paypal/merchant-sdk-php/composer/composer.json';
		$ch = curl_init();
		$fp = fopen("composer.json", "w");
		curl_setopt($ch, CURLOPT_URL,$target_url);
		curl_setopt($ch, CURLOPT_FAILONERROR, true);
		curl_setopt($ch, CURLOPT_HEADER,0);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_AUTOREFERER, true);
		curl_setopt($ch, CURLOPT_BINARYTRANSFER,true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_FILE, $fp);
	}
}

/**
 * Autoloads all the classes
 */
createAutoload();

/**
 * @param array $json_a content of composer.json
 * @param array $dirArray contains list of directories already scanned for dependency
*/
function customInstall($json_a, $dirArray)
{

	/**
	 *  download zip from github
	 */
	if(!empty( $json_a['paypal']['downloadURL']))
		$target_url = $json_a['paypal']['downloadURL'];
	else
		exit('download url not valid');

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
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
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

	$zip = new ZipArchive;
	if($zip->open($fileZip) != "true") {
		echo "<br>Could not open $fileZip";
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
			if( !in_array($result, $dirArray))
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
					if($file == 'composer.json')
					{
						$json = file_get_contents($dest. '/' . $result."/composer.json");
						$json_a = json_decode($json, true);
						if(isset($json_a['paypal']))
						{
							$dirArray[] =  $result;
							customInstall($json_a, $dirArray);
						}
							
					}
				}
			}
		}
	}

}

function createAutoload()
{

	$libraryPath = dirname(__FILE__).'/';
	$loaderClass = 'PPAutoloader';
	$loaderFile  = $loaderClass . '.php';

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
				echo "Warning: class [{$class}] is defined in both\n\t{$filename}\n\t{$classes[$class]}\n";
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