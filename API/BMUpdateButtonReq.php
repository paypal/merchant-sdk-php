<?php

namespace PayPal\Merchant\API;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class BMUpdateButtonReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\API\BMUpdateButtonRequestType
     */
    public $BMUpdateButtonRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:BMUpdateButtonReq>';
        if ($this->BMUpdateButtonRequest != null) {
            $str .= '<ns:BMUpdateButtonRequest>';
            $str .= $this->BMUpdateButtonRequest->toXMLString();
            $str .= '</ns:BMUpdateButtonRequest>';
        }
        $str .= '</ns:BMUpdateButtonReq>';
        return $str;
    }

}
