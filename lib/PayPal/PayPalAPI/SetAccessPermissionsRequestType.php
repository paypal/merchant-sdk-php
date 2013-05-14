<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\AbstractRequestType;
/**
 * 
 */
class SetAccessPermissionsRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\SetAccessPermissionsRequestDetailsType	 
	 */ 
	public $SetAccessPermissionsRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($SetAccessPermissionsRequestDetails = NULL) {
		$this->SetAccessPermissionsRequestDetails = $SetAccessPermissionsRequestDetails;
	}


   
}
