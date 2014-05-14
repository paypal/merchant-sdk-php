<?php 
/**
 * A timestamped token, the value of which was returned by
 * SetExpressCheckoutResponse. RequiredCharacter length and
 * limitations: 20 single-byte characters
 */
class GetExpressCheckoutDetailsRequestType  extends AbstractRequestType  
  {

	/**
	 * A timestamped token, the value of which was returned by
	 * SetExpressCheckoutResponse. RequiredCharacter length and
	 * limitations: 20 single-byte characters
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Token;

	/**
	 * Constructor with arguments
	 */
	public function __construct($Token = NULL) {
		$this->Token = $Token;
	}


  
 
}
