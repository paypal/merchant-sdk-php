<?php 
/**
 * 
 */
class CancelRecoupRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ed
	 
	 	 	 	 
	 * @var EnhancedCancelRecoupRequestDetailsType 	 
	 */ 
	public $EnhancedCancelRecoupRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($EnhancedCancelRecoupRequestDetails = NULL) {
		$this->EnhancedCancelRecoupRequestDetails = $EnhancedCancelRecoupRequestDetails;
	}


  
 
}
