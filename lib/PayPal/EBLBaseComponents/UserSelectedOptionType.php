<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Information on user selected options
 */
class UserSelectedOptionType
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ShippingCalculationMode;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $InsuranceOptionSelected;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ShippingOptionIsDefault;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $ShippingOptionAmount;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ShippingOptionName;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ScheduledShippingDate;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ScheduledShippingPeriod;

}
