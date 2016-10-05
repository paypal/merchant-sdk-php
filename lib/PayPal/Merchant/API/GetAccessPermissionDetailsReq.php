<?php

namespace PayPal\Merchant\API;

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
     * @var \PayPal\Merchant\API\GetAccessPermissionDetailsRequestType
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
