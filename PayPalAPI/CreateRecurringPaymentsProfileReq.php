<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class CreateRecurringPaymentsProfileReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\PayPalAPI\CreateRecurringPaymentsProfileRequestType
     */
    public $CreateRecurringPaymentsProfileRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:CreateRecurringPaymentsProfileReq>';
        if ($this->CreateRecurringPaymentsProfileRequest != null) {
            $str .= '<ns:CreateRecurringPaymentsProfileRequest>';
            $str .= $this->CreateRecurringPaymentsProfileRequest->toXMLString();
            $str .= '</ns:CreateRecurringPaymentsProfileRequest>';
        }
        $str .= '</ns:CreateRecurringPaymentsProfileReq>';
        return $str;
    }

}
