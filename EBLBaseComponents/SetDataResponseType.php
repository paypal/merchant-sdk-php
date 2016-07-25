<?php

namespace PayPal\Merchant\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * If Checkout session was initialized successfully, the
 * corresponding token is returned in this element.
 */
class SetDataResponseType
  extends PPXmlMessage
{

    /**
     * If Checkout session was initialized successfully, the
     * corresponding token is returned in this element.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Token;

    /**
     *
     * @array
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\AddressType
     */
    public $ShippingAddresses;

    /**
     *
     * @array
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\ErrorType
     */
    public $SetDataError;

}
