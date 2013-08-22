<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * 
 */
class AuthorizationRequestType  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var boolean	 
	 */ 
	public $IsRequested;

	/**
	 * Constructor with arguments
	 */
	public function __construct($IsRequested = NULL) {
		$this->IsRequested = $IsRequested;
	}


    
}
