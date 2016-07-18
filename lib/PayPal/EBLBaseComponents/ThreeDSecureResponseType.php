<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * 3DS remaining fields. 
 */
class ThreeDSecureResponseType  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Vpas;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $EciSubmitted3DS;


}
