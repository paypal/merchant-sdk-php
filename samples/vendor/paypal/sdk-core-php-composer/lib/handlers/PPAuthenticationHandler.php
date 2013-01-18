<?php

require_once dirname(__FILE__) . '/../auth/PPSignatureCredential.php';
require_once dirname(__FILE__) . '/../auth/PPCertificateCredential.php';
require_once dirname(__FILE__) . '/../exceptions/PPInvalidCredentialException.php';
require_once 'IPPHandler.php';
require_once 'PPSignatureAuthHandler.php';
require_once 'PPCertificateAuthHandler.php';

class PPAuthenticationHandler implements IPPHandler {	
	
	public function handle($httpConfig, $request) {
		$credential = $request->getCredential();
		if(isset($credential)) {
			if($credential instanceof PPSignatureCredential) {
				$handler = new PPSignatureAuthHandler($credential);
			} else if($credential instanceof PPCertificateCredential) {
				$handler = new PPCredentialAuthHandler($credential);
			} else {
				throw new PPInvalidCredentialException();
			}
			$handler->handle($httpConfig, $request);
		}
	}
}