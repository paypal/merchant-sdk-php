<?php

namespace PayPal\Merchant\API;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class BMGetButtonDetailsReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\API\BMGetButtonDetailsRequestType
     */
    public $BMGetButtonDetailsRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:BMGetButtonDetailsReq>';
        if ($this->BMGetButtonDetailsRequest != null) {
            $str .= '<ns:BMGetButtonDetailsRequest>';
            $str .= $this->BMGetButtonDetailsRequest->toXMLString();
            $str .= '</ns:BMGetButtonDetailsRequest>';
        }
        $str .= '</ns:BMGetButtonDetailsReq>';
        return $str;
    }

}
