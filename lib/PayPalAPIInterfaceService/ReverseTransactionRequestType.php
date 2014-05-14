<?php 
/**
 * 
 */
class ReverseTransactionRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var ReverseTransactionRequestDetailsType 	 
	 */ 
	public $ReverseTransactionRequestDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($ReverseTransactionRequestDetails = NULL) {
		$this->ReverseTransactionRequestDetails = $ReverseTransactionRequestDetails;
	}


  
 
}
