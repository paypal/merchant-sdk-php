<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class SetAuthFlowParamReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\PayPalAPI\SetAuthFlowParamRequestType
     */
    public $SetAuthFlowParamRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:SetAuthFlowParamReq>';
        if ($this->SetAuthFlowParamRequest != null) {
            $str .= '<ns:SetAuthFlowParamRequest>';
            $str .= $this->SetAuthFlowParamRequest->toXMLString();
            $str .= '</ns:SetAuthFlowParamRequest>';
        }
        $str .= '</ns:SetAuthFlowParamReq>';
        return $str;
    }

}
