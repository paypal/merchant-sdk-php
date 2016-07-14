<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;
use PayPal\EBLBaseComponents\SetMobileCheckoutRequestDetailsType;

class SetMobileCheckoutRequestType
  extends AbstractRequestType
{
    /**
     * @access    public
     * @namespace ebl
     * @var SetMobileCheckoutRequestDetailsType
     */
    public $SetMobileCheckoutRequestDetails;

    /**
     * Constructor with arguments
     *
     * @param SetMobileCheckoutRequestDetailsType $SetMobileCheckoutRequestDetails
     */
    public function __construct($SetMobileCheckoutRequestDetails = null)
    {
        $this->SetMobileCheckoutRequestDetails = $SetMobileCheckoutRequestDetails;
    }
}
