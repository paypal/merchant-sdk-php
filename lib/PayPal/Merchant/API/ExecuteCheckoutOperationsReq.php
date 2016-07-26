<?php

namespace PayPal\Merchant\API;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class ExecuteCheckoutOperationsReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\API\ExecuteCheckoutOperationsRequestType
     */
    public $ExecuteCheckoutOperationsRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:ExecuteCheckoutOperationsReq>';
        if ($this->ExecuteCheckoutOperationsRequest != null) {
            $str .= '<ns:ExecuteCheckoutOperationsRequest>';
            $str .= $this->ExecuteCheckoutOperationsRequest->toXMLString();
            $str .= '</ns:ExecuteCheckoutOperationsRequest>';
        }
        $str .= '</ns:ExecuteCheckoutOperationsReq>';
        return $str;
    }

}
