<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * PaymentTransactionSearchResultType Results from a
 * PaymentTransaction search 
 */
class PaymentTransactionSearchResultType  
   extends PPXmlMessage{

	/**
	 * The date and time (in UTC/GMT format) the transaction
	 * occurred
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var dateTime	 
	 */ 
	public $Timestamp;

	/**
	 * The time zone of the transaction 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Timezone;

	/**
	 * The type of the transaction
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Type;

	/**
	 * The email address of the payer
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\string	 
	 */ 
	public $Payer;

	/**
	 * Display name of the payer
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $PayerDisplayName;

	/**
	 * The transaction ID of the seller
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\string	 
	 */ 
	public $TransactionID;

	/**
	 * The status of the transaction
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Status;

	/**
	 * The total gross amount charged, including any profile
	 * shipping cost and taxes
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\CoreComponentTypes\BasicAmountType	 
	 */ 
	public $GrossAmount;

	/**
	 * The fee that PayPal charged for the transaction 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\CoreComponentTypes\BasicAmountType	 
	 */ 
	public $FeeAmount;

	/**
	 * The net amount of the transaction 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\CoreComponentTypes\BasicAmountType	 
	 */ 
	public $NetAmount;


}
