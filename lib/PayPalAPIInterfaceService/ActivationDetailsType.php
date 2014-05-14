<?php 
/**
 * 
 */
class ActivationDetailsType  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var BasicAmountType 	 
	 */ 
	public $InitialAmount;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $FailedInitialAmountAction;

	/**
	 * Constructor with arguments
	 */
	public function __construct($InitialAmount = NULL) {
		$this->InitialAmount = $InitialAmount;
	}


  
 
}
