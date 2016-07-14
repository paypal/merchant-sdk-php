<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\UATPDetailsType;

class DoUATPExpressCheckoutPaymentResponseType
  extends DoExpressCheckoutPaymentResponseType
{
    /**
     * @access    public
     * @namespace ebl
     * @var UATPDetailsType
     */
    public $UATPDetails;
}
