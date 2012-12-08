<?php
/**
 * PPConfigManager loads the SDK configuration file and
 * hands out appropriate config params to other classes
 */
// require_once 'exceptions/PPConfigurationException.php';

class PPConfigManager {

	private $config;
	/**
	 * @var PPConfigManager
	 */
	private static $instance;

	private function __construct(){
		if(defined('PP_CONFIG_PATH')) {
			$configFile = constant('PP_CONFIG_PATH') . '/sdk_config.ini';
		} else {		
			$configFile = implode(DIRECTORY_SEPARATOR,
				array(dirname(__FILE__), "..", "config", "sdk_config.ini"));
		}
		$this->load($configFile);
	}

	// create singleton object for PPConfigManager
	public static function getInstance()
	{
		if ( !isset(self::$instance) ) {
			self::$instance = new PPConfigManager();
		}
		return self::$instance;
	}

	//used to load the file
	private function load($fileName) {

		$this->config = @parse_ini_file($fileName);
		if($this->config == NULL || count($this->config) == 0) {
			throw new PPConfigurationException("Config file $fileName not found","303");
		}
	}

	/**
	 * simple getter for configuration params
	 * If an exact match for key is not found,
	 * does a "contains" search on the key
	 */
	public function get($searchKey){

		if(array_key_exists($searchKey, $this->config))
		{
			return $this->config[$searchKey];
		}
		else {
			$arr = array();
			foreach ($this->config as $k => $v){
				if(strstr($k, $searchKey)){
					$arr[$k] = $v;
				}
			}
			
			return $arr;
		}

	}

	/**
	 * Utility method for handling account configuration
	 * return config key corresponding to the API userId passed in
	 *
	 * If $userId is null, returns config keys corresponding to
	 * all configured accounts
	 */
	public function getIniPrefix($userId = null) {

		if($userId == null) {
			$arr = array();
			foreach ($this->config as $key => $value) {
				$pos = strpos($key, '.');
				if(strstr($key, "acct")){
					$arr[] = substr($key, 0, $pos);
				}
			}
			return array_unique($arr);
		} else {
			$iniPrefix = array_search($userId, $this->config);
			$pos = strpos($iniPrefix, '.');
			$acct = substr($iniPrefix, 0, $pos);
			
			return $acct;
		}
	}
}