<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractRequestType;

/**
 *
 */
class ManagePendingTransactionStatusRequestType
  extends AbstractRequestType
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var string
     */
    public $TransactionID;

    /**
     *
     * @access    public
     * @namespace ns
     * @var string
     */
    public $Action;

    /**
     * Constructor with arguments
     */
    public function __construct($TransactionID = null, $Action = null)
    {
        $this->TransactionID = $TransactionID;
        $this->Action        = $Action;
    }

}
