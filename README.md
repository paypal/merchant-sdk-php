
PayPal PHP Merchant SDK
=======================

Overview
--------

   The merchant SDK can be used for integrating with the Express Checkout, Mass Pay, Web Payments Pro APIs.


Prerequisites
-------------

PayPal's PHP Merchant SDK requires 

   * PHP 5.2 and above with curl/openssl extensions enabled
  

Using the SDK
-------------

To use the SDK,

   * Copy the config and lib folders into your project. Modify the config file sdk_config.ini to suit your needs.
   * Register the autoloader in your code.
   * Create a service wrapper object.
   * Create a request object as per your project's needs. All the API request and response classes 
     are available in services\PayPalAPIInterfaceService\PayPalAPIInterfaceServiceService.php
   * Invoke the appropriate method on the service object.

For example,

    // Register auto loader
    require("/absolute/or/relative/path/to/lib/PayPal_Merchant_SDK_Autoloader.php");
    PayPal_Merchant_SDK_Autoloader::register();

    // Create request details
    $itemAmount = new BasicAmountType($currencyId, $amount);
	$setECReqType = new SetExpressCheckoutRequestType();
	$setECReqType->SetExpressCheckoutRequestDetails = $setECReqDetails;

    // Create request
	$setECReq = new SetExpressCheckoutReq();
	$setECReq->SetExpressCheckoutRequest = $setECReqType;
	......

    // Perform request
	$paypalService = new PayPalAPIInterfaceServiceService();
	$setECResponse = $paypalService->SetExpressCheckout($setECReq);
	
    // Check results
	$ack = strtoupper($setECResponse->Ack);
	if($ack == 'SUCCESS') {
		// Success
	}  

The SDK provides multiple ways to authenticate your API call.

	$paypalService = new PayPalAPIInterfaceServiceService();
	
	// Use the default account (the first account) configured in sdk_config.ini
	$response = $paypalService->SetExpressCheckout($setECReq);

	// Use a specific account configured in sdk_config.inig
	$response = $paypalService->SetExpressCheckout($setECReq, 'jb-us-seller_api1.paypal.com');
	 
	// Pass in a dynamically created API credential object
    $cred = new PPCertificateCredential("username", "password", "path-to-pem-file");
    $cred->setThirdPartyAuthorization(new PPTokenAuthorization("accessToken", "tokenSecret"));
	$response = $paypalService->SetExpressCheckout($setECReq, $cred);
  
  
SDK Configuration
-----------------

Replace the API credential in config/sdk_config.ini . You can use the configuration file to configure

   * (Multiple) API account credentials.
   * Service endpoint and other HTTP connection parameters
   * Logging 

Please refer to the sample config file provided with this bundle.


Getting help
------------

If you need help using the SDK, a new feature that you need or have a issue to report, please visit
   
   https://github.com/paypal/merchant-sdk-php/issues 

      OR
  
   https://www.x.com/developers/paypal/forums/express-checkout    
