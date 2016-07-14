<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;
use PayPal\EBLBaseComponents\CreateMobilePaymentRequestDetailsType;

class CreateMobilePaymentRequestType
  extends AbstractRequestType
{
    /**
     * @access    public
     * @namespace ebl
     * @var CreateMobilePaymentRequestDetailsType
     */
    public $CreateMobilePaymentRequestDetails;

    /**
     * Constructor with arguments
     *
     * @param CreateMobilePaymentRequestDetailsType $CreateMobilePaymentRequestDetails
     */
    public function __construct($CreateMobilePaymentRequestDetails = null)
    {
        $this->CreateMobilePaymentRequestDetails = $CreateMobilePaymentRequestDetails;
    }
}
