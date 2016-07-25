<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class GetPalDetailsReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\PayPalAPI\GetPalDetailsRequestType
     */
    public $GetPalDetailsRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:GetPalDetailsReq>';
        if ($this->GetPalDetailsRequest != null) {
            $str .= '<ns:GetPalDetailsRequest>';
            $str .= $this->GetPalDetailsRequest->toXMLString();
            $str .= '</ns:GetPalDetailsRequest>';
        }
        $str .= '</ns:GetPalDetailsReq>';
        return $str;
    }

}
