<?php

namespace PayPal\Merchant\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * @hasAttribute
 * SubscriptionTermsType Terms of a PayPal subscription.
 */
class SubscriptionTermsType
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\CoreComponentTypes\BasicAmountType
     */
    public $Amount;

    /**
     *
     * @access    public
     * @namespace ebl
     * @attribute
     * @var string
     */
    public $period;

}
