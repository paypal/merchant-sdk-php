<?php
namespace PayPal\Merchant\PayPalAPI;

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
