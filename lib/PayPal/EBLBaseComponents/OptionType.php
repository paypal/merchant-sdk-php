<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * @hasAttribute
 * OptionType PayPal item options for shopping cart. 
 */
class OptionType  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 
	 * @attribute 
	 	 	 	 
	 * @var string	 
	 */ 
	public $name;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 
	 * @attribute 
	 	 	 	 
	 * @var string	 
	 */ 
	public $value;


}
