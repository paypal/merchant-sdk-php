<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractResponseType;

/**
 * Return msgsubid back to merchant
 */
class DoCancelResponseType
  extends AbstractResponseType
{

    /**
     * Return msgsubid back to merchant
     * @access    public
     * @namespace ns
     * @var string
     */
    public $MsgSubID;

}
