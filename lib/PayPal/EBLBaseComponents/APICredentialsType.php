<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\;
/**
 * APICredentialsType 
 */
class APICredentialsType  
   extends PPXmlMessage{

	/**
	 * Merchant’s PayPal API usernameCharacter length and
	 * limitations: 128 alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Username;

	/**
	 * Merchant’s PayPal API passwordCharacter length and
	 * limitations: 40 alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Password;

	/**
	 * Merchant’s PayPal API signature, if one exists. Character
	 * length and limitations: 256 alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Signature;

	/**
	 * Merchant’s PayPal API certificate in PEM format, if one
	 * exists The certificate consists of two parts: the private
	 * key (2,048 bytes) and the certificate proper (4,000 bytes).
	 * Character length and limitations: 6,048 alphanumeric
	 * characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Certificate;

	/**
	 * Merchant’s PayPal API authentication mechanism. Auth-None:
	 * no authentication mechanism on file Cert: API certificate
	 * Sign: API signature Character length and limitations: 9
	 * alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Type;


}
