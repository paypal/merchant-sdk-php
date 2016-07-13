<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;

class ManagePendingTransactionStatusRequestType
  extends AbstractRequestType
{
    /**
     * @access    public
     * @namespace ns
     * @var string
     */
    public $TransactionID;

    /**
     * @access    public
     * @namespace ns
     * @var string
     */
    public $Action;

    /**
     * Constructor with arguments
     *
     * @param string $TransactionID
     * @param string $Action
     */
    public function __construct($TransactionID = null, $Action = null)
    {
        $this->TransactionID = $TransactionID;
        $this->Action        = $Action;
    }
}
