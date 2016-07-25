<?php
namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractRequestType;

/**
 * The value of the authorizationâtransaction identification
 * number returned by a PayPal product. Required Character
 * length and limits: 19 single-byte characters maximum
 */
class UpdateAuthorizationRequestType
  extends AbstractRequestType
{

    /**
     * The value of the authorizationâtransaction identification
     * number returned by a PayPal product. Required Character
     * length and limits: 19 single-byte characters maximum
     * @access    public
     * @namespace ns
     * @var string
     */
    public $TransactionID;

    /**
     * Shipping Address for this transaction.
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\AddressType
     */
    public $ShipToAddress;

    /**
     * IP Address of the buyer
     * @access    public
     * @namespace ns
     * @var string
     */
    public $IPAddress;

    /**
     * Constructor with arguments
     */
    public function __construct($TransactionID = null)
    {
        $this->TransactionID = $TransactionID;
    }

}
