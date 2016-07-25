<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractRequestType;

/**
 *
 */
class SetMobileCheckoutRequestType
  extends AbstractRequestType
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\SetMobileCheckoutRequestDetailsType
     */
    public $SetMobileCheckoutRequestDetails;

    /**
     * Constructor with arguments
     */
    public function __construct($SetMobileCheckoutRequestDetails = null)
    {
        $this->SetMobileCheckoutRequestDetails = $SetMobileCheckoutRequestDetails;
    }

}
