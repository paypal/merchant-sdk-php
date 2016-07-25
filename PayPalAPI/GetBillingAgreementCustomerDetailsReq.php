<?php
namespace PayPal\Merchant\PayPalAPI;

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
     * @var \PayPal\Merchant\PayPalAPI\GetBillingAgreementCustomerDetailsRequestType
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
