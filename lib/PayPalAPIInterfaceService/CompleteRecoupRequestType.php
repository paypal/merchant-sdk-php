<?php 
/**
 * 
 */
class CompleteRecoupRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ed
	 
	 	 	 	 
	 * @var EnhancedCompleteRecoupRequestDetailsType 	 
	 */ 
	public $EnhancedCompleteRecoupRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($EnhancedCompleteRecoupRequestDetails = NULL) {
		$this->EnhancedCompleteRecoupRequestDetails = $EnhancedCompleteRecoupRequestDetails;
	}


  
 
}
