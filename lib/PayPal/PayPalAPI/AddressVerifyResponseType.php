<?php 
namespace PayPal\PayPalAPI;
use PayPal\EBLBaseComponents\AbstractResponseType; 
/**
 * Confirmation of a match, with one of the following tokens:
 * None: The input value of the Email object does not match any
 * email address on file at PayPal. Confirmed: If the value of
 * the StreetMatch object is Matched, PayPal responds that the
 * entire postal address is confirmed. Unconfirmed: PayPal
 * responds that the postal address is unconfirmed 
 */
class AddressVerifyResponseType  extends AbstractResponseType  
  {

	/**
	 * Confirmation of a match, with one of the following tokens:
	 * None: The input value of the Email object does not match any
	 * email address on file at PayPal. Confirmed: If the value of
	 * the StreetMatch object is Matched, PayPal responds that the
	 * entire postal address is confirmed. Unconfirmed: PayPal
	 * responds that the postal address is unconfirmed
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ConfirmationCode;

	/**
	 * PayPal has compared the postal address you want to verify
	 * with the postal address on file at PayPal. None: The input
	 * value of the Email object does not match any email address
	 * on file at PayPal. In addition, an error response is
	 * returned. No further comparison of other input values has
	 * been made. Matched: The street address matches the street
	 * address on file at PayPal. Unmatched: The street address
	 * does not match the street address on file at PayPal. 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $StreetMatch;

	/**
	 * PayPal has compared the zip code you want to verify with the
	 * zip code on file for the email address. None: The street
	 * address was unmatched. No further comparison of other input
	 * values has been made. Matched: The zip code matches the zip
	 * code on file at PayPal. Unmatched: The zip code does not
	 * match the zip code on file at PayPal. 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ZipMatch;

	/**
	 * Two-character country code (ISO 3166) on file for the PayPal
	 * email address. 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $CountryCode;

	/**
	 * The token prevents a buyer from using any street address
	 * other than the address on file at PayPal during additional
	 * purchases he might make from the merchant. It contains
	 * encrypted information about the user’s street address and
	 * email address. You can pass the value of the token with the
	 * Buy Now button HTML address_api_token variable so that
	 * PayPal prevents the buyer from using any street address or
	 * email address other than those verified by PayPal. The token
	 * is valid for 24 hours. Character length and limitations: 94
	 * single-byte characters 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $PayPalToken;


}
