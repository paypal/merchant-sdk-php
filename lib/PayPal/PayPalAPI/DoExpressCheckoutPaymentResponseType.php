<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractResponseType;

/**
 *
 */
class DoExpressCheckoutPaymentResponseType extends AbstractResponseType
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\DoExpressCheckoutPaymentResponseDetailsType
     */
    public $DoExpressCheckoutPaymentResponseDetails;

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\EBLBaseComponents\FMFDetailsType
     */
    public $FMFDetails;

}
