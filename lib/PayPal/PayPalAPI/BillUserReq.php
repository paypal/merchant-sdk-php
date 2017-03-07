<?php
namespace PayPal\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class BillUserReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\PayPalAPI\BillUserRequestType
     */
    public $BillUserRequest;


    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:BillUserReq>';
        if ($this->BillUserRequest != null) {
            $str .= '<ns:BillUserRequest>';
            $str .= $this->BillUserRequest->toXMLString();
            $str .= '</ns:BillUserRequest>';
        }
        $str .= '</ns:BillUserReq>';
        return $str;
    }
}
