<?php
namespace PayPal\PayPalAPI;

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
     * @var \PayPal\PayPalAPI\DoVoidRequestType
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
