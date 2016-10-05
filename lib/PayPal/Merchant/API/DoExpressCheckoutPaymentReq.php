<?php

namespace PayPal\Merchant\API;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class DoExpressCheckoutPaymentReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\API\DoExpressCheckoutPaymentRequestType
     */
    public $DoExpressCheckoutPaymentRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:DoExpressCheckoutPaymentReq>';
        if ($this->DoExpressCheckoutPaymentRequest != null) {
            $str .= '<ns:DoExpressCheckoutPaymentRequest>';
            $str .= $this->DoExpressCheckoutPaymentRequest->toXMLString();
            $str .= '</ns:DoExpressCheckoutPaymentRequest>';
        }
        $str .= '</ns:DoExpressCheckoutPaymentReq>';
        return $str;
    }

}
