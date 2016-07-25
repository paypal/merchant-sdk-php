<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractRequestType;

/**
 *
 */
class ReverseTransactionRequestType
  extends AbstractRequestType
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\ReverseTransactionRequestDetailsType
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
