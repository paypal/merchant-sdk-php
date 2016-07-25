<?php
namespace PayPal\Merchant\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class MassPayReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\PayPalAPI\MassPayRequestType
     */
    public $MassPayRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:MassPayReq>';
        if ($this->MassPayRequest != null) {
            $str .= '<ns:MassPayRequest>';
            $str .= $this->MassPayRequest->toXMLString();
            $str .= '</ns:MassPayRequest>';
        }
        $str .= '</ns:MassPayReq>';
        return $str;
    }

}
