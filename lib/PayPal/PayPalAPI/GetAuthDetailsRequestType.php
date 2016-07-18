<?php 
namespace PayPal\PayPalAPI;
use PayPal\EBLBaseComponents\AbstractRequestType; 
/**
 * A timestamped token, the value of which was returned by
 * SetAuthFlowParam Response. RequiredCharacter length and
 * limitations: 20 single-byte characters
 */
class GetAuthDetailsRequestType  extends AbstractRequestType  
  {

	/**
	 * A timestamped token, the value of which was returned by
	 * SetAuthFlowParam Response. RequiredCharacter length and
	 * limitations: 20 single-byte characters
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\string	 
	 */ 
	public $Token;

	/**
	 * Constructor with arguments
	 */
	public function __construct($Token = NULL) {
		$this->Token = $Token;
	}


    
}
