<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * PayerInfoType Payer information 
 */
class PayerInfoType  
   extends PPXmlMessage{

	/**
	 * Email address of payer Character length and limitations: 127
	 * single-byte characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\string	 
	 */ 
	public $Payer;

	/**
	 * Unique customer ID Character length and limitations: 17
	 * single-byte characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\string	 
	 */ 
	public $PayerID;

	/**
	 * Status of payer's email address 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $PayerStatus;

	/**
	 * Name of payer 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\PersonNameType	 
	 */ 
	public $PayerName;

	/**
	 * Payment sender's country of residence using standard
	 * two-character ISO 3166 country codes. Character length and
	 * limitations: Two single-byte characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $PayerCountry;

	/**
	 * Payer's business name. Character length and limitations: 127
	 * single-byte characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $PayerBusiness;

	/**
	 * Payer's business address
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\AddressType	 
	 */ 
	public $Address;

	/**
	 * Business contact telephone number
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $ContactPhone;

	/**
	 * Details about payer's tax info. Refer to the
	 * TaxIdDetailsType for more details. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\TaxIdDetailsType	 
	 */ 
	public $TaxIdDetails;

	/**
	 * Holds any enhanced information about the payer
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EnhancedDataTypes\EnhancedPayerInfoType	 
	 */ 
	public $EnhancedPayerInfo;


    
}
