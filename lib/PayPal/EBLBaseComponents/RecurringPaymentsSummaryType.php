<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class RecurringPaymentsSummaryType
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string DateTime in ISO8601
     */
    public $NextBillingDate;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $NumberCyclesCompleted;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $NumberCyclesRemaining;

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
     * @var integer
     */
    public $FailedPaymentCount;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string DateTime in ISO8601
     */
    public $LastPaymentDate;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $LastPaymentAmount;

}
