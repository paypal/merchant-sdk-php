<?php 
/**
 * 
 */
class DoNonReferencedCreditRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var DoNonReferencedCreditRequestDetailsType 	 
	 */ 
	public $DoNonReferencedCreditRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($DoNonReferencedCreditRequestDetails = NULL) {
		$this->DoNonReferencedCreditRequestDetails = $DoNonReferencedCreditRequestDetails;
	}


  
 
}
