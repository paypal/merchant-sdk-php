<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class DoReferenceTransactionRequestDetailsType
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ReferenceID;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $PaymentAction;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $PaymentType;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\PaymentDetailsType
     */
    public $PaymentDetails;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\ReferenceCreditCardDetailsType
     */
    public $CreditCard;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $IPAddress;

    /**
     * Correlation id related to risk process done for the device.
     * Max length is 36 Chars.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $RiskSessionCorrelationID;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $MerchantSessionId;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ReqConfirmShipping;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $SoftDescriptor;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $SoftDescriptorCity;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\SenderDetailsType
     */
    public $SenderDetails;

    /**
     * Unique id for each API request to prevent duplicate
     * payments. Optional Character length and limits: 38
     * single-byte characters maximum.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $MsgSubID;

    /**
     * Constructor with arguments
     */
    public function __construct($ReferenceID = null, $PaymentAction = null, $PaymentDetails = null)
    {
        $this->ReferenceID = $ReferenceID;
        $this->PaymentAction = $PaymentAction;
        $this->PaymentDetails = $PaymentDetails;
    }

}
