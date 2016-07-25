<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class TransactionSearchReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\PayPalAPI\TransactionSearchRequestType
     */
    public $TransactionSearchRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:TransactionSearchReq>';
        if ($this->TransactionSearchRequest != null) {
            $str .= '<ns:TransactionSearchRequest>';
            $str .= $this->TransactionSearchRequest->toXMLString();
            $str .= '</ns:TransactionSearchRequest>';
        }
        $str .= '</ns:TransactionSearchReq>';
        return $str;
    }

}
