<?php
namespace PayPal\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class SetCustomerBillingAgreementReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\PayPalAPI\SetCustomerBillingAgreementRequestType
     */
    public $SetCustomerBillingAgreementRequest;


    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:SetCustomerBillingAgreementReq>';
        if ($this->SetCustomerBillingAgreementRequest != null) {
            $str .= '<ns:SetCustomerBillingAgreementRequest>';
            $str .= $this->SetCustomerBillingAgreementRequest->toXMLString();
            $str .= '</ns:SetCustomerBillingAgreementRequest>';
        }
        $str .= '</ns:SetCustomerBillingAgreementReq>';
        return $str;
    }
}
