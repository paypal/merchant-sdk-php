<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * The authorization identification number you specified in the
 * request. Character length and limits: 19 single-byte
 * characters maximum 
 */
class DoCaptureResponseDetailsType  
   extends PPXmlMessage{

	/**
	 * The authorization identification number you specified in the
	 * request. Character length and limits: 19 single-byte
	 * characters maximum
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\string	 
	 */ 
	public $AuthorizationID;

	/**
	 * Information about the transaction 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\PaymentInfoType	 
	 */ 
	public $PaymentInfo;

	/**
	 * Return msgsubid back to merchant 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $MsgSubID;


}
