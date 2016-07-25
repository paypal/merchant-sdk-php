<?php
namespace PayPal\Merchant\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class DoDirectPaymentReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\PayPalAPI\DoDirectPaymentRequestType
     */
    public $DoDirectPaymentRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:DoDirectPaymentReq>';
        if ($this->DoDirectPaymentRequest != null) {
            $str .= '<ns:DoDirectPaymentRequest>';
            $str .= $this->DoDirectPaymentRequest->toXMLString();
            $str .= '</ns:DoDirectPaymentRequest>';
        }
        $str .= '</ns:DoDirectPaymentReq>';
        return $str;
    }

}
