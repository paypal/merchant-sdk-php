<?php 
namespace PayPal\PayPalAPI;
use PayPal\EBLBaseComponents\AbstractRequestType; 
/**
 * 
 */
class CreateMobilePaymentRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\CreateMobilePaymentRequestDetailsType	 
	 */ 
	public $CreateMobilePaymentRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($CreateMobilePaymentRequestDetails = NULL) {
		$this->CreateMobilePaymentRequestDetails = $CreateMobilePaymentRequestDetails;
	}


    
}
