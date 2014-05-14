<?php 
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
	 
	 	 	 	 
	 * @var BasicAmountType 	 
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
