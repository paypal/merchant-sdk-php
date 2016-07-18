<?php 
namespace PayPal\PayPalAPI;
use PayPal\EBLBaseComponents\AbstractRequestType; 
/**
 * 
 */
class InitiateRecoupRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ed
	 
	 	 	 	 
	 * @var PayPal\EnhancedDataTypes\EnhancedInitiateRecoupRequestDetailsType	 
	 */ 
	public $EnhancedInitiateRecoupRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($EnhancedInitiateRecoupRequestDetails = NULL) {
		$this->EnhancedInitiateRecoupRequestDetails = $EnhancedInitiateRecoupRequestDetails;
	}


    
}
