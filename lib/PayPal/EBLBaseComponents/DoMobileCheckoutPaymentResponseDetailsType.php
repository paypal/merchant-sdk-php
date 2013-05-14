<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * A free-form field for your own use, such as a tracking
 * number or other value you want returned to you in IPN.
 * Optional Character length and limitations: 256 single-byte
 * alphanumeric characters 
 */
class DoMobileCheckoutPaymentResponseDetailsType  
   extends PPXmlMessage{

	/**
	 * A free-form field for your own use, such as a tracking
	 * number or other value you want returned to you in IPN.
	 * Optional Character length and limitations: 256 single-byte
	 * alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Custom;

	/**
	 * Your own unique invoice or tracking number. Optional
	 * Character length and limitations: 127 single-byte
	 * alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $InvoiceID;

	/**
	 * Information about the payer
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\PayerInfoType	 
	 */ 
	public $PayerInfo;

	/**
	 * Information about the transaction
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\PaymentInfoType	 
	 */ 
	public $PaymentInfo;


}
