<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Describes an individual item for an invoice.
 */
class InvoiceItemType
  extends PPXmlMessage
{

    /**
     * a human readable item nameOptional Character length and
     * limits: 127 single-byte characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Name;

    /**
     * a human readable item descriptionOptional Character length
     * and limits: 127 single-byte characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Description;

    /**
     * The International Article Number or Universal Product Code
     * (UPC) for the item. Empty string is allowed. Character
     * length and limits: 17 single-byte characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $EAN;

    /**
     * The Stock-Keeping Unit or other identification code assigned
     * to the item. Character length and limits: 64 single-byte
     * characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $SKU;

    /**
     * A retailer could apply different return policies on
     * different items. Each return policy would be identified
     * using a label or identifier. This return policy identifier
     * should be set here. This identifier will be displayed next
     * to the item in the e-Receipt. Character length and limits: 8
     * single-byte characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ReturnPolicyIdentifier;

    /**
     * total price of this item
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $Price;

    /**
     * price per item quantity
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $ItemPrice;

    /**
     * quantity of the item (non-negative)
     * @access    public
     * @namespace ebl
     * @var double
     */
    public $ItemCount;

    /**
     * Unit of measure for the itemCount
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ItemCountUnit;

    /**
     * discount applied to this item
     * @array
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\DiscountType
     */
    public $Discount;

    /**
     * identifies whether this item is taxable or not. If not
     * passed, this will be assumed to be true.
     * @access    public
     * @namespace ebl
     * @var boolean
     */
    public $Taxable;

    /**
     * The tax percentage applied to the item. This is only used
     * for displaying in the receipt, it is not used in pricing
     * calculations. Note: we have totalTax at invoice level. It's
     * up to the caller to do the calculations for setting that
     * other element.
     * @access    public
     * @namespace ebl
     * @var double
     */
    public $TaxRate;

    /**
     * Additional fees to this item
     * @array
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\AdditionalFeeType
     */
    public $AdditionalFees;

    /**
     * identifies whether this is reimbursable or not. If not pass,
     * this will be assumed to be true.
     * @access    public
     * @namespace ebl
     * @var boolean
     */
    public $Reimbursable;

    /**
     * Manufacturer part number.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $MPN;

    /**
     * International Standard Book Number. Reference
     * http://en.wikipedia.org/wiki/ISBN Character length and
     * limits: 32 single-byte characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ISBN;

    /**
     * Price Look-Up code Reference
     * http://en.wikipedia.org/wiki/Price_Look-Up_code Character
     * length and limits: 5 single-byte characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $PLU;

    /**
     * Character length and limits: 32 single-byte characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ModelNumber;

    /**
     * Character length and limits: 32 single-byte characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $StyleNumber;

}
