<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;
use PayPal\CoreComponentTypes\BasicAmountType;

class RecurringPaymentsSummaryType
  extends PPXmlMessage
{
    /**
     * @access    public
     * @namespace ebl
     * @var string ISO8601
     */
    public $NextBillingDate;

    /**
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $NumberCyclesCompleted;

    /**
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $NumberCyclesRemaining;

    /**
     * @access    public
     * @namespace ebl
     * @var BasicAmountType
     */
    public $OutstandingBalance;

    /**
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $FailedPaymentCount;

    /**
     * @access    public
     * @namespace ebl
     * @var string ISO8601
     */
    public $LastPaymentDate;

    /**
     * @access    public
     * @namespace ebl
     * @var BasicAmountType
     */
    public $LastPaymentAmount;
}
