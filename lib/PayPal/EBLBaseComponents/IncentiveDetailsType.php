<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Information about the incentives that were applied from Ebay
 * RYP page and PayPal RYP page.
 */
class IncentiveDetailsType
  extends PPXmlMessage
{

    /**
     * Unique Identifier consisting of redemption code, user
     * friendly descripotion, incentive type, campaign code,
     * incenitve application order and site redeemed on.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $UniqueIdentifier;

    /**
     * Defines if the incentive has been applied on Ebay or PayPal.
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $SiteAppliedOn;

    /**
     * The total discount amount for the incentive, summation of
     * discounts up across all the buckets/items.
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $TotalDiscountAmount;

    /**
     * Status of incentive processing. Sussess or Error.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Status;

    /**
     * Error code if there are any errors. Zero otherwise.
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $ErrorCode;

    /**
     * Details of incentive application on individual bucket/item.
     * @array
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\IncentiveAppliedDetailsType
     */
    public $IncentiveAppliedDetails;

}
