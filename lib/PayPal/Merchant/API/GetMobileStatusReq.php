<?php

namespace PayPal\Merchant\API;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class GetMobileStatusReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\API\GetMobileStatusRequestType
     */
    public $GetMobileStatusRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:GetMobileStatusReq>';
        if ($this->GetMobileStatusRequest != null) {
            $str .= '<ns:GetMobileStatusRequest>';
            $str .= $this->GetMobileStatusRequest->toXMLString();
            $str .= '</ns:GetMobileStatusRequest>';
        }
        $str .= '</ns:GetMobileStatusReq>';
        return $str;
    }

}
