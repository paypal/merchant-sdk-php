<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Schedule details for the Recurring Payment
 */
class ScheduleDetailsType
  extends PPXmlMessage
{
    /**
     * Schedule details for the Recurring Payment
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Description;

    /**
     * Trial period of this schedule
     * @access    public
     * @namespace ebl
     * @var BillingPeriodDetailsType
     */
    public $TrialPeriod;

    /**
     * @access    public
     * @namespace ebl
     * @var BillingPeriodDetailsType
     */
    public $PaymentPeriod;

    /**
     * The max number of payments the buyer can fail before this
     * Recurring Payments profile is cancelled
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $MaxFailedPayments;

    /**
     * @access    public
     * @namespace ebl
     * @var ActivationDetailsType
     */
    public $ActivationDetails;

    /**
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $AutoBillOutstandingAmount;

    /**
     * Constructor with arguments
     *
     * @param string                   $Description
     * @param BillingPeriodDetailsType $PaymentPeriod
     */
    public function __construct($Description = null, $PaymentPeriod = null)
    {
        $this->Description   = $Description;
        $this->PaymentPeriod = $PaymentPeriod;
    }
}
