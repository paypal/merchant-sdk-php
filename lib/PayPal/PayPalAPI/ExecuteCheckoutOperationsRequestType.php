<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\AbstractRequestType;
/**
 * 
 */
class ExecuteCheckoutOperationsRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\ExecuteCheckoutOperationsRequestDetailsType	 
	 */ 
	public $ExecuteCheckoutOperationsRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($ExecuteCheckoutOperationsRequestDetails = NULL) {
		$this->ExecuteCheckoutOperationsRequestDetails = $ExecuteCheckoutOperationsRequestDetails;
	}


   
}
