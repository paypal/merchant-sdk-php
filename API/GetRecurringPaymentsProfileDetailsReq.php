<?php

namespace PayPal\Merchant\API;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class GetRecurringPaymentsProfileDetailsReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\API\GetRecurringPaymentsProfileDetailsRequestType
     */
    public $GetRecurringPaymentsProfileDetailsRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:GetRecurringPaymentsProfileDetailsReq>';
        if ($this->GetRecurringPaymentsProfileDetailsRequest != null) {
            $str .= '<ns:GetRecurringPaymentsProfileDetailsRequest>';
            $str .= $this->GetRecurringPaymentsProfileDetailsRequest->toXMLString();
            $str .= '</ns:GetRecurringPaymentsProfileDetailsRequest>';
        }
        $str .= '</ns:GetRecurringPaymentsProfileDetailsReq>';
        return $str;
    }

}
