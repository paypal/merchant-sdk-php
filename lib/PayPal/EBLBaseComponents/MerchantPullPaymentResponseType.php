<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\;
/**
 * MerchantPullPaymentResponseType Response data from the
 * merchant pull. 
 */
class MerchantPullPaymentResponseType  
   extends PPXmlMessage{

	/**
	 * information about the customer
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\PayerInfoType	 
	 */ 
	public $PayerInfo;

	/**
	 * Information about the transaction 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\PaymentInfoType	 
	 */ 
	public $PaymentInfo;

	/**
	 * Specific information about the preapproved payment 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\MerchantPullInfoType	 
	 */ 
	public $MerchantPullInfo;


}
