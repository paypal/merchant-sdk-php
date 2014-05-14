<?php 
/**
 * 
 */
class ExecuteCheckoutOperationsRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var ExecuteCheckoutOperationsRequestDetailsType 	 
	 */ 
	public $ExecuteCheckoutOperationsRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($ExecuteCheckoutOperationsRequestDetails = NULL) {
		$this->ExecuteCheckoutOperationsRequestDetails = $ExecuteCheckoutOperationsRequestDetails;
	}


  
 
}
