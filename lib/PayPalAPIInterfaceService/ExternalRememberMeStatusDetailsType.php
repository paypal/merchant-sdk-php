<?php 
/**
 * Response information resulting from opt-in operation or
 * current login bypass status. 
 */
class ExternalRememberMeStatusDetailsType  
   extends PPXmlMessage{

	/**
	 * Required field that reports status of opt-in or login bypass
	 * attempt. 0 = Success - successful opt-in or
	 * ExternalRememberMeID specified in SetExpressCheckout is
	 * valid. 1 = Invalid ID - ExternalRememberMeID specified in
	 * SetExpressCheckout is invalid. 2 = Internal Error - System
	 * error or outage during opt-in or login bypass. Can retry
	 * opt-in or login bypass next time. Flow will force full
	 * authentication and allow buyer to complete transaction. -1 =
	 * None - the return value does not signify any valid remember
	 * me status. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var integer 	 
	 */ 
	public $ExternalRememberMeStatus;

	/**
	 * Identifier returned on external-remember-me-opt-in to allow
	 * the merchant to request bypass of PayPal login through
	 * external remember me on behalf of the buyer in future
	 * transactions. The ExternalRememberMeID is a 17-character
	 * alphanumeric (encrypted) string. This field has meaning only
	 * to the merchant. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ExternalRememberMeID;


}
