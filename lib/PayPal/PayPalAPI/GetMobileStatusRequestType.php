<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\AbstractRequestType;
/**
 * 
 */
class GetMobileStatusRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\GetMobileStatusRequestDetailsType	 
	 */ 
	public $GetMobileStatusRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($GetMobileStatusRequestDetails = NULL) {
		$this->GetMobileStatusRequestDetails = $GetMobileStatusRequestDetails;
	}


   
}
