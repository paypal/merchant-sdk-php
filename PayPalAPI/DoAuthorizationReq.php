<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class DoAuthorizationReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\PayPalAPI\DoAuthorizationRequestType
     */
    public $DoAuthorizationRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:DoAuthorizationReq>';
        if ($this->DoAuthorizationRequest != null) {
            $str .= '<ns:DoAuthorizationRequest>';
            $str .= $this->DoAuthorizationRequest->toXMLString();
            $str .= '</ns:DoAuthorizationRequest>';
        }
        $str .= '</ns:DoAuthorizationReq>';
        return $str;
    }

}
