<?php 
/**
 * 
 */
class SetAuthFlowParamRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var SetAuthFlowParamRequestDetailsType 	 
	 */ 
	public $SetAuthFlowParamRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($SetAuthFlowParamRequestDetails = NULL) {
		$this->SetAuthFlowParamRequestDetails = $SetAuthFlowParamRequestDetails;
	}


  
 
}
