<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;

/**
 * Unique identifier of the transaction you are refunding.
 * Optional Character length and limitations: 17 single-byte
 * alphanumeric characters
 */
class RefundTransactionRequestType extends AbstractRequestType
{

    /**
     * Unique identifier of the transaction you are refunding.
     * Optional Character length and limitations: 17 single-byte
     * alphanumeric characters
     * @access    public
     * @namespace ns
     * @var string
     */
    public $TransactionID;

    /**
     * Encrypted PayPal customer account identification number.
     * Optional Character length and limitations: 127 single-byte
     * alphanumeric characters
     * @access    public
     * @namespace ns
     * @var string
     */
    public $PayerID;

    /**
     * Invoice number corresponding to transaction details for
     * tracking the refund of a payment. This parameter is passed
     * by the merchant or recipient while refunding the
     * transaction. This parameter does not affect the business
     * logic, it is persisted in the DB for transaction reference
     * Optional
     * @access    public
     * @namespace ns
     * @var string
     */
    public $InvoiceID;

    /**
     * Type of refund you are making Required
     * @access    public
     * @namespace ns
     * @var string
     */
    public $RefundType;

    /**
     * Refund amount. Amount is required if RefundType is Partial.
     * NOTE: If RefundType is Full, do not set Amount.
     * @access    public
     * @namespace ns
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $Amount;

    /**
     * Shipping amount. Optional
     * @access    public
     * @namespace ns
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $ShippingAmount;

    /**
     * Tax amount. Optional
     * @access    public
     * @namespace ns
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $TaxAmount;

    /**
     * Custom memo about the refund. Optional Character length and
     * limitations: 255 single-byte alphanumeric characters
     * @access    public
     * @namespace ns
     * @var string
     */
    public $Memo;

    /**
     * The maximum time till which refund must be tried. Optional
     * @access    public
     * @namespace ns
     * @var string DateTime in ISO8601
     */
    public $RetryUntil;

    /**
     * The type of funding source for refund. Optional
     * @access    public
     * @namespace ns
     * @var string
     */
    public $RefundSource;

    /**
     * Flag to indicate that the customer was already given store
     * credit for a given transaction. This will allow us to make
     * sure we do not double refund. Optional
     * @access    public
     * @namespace ns
     * @var boolean
     */
    public $RefundAdvice;

    /**
     * To pass the Merchant store informationOptional
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\MerchantStoreDetailsType
     */
    public $MerchantStoreDetails;

    /**
     * Information about the individual details of the items to be
     * refunded.Optional
     * @array
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\InvoiceItemType
     */
    public $RefundItemDetails;

    /**
     * Unique id for each API request to prevent duplicate
     * payments. Optional Character length and limits: 38
     * single-byte characters maximum.
     * @access    public
     * @namespace ns
     * @var string
     */
    public $MsgSubID;

    /**
     * This holds key-value pair which merchants wants to pass it
     * to the open wallet-PLCC processorOptional
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\MerchantDataType
     */
    public $MerchantData;

}
