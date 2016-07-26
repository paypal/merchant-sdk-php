<?php

namespace PayPal\Merchant\API;

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
     * @var \PayPal\Merchant\API\DoUATPAuthorizationRequestType
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
