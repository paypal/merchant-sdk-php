<?php
/**
 * PPConfigManager loads the SDK configuration file and
 * hands out appropriate config params to other classes
 */
require_once 'exceptions/PPConfigurationException.php';

class PPConfigManager {

	private $config;

	/**
	 * @var PPConfigManager
	 */
	private static $instance;

	private function __construct(array $config) {
		$this->config = $config;
	}

	// create singleton object for PPConfigManager
	public static function getInstance() {
		if ( !isset(self::$instance) ) {
			if(defined('PP_CONFIG_PATH')) {
				$configFile = PP_CONFIG_PATH . '/sdk_config.ini';
			} else {
				$configFile = dirname(__FILE__) . '/../config/sdk_config.ini';
			}

			if (!is_readable($configFile)) {
				throw new PPConfigurationException("Config file $configFile not found", "303");
			}

			$config = @parse_ini_file($configFile);
			if(empty($config)) {
				throw new PPConfigurationException("Config file $configFile could not be loaded", "303");
			}

			self::$instance = new PPConfigManager($config);
		}
		return self::$instance;
	}

	public static function setConfiguration(array $config) {
		if (isset(self::$instance)) {
			throw new PPConfigurationException('Configuration has already been loaded');
		}
		self::$instance = new PPConfigManager($config);
		return self::$instance;
	}

	/**
	 * Clear/Reset the configuration
	 *
	 * Primarily used in tearDown() in unit tests.
	 *
	 * @internal
	 */
	public static function _unsetInstance() {
		self::$instance = null;
	}

	/**
	 * simple getter for configuration params
	 * If an exact match for key is not found,
	 * does a "contains" search on the key
	 */
	public function get($searchKey) {

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
