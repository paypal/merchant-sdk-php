<?php 
namespace PayPal\PayPalAPI;
use PayPal\EBLBaseComponents\AbstractResponseType; 
/**
 * The authorization identification number you specified in the
 * request. Character length and limits: 19 single-byte
 * characters 
 */
class DoVoidResponseType  extends AbstractResponseType  
  {

	/**
	 * The authorization identification number you specified in the
	 * request. Character length and limits: 19 single-byte
	 * characters
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $AuthorizationID;

	/**
	 * Return msgsubid back to merchant
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $MsgSubID;


}
