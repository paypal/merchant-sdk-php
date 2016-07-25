<?php

namespace PayPal\Merchant\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class DoNonReferencedCreditResponseDetailsType
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
     * @var string
     */
    public $TransactionID;

}
