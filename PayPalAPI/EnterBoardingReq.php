<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class EnterBoardingReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\PayPalAPI\EnterBoardingRequestType
     */
    public $EnterBoardingRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:EnterBoardingReq>';
        if ($this->EnterBoardingRequest != null) {
            $str .= '<ns:EnterBoardingRequest>';
            $str .= $this->EnterBoardingRequest->toXMLString();
            $str .= '</ns:EnterBoardingRequest>';
        }
        $str .= '</ns:EnterBoardingReq>';
        return $str;
    }

}
