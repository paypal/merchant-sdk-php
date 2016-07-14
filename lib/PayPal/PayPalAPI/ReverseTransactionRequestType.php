<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;
use PayPal\EBLBaseComponents\ReverseTransactionRequestDetailsType;

class ReverseTransactionRequestType
  extends AbstractRequestType
{
    /**
     * @access    public
     * @namespace ebl
     * @var ReverseTransactionRequestDetailsType
     */
    public $ReverseTransactionRequestDetails;

    /**
     * Constructor with arguments
     *
     * @param ReverseTransactionRequestDetailsType $ReverseTransactionRequestDetails
     */
    public function __construct($ReverseTransactionRequestDetails = null)
    {
        $this->ReverseTransactionRequestDetails = $ReverseTransactionRequestDetails;
    }
}
