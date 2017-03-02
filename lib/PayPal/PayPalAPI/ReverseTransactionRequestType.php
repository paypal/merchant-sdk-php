<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;

/**
 *
 */
class ReverseTransactionRequestType extends AbstractRequestType
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\ReverseTransactionRequestDetailsType
     */
    public $ReverseTransactionRequestDetails;

    /**
     * Constructor with arguments
     */
    public function __construct($ReverseTransactionRequestDetails = null)
    {
        $this->ReverseTransactionRequestDetails = $ReverseTransactionRequestDetails;
    }

}
