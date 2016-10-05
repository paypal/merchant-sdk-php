<?php

namespace PayPal\Merchant\API;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class AddressVerifyReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\API\AddressVerifyRequestType
     */
    public $AddressVerifyRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:AddressVerifyReq>';
        if ($this->AddressVerifyRequest != null) {
            $str .= '<ns:AddressVerifyRequest>';
            $str .= $this->AddressVerifyRequest->toXMLString();
            $str .= '</ns:AddressVerifyRequest>';
        }
        $str .= '</ns:AddressVerifyReq>';
        return $str;
    }

}
