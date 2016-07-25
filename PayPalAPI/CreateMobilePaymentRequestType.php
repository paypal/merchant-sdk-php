<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractRequestType;

/**
 *
 */
class CreateMobilePaymentRequestType
  extends AbstractRequestType
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\CreateMobilePaymentRequestDetailsType
     */
    public $CreateMobilePaymentRequestDetails;

    /**
     * Constructor with arguments
     */
    public function __construct($CreateMobilePaymentRequestDetails = null)
    {
        $this->CreateMobilePaymentRequestDetails = $CreateMobilePaymentRequestDetails;
    }

}
