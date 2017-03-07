<?php
namespace PayPal\PayPalAPI;

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
     * @var \PayPal\PayPalAPI\BMManageButtonStatusRequestType
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
