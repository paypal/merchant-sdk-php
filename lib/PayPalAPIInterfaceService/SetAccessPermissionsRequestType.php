<?php 
/**
 * 
 */
class SetAccessPermissionsRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var SetAccessPermissionsRequestDetailsType 	 
	 */ 
	public $SetAccessPermissionsRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($SetAccessPermissionsRequestDetails = NULL) {
		$this->SetAccessPermissionsRequestDetails = $SetAccessPermissionsRequestDetails;
	}


  
 
}
