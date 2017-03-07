<?php
namespace PayPal\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class UpdateAuthorizationReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\PayPalAPI\UpdateAuthorizationRequestType
     */
    public $UpdateAuthorizationRequest;


    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:UpdateAuthorizationReq>';
        if ($this->UpdateAuthorizationRequest != null) {
            $str .= '<ns:UpdateAuthorizationRequest>';
            $str .= $this->UpdateAuthorizationRequest->toXMLString();
            $str .= '</ns:UpdateAuthorizationRequest>';
        }
        $str .= '</ns:UpdateAuthorizationReq>';
        return $str;
    }
}
