<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\AbstractRequestType;
/**
 * 
 */
class InitiateRecoupRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ed
	 
	 	 	 	 
	 * @var PayPal\\EnhancedInitiateRecoupRequestDetailsType	 
	 */ 
	public $EnhancedInitiateRecoupRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($EnhancedInitiateRecoupRequestDetails = NULL) {
		$this->EnhancedInitiateRecoupRequestDetails = $EnhancedInitiateRecoupRequestDetails;
	}


   
}
