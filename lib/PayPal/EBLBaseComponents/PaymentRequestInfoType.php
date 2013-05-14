<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\;
/**
 * Contains payment request information for each bucket in the
 * cart.  
 */
class PaymentRequestInfoType  
   extends PPXmlMessage{

	/**
	 * Contains the transaction id of the bucket.  
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $TransactionId;

	/**
	 * Contains the bucket id.  
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $PaymentRequestID;

	/**
	 * Contains the error details.  
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\ErrorType	 
	 */ 
	public $PaymentError;


}
