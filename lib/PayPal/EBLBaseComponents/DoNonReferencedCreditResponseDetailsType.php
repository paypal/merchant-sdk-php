<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\;
/**
 * 
 */
class DoNonReferencedCreditResponseDetailsType  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\BasicAmountType	 
	 */ 
	public $Amount;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\string	 
	 */ 
	public $TransactionID;


}
