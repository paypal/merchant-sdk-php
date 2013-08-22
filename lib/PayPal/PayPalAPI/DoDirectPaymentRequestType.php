<?php 
namespace PayPal\PayPalAPI;
use PayPal\EBLBaseComponents\AbstractRequestType; 
/**
 * This flag indicates that the response should include
 * FMFDetails 
 */
class DoDirectPaymentRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\DoDirectPaymentRequestDetailsType	 
	 */ 
	public $DoDirectPaymentRequestDetails;

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
	public function __construct($DoDirectPaymentRequestDetails = NULL) {
		$this->DoDirectPaymentRequestDetails = $DoDirectPaymentRequestDetails;
	}


    
}
