<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;
use PayPal\EBLBaseComponents\SetExpressCheckoutRequestDetailsType;

class SetExpressCheckoutRequestType
  extends AbstractRequestType
{
    /**
     * @access    public
     * @namespace ebl
     * @var SetExpressCheckoutRequestDetailsType
     */
    public $SetExpressCheckoutRequestDetails;

    /**
     * Constructor with arguments
     *
     * @param SetExpressCheckoutRequestDetailsType $SetExpressCheckoutRequestDetails
     */
    public function __construct($SetExpressCheckoutRequestDetails = null)
    {
        $this->SetExpressCheckoutRequestDetails = $SetExpressCheckoutRequestDetails;
    }
}
