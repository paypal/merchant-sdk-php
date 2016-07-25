<?php
namespace PayPal\Merchant\PayPalAPI;

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
     * @var \PayPal\Merchant\PayPalAPI\GetBalanceRequestType
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
