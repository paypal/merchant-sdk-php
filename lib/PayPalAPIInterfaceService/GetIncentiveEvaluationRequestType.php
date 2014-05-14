<?php 
/**
 * 
 */
class GetIncentiveEvaluationRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var GetIncentiveEvaluationRequestDetailsType 	 
	 */ 
	public $GetIncentiveEvaluationRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($GetIncentiveEvaluationRequestDetails = NULL) {
		$this->GetIncentiveEvaluationRequestDetails = $GetIncentiveEvaluationRequestDetails;
	}


  
 
}
