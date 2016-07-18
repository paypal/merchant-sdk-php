<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * Type of the payment Required 
 */
class CreateMobilePaymentRequestDetailsType  
   extends PPXmlMessage{

	/**
	 * Type of the payment Required 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $PaymentType;

	/**
	 * How you want to obtain payment. Defaults to Sale. Optional
	 * Authorization indicates that this payment is a basic
	 * authorization subject to settlement with PayPal
	 * Authorization and Capture. Sale indicates that this is a
	 * final sale for which you are requesting payment. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $PaymentAction;

	/**
	 * Phone number of the user making the payment. Required 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\PhoneNumberType	 
	 */ 
	public $SenderPhone;

	/**
	 * Type of recipient specified, i.e., phone number or email
	 * address Required 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $RecipientType;

	/**
	 * Email address of the recipient 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $RecipientEmail;

	/**
	 * Phone number of the recipipent Required 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\PhoneNumberType	 
	 */ 
	public $RecipientPhone;

	/**
	 * Amount of item before tax and shipping 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\CoreComponentTypes\BasicAmountType	 
	 */ 
	public $ItemAmount;

	/**
	 * The tax charged on the transactionTax Optional 
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
	 * Name of the item being ordered Optional Character length and
	 * limitations: 255 single-byte alphanumeric characters 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $ItemName;

	/**
	 * SKU of the item being ordered Optional Character length and
	 * limitations: 255 single-byte alphanumeric characters 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $ItemNumber;

	/**
	 * Memo entered by sender in PayPal Website Payments note
	 * field. Optional Character length and limitations: 255
	 * single-byte alphanumeric characters 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Note;

	/**
	 * Unique ID for the order. Required for non-P2P transactions
	 * Optional Character length and limitations: 255 single-byte
	 * alphanumeric characters 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $CustomID;

	/**
	 * Indicates whether the sender's phone number will be shared
	 * with recipient Optional 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var integer	 
	 */ 
	public $SharePhoneNumber;

	/**
	 * Indicates whether the sender's home address will be shared
	 * with recipient Optional 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var integer	 
	 */ 
	public $ShareHomeAddress;


    
}
