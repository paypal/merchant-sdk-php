<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\AbstractRequestType;
/**
 * 
 */
class ReverseTransactionRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\ReverseTransactionRequestDetailsType	 
	 */ 
	public $ReverseTransactionRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($ReverseTransactionRequestDetails = NULL) {
		$this->ReverseTransactionRequestDetails = $ReverseTransactionRequestDetails;
	}


   
}
