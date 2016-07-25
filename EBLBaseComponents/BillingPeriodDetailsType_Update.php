<?php
namespace PayPal\Merchant\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Unit of meausre for billing cycle
 */
class BillingPeriodDetailsType_Update
  extends PPXmlMessage
{

    /**
     * Unit of meausre for billing cycle
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $BillingPeriod;

    /**
     * Number of BillingPeriod that make up one billing cycle
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $BillingFrequency;

    /**
     * Total billing cycles in this portion of the schedule
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $TotalBillingCycles;

    /**
     * Amount to charge
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\CoreComponentTypes\BasicAmountType
     */
    public $Amount;

    /**
     * Additional shipping amount to charge
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\CoreComponentTypes\BasicAmountType
     */
    public $ShippingAmount;

    /**
     * Additional tax amount to charge
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\CoreComponentTypes\BasicAmountType
     */
    public $TaxAmount;

}
