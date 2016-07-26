<?php

namespace PayPal\Merchant\API;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class BillOutstandingAmountReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\API\BillOutstandingAmountRequestType
     */
    public $BillOutstandingAmountRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:BillOutstandingAmountReq>';
        if ($this->BillOutstandingAmountRequest != null) {
            $str .= '<ns:BillOutstandingAmountRequest>';
            $str .= $this->BillOutstandingAmountRequest->toXMLString();
            $str .= '</ns:BillOutstandingAmountRequest>';
        }
        $str .= '</ns:BillOutstandingAmountReq>';
        return $str;
    }

}
