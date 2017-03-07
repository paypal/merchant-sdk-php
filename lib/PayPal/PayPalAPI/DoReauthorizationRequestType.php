<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;

/**
 * The value of a previously authorized transaction
 * identification number returned by a PayPal product. You can
 * obtain a buyer's transaction number from the TransactionID
 * element of the PayerInfo structure returned by
 * GetTransactionDetailsResponse. Required Character length and
 * limits: 19 single-byte characters maximum
 */
class DoReauthorizationRequestType extends AbstractRequestType
{

    /**
     * The value of a previously authorized transaction
     * identification number returned by a PayPal product. You can
     * obtain a buyer's transaction number from the TransactionID
     * element of the PayerInfo structure returned by
     * GetTransactionDetailsResponse. Required Character length and
     * limits: 19 single-byte characters maximum
     * @access    public
     * @namespace ns
     * @var string
     */
    public $AuthorizationID;

    /**
     * Amount to reauthorize. Required Limitations: Must not exceed
     * $10,000 USD in any currency. No currency symbol. Decimal
     * separator must be a period (.), and the thousands separator
     * must be a comma (,).
     * @access    public
     * @namespace ns
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $Amount;

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
    public function __construct($AuthorizationID = null, $Amount = null)
    {
        $this->AuthorizationID = $AuthorizationID;
        $this->Amount = $Amount;
    }

}
