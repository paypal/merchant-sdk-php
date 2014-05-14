<?php 
/**
 * 
 */
class GetMobileStatusRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var GetMobileStatusRequestDetailsType 	 
	 */ 
	public $GetMobileStatusRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($GetMobileStatusRequestDetails = NULL) {
		$this->GetMobileStatusRequestDetails = $GetMobileStatusRequestDetails;
	}


  
 
}
