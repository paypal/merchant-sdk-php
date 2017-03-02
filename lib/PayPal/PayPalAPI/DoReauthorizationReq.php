<?php
namespace PayPal\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class DoReauthorizationReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\PayPalAPI\DoReauthorizationRequestType
     */
    public $DoReauthorizationRequest;


    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:DoReauthorizationReq>';
        if ($this->DoReauthorizationRequest != null) {
            $str .= '<ns:DoReauthorizationRequest>';
            $str .= $this->DoReauthorizationRequest->toXMLString();
            $str .= '</ns:DoReauthorizationRequest>';
        }
        $str .= '</ns:DoReauthorizationReq>';
        return $str;
    }
}
