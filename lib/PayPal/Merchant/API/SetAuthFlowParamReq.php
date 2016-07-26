<?php

namespace PayPal\Merchant\API;

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
     * @var \PayPal\Merchant\API\SetAuthFlowParamRequestType
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
