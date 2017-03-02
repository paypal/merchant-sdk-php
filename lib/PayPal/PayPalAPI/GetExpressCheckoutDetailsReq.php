<?php
namespace PayPal\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class GetExpressCheckoutDetailsReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\PayPalAPI\GetExpressCheckoutDetailsRequestType
     */
    public $GetExpressCheckoutDetailsRequest;


    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:GetExpressCheckoutDetailsReq>';
        if ($this->GetExpressCheckoutDetailsRequest != null) {
            $str .= '<ns:GetExpressCheckoutDetailsRequest>';
            $str .= $this->GetExpressCheckoutDetailsRequest->toXMLString();
            $str .= '</ns:GetExpressCheckoutDetailsRequest>';
        }
        $str .= '</ns:GetExpressCheckoutDetailsReq>';
        return $str;
    }
}
