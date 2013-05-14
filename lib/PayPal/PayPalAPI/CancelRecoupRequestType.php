<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\AbstractRequestType;
/**
 * 
 */
class CancelRecoupRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ed
	 
	 	 	 	 
	 * @var PayPal\\EnhancedCancelRecoupRequestDetailsType	 
	 */ 
	public $EnhancedCancelRecoupRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($EnhancedCancelRecoupRequestDetails = NULL) {
		$this->EnhancedCancelRecoupRequestDetails = $EnhancedCancelRecoupRequestDetails;
	}


   
}
