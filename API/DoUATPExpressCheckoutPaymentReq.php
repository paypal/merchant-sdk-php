<?php

namespace PayPal\Merchant\API;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class DoUATPExpressCheckoutPaymentReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\API\DoUATPExpressCheckoutPaymentRequestType
     */
    public $DoUATPExpressCheckoutPaymentRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:DoUATPExpressCheckoutPaymentReq>';
        if ($this->DoUATPExpressCheckoutPaymentRequest != null) {
            $str .= '<ns:DoUATPExpressCheckoutPaymentRequest>';
            $str .= $this->DoUATPExpressCheckoutPaymentRequest->toXMLString();
            $str .= '</ns:DoUATPExpressCheckoutPaymentRequest>';
        }
        $str .= '</ns:DoUATPExpressCheckoutPaymentReq>';
        return $str;
    }

}
