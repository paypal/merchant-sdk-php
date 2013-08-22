<?php 
namespace PayPal\PayPalAPI;
use PayPal\EBLBaseComponents\AbstractRequestType; 
/**
 * 
 */
class GetIncentiveEvaluationRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\GetIncentiveEvaluationRequestDetailsType	 
	 */ 
	public $GetIncentiveEvaluationRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($GetIncentiveEvaluationRequestDetails = NULL) {
		$this->GetIncentiveEvaluationRequestDetails = $GetIncentiveEvaluationRequestDetails;
	}


    
}
