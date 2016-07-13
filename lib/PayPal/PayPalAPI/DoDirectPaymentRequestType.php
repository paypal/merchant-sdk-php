<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;
use PayPal\EBLBaseComponents\DoDirectPaymentRequestDetailsType;

/**
 * This flag indicates that the response should include
 * FMFDetails
 */
class DoDirectPaymentRequestType
  extends AbstractRequestType
{
    /**
     * @access    public
     * @namespace ebl
     * @var DoDirectPaymentRequestDetailsType
     */
    public $DoDirectPaymentRequestDetails;

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
     * @param DoDirectPaymentRequestDetailsType $DoDirectPaymentRequestDetails
     */
    public function __construct($DoDirectPaymentRequestDetails = null)
    {
        $this->DoDirectPaymentRequestDetails = $DoDirectPaymentRequestDetails;
    }
}
