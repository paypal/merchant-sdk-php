<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\AbstractRequestType;
/**
 * 
 */
class SetExpressCheckoutRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\SetExpressCheckoutRequestDetailsType	 
	 */ 
	public $SetExpressCheckoutRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($SetExpressCheckoutRequestDetails = NULL) {
		$this->SetExpressCheckoutRequestDetails = $SetExpressCheckoutRequestDetails;
	}


   
}
