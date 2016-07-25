<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class SetMobileCheckoutReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\PayPalAPI\SetMobileCheckoutRequestType
     */
    public $SetMobileCheckoutRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:SetMobileCheckoutReq>';
        if ($this->SetMobileCheckoutRequest != null) {
            $str .= '<ns:SetMobileCheckoutRequest>';
            $str .= $this->SetMobileCheckoutRequest->toXMLString();
            $str .= '</ns:SetMobileCheckoutRequest>';
        }
        $str .= '</ns:SetMobileCheckoutReq>';
        return $str;
    }

}
