<?php 
namespace PayPal\PayPalAPI;
use PayPal\EBLBaseComponents\AbstractRequestType; 
/**
 * 
 */
class EnterBoardingRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\EnterBoardingRequestDetailsType	 
	 */ 
	public $EnterBoardingRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($EnterBoardingRequestDetails = NULL) {
		$this->EnterBoardingRequestDetails = $EnterBoardingRequestDetails;
	}


    
}
