<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * PaymentDetailsItemType Information about a Payment Item.
 */
class PaymentDetailsItemType
  extends PPXmlMessage
{

    /**
     * Item name. Optional Character length and limitations: 127
     * single-byte characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Name;

    /**
     * Item number. Optional Character length and limitations: 127
     * single-byte characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Number;

    /**
     * Item quantity. Optional Character length and limitations:
     * Any positive integer
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $Quantity;

    /**
     * Item sales tax. Optional Character length and limitations:
     * any valid currency amount; currency code is set the same as
     * for OrderTotal.
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $Tax;

    /**
     * Cost of item You must set the currencyID attribute to one of
     * the three-character currency codes for any of the supported
     * PayPal currencies. Optional Limitations: Must not exceed
     * $10,000 USD in any currency. No currency symbol. Decimal
     * separator must be a period (.), and the thousands separator
     * must be a comma (,).
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $Amount;

    /**
     * Ebay specific details. Optional
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\EbayItemPaymentDetailsItemType
     */
    public $EbayItemPaymentDetailsItem;

    /**
     * Promotional financing code for item. Part of the Merchant
     * Services Promotion Financing feature.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $PromoCode;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ProductCategory;

    /**
     * Item description. Optional Character length and limitations:
     * 127 single-byte characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Description;

    /**
     * Information about the Item weight.
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\MeasureType
     */
    public $ItemWeight;

    /**
     * Information about the Item length.
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\MeasureType
     */
    public $ItemLength;

    /**
     * Information about the Item width.
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\MeasureType
     */
    public $ItemWidth;

    /**
     * Information about the Item height.
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\MeasureType
     */
    public $ItemHeight;

    /**
     * URL for the item. Optional Character length and limitations:
     * no limit.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ItemURL;

    /**
     * Enhanced data for each item in the cart. Optional
     * @access    public
     * @namespace ebl
     * @var \PayPal\EnhancedDataTypes\EnhancedItemDataType
     */
    public $EnhancedItemData;

    /**
     * Item category - physical or digital. Optional
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ItemCategory;

}
