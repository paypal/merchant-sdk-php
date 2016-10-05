<?php

namespace PayPal\Merchant\API;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class BMManageButtonStatusReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\API\BMManageButtonStatusRequestType
     */
    public $BMManageButtonStatusRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:BMManageButtonStatusReq>';
        if ($this->BMManageButtonStatusRequest != null) {
            $str .= '<ns:BMManageButtonStatusRequest>';
            $str .= $this->BMManageButtonStatusRequest->toXMLString();
            $str .= '</ns:BMManageButtonStatusRequest>';
        }
        $str .= '</ns:BMManageButtonStatusReq>';
        return $str;
    }

}
