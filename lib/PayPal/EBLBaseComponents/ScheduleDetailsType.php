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
     * @var \PayPal\EBLBaseComponents\BillingPeriodDetailsType
     */
    public $TrialPeriod;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\BillingPeriodDetailsType
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
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\ActivationDetailsType
     */
    public $ActivationDetails;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $AutoBillOutstandingAmount;

    /**
     * Constructor with arguments
     */
    public function __construct($Description = null, $PaymentPeriod = null)
    {
        $this->Description = $Description;
        $this->PaymentPeriod = $PaymentPeriod;
    }

}
