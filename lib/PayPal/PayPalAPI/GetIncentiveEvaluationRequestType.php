<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\AbstractRequestType;
/**
 * 
 */
class GetIncentiveEvaluationRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\GetIncentiveEvaluationRequestDetailsType	 
	 */ 
	public $GetIncentiveEvaluationRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($GetIncentiveEvaluationRequestDetails = NULL) {
		$this->GetIncentiveEvaluationRequestDetails = $GetIncentiveEvaluationRequestDetails;
	}


   
}
