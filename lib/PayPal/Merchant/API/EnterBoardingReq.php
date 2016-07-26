<?php

namespace PayPal\Merchant\API;

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
     * @var \PayPal\Merchant\API\EnterBoardingRequestType
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
