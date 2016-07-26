<?php

namespace PayPal\Merchant\API;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class DoCancelReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\API\DoCancelRequestType
     */
    public $DoCancelRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:DoCancelReq>';
        if ($this->DoCancelRequest != null) {
            $str .= '<ns:DoCancelRequest>';
            $str .= $this->DoCancelRequest->toXMLString();
            $str .= '</ns:DoCancelRequest>';
        }
        $str .= '</ns:DoCancelReq>';
        return $str;
    }

}
