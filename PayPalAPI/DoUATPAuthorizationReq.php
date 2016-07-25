<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class DoUATPAuthorizationReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\PayPalAPI\DoUATPAuthorizationRequestType
     */
    public $DoUATPAuthorizationRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:DoUATPAuthorizationReq>';
        if ($this->DoUATPAuthorizationRequest != null) {
            $str .= '<ns:DoUATPAuthorizationRequest>';
            $str .= $this->DoUATPAuthorizationRequest->toXMLString();
            $str .= '</ns:DoUATPAuthorizationRequest>';
        }
        $str .= '</ns:DoUATPAuthorizationReq>';
        return $str;
    }

}
