<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Description of the Order.
 */
class OrderDetailsType
  extends PPXmlMessage
{

    /**
     * Description of the Order.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Description;

    /**
     * Expected maximum amount that the merchant may pull using
     * DoReferenceTransaction
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $MaxAmount;

}
