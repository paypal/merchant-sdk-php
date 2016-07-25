<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractResponseType;

/**
 *
 */
class GetBalanceResponseType
  extends AbstractResponseType
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\CoreComponentTypes\BasicAmountType
     */
    public $Balance;

    /**
     *
     * @access    public
     * @namespace ns
     * @var string DateTime in ISO8601
     */
    public $BalanceTimeStamp;

    /**
     *
     * @array
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\CoreComponentTypes\BasicAmountType
     */
    public $BalanceHoldings;

}
