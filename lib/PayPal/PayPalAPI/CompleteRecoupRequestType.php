<?php 
namespace PayPal\PayPalAPI;
use PayPal\EBLBaseComponents\AbstractRequestType; 
/**
 * 
 */
class CompleteRecoupRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ed
	 
	 	 	 	 
	 * @var PayPal\EnhancedDataTypes\EnhancedCompleteRecoupRequestDetailsType	 
	 */ 
	public $EnhancedCompleteRecoupRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($EnhancedCompleteRecoupRequestDetails = NULL) {
		$this->EnhancedCompleteRecoupRequestDetails = $EnhancedCompleteRecoupRequestDetails;
	}


    
}
