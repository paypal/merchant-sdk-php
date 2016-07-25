<?php
namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractResponseType;

/**
 *
 */
class DoExpressCheckoutPaymentResponseType
  extends AbstractResponseType
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\DoExpressCheckoutPaymentResponseDetailsType
     */
    public $DoExpressCheckoutPaymentResponseDetails;

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\EBLBaseComponents\FMFDetailsType
     */
    public $FMFDetails;

}
