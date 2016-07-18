<?php
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;

class BAUpdateResponseDetailsType
   extends PPXmlMessage{

	/**
	 * @access public
	 * @namespace ebl
	 * @var string
	 */
	public $BillingAgreementID;

	/**
	 * @access public
	 * @namespace ebl
	 * @var string
	 */
	public $BillingAgreementDescription;

	/**
	 * @access public
	 * @namespace ebl
	 * @var string
	 */
	public $BillingAgreementStatus;

	/**
	 * @access public
	 * @namespace ebl
	 * @var string
	 */
	public $BillingAgreementCustom;

	/**
	 * @access public
	 * @namespace ebl
	 * @var \PayPal\EBLBaseComponents\PayerInfoType
	 */
	public $PayerInfo;

	/**
	 * @access public
	 * @namespace ebl
	 * @var \PayPal\CoreComponentTypes\BasicAmountType
	 */
	public $BillingAgreementMax;

	/**
	 * Customer's billing address. Optional If you have credit card
	 * mapped in your account then billing address of the credit
	 * card is returned otherwise your primary address is returned
	 * , PayPal returns this address in BAUpdateResponseDetails.
	 * @access public
	 * @namespace ebl
	 * @var \PayPal\EBLBaseComponents\AddressType
	 */
	public $BillingAddress;


}
