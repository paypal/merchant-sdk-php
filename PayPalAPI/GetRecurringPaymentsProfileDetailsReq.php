<?php
namespace PayPal\Merchant\PayPalAPI;

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
     * @var \PayPal\Merchant\PayPalAPI\GetRecurringPaymentsProfileDetailsRequestType
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
