<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractResponseType;
use PayPal\EBLBaseComponents\DoExpressCheckoutPaymentResponseDetailsType;
use PayPal\EBLBaseComponents\FMFDetailsType;

class DoExpressCheckoutPaymentResponseType
  extends AbstractResponseType
{
    /**
     * @access    public
     * @namespace ebl
     * @var DoExpressCheckoutPaymentResponseDetailsType
     */
    public $DoExpressCheckoutPaymentResponseDetails;

    /**
     * @access    public
     * @namespace ns
     * @var FMFDetailsType
     */
    public $FMFDetails;
}
