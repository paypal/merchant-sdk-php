<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * 
 */
class GetBillingAgreementCustomerDetailsResponseDetailsType  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\PayerInfoType	 
	 */ 
	public $PayerInfo;

	/**
	 * Customer's billing address. Optional If you have a credit
	 * card mapped in your PayPal account, PayPal returns the
	 * billing address of the credit billing address otherwise your
	 * primary address as billing address in
	 * GetBillingAgreementCustomerDetails.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\AddressType	 
	 */ 
	public $BillingAddress;


}
