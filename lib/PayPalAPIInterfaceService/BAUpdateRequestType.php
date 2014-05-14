<?php 
/**
 * 
 */
class BAUpdateRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ReferenceID;

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $BillingAgreementDescription;

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $BillingAgreementStatus;

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $BillingAgreementCustom;

	/**
	 * Constructor with arguments
	 */
	public function __construct($ReferenceID = NULL) {
		$this->ReferenceID = $ReferenceID;
	}


  
 
}
