<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class GetTransactionDetailsReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\PayPalAPI\GetTransactionDetailsRequestType
     */
    public $GetTransactionDetailsRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:GetTransactionDetailsReq>';
        if ($this->GetTransactionDetailsRequest != null) {
            $str .= '<ns:GetTransactionDetailsRequest>';
            $str .= $this->GetTransactionDetailsRequest->toXMLString();
            $str .= '</ns:GetTransactionDetailsRequest>';
        }
        $str .= '</ns:GetTransactionDetailsReq>';
        return $str;
    }

}
