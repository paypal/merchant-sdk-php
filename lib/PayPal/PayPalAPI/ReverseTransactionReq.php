<?php
namespace PayPal\PayPalAPI;

use PayPal\Core\PPXmlMessage;

class ReverseTransactionReq
  extends PPXmlMessage
{
    /**
     * @access    public
     * @namespace ns
     * @var ReverseTransactionRequestType
     */
    public $ReverseTransactionRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:ReverseTransactionReq>';
        if ($this->ReverseTransactionRequest != null) {
            $str .= '<ns:ReverseTransactionRequest>';
            $str .= $this->ReverseTransactionRequest->toXMLString();
            $str .= '</ns:ReverseTransactionRequest>';
        }
        $str .= '</ns:ReverseTransactionReq>';
        return $str;
    }
}
