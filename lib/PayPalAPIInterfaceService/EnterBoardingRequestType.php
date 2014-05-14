<?php 
/**
 * 
 */
class EnterBoardingRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var EnterBoardingRequestDetailsType 	 
	 */ 
	public $EnterBoardingRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($EnterBoardingRequestDetails = NULL) {
		$this->EnterBoardingRequestDetails = $EnterBoardingRequestDetails;
	}


  
 
}
