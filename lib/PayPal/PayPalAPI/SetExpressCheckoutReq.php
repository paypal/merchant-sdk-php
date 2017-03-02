<?php
namespace PayPal\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class SetExpressCheckoutReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\PayPalAPI\SetExpressCheckoutRequestType
     */
    public $SetExpressCheckoutRequest;


    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:SetExpressCheckoutReq>';
        if ($this->SetExpressCheckoutRequest != null) {
            $str .= '<ns:SetExpressCheckoutRequest>';
            $str .= $this->SetExpressCheckoutRequest->toXMLString();
            $str .= '</ns:SetExpressCheckoutRequest>';
        }
        $str .= '</ns:SetExpressCheckoutReq>';
        return $str;
    }
}
