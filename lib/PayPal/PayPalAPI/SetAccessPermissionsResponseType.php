<?php 
namespace PayPal\PayPalAPI;
use PayPal\EBLBaseComponents\AbstractResponseType; 
/**
 * A timestamped token by which you identify to PayPal that you
 * are processing this user. The token expires after three
 * hours. Character length and limitations: 20 single-byte
 * characters
 */
class SetAccessPermissionsResponseType  extends AbstractResponseType  
  {

	/**
	 * A timestamped token by which you identify to PayPal that you
	 * are processing this user. The token expires after three
	 * hours. Character length and limitations: 20 single-byte
	 * characters
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\string	 
	 */ 
	public $Token;


}
