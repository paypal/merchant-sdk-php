<?php

namespace PayPal\Merchant\API;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class UpdateAccessPermissionsReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\API\UpdateAccessPermissionsRequestType
     */
    public $UpdateAccessPermissionsRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:UpdateAccessPermissionsReq>';
        if ($this->UpdateAccessPermissionsRequest != null) {
            $str .= '<ns:UpdateAccessPermissionsRequest>';
            $str .= $this->UpdateAccessPermissionsRequest->toXMLString();
            $str .= '</ns:UpdateAccessPermissionsRequest>';
        }
        $str .= '</ns:UpdateAccessPermissionsReq>';
        return $str;
    }

}
