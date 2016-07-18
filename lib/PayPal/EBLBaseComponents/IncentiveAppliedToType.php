<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class IncentiveAppliedToType
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $BucketId;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ItemId;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $IncentiveAmount;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $SubType;

}
