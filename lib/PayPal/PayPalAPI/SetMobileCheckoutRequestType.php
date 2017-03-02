<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;

/**
 *
 */
class SetMobileCheckoutRequestType extends AbstractRequestType
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\SetMobileCheckoutRequestDetailsType
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
