<?php
namespace PayPal\PayPalAPI;

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
     * @var \PayPal\PayPalAPI\EnterBoardingRequestType
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
