<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * MerchantPullInfoType Information about the merchant pull. 
 */
class MerchantPullInfoType  
   extends PPXmlMessage{

	/**
	 * Current status of billing agreement 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $MpStatus;

	/**
	 * Monthly maximum payment amount
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\CoreComponentTypes\BasicAmountType	 
	 */ 
	public $MpMax;

	/**
	 * The value of the mp_custom variable that you specified in a
	 * FORM submission to PayPal during the creation or updating of
	 * a customer billing agreement 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $MpCustom;

	/**
	 * The value of the mp_desc variable (description of goods or
	 * services) associated with the billing agreement 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Desc;

	/**
	 * Invoice value as set by BillUserRequest API call 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Invoice;

	/**
	 * Custom field as set by BillUserRequest API call 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Custom;

	/**
	 * Note: This field is no longer used and is always empty.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $PaymentSourceID;


}
