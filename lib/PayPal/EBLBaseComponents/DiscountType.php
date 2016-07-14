<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;
use PayPal\CoreComponentTypes\BasicAmountType;

/**
 * Describes discount information
 */
class DiscountType
  extends PPXmlMessage
{
    /**
     * Item nameOptional Character length and limits: 127
     * single-byte characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Name;

    /**
     * description of the discountOptional Character length and
     * limits: 127 single-byte characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Description;

    /**
     * amount discountedOptional
     * @access    public
     * @namespace ebl
     * @var BasicAmountType
     */
    public $Amount;

    /**
     * offer typeOptional
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $RedeemedOfferType;

    /**
     * offer IDOptional Character length and limits: 64 single-byte
     * characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $RedeemedOfferID;

    /**
     * Constructor with arguments
     *
     * @param BasicAmountType $Amount
     */
    public function __construct($Amount = null)
    {
        $this->Amount = $Amount;
    }
}
