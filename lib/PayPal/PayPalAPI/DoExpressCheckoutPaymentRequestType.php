<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;
use PayPal\EBLBaseComponents\DoExpressCheckoutPaymentRequestDetailsType;

/**
 * This flag indicates that the response should include
 * FMFDetails
 */
class DoExpressCheckoutPaymentRequestType
  extends AbstractRequestType
{
    /**
     * @access    public
     * @namespace ebl
     * @var DoExpressCheckoutPaymentRequestDetailsType
     */
    public $DoExpressCheckoutPaymentRequestDetails;

    /**
     * This flag indicates that the response should include
     * FMFDetails
     * @access    public
     * @namespace ns
     * @var integer
     */
    public $ReturnFMFDetails;

    /**
     * Constructor with arguments
     *
     * @param DoExpressCheckoutPaymentRequestDetailsType $DoExpressCheckoutPaymentRequestDetails
     */
    public function __construct($DoExpressCheckoutPaymentRequestDetails = null)
    {
        $this->DoExpressCheckoutPaymentRequestDetails = $DoExpressCheckoutPaymentRequestDetails;
    }
}
