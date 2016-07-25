<?php
namespace PayPal\Merchant\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class RefundTransactionReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\PayPalAPI\RefundTransactionRequestType
     */
    public $RefundTransactionRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:RefundTransactionReq>';
        if ($this->RefundTransactionRequest != null) {
            $str .= '<ns:RefundTransactionRequest>';
            $str .= $this->RefundTransactionRequest->toXMLString();
            $str .= '</ns:RefundTransactionRequest>';
        }
        $str .= '</ns:RefundTransactionReq>';
        return $str;
    }

}
