<?php 
/**
 * A timestamped token, the value of which was returned by
 * SetAuthFlowParam Response. Required Character length and
 * limitations: 20 single-byte characters 
 */
class GetAccessPermissionDetailsRequestType  extends AbstractRequestType  
  {

	/**
	 * A timestamped token, the value of which was returned by
	 * SetAuthFlowParam Response. Required Character length and
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
