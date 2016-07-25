<?php
namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractResponseType;

/**
 * Unique transaction ID of the refund. Character length and
 * limitations:17 single-byte characters
 */
class RefundTransactionResponseType
  extends AbstractResponseType
{

    /**
     * Unique transaction ID of the refund. Character length and
     * limitations:17 single-byte characters
     * @access    public
     * @namespace ns
     * @var string
     */
    public $RefundTransactionID;

    /**
     * Amount subtracted from PayPal balance of original recipient
     * of payment to make this refund
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\CoreComponentTypes\BasicAmountType
     */
    public $NetRefundAmount;

    /**
     * Transaction fee refunded to original recipient of payment
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\CoreComponentTypes\BasicAmountType
     */
    public $FeeRefundAmount;

    /**
     * Amount of money refunded to original payer
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\CoreComponentTypes\BasicAmountType
     */
    public $GrossRefundAmount;

    /**
     * Total of all previous refunds
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\CoreComponentTypes\BasicAmountType
     */
    public $TotalRefundedAmount;

    /**
     * Contains Refund Payment status information.
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\RefundInfoType
     */
    public $RefundInfo;

    /**
     * Any general information like offer details that is
     * reinstated or any other marketing data
     * @access    public
     * @namespace ns
     * @var string
     */
    public $ReceiptData;

    /**
     * Return msgsubid back to merchant
     * @access    public
     * @namespace ns
     * @var string
     */
    public $MsgSubID;

}
