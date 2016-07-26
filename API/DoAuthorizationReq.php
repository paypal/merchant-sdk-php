<?php

namespace PayPal\Merchant\API;

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
     * @var \PayPal\Merchant\API\DoAuthorizationRequestType
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
