<?php Class Configuration
{
	public static function getSignatureConfig()
	{
		$config = array(
				// values: 'sandbox' for testing
				//		   'live' for production
				"mode" => "sandbox",
				"acct1.UserName" => "jb-us-seller_api1.paypal.com",
				"acct1.Password" => "WX4WTU3S8MY44S7F",
				"acct1.Signature" => "AFcWxV21C7fd0v3bYYYRCpSSRl31A7yDhhsPUU2XhtMoZXsWHFxu-RWy",
				// AppId required if permission APIs are used
				"acct1.AppId" => "APP-80W284485P519543T",
				// Subject is optional and is required only in case of third party authorization
				//"acct1.Subject" => "",
				);
		return $config;
	}
	public static function getCertificateConfig()
	{
		$config = array(
				// values: 'sandbox' for testing
				//		   'live' for production
				"mode" => "sandbox",
				"acct1.UserName" => "certuser_biz_api1.paypal.com",
				"acct1.Password" => "D6JNKKULHN3G5B8A",
				// Certificate path relative to config folder or absolute path in file system
				"acct1.CertPath" => "cert_key.pem",
				// AppId required if permission APIs are used
				"acct1.AppId" => "APP-80W284485P519543T",
		);	
		return $config;
	}
}

