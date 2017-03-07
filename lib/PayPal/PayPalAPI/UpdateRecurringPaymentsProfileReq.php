<?php
namespace PayPal\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class UpdateRecurringPaymentsProfileReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\PayPalAPI\UpdateRecurringPaymentsProfileRequestType
     */
    public $UpdateRecurringPaymentsProfileRequest;


    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:UpdateRecurringPaymentsProfileReq>';
        if ($this->UpdateRecurringPaymentsProfileRequest != null) {
            $str .= '<ns:UpdateRecurringPaymentsProfileRequest>';
            $str .= $this->UpdateRecurringPaymentsProfileRequest->toXMLString();
            $str .= '</ns:UpdateRecurringPaymentsProfileRequest>';
        }
        $str .= '</ns:UpdateRecurringPaymentsProfileReq>';
        return $str;
    }
}
