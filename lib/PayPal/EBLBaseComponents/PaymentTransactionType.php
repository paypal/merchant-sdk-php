<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * PaymentTransactionType Information about a PayPal payment
 * from the seller side
 */
class PaymentTransactionType
  extends PPXmlMessage
{

    /**
     * Information about the recipient of the payment
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\ReceiverInfoType
     */
    public $ReceiverInfo;

    /**
     * Information about the payer
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\PayerInfoType
     */
    public $PayerInfo;

    /**
     * This field is for holding ReferenceId for shippment sent
     * from Merchant to the 3rd Party
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $TPLReferenceID;

    /**
     * Information about the transaction
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\PaymentInfoType
     */
    public $PaymentInfo;

    /**
     * Information about an individual item in the transaction
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\PaymentItemInfoType
     */
    public $PaymentItemInfo;

    /**
     * Information about an individual Offer and Coupon information
     * in the transaction
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\OfferCouponInfoType
     */
    public $OfferCouponInfo;

    /**
     * Information about Secondary Address
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\AddressType
     */
    public $SecondaryAddress;

    /**
     * Information about the user selected options.
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\UserSelectedOptionType
     */
    public $UserSelectedOptions;

    /**
     * Information about the Gift message.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $GiftMessage;

    /**
     * Information about the Gift receipt.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $GiftReceipt;

    /**
     * Information about the Gift Wrap name.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $GiftWrapName;

    /**
     * Information about the Gift Wrap amount.
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $GiftWrapAmount;

    /**
     * Information about the Buyer email.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $BuyerEmailOptIn;

    /**
     * Information about the survey question.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $SurveyQuestion;

    /**
     * Information about the survey choice selected by the user.
     * @array
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $SurveyChoiceSelected;

}
