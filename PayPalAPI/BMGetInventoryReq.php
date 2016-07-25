<?php
namespace PayPal\Merchant\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class BMGetInventoryReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\PayPalAPI\BMGetInventoryRequestType
     */
    public $BMGetInventoryRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:BMGetInventoryReq>';
        if ($this->BMGetInventoryRequest != null) {
            $str .= '<ns:BMGetInventoryRequest>';
            $str .= $this->BMGetInventoryRequest->toXMLString();
            $str .= '</ns:BMGetInventoryRequest>';
        }
        $str .= '</ns:BMGetInventoryReq>';
        return $str;
    }

}
