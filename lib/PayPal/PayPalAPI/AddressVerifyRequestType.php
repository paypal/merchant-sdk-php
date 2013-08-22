<?php 
namespace PayPal\PayPalAPI;
use PayPal\EBLBaseComponents\AbstractRequestType; 
/**
 * Email address of buyer to be verified. Required Maximum
 * string length: 255 single-byte characters Input mask: ?@?.??
 * 
 */
class AddressVerifyRequestType  extends AbstractRequestType  
  {

	/**
	 * Email address of buyer to be verified. Required Maximum
	 * string length: 255 single-byte characters Input mask: ?@?.??
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\string	 
	 */ 
	public $Email;

	/**
	 * First line of buyer’s billing or shipping street address
	 * to be verified. Required For verification, input value of
	 * street address must match the first three single-byte
	 * characters of the street address on file for the PayPal
	 * account. Maximum string length: 35 single-byte characters
	 * Alphanumeric plus - , . ‘ # \ Whitespace and case of input
	 * value are ignored.
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Street;

	/**
	 * Postal code to be verified. Required For verification, input
	 * value of postal code must match the first five single-byte
	 * characters of the postal code on file for the PayPal
	 * account. Maximum string length: 16 single-byte characters
	 * Whitespace and case of input value are ignored.
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Zip;

	/**
	 * Constructor with arguments
	 */
	public function __construct($Email = NULL, $Street = NULL, $Zip = NULL) {
		$this->Email = $Email;
		$this->Street = $Street;
		$this->Zip = $Zip;
	}


    
}
