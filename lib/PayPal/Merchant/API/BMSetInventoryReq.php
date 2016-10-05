<?php

namespace PayPal\Merchant\API;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class BMSetInventoryReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\API\BMSetInventoryRequestType
     */
    public $BMSetInventoryRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:BMSetInventoryReq>';
        if ($this->BMSetInventoryRequest != null) {
            $str .= '<ns:BMSetInventoryRequest>';
            $str .= $this->BMSetInventoryRequest->toXMLString();
            $str .= '</ns:BMSetInventoryRequest>';
        }
        $str .= '</ns:BMSetInventoryReq>';
        return $str;
    }

}
