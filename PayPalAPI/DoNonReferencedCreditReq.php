<?php
namespace PayPal\Merchant\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class DoNonReferencedCreditReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\PayPalAPI\DoNonReferencedCreditRequestType
     */
    public $DoNonReferencedCreditRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:DoNonReferencedCreditReq>';
        if ($this->DoNonReferencedCreditRequest != null) {
            $str .= '<ns:DoNonReferencedCreditRequest>';
            $str .= $this->DoNonReferencedCreditRequest->toXMLString();
            $str .= '</ns:DoNonReferencedCreditRequest>';
        }
        $str .= '</ns:DoNonReferencedCreditReq>';
        return $str;
    }

}
