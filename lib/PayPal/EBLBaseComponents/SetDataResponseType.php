<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * If Checkout session was initialized successfully, the
 * corresponding token is returned in this element. 
 */
class SetDataResponseType  
   extends PPXmlMessage{

	/**
	 * If Checkout session was initialized successfully, the
	 * corresponding token is returned in this element. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\string	 
	 */ 
	public $Token;

	/**
	 * 
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\AddressType	 
	 */ 
	public $ShippingAddresses;

	/**
	 * 
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\ErrorType	 
	 */ 
	public $SetDataError;


}
