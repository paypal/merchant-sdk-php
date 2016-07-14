<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;
use PayPal\CoreComponentTypes\BasicAmountType;

class AdditionalFeeType
  extends PPXmlMessage
{
    /**
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Type;

    /**
     * @access    public
     * @namespace ebl
     * @var BasicAmountType
     */
    public $Amount;
}
