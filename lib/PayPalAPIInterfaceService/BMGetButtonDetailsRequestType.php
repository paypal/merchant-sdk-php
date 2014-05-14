<?php 
/**
 * Button ID of button to return.  Required Character length
 * and limitations: 10 single-byte numeric characters  
 */
class BMGetButtonDetailsRequestType  extends AbstractRequestType  
  {

	/**
	 * Button ID of button to return.  Required Character length
	 * and limitations: 10 single-byte numeric characters 
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
