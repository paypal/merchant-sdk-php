<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;

/**
 * UATP card details Required
 */
class DoUATPAuthorizationRequestType extends AbstractRequestType
{

    /**
     * UATP card details Required
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\UATPDetailsType
     */
    public $UATPDetails;

    /**
     * Type of transaction to authorize. The only allowable value
     * is Order, which means that the transaction represents a
     * customer order that can be fulfilled over 29 days. Optional
     * @access    public
     * @namespace ns
     * @var string
     */
    public $TransactionEntity;

    /**
     * Amount to authorize. Required Limitations: Must not exceed
     * $10,000 USD in any currency. No currency symbol. Decimal
     * separator must be a period (.), and the thousands separator
     * must be a comma (,).
     * @access    public
     * @namespace ns
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $Amount;

    /**
     * Invoice ID. A pass through.
     * @access    public
     * @namespace ns
     * @var string
     */
    public $InvoiceID;

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
     * Constructor with arguments
     */
    public function __construct($UATPDetails = null, $Amount = null)
    {
        $this->UATPDetails = $UATPDetails;
        $this->Amount = $Amount;
    }

}
