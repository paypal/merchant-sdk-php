<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractResponseType;

/**
 *
 */
class ManagePendingTransactionStatusResponseType extends AbstractResponseType
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
    public $Status;

}
