<?php
namespace PayPal\Merchant\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class DoVoidReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\PayPalAPI\DoVoidRequestType
     */
    public $DoVoidRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:DoVoidReq>';
        if ($this->DoVoidRequest != null) {
            $str .= '<ns:DoVoidRequest>';
            $str .= $this->DoVoidRequest->toXMLString();
            $str .= '</ns:DoVoidRequest>';
        }
        $str .= '</ns:DoVoidReq>';
        return $str;
    }

}
