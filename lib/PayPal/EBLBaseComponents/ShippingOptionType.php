<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Fallback shipping options type.
 */
class ShippingOptionType
  extends PPXmlMessage
{

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

}
