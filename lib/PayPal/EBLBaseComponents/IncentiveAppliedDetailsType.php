<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * Details of incentive application on individual bucket/item. 
 */
class IncentiveAppliedDetailsType  
   extends PPXmlMessage{

	/**
	 * PaymentRequestID uniquely identifies a bucket. It is the
	 * "bucket id" in the world of EC API. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $PaymentRequestID;

	/**
	 * The item id passed through by the merchant. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $ItemId;

	/**
	 * The item transaction id passed through by the merchant. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $ExternalTxnId;

	/**
	 * Discount offerred for this bucket or item. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\CoreComponentTypes\BasicAmountType	 
	 */ 
	public $DiscountAmount;

	/**
	 * SubType for coupon. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $SubType;


}
