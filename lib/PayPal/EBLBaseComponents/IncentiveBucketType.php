<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;
use PayPal\CoreComponentTypes\BasicAmountType;

class IncentiveBucketType
  extends PPXmlMessage
{
    /**
     * @access    public
     * @namespace ebl
     * @var IncentiveItemType[]
     */
    public $Items;

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
    public $SellerId;

    /**
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ExternalSellerId;

    /**
     * @access    public
     * @namespace ebl
     * @var BasicAmountType
     */
    public $BucketSubtotalAmt;

    /**
     * @access    public
     * @namespace ebl
     * @var BasicAmountType
     */
    public $BucketShippingAmt;

    /**
     * @access    public
     * @namespace ebl
     * @var BasicAmountType
     */
    public $BucketInsuranceAmt;

    /**
     * @access    public
     * @namespace ebl
     * @var BasicAmountType
     */
    public $BucketSalesTaxAmt;

    /**
     * @access    public
     * @namespace ebl
     * @var BasicAmountType
     */
    public $BucketTotalAmt;
}
