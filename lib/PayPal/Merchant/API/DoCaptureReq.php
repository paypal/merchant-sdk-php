<?php

namespace PayPal\Merchant\API;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class DoCaptureReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\API\DoCaptureRequestType
     */
    public $DoCaptureRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:DoCaptureReq>';
        if ($this->DoCaptureRequest != null) {
            $str .= '<ns:DoCaptureRequest>';
            $str .= $this->DoCaptureRequest->toXMLString();
            $str .= '</ns:DoCaptureRequest>';
        }
        $str .= '</ns:DoCaptureReq>';
        return $str;
    }

}
