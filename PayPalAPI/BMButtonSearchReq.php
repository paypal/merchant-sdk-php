<?php
namespace PayPal\Merchant\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class BMButtonSearchReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\PayPalAPI\BMButtonSearchRequestType
     */
    public $BMButtonSearchRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:BMButtonSearchReq>';
        if ($this->BMButtonSearchRequest != null) {
            $str .= '<ns:BMButtonSearchRequest>';
            $str .= $this->BMButtonSearchRequest->toXMLString();
            $str .= '</ns:BMButtonSearchRequest>';
        }
        $str .= '</ns:BMButtonSearchReq>';
        return $str;
    }

}
