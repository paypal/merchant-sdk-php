<?php 
namespace PayPal\PayPalAPI;
use PayPal\EBLBaseComponents\AbstractRequestType; 
/**
 * The value of the original authorization identification
 * number returned by a PayPal product. If you are voiding a
 * transaction that has been reauthorized, use the ID from the
 * original authorization, and not the reauthorization.
 * Required Character length and limits: 19 single-byte
 * characters 
 */
class DoVoidRequestType  extends AbstractRequestType  
  {

	/**
	 * The value of the original authorization identification
	 * number returned by a PayPal product. If you are voiding a
	 * transaction that has been reauthorized, use the ID from the
	 * original authorization, and not the reauthorization.
	 * Required Character length and limits: 19 single-byte
	 * characters
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $AuthorizationID;

	/**
	 * An informational note about this settlement that is
	 * displayed to the payer in email and in transaction history.
	 * Optional Character length and limits: 255 single-byte
	 * characters
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Note;

	/**
	 * Unique id for each API request to prevent duplicate
	 * payments. Optional Character length and limits: 38
	 * single-byte characters maximum. 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $MsgSubID;

	/**
	 * Constructor with arguments
	 */
	public function __construct($AuthorizationID = NULL) {
		$this->AuthorizationID = $AuthorizationID;
	}


    
}
