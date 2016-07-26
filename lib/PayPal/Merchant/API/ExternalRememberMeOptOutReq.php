<?php

namespace PayPal\Merchant\API;

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
     * @var \PayPal\Merchant\API\ExternalRememberMeOptOutRequestType
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
