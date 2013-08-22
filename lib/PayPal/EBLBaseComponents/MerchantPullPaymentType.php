<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * MerchantPullPayment Parameters to make initiate a pull
 * payment 
 */
class MerchantPullPaymentType  
   extends PPXmlMessage{

	/**
	 * The amount to charge to the customer. Required Only numeric
	 * characters and a decimal separator are allowed. Limit: 10
	 * single-byte characters, including two for decimals You must
	 * set the currencyID attribute to one of the three-character
	 * currency code for any of the supported PayPal currencies. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\CoreComponentTypes\BasicAmountType	 
	 */ 
	public $Amount;

	/**
	 * Preapproved Payments billing agreement identification number
	 * between the PayPal customer and you. Required Character
	 * limit: 19 single-byte alphanumeric characters. The format of
	 * a billing agreement identification number is the
	 * single-character prefix B, followed by a hyphen and an
	 * alphanumeric character string: B-unique_alphanumeric_string
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\string	 
	 */ 
	public $MpID;

	/**
	 * Specifies type of PayPal payment you require Optional
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $PaymentType;

	/**
	 * Text entered by the customer in the Note field during
	 * enrollment Optional
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Memo;

	/**
	 * Subject line of confirmation email sent to recipient
	 * Optional
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $EmailSubject;

	/**
	 * The tax charged on the transaction Optional
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\CoreComponentTypes\BasicAmountType	 
	 */ 
	public $Tax;

	/**
	 * Per-transaction shipping charge Optional
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\CoreComponentTypes\BasicAmountType	 
	 */ 
	public $Shipping;

	/**
	 * Per-transaction handling charge Optional
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\CoreComponentTypes\BasicAmountType	 
	 */ 
	public $Handling;

	/**
	 * Name of purchased item Optional
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $ItemName;

	/**
	 * Reference number of purchased item Optional
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $ItemNumber;

	/**
	 * Your invoice number Optional
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Invoice;

	/**
	 * Custom annotation field for tracking or other use Optional
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Custom;

	/**
	 * An identification code for use by third-party applications
	 * to identify transactions. Optional Character length and
	 * limitations: 32 single-byte alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $ButtonSource= "PayPal_SDK";

	/**
	 * Passed in soft descriptor string to be appended. Optional
	 * Character length and limitations: single-byte alphanumeric
	 * characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $SoftDescriptor;


    
}
