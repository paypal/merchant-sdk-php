<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractResponseType;

/**
 * An authorization identification number. Character length and
 * limits: 19 single-byte characters
 */
class DoAuthorizationResponseType
  extends AbstractResponseType
{

    /**
     * An authorization identification number. Character length and
     * limits: 19 single-byte characters
     * @access    public
     * @namespace ns
     * @var string
     */
    public $TransactionID;

    /**
     * The amount and currency you specified in the request.
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\CoreComponentTypes\BasicAmountType
     */
    public $Amount;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\AuthorizationInfoType
     */
    public $AuthorizationInfo;

    /**
     * Return msgsubid back to merchant
     * @access    public
     * @namespace ns
     * @var string
     */
    public $MsgSubID;

}
