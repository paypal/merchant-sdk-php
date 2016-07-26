<?php

namespace PayPal\Merchant\API;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class CancelRecoupReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\API\CancelRecoupRequestType
     */
    public $CancelRecoupRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:CancelRecoupReq>';
        if ($this->CancelRecoupRequest != null) {
            $str .= '<ns:CancelRecoupRequest>';
            $str .= $this->CancelRecoupRequest->toXMLString();
            $str .= '</ns:CancelRecoupRequest>';
        }
        $str .= '</ns:CancelRecoupReq>';
        return $str;
    }

}
