<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Describes discount information.
 */
class DiscountInfoType
  extends PPXmlMessage
{

    /**
     * (Optional)Item name. Character length and limits: 127
     * single-byte characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Name;

    /**
     * (Optional)Description of the discount. Character length and
     * limits: 127 single-byte characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Description;

    /**
     * (Optional)Amount discounted. The value includes an amount
     * and a 3-character currency code.
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $Amount;

    /**
     * (Optional)Offer type.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $RedeemedOfferType;

    /**
     * (Optional)Offer ID. Character length and limits: 64
     * single-byte characters.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $RedeemedOfferId;

    /**
     * (Optional)Loyalty points accrued.
     * @access    public
     * @namespace ebl
     * @var double
     */
    public $PointsAccrued;

}
