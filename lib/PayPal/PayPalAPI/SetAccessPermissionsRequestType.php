<?php 
namespace PayPal\PayPalAPI;
use PayPal\EBLBaseComponents\AbstractRequestType; 
/**
 * 
 */
class SetAccessPermissionsRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\SetAccessPermissionsRequestDetailsType	 
	 */ 
	public $SetAccessPermissionsRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($SetAccessPermissionsRequestDetails = NULL) {
		$this->SetAccessPermissionsRequestDetails = $SetAccessPermissionsRequestDetails;
	}


    
}
