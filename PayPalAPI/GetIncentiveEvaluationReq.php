<?php
namespace PayPal\Merchant\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class GetIncentiveEvaluationReq
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\PayPalAPI\GetIncentiveEvaluationRequestType
     */
    public $GetIncentiveEvaluationRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:GetIncentiveEvaluationReq>';
        if ($this->GetIncentiveEvaluationRequest != null) {
            $str .= '<ns:GetIncentiveEvaluationRequest>';
            $str .= $this->GetIncentiveEvaluationRequest->toXMLString();
            $str .= '</ns:GetIncentiveEvaluationRequest>';
        }
        $str .= '</ns:GetIncentiveEvaluationReq>';
        return $str;
    }

}
