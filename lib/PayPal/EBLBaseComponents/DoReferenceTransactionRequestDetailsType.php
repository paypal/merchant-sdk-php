<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

class DoReferenceTransactionRequestDetailsType
  extends PPXmlMessage
{
    /**
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ReferenceID;

    /**
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $PaymentAction;

    /**
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $PaymentType;

    /**
     * @access    public
     * @namespace ebl
     * @var PaymentDetailsType
     */
    public $PaymentDetails;

    /**
     * @access    public
     * @namespace ebl
     * @var ReferenceCreditCardDetailsType
     */
    public $CreditCard;

    /**
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $IPAddress;

    /**
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $MerchantSessionId;

    /**
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ReqConfirmShipping;

    /**
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $SoftDescriptor;

    /**
     * @access    public
     * @namespace ebl
     * @var SenderDetailsType
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
     *
     * @param string             $ReferenceID
     * @param string             $PaymentAction
     * @param PaymentDetailsType $PaymentDetails
     */
    public function __construct($ReferenceID = null, $PaymentAction = null, $PaymentDetails = null)
    {
        $this->ReferenceID    = $ReferenceID;
        $this->PaymentAction  = $PaymentAction;
        $this->PaymentDetails = $PaymentDetails;
    }
}
