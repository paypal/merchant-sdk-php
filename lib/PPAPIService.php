<?php
require_once 'PPCredentialManager.php';
require_once 'PPConnectionManager.php';
require_once 'PPHttpConfig.php';
require_once 'PPLoggingManager.php';
require_once 'PPRequest.php';
require_once 'PPUtils.php';
require_once dirname(__FILE__) . '/auth/PPTokenAuthorization.php';
require_once dirname(__FILE__) . '/formatters/FormatterFactory.php';
foreach(glob(dirname(__FILE__) . '/handlers/*') as $handler) {
	require_once $handler;
}

class PPAPIService {
	
	public $serviceName;
	private $logger;
	private $handlers = array();
	private $serviceBinding;
	private $port;

	public function __construct($port, $serviceName, $serviceBinding, $handlers=array()) {
		$this->serviceName = $serviceName;
		$this->port = $port;

		$this->logger = new PPLoggingManager(__CLASS__);
		$this->handlers = $handlers;
		$this->serviceBinding = $serviceBinding;
	}

	public function setServiceName($serviceName) {
		$this->serviceName = $serviceName;
	}

	public function addHandler($handler) {
		$this->handlers[] = $handler;
	}

	public function makeRequest($apiMethod, $params, $apiUsername = null, $accessToken = null, $tokenSecret = null) {

		$config = PPConfigManager::getInstance();
		if(is_string($apiUsername) || is_null($apiUsername)) {
			// $apiUsername is optional, if null the default account in config file is taken
			$credMgr = PPCredentialManager::getInstance();
			$apiCredential = $credMgr->getCredentialObject($apiUsername );
		} else {
			$apiCredential = $apiUsername; //TODO: Aargh
		}
		if(isset($accessToken) && isset($tokenSecret)) {
			$apiCredential->setThirdPartyAuthorization(
				new PPTokenAuthorization($accessToken, $tokenSecret));
		}
		
		if($this->serviceBinding == 'SOAP' ) {
			$url = $apiCredential->getEndPoint($this->port);
		} else {
			$url = $apiCredential->getEndPoint($this->port) . $this->serviceName . '/' . $apiMethod;
		}

		$request = new PPRequest($params, $this->serviceBinding);
		$request->setCredential($apiCredential);
		$httpConfig = new PPHttpConfig($url, PPHttpConfig::HTTP_POST);
		$this->runHandlers($httpConfig, $request);
		
		$formatter = FormatterFactory::factory($this->serviceBinding);
		$payload = $formatter->toString($request);
		$connection = PPConnectionManager::getInstance()->getConnection($httpConfig);
		$this->logger->info("Request: $payload");
		$response = $connection->execute($payload);
		$this->logger->info("Response: $response");
		
		return array('request' => $payload, 'response' => $response);
	}

	private function runHandlers($httpConfig, $request) {
		$handler = new PPAuthenticationHandler();
		$handler->handle($httpConfig, $request);
		foreach($this->handlers as $handlerClass) {
			$handler = new $handlerClass();
			$handler->handle($httpConfig, $request);
		}
	}

}
