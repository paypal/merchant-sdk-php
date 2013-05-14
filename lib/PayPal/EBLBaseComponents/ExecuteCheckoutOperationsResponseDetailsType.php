<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\;
/**
 * 
 */
class ExecuteCheckoutOperationsResponseDetailsType  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\SetDataResponseType	 
	 */ 
	public $SetDataResponse;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\AuthorizationResponseType	 
	 */ 
	public $AuthorizationResponse;


}
