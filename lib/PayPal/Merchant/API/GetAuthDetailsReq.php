<?php

namespace PayPal\Merchant\API;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class GetAuthDetailsReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\API\GetAuthDetailsRequestType
     */
    public $GetAuthDetailsRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:GetAuthDetailsReq>';
        if ($this->GetAuthDetailsRequest != null) {
            $str .= '<ns:GetAuthDetailsRequest>';
            $str .= $this->GetAuthDetailsRequest->toXMLString();
            $str .= '</ns:GetAuthDetailsRequest>';
        }
        $str .= '</ns:GetAuthDetailsReq>';
        return $str;
    }

}
