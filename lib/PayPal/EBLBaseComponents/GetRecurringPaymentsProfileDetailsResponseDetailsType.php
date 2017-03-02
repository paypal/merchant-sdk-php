<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Recurring Billing Profile ID
 */
class GetRecurringPaymentsProfileDetailsResponseDetailsType
  extends PPXmlMessage
{

    /**
     * Recurring Billing Profile ID
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
    public $ProfileStatus;

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
    public $AutoBillOutstandingAmount;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $MaxFailedPayments;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\RecurringPaymentsProfileDetailsType
     */
    public $RecurringPaymentsProfileDetails;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\BillingPeriodDetailsType
     */
    public $CurrentRecurringPaymentsPeriod;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\RecurringPaymentsSummaryType
     */
    public $RecurringPaymentsSummary;

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
     * @var \PayPal\EBLBaseComponents\BillingPeriodDetailsType
     */
    public $TrialRecurringPaymentsPeriod;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\BillingPeriodDetailsType
     */
    public $RegularRecurringPaymentsPeriod;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $TrialAmountPaid;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $RegularAmountPaid;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $AggregateAmount;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $AggregateOptionalAmount;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string DateTime in ISO8601
     */
    public $FinalPaymentDueDate;

    /**
     * Use this optional parameter to pass in your business name
     * and other data describing the transaction. Optional This
     * information is usually displayed in the account holder's
     * statement. Example: RedCross Haiti, RedCross Uganda,
     * Realtor.com dues, Realtor.com list fee Length 25 characters.
     * Alphanumeric characters and dash(-), dot(.), asterisk(*),
     * space( ) On the customer's statement, an asterisk is used to
     * separate the DBA name and product name. The asterisk
     * delimiter can appear in position 4, 8, or 13.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $SoftDescriptor;

    /**
     * Use this optional parameter to pass information about how
     * consumer should contact the merchant. Optional This
     * information is usually displayed in the account holder's
     * statement. For Ecom trx: phone, email or URL is allowed For
     * Retail trx: only the actual city is allowed For details on
     * allowed characters in Soft Descriptor City refer to the API
     * documentation.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $SoftDescriptorCity;

}
