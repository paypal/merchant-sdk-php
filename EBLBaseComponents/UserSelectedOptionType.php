<?php

namespace PayPal\Merchant\EBLBaseComponents;

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
     * @var \PayPal\Merchant\CoreComponentTypes\BasicAmountType
     */
    public $ShippingOptionAmount;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ShippingOptionName;

}
