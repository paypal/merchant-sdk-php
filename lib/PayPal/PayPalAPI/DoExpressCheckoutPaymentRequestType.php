<?php 
namespace PayPal\PayPalAPI;
use PayPal\EBLBaseComponents\AbstractRequestType; 
/**
 * This flag indicates that the response should include
 * FMFDetails 
 */
class DoExpressCheckoutPaymentRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\DoExpressCheckoutPaymentRequestDetailsType	 
	 */ 
	public $DoExpressCheckoutPaymentRequestDetails;

	/**
	 * This flag indicates that the response should include
	 * FMFDetails
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var integer	 
	 */ 
	public $ReturnFMFDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($DoExpressCheckoutPaymentRequestDetails = NULL) {
		$this->DoExpressCheckoutPaymentRequestDetails = $DoExpressCheckoutPaymentRequestDetails;
	}


    
}
