<?php 
/**
 * Hosted Button ID of the button to return inventory for. 
 * Required Character length and limitations: 10 single-byte
 * numeric characters  
 */
class BMGetInventoryRequestType  extends AbstractRequestType  
  {

	/**
	 * Hosted Button ID of the button to return inventory for. 
	 * Required Character length and limitations: 10 single-byte
	 * numeric characters 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $HostedButtonID;

	/**
	 * Constructor with arguments
	 */
	public function __construct($HostedButtonID = NULL) {
		$this->HostedButtonID = $HostedButtonID;
	}


  
 
}
