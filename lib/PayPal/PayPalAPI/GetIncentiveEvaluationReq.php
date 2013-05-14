<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\;
/**
 * 
 */
class GetIncentiveEvaluationReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\\GetIncentiveEvaluationRequestType	 
	 */ 
	public $GetIncentiveEvaluationRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:GetIncentiveEvaluationReq>';
			if($this->GetIncentiveEvaluationRequest != NULL)
			{
		   		$str .= '<ns:GetIncentiveEvaluationRequest>';
				$str .= $this->GetIncentiveEvaluationRequest->toXMLString();
				$str .= '</ns:GetIncentiveEvaluationRequest>';
			}
			$str .= '</ns:GetIncentiveEvaluationReq>';
			return $str;
	}
   
}
