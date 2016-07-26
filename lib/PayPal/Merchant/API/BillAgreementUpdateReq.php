<?php

namespace PayPal\Merchant\API;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class BillAgreementUpdateReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\API\BAUpdateRequestType
     */
    public $BAUpdateRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:BillAgreementUpdateReq>';
        if ($this->BAUpdateRequest != null) {
            $str .= '<ns:BAUpdateRequest>';
            $str .= $this->BAUpdateRequest->toXMLString();
            $str .= '</ns:BAUpdateRequest>';
        }
        $str .= '</ns:BillAgreementUpdateReq>';
        return $str;
    }

}
