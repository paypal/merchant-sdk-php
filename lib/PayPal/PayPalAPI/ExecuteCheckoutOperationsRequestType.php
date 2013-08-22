<?php 
namespace PayPal\PayPalAPI;
use PayPal\EBLBaseComponents\AbstractRequestType; 
/**
 * 
 */
class ExecuteCheckoutOperationsRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\ExecuteCheckoutOperationsRequestDetailsType	 
	 */ 
	public $ExecuteCheckoutOperationsRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($ExecuteCheckoutOperationsRequestDetails = NULL) {
		$this->ExecuteCheckoutOperationsRequestDetails = $ExecuteCheckoutOperationsRequestDetails;
	}


    
}
