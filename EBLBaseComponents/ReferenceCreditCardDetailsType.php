<?php
namespace PayPal\Merchant\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * CreditCardDetailsType for DCC Reference Transaction
 * Information about a Credit Card.
 */
class ReferenceCreditCardDetailsType
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\CreditCardNumberTypeType
     */
    public $CreditCardNumberType;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $ExpMonth;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $ExpYear;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\PersonNameType
     */
    public $CardOwnerName;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\AddressType
     */
    public $BillingAddress;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $CVV2;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $StartMonth;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $StartYear;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $IssueNumber;

}
