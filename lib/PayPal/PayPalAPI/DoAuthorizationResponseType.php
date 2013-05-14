<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\AbstractResponseType;
/**
 * An authorization identification number. Character length and
 * limits: 19 single-byte characters 
 */
class DoAuthorizationResponseType  extends AbstractResponseType  
  {

	/**
	 * An authorization identification number. Character length and
	 * limits: 19 single-byte characters
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $TransactionID;

	/**
	 * The amount and currency you specified in the request. 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\\BasicAmountType	 
	 */ 
	public $Amount;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\AuthorizationInfoType	 
	 */ 
	public $AuthorizationInfo;

	/**
	 * Return msgsubid back to merchant
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $MsgSubID;


}
