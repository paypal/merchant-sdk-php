<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class UpdateRecurringPaymentsProfileRequestDetailsType
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ProfileID;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Note;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Description;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $SubscriberName;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\AddressType
     */
    public $SubscriberShippingAddress;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ProfileReference;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $AdditionalBillingCycles;

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
    public $ShippingAmount;

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
    public $OutstandingBalance;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $AutoBillOutstandingAmount;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $MaxFailedPayments;

    /**
     * Information about the credit card to be charged (required if
     * Direct Payment)
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\CreditCardDetailsType
     */
    public $CreditCard;

    /**
     * When does this Profile begin billing?
     * @access    public
     * @namespace ebl
     * @var string DateTime in ISO8601
     */
    public $BillingStartDate;

    /**
     * Trial period of this schedule
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\BillingPeriodDetailsType_Update
     */
    public $TrialPeriod;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\BillingPeriodDetailsType_Update
     */
    public $PaymentPeriod;

    /**
     * Constructor with arguments
     */
    public function __construct($ProfileID = null)
    {
        $this->ProfileID = $ProfileID;
    }

}
