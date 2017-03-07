<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;

/**
 * The value of the authorizationâtransaction identification
 * number returned by a PayPal product. Required Character
 * length and limits: 19 single-byte characters maximum
 */
class UpdateAuthorizationRequestType extends AbstractRequestType
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
     * @var \PayPal\EBLBaseComponents\AddressType
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
     * A flag indicating that this transaction is a Ship to Store
     * transaction. Optional
     * @access    public
     * @namespace ns
     * @var string
     */
    public $ShipToStore;

    /**
     * Constructor with arguments
     */
    public function __construct($TransactionID = null)
    {
        $this->TransactionID = $TransactionID;
    }

}
