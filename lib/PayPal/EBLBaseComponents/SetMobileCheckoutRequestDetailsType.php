<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * The phone number of the buyer's mobile device, if available.
 * Optional
 */
class SetMobileCheckoutRequestDetailsType
  extends PPXmlMessage
{

    /**
     * The phone number of the buyer's mobile device, if available.
     * Optional
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\PhoneNumberType
     */
    public $BuyerPhone;

    /**
     * Cost of this item before tax and shipping.You must set the
     * currencyID attribute to one of the three-character currency
     * codes for any of the supported PayPal currencies. Required
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $ItemAmount;

    /**
     * Tax amount for this item.You must set the currencyID
     * attribute to one of the three-character currency codes for
     * any of the supported PayPal currencies. Optional
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $Tax;

    /**
     * Shipping amount for this item.You must set the currencyID
     * attribute to one of the three-character currency codes for
     * any of the supported PayPal currencies. Optional
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $Shipping;

    /**
     * Description of the item that the customer is purchasing.
     * Required Character length and limitations: 127 single-byte
     * alphanumeric characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ItemName;

    /**
     * Reference number of the item that the customer is
     * purchasing. Optional Character length and limitations: 127
     * single-byte alphanumeric characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ItemNumber;

    /**
     * A free-form field for your own use, such as a tracking
     * number or other value you want returned to you in IPN.
     * Optional Character length and limitations: 256 single-byte
     * alphanumeric characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Custom;

    /**
     * Your own unique invoice or tracking number. Optional
     * Character length and limitations: 127 single-byte
     * alphanumeric characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $InvoiceID;

    /**
     * URL to which the customer's browser is returned after
     * choosing to pay with PayPal. PayPal recommends that the
     * value of ReturnURL be the final review page on which the
     * customer confirms the order and payment. Required Character
     * length and limitations: no limit.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ReturnURL;

    /**
     * URL to which the customer is returned if he does not approve
     * the use of PayPal to pay you. PayPal recommends that the
     * value of CancelURL be the original page on which the
     * customer chose to pay with PayPal. Optional Character length
     * and limitations: no limit
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $CancelURL;

    /**
     * The value 1 indicates that you require that the customer's
     * shipping address on file with PayPal be a confirmed address.
     * Setting this element overrides the setting you have
     * specified in your Merchant Account Profile. Optional
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $AddressDisplayOptions;

    /**
     * The value 1 indicates that you require that the customer
     * specifies a contact phone for the transactxion. Default is 0
     * / none required. Optional
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $SharePhone;

    /**
     * Customer's shipping address. Optional
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\AddressType
     */
    public $ShipToAddress;

    /**
     * Email address of the buyer as entered during checkout.
     * PayPal uses this value to pre-fill the login portion of the
     * PayPal login page. Optional Character length and limit: 127
     * single-byte alphanumeric characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $BuyerEmail;

    /**
     * Constructor with arguments
     */
    public function __construct($ItemAmount = null, $ItemName = null, $ReturnURL = null)
    {
        $this->ItemAmount = $ItemAmount;
        $this->ItemName = $ItemName;
        $this->ReturnURL = $ReturnURL;
    }

}
