<?php

/**
 * Simple Logging Manager. 
 * This does an error_log for now
 * Potential frameworks to use are PEAR logger, log4php from Apache
 */
class PPLoggingManager {
	
	private $loggerName;
	
	public function __construct($loggerName) {
		$this->loggerName = $loggerName;
	}
	
	public function log($message, $level="INFO") {
		error_log( $this->loggerName . ": " . $message);
	}	

	public function error($message) {
		$this->log($message, "ERROR");
	}
	
	public function warning($message) {
		$this->log($message, "WARN");
	}	
	
	public function info($message) {
		$this->log($message, "INFO");
	}
	
	public function fine($message) {
		$this->log($message, "FINE");
	} 
	

}
?>