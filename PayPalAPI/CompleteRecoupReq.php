<?php
namespace PayPal\Merchant\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class CompleteRecoupReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\PayPalAPI\CompleteRecoupRequestType
     */
    public $CompleteRecoupRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:CompleteRecoupReq>';
        if ($this->CompleteRecoupRequest != null) {
            $str .= '<ns:CompleteRecoupRequest>';
            $str .= $this->CompleteRecoupRequest->toXMLString();
            $str .= '</ns:CompleteRecoupRequest>';
        }
        $str .= '</ns:CompleteRecoupReq>';
        return $str;
    }

}
