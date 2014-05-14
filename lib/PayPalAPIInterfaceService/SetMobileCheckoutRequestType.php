<?php 
/**
 * 
 */
class SetMobileCheckoutRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var SetMobileCheckoutRequestDetailsType 	 
	 */ 
	public $SetMobileCheckoutRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($SetMobileCheckoutRequestDetails = NULL) {
		$this->SetMobileCheckoutRequestDetails = $SetMobileCheckoutRequestDetails;
	}


  
 
}
