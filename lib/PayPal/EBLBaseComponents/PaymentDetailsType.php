<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * PaymentDetailsType Information about a payment. Used by DCC
 * and Express Checkout.
 */
class PaymentDetailsType
  extends PPXmlMessage
{

    /**
     * Total of order, including shipping, handling, and tax. You
     * must set the currencyID attribute to one of the
     * three-character currency codes for any of the supported
     * PayPal currencies. Limitations: Must not exceed $10,000 USD
     * in any currency. No currency symbol. Decimal separator must
     * be a period (.), and the thousands separator must be a comma
     * (,).
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $OrderTotal;

    /**
     * Sum of cost of all items in this order. You must set the
     * currencyID attribute to one of the three-character currency
     * codes for any of the supported PayPal currencies. Optional
     * separator must be a comma (,).
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $ItemTotal;

    /**
     * Total shipping costs for this order. You must set the
     * currencyID attribute to one of the three-character currency
     * codes for any of the supported PayPal currencies. Optional
     * Limitations: Must not exceed $10,000 USD in any currency. No
     * currency symbol. Decimal separator must be a period (.), and
     * the thousands separator must be a comma (,).
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $ShippingTotal;

    /**
     * Total handling costs for this order. You must set the
     * currencyID attribute to one of the three-character currency
     * codes for any of the supported PayPal currencies. Optional
     * Limitations: Must not exceed $10,000 USD in any currency. No
     * currency symbol. Decimal separator must be a period (.), and
     * the thousands separator must be a comma (,).
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $HandlingTotal;

    /**
     * Sum of tax for all items in this order. You must set the
     * currencyID attribute to one of the three-character currency
     * codes for any of the supported PayPal currencies. Optional
     * Limitations: Must not exceed $10,000 USD in any currency. No
     * currency symbol. Decimal separator must be a period (.), and
     * the thousands separator must be a comma (,).
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $TaxTotal;

    /**
     * Description of items the customer is purchasing. Optional
     * Character length and limitations: 127 single-byte
     * alphanumeric characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $OrderDescription;

    /**
     * A free-form field for your own use. Optional Character
     * length and limitations: 256 single-byte alphanumeric
     * characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Custom;

    /**
     * Your own invoice or tracking number. Optional Character
     * length and limitations: 127 single-byte alphanumeric
     * characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $InvoiceID;

    /**
     * An identification code for use by third-party applications
     * to identify transactions. Optional Character length and
     * limitations: 32 single-byte alphanumeric characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ButtonSource = "PayPal_SDK";

    /**
     * Your URL for receiving Instant Payment Notification (IPN)
     * about this transaction. Optional If you do not specify
     * NotifyURL in the request, the notification URL from your
     * Merchant Profile is used, if one exists. Character length
     * and limitations: 2,048 single-byte alphanumeric characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $NotifyURL;

    /**
     * Address the order will be shipped to. Optional If you
     * include the ShipToAddress element, the AddressType elements
     * are required: Name Street1 CityName CountryCode Do not set
     * set the CountryName element.
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\AddressType
     */
    public $ShipToAddress;

    /**
     * The value 1 indicates that this payment is associated with
     * multiple shipping addresses. Optional Character length and
     * limitations: Four single-byte numeric characters.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $MultiShipping;

    /**
     * Thirdparty Fulfillment Reference Number. Optional Character
     * length and limitations: 32 alphanumeric characters.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $FulfillmentReferenceNumber;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\AddressType
     */
    public $FulfillmentAddress;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $PaymentCategoryType;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $LocationType;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ShippingMethod;

    /**
     * Date and time (in GMT in the format yyyy-MM-ddTHH:mm:ssZ) at
     * which address was changed by the user.
     * @access    public
     * @namespace ebl
     * @var string DateTime in ISO8601
     */
    public $ProfileAddressChangeDate;

    /**
     * Information about the individual purchased items
     * @array
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\PaymentDetailsItemType
     */
    public $PaymentDetailsItem;

    /**
     * Total shipping insurance costs for this order. Optional
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $InsuranceTotal;

    /**
     * Shipping discount for this order, specified as a negative
     * number. Optional
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $ShippingDiscount;

    /**
     * Information about the Insurance options.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $InsuranceOptionOffered;

    /**
     * Allowed payment methods for this transaction.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $AllowedPaymentMethod;

    /**
     * Enhanced Data section to accept channel specific data.
     * Applicable for version 62 and above, use this tag to pass
     * airline itinerary data. Optional Refer to
     * EnhancedPaymentDataType for details.
     * @access    public
     * @namespace ebl
     * @var \PayPal\EnhancedDataTypes\EnhancedPaymentDataType
     */
    public $EnhancedPaymentData;

    /**
     * Details about the seller. Optional
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\SellerDetailsType
     */
    public $SellerDetails;

    /**
     * Note to recipient/seller. Optional Character length and
     * limitations: 127 single-byte alphanumeric characters.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $NoteText;

    /**
     * PayPal Transaction Id, returned once DoExpressCheckout is
     * completed.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $TransactionId;

    /**
     * How you want to obtain payment. This payment action input
     * will be used for split payments Authorization indicates that
     * this payment is a basic authorization subject to settlement
     * with PayPal Authorization and Capture. Order indicates that
     * this payment is is an order authorization subject to
     * settlement with PayPal Authorization and Capture. Sale
     * indicates that this is a final sale for which you are
     * requesting payment. IMPORTANT: You cannot set PaymentAction
     * to Sale on SetExpressCheckoutRequest and then change
     * PaymentAction to Authorization on the final Express Checkout
     * API, DoExpressCheckoutPaymentRequest. Character length and
     * limit: Up to 13 single-byte alphabetic characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $PaymentAction;

    /**
     * Unique identifier and mandatory for the particular payment
     * request in case of multiple payment
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $PaymentRequestID;

    /**
     * URL on Merchant site pertaining to this invoice. Optional
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $OrderURL;

    /**
     * Soft Descriptor supported for Sale and Auth in DEC only. For
     * Order this will be ignored.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $SoftDescriptor;

    /**
     * BranchLevel is used to identify chain payment. If
     * BranchLevel is 0 or 1, this payment is where money moves to.
     * If BranchLevel greater than 1, this payment contains the
     * actual seller info. Optional
     * @access    public
     * @namespace ebl
     * @var integer
     */
    public $BranchLevel;

    /**
     * Soft Descriptor supported for Sale and Auth in DEC only. For
     * Order this will be ignored.
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\OfferDetailsType
     */
    public $OfferDetails;

    /**
     * Flag to indicate the recurring transaction
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Recurring;

    /**
     * Indicates the purpose of this payment like Refund
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $PaymentReason;

    /**
     * Location ID Specified by merchant Optional Character length
     * and limitations: 50 single-byte alphanumeric characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $LocationID;

    /**
     * For instance single use coupons should not be returned in
     * future CheckIn calls once they are redeemed.
     * @array
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\DiscountInfoType
     */
    public $RedeemedOffers;

    /**
     * Total loyalty points for a given id accumulated by the
     * consumre so far.
     * @array
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\DiscountInfoType
     */
    public $CummulativePoints;

    /**
     * Merchant Data that is passed through from Merchant to
     * Processor
     * @array
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\MerchantDataType
     */
    public $MerchantData;

}
