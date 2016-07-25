<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class CreateBillingAgreementReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\PayPalAPI\CreateBillingAgreementRequestType
     */
    public $CreateBillingAgreementRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:CreateBillingAgreementReq>';
        if ($this->CreateBillingAgreementRequest != null) {
            $str .= '<ns:CreateBillingAgreementRequest>';
            $str .= $this->CreateBillingAgreementRequest->toXMLString();
            $str .= '</ns:CreateBillingAgreementRequest>';
        }
        $str .= '</ns:CreateBillingAgreementReq>';
        return $str;
    }

}
