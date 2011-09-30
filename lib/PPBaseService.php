<?php
require_once 'PPAPIService.php';


class PPBaseService {
	
	private $serviceName;
/*
 * Setters and getters for Third party authentication (Permission Services)
 */
	protected $accessToken;
	protected $tokenSecret;
	public function getAccessToken() {
		return $this->accessToken;
	}

	public function setAccessToken($accessToken) {
		$this->accessToken = $accessToken;
	}

	public function getTokenSecret() {
		return $this->tokenSecret;
	}

	public function setTokenSecret($tokenSecret) {
		$this->tokenSecret = $tokenSecret;
	}
	public function __construct($serviceName) {
		$this->serviceName = $serviceName;
	}
	
	public function getServiceName() {
		return $this->serviceName;
	}
	
	public function call($method, $requestObject, $apiUsername = null, $accessToken = null, $tokenSecret = null) {
		$service = new PPAPIService();
		$service->setServiceName($this->serviceName);
		return $service->makeRequest($method, $requestObject, $apiUsername ,$accessToken, $tokenSecret);
		
	}
}
?>
