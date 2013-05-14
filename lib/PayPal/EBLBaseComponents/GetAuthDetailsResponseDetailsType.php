<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * The first name of the User. Character length and
 * limitations: 127 single-byte alphanumeric characters 
 */
class GetAuthDetailsResponseDetailsType  
   extends PPXmlMessage{

	/**
	 * The first name of the User. Character length and
	 * limitations: 127 single-byte alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $FirstName;

	/**
	 * The Last name of the user. Character length and limitations:
	 * 127 single-byte alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $LastName;

	/**
	 * The email address of the user. Character length and
	 * limitations: 256 single-byte alphanumeric characters. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Email;

	/**
	 * Encrypted PayPal customer account identification number.
	 * Required Character length and limitations: 127 single-byte
	 * characters.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\string	 
	 */ 
	public $PayerID;


}
