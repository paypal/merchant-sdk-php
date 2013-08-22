<?php 
namespace PayPal\PayPalAPI;
use PayPal\EBLBaseComponents\AbstractRequestType; 
/**
 * 
 */
class SetAuthFlowParamRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\SetAuthFlowParamRequestDetailsType	 
	 */ 
	public $SetAuthFlowParamRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($SetAuthFlowParamRequestDetails = NULL) {
		$this->SetAuthFlowParamRequestDetails = $SetAuthFlowParamRequestDetails;
	}


    
}
