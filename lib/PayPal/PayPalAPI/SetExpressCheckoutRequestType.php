<?php 
namespace PayPal\PayPalAPI;
use PayPal\EBLBaseComponents\AbstractRequestType; 
/**
 * 
 */
class SetExpressCheckoutRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\SetExpressCheckoutRequestDetailsType	 
	 */ 
	public $SetExpressCheckoutRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($SetExpressCheckoutRequestDetails = NULL) {
		$this->SetExpressCheckoutRequestDetails = $SetExpressCheckoutRequestDetails;
	}


    
}
