<?php 
/**
 * On your first invocation of
 * ExecuteCheckoutOperationsRequest, the value of this token is
 * returned by ExecuteCheckoutOperationsResponse. Optional
 * Include this element and its value only if you want to
 * modify an existing checkout session with another invocation
 * of ExecuteCheckoutOperationsRequest; for example, if you
 * want the customer to edit his shipping address on PayPal.
 * Character length and limitations: 20 single-byte characters 
 */
class ExecuteCheckoutOperationsRequestDetailsType  
   extends PPXmlMessage{

	/**
	 * On your first invocation of
	 * ExecuteCheckoutOperationsRequest, the value of this token is
	 * returned by ExecuteCheckoutOperationsResponse. Optional
	 * Include this element and its value only if you want to
	 * modify an existing checkout session with another invocation
	 * of ExecuteCheckoutOperationsRequest; for example, if you
	 * want the customer to edit his shipping address on PayPal.
	 * Character length and limitations: 20 single-byte characters 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Token;

	/**
	 * All the Data required to initiate the checkout session is
	 * passed in this element. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var SetDataRequestType 	 
	 */ 
	public $SetDataRequest;

	/**
	 * If auto authorization is required, this should be passed in
	 * with IsRequested set to yes. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var AuthorizationRequestType 	 
	 */ 
	public $AuthorizationRequest;

	/**
	 * Constructor with arguments
	 */
	public function __construct($SetDataRequest = NULL) {
		$this->SetDataRequest = $SetDataRequest;
	}


  
 
}
