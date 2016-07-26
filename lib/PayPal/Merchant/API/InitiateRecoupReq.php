<?php

namespace PayPal\Merchant\API;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class InitiateRecoupReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\API\InitiateRecoupRequestType
     */
    public $InitiateRecoupRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:InitiateRecoupReq>';
        if ($this->InitiateRecoupRequest != null) {
            $str .= '<ns:InitiateRecoupRequest>';
            $str .= $this->InitiateRecoupRequest->toXMLString();
            $str .= '</ns:InitiateRecoupRequest>';
        }
        $str .= '</ns:InitiateRecoupReq>';
        return $str;
    }

}
