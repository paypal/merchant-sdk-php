<?php 
/**
 * Description of the Order. 
 */
class OrderDetailsType  
   extends PPXmlMessage{

	/**
	 * Description of the Order.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Description;

	/**
	 * Expected maximum amount that the merchant may pull using
	 * DoReferenceTransaction
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var BasicAmountType 	 
	 */ 
	public $MaxAmount;


  
 
}
