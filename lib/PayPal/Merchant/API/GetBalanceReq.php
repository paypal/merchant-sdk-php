<?php

namespace PayPal\Merchant\API;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class GetBalanceReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\API\GetBalanceRequestType
     */
    public $GetBalanceRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:GetBalanceReq>';
        if ($this->GetBalanceRequest != null) {
            $str .= '<ns:GetBalanceRequest>';
            $str .= $this->GetBalanceRequest->toXMLString();
            $str .= '</ns:GetBalanceRequest>';
        }
        $str .= '</ns:GetBalanceReq>';
        return $str;
    }

}
