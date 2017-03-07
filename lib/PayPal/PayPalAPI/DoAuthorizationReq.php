<?php
namespace PayPal\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class DoAuthorizationReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\PayPalAPI\DoAuthorizationRequestType
     */
    public $DoAuthorizationRequest;


    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:DoAuthorizationReq>';
        if ($this->DoAuthorizationRequest != null) {
            $str .= '<ns:DoAuthorizationRequest>';
            $str .= $this->DoAuthorizationRequest->toXMLString();
            $str .= '</ns:DoAuthorizationRequest>';
        }
        $str .= '</ns:DoAuthorizationReq>';
        return $str;
    }
}
