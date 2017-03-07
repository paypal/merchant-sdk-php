<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Billing Agreement token (required if Express Checkout)
 */
class CreateRecurringPaymentsProfileRequestDetailsType
  extends PPXmlMessage
{

    /**
     * Billing Agreement token (required if Express Checkout)
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Token;

    /**
     * Information about the credit card to be charged (required if
     * Direct Payment)
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\CreditCardDetailsType
     */
    public $CreditCard;

    /**
     * Customer Information for this Recurring Payments
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\RecurringPaymentsProfileDetailsType
     */
    public $RecurringPaymentsProfileDetails;

    /**
     * Schedule Information for this Recurring Payments
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\ScheduleDetailsType
     */
    public $ScheduleDetails;

    /**
     * Information about the Item Details.
     * @array
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\PaymentDetailsItemType
     */
    public $PaymentDetailsItem;

    /**
     * Use this optional parameter to pass in your business name
     * and other data describing the transaction. Optional This
     * information is usually displayed in the CC account holder's
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
     * information is usually displayed in the CC account holder's
     * statement. For Ecom trx: phone, email or URL is allowed For
     * Retail trx: only the actual city is allowed For details on
     * allowed characters in Soft Descriptor City refer to the API
     * documentation.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $SoftDescriptorCity;

    /**
     * Constructor with arguments
     */
    public function __construct($RecurringPaymentsProfileDetails = null, $ScheduleDetails = null)
    {
        $this->RecurringPaymentsProfileDetails = $RecurringPaymentsProfileDetails;
        $this->ScheduleDetails = $ScheduleDetails;
    }

}
