<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\AbstractRequestType;
/**
 * 
 */
class DoNonReferencedCreditRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\DoNonReferencedCreditRequestDetailsType	 
	 */ 
	public $DoNonReferencedCreditRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($DoNonReferencedCreditRequestDetails = NULL) {
		$this->DoNonReferencedCreditRequestDetails = $DoNonReferencedCreditRequestDetails;
	}


   
}
