<?php

namespace PayPal\Merchant\API;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class GetBillingAgreementCustomerDetailsReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\API\GetBillingAgreementCustomerDetailsRequestType
     */
    public $GetBillingAgreementCustomerDetailsRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:GetBillingAgreementCustomerDetailsReq>';
        if ($this->GetBillingAgreementCustomerDetailsRequest != null) {
            $str .= '<ns:GetBillingAgreementCustomerDetailsRequest>';
            $str .= $this->GetBillingAgreementCustomerDetailsRequest->toXMLString();
            $str .= '</ns:GetBillingAgreementCustomerDetailsRequest>';
        }
        $str .= '</ns:GetBillingAgreementCustomerDetailsReq>';
        return $str;
    }

}
