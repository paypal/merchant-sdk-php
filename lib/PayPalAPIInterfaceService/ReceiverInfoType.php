<?php 
/**
 * ReceiverInfoType Receiver information. 
 */
class ReceiverInfoType  
   extends PPXmlMessage{

	/**
	 * Email address or account ID of the payment recipient (the
	 * seller). Equivalent to Receiver if payment is sent to
	 * primary account. Character length and limitations: 127
	 * single-byte alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Business;

	/**
	 * Primary email address of the payment recipient (the seller).
	 * If you are the recipient of the payment and the payment is
	 * sent to your non-primary email address, the value of
	 * Receiver is still your primary email address. Character
	 * length and limitations: 127 single-byte alphanumeric
	 * characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Receiver;

	/**
	 * Unique account ID of the payment recipient (the seller).
	 * This value is the same as the value of the recipient's
	 * referral ID. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ReceiverID;


}
