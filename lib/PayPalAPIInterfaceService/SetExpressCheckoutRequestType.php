<?php 
/**
 * 
 */
class SetExpressCheckoutRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var SetExpressCheckoutRequestDetailsType 	 
	 */ 
	public $SetExpressCheckoutRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($SetExpressCheckoutRequestDetails = NULL) {
		$this->SetExpressCheckoutRequestDetails = $SetExpressCheckoutRequestDetails;
	}


  
 
}
