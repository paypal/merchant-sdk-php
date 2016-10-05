<?php

namespace PayPal\Merchant\EBLBaseComponents;

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
     * @var \PayPal\Merchant\CoreComponentTypes\BasicAmountType
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
