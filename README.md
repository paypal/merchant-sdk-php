
PayPal PHP Merchant SDK
=======================


This is a "Work in progress" SDK. If you are looking for a Merchant SDK, please see 

https://www.x.com/developers/paypal/documentation-tools/paypal-sdk-index#expresscheckoutnew

  OR 

https://github.com/paypal/SDKs/tree/master/Merchant/merchant-php-sdk


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
   * Make sure that the lib folder in your project is available in PHP's include path.
   * Include the services\PayPalAPIInterfaceService\PayPalAPIInterfaceServiceService.php file in your code.
   * Create a service wrapper object.
   * Create a request object as per your project's needs. All the API request and response classes 
     are available in services\PayPalAPIInterfaceService\PayPalAPIInterfaceServiceService.php
   * Invoke the appropriate method on the service object.

For example,

	require_once('services\PayPalAPIInterfaceService\PayPalAPIInterfaceServiceService.php');

    $itemAmount = new BasicAmountType($currencyId, $amount);
	$setECReqType = new SetExpressCheckoutRequestType();	
	$setECReqType->SetExpressCheckoutRequestDetails = $setECReqDetails;

	$setECReq = new SetExpressCheckoutReq();
	$setECReq->SetExpressCheckoutRequest = $setECReqType;
	......

	$paypalService = new PayPalAPIInterfaceServiceService();
	$setECResponse = $paypalService->SetExpressCheckout($setECReq);
	
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
   
   https://github.com/paypal/merchant-php-sdk/issues 

      OR
  
   https://www.x.com/developers/paypal/forums/express-checkout    