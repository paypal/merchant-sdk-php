<?php
namespace PayPal\Merchant\PayPalAPI;

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
     * @var \PayPal\Merchant\PayPalAPI\BMUpdateButtonRequestType
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
