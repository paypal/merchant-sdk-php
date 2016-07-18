<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class DoNonReferencedCreditRequestDetailsType
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $Amount;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $NetAmount;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $TaxAmount;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $ShippingAmount;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\CreditCardDetailsType
     */
    public $CreditCard;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ReceiverEmail;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Comment;

}
