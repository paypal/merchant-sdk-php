<?php

namespace PayPal\Merchant\API;

/**
 *
 */
class DoUATPExpressCheckoutPaymentResponseType
  extends DoExpressCheckoutPaymentResponseType
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\UATPDetailsType
     */
    public $UATPDetails;

}
