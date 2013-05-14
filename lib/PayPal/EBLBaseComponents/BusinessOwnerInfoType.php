<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\;
/**
 * BusinessOwnerInfoType 
 */
class BusinessOwnerInfoType  
   extends PPXmlMessage{

	/**
	 * Details about the business owner
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\PayerInfoType	 
	 */ 
	public $Owner;

	/**
	 * Business owner’s home telephone number Character length
	 * and limitations: 32 alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $HomePhone;

	/**
	 * Business owner’s mobile telephone number Character length
	 * and limitations: 32 alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $MobilePhone;

	/**
	 * Business owner’s social security number Character length
	 * and limitations: 9 alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $SSN;


   
}
