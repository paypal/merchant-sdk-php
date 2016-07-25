<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class ManageRecurringPaymentsProfileStatusReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\PayPalAPI\ManageRecurringPaymentsProfileStatusRequestType
     */
    public $ManageRecurringPaymentsProfileStatusRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:ManageRecurringPaymentsProfileStatusReq>';
        if ($this->ManageRecurringPaymentsProfileStatusRequest != null) {
            $str .= '<ns:ManageRecurringPaymentsProfileStatusRequest>';
            $str .= $this->ManageRecurringPaymentsProfileStatusRequest->toXMLString();
            $str .= '</ns:ManageRecurringPaymentsProfileStatusRequest>';
        }
        $str .= '</ns:ManageRecurringPaymentsProfileStatusReq>';
        return $str;
    }

}
