<?php
namespace PayPal\Merchant\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class GetBoardingDetailsReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\PayPalAPI\GetBoardingDetailsRequestType
     */
    public $GetBoardingDetailsRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:GetBoardingDetailsReq>';
        if ($this->GetBoardingDetailsRequest != null) {
            $str .= '<ns:GetBoardingDetailsRequest>';
            $str .= $this->GetBoardingDetailsRequest->toXMLString();
            $str .= '</ns:GetBoardingDetailsRequest>';
        }
        $str .= '</ns:GetBoardingDetailsReq>';
        return $str;
    }

}
