<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\;
/**
 * Status will denote whether Auto authorization was successful
 * or not. 
 */
class AuthorizationResponseType  
   extends PPXmlMessage{

	/**
	 * Status will denote whether Auto authorization was successful
	 * or not. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Status;

	/**
	 * 
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\ErrorType	 
	 */ 
	public $AuthorizationError;


}
