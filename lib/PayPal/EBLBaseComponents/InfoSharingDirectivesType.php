<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * If Billing Address should be returned in
 * GetExpressCheckoutDetails response, this parameter should be
 * set to yes here 
 */
class InfoSharingDirectivesType  
   extends PPXmlMessage{

	/**
	 * If Billing Address should be returned in
	 * GetExpressCheckoutDetails response, this parameter should be
	 * set to yes here
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $ReqBillingAddress;


    
}
