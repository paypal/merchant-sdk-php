<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\AbstractRequestType;
/**
 * 
 */
class SetCustomerBillingAgreementRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\SetCustomerBillingAgreementRequestDetailsType	 
	 */ 
	public $SetCustomerBillingAgreementRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($SetCustomerBillingAgreementRequestDetails = NULL) {
		$this->SetCustomerBillingAgreementRequestDetails = $SetCustomerBillingAgreementRequestDetails;
	}


   
}
