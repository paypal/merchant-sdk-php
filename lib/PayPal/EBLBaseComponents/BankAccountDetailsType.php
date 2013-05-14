<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\;
/**
 * BankAccountDetailsType 
 */
class BankAccountDetailsType  
   extends PPXmlMessage{

	/**
	 * Name of bank Character length and limitations: 192
	 * alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Name;

	/**
	 * Type of bank account: Checking or Savings
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Type;

	/**
	 * Merchant’s bank routing number Character length and
	 * limitations: 23 alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $RoutingNumber;

	/**
	 * Merchant’s bank account number Character length and
	 * limitations: 256 alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $AccountNumber;


   
}
