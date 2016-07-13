<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractResponseType;
use PayPal\EBLBaseComponents\DoMobileCheckoutPaymentResponseDetailsType;

class DoMobileCheckoutPaymentResponseType
  extends AbstractResponseType
{
    /**
     * @access    public
     * @namespace ebl
     * @var DoMobileCheckoutPaymentResponseDetailsType
     */
    public $DoMobileCheckoutPaymentResponseDetails;
}
