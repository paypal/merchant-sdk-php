<?php 
/**
 * The merchant passes in the ExternalRememberMeID to identify
 * the user to opt out. This is a 17-character alphanumeric
 * (encrypted) string that identifies the buyer's remembered
 * login with a merchant and has meaning only to the merchant.
 * Required 
 */
class ExternalRememberMeOptOutRequestType  extends AbstractRequestType  
  {

	/**
	 * The merchant passes in the ExternalRememberMeID to identify
	 * the user to opt out. This is a 17-character alphanumeric
	 * (encrypted) string that identifies the buyer's remembered
	 * login with a merchant and has meaning only to the merchant.
	 * Required 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ExternalRememberMeID;

	/**
	 * E-mail address or secure merchant account ID of merchant to
	 * associate with external remember-me. 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var ExternalRememberMeOwnerDetailsType 	 
	 */ 
	public $ExternalRememberMeOwnerDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($ExternalRememberMeID = NULL) {
		$this->ExternalRememberMeID = $ExternalRememberMeID;
	}


  
 
}
