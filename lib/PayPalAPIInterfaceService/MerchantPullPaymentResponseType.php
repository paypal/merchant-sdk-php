<?php 
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
	 
	 	 	 	 
	 * @var PayerInfoType 	 
	 */ 
	public $PayerInfo;

	/**
	 * Information about the transaction 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PaymentInfoType 	 
	 */ 
	public $PaymentInfo;

	/**
	 * Specific information about the preapproved payment 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var MerchantPullInfoType 	 
	 */ 
	public $MerchantPullInfo;


}
