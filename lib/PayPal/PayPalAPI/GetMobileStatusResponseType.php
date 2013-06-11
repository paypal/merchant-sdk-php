<?php 
namespace PayPal\PayPalAPI;
use PayPal\EBLBaseComponents\AbstractResponseType; 
/**
 * Indicates whether the phone is activated for mobile payments
 * 
 */
class GetMobileStatusResponseType  extends AbstractResponseType  
  {

	/**
	 * Indicates whether the phone is activated for mobile payments
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var integer	 
	 */ 
	public $IsActivated;

	/**
	 * Indicates whether the password is enabled for particular
	 * account 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var integer	 
	 */ 
	public $IsPasswordSet;

	/**
	 * Indicates whether there is a payment pending from the phone 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var integer	 
	 */ 
	public $PaymentPending;


}
