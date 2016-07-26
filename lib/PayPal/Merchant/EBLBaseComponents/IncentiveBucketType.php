<?php

namespace PayPal\Merchant\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class IncentiveBucketType
  extends PPXmlMessage
{

    /**
     *
     * @array
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\IncentiveItemType
     */
    public $Items;

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
    public $SellerId;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ExternalSellerId;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\CoreComponentTypes\BasicAmountType
     */
    public $BucketSubtotalAmt;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\CoreComponentTypes\BasicAmountType
     */
    public $BucketShippingAmt;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\CoreComponentTypes\BasicAmountType
     */
    public $BucketInsuranceAmt;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\CoreComponentTypes\BasicAmountType
     */
    public $BucketSalesTaxAmt;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\CoreComponentTypes\BasicAmountType
     */
    public $BucketTotalAmt;

}
