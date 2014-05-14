<?php 
/**
 * PaymentItemInfoType Information about a PayPal item. 
 */
class PaymentItemInfoType  
   extends PPXmlMessage{

	/**
	 * Invoice number you set in the original transaction.
	 * Character length and limitations: 127 single-byte
	 * alphanumeric characters 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $InvoiceID;

	/**
	 * Custom field you set in the original transaction. Character
	 * length and limitations: 127 single-byte alphanumeric
	 * characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Custom;

	/**
	 * Memo entered by your customer in PayPal Website Payments
	 * note field. Character length and limitations: 255
	 * single-byte alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Memo;

	/**
	 * Amount of tax charged on transaction
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $SalesTax;

	/**
	 * Details about the indivudal purchased item
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PaymentItemType 	 
	 */ 
	public $PaymentItem;

	/**
	 * Information about the transaction if it was created via
	 * PayPal Subcriptions
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var SubscriptionInfoType 	 
	 */ 
	public $Subscription;

	/**
	 * Information about the transaction if it was created via an
	 * auction
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var AuctionInfoType 	 
	 */ 
	public $Auction;


}
