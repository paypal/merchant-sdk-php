<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class GetExpressCheckoutDetailsReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\PayPalAPI\GetExpressCheckoutDetailsRequestType
     */
    public $GetExpressCheckoutDetailsRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:GetExpressCheckoutDetailsReq>';
        if ($this->GetExpressCheckoutDetailsRequest != null) {
            $str .= '<ns:GetExpressCheckoutDetailsRequest>';
            $str .= $this->GetExpressCheckoutDetailsRequest->toXMLString();
            $str .= '</ns:GetExpressCheckoutDetailsRequest>';
        }
        $str .= '</ns:GetExpressCheckoutDetailsReq>';
        return $str;
    }

}
