<?php

namespace PayPal\Merchant\API;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class SetAccessPermissionsReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\API\SetAccessPermissionsRequestType
     */
    public $SetAccessPermissionsRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:SetAccessPermissionsReq>';
        if ($this->SetAccessPermissionsRequest != null) {
            $str .= '<ns:SetAccessPermissionsRequest>';
            $str .= $this->SetAccessPermissionsRequest->toXMLString();
            $str .= '</ns:SetAccessPermissionsRequest>';
        }
        $str .= '</ns:SetAccessPermissionsReq>';
        return $str;
    }

}
