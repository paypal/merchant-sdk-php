<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\;
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
	 
	 	 	 	 
	 * @var PayPal\\string	 
	 */ 
	public $Token;

	/**
	 * 
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\ErrorType	 
	 */ 
	public $SetDataError;


}
