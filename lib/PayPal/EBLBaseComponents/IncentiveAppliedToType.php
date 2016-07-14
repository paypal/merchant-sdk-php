<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;
use PayPal\CoreComponentTypes\BasicAmountType;

class IncentiveAppliedToType
  extends PPXmlMessage
{
    /**
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $BucketId;

    /**
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ItemId;

    /**
     * @access    public
     * @namespace ebl
     * @var BasicAmountType
     */
    public $IncentiveAmount;

    /**
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $SubType;
}
