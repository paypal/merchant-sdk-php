<?php 
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
	 * Merchantâs bank routing number Character length and
	 * limitations: 23 alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $RoutingNumber;

	/**
	 * Merchantâs bank account number Character length and
	 * limitations: 256 alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $AccountNumber;


  
 
}
