<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractRequestType;

/**
 *
 */
class SetExpressCheckoutRequestType
  extends AbstractRequestType
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\SetExpressCheckoutRequestDetailsType
     */
    public $SetExpressCheckoutRequestDetails;

    /**
     * Constructor with arguments
     */
    public function __construct($SetExpressCheckoutRequestDetails = null)
    {
        $this->SetExpressCheckoutRequestDetails = $SetExpressCheckoutRequestDetails;
    }

}
