<?php
namespace PayPal\Merchant\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class ExternalRememberMeOptOutReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\PayPalAPI\ExternalRememberMeOptOutRequestType
     */
    public $ExternalRememberMeOptOutRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:ExternalRememberMeOptOutReq>';
        if ($this->ExternalRememberMeOptOutRequest != null) {
            $str .= '<ns:ExternalRememberMeOptOutRequest>';
            $str .= $this->ExternalRememberMeOptOutRequest->toXMLString();
            $str .= '</ns:ExternalRememberMeOptOutRequest>';
        }
        $str .= '</ns:ExternalRememberMeOptOutReq>';
        return $str;
    }

}
