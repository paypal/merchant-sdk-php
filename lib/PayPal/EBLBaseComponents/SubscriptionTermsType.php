<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * @hasAttribute
 * SubscriptionTermsType Terms of a PayPal subscription. 
 */
class SubscriptionTermsType  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\CoreComponentTypes\BasicAmountType	 
	 */ 
	public $Amount;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 
	 * @attribute 
	 	 	 	 
	 * @var string	 
	 */ 
	public $period;


}
