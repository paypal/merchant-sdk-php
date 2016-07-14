<?php
namespace PayPal\PayPalAPI;

use PayPal\Core\PPXmlMessage;

class DoReferenceTransactionReq
  extends PPXmlMessage
{
    /**
     * @access    public
     * @namespace ns
     * @var DoReferenceTransactionRequestType
     */
    public $DoReferenceTransactionRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:DoReferenceTransactionReq>';
        if ($this->DoReferenceTransactionRequest != null) {
            $str .= '<ns:DoReferenceTransactionRequest>';
            $str .= $this->DoReferenceTransactionRequest->toXMLString();
            $str .= '</ns:DoReferenceTransactionRequest>';
        }
        $str .= '</ns:DoReferenceTransactionReq>';
        return $str;
    }
}
