<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class ManagePendingTransactionStatusReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\PayPalAPI\ManagePendingTransactionStatusRequestType
     */
    public $ManagePendingTransactionStatusRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:ManagePendingTransactionStatusReq>';
        if ($this->ManagePendingTransactionStatusRequest != null) {
            $str .= '<ns:ManagePendingTransactionStatusRequest>';
            $str .= $this->ManagePendingTransactionStatusRequest->toXMLString();
            $str .= '</ns:ManagePendingTransactionStatusRequest>';
        }
        $str .= '</ns:ManagePendingTransactionStatusReq>';
        return $str;
    }

}
