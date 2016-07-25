<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class GetAccessPermissionDetailsReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\PayPalAPI\GetAccessPermissionDetailsRequestType
     */
    public $GetAccessPermissionDetailsRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:GetAccessPermissionDetailsReq>';
        if ($this->GetAccessPermissionDetailsRequest != null) {
            $str .= '<ns:GetAccessPermissionDetailsRequest>';
            $str .= $this->GetAccessPermissionDetailsRequest->toXMLString();
            $str .= '</ns:GetAccessPermissionDetailsRequest>';
        }
        $str .= '</ns:GetAccessPermissionDetailsReq>';
        return $str;
    }

}
