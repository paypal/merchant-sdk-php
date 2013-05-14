<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\;
/**
 * 
 */
class SetAuthFlowParamReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\\SetAuthFlowParamRequestType	 
	 */ 
	public $SetAuthFlowParamRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:SetAuthFlowParamReq>';
			if($this->SetAuthFlowParamRequest != NULL)
			{
		   		$str .= '<ns:SetAuthFlowParamRequest>';
				$str .= $this->SetAuthFlowParamRequest->toXMLString();
				$str .= '</ns:SetAuthFlowParamRequest>';
			}
			$str .= '</ns:SetAuthFlowParamReq>';
			return $str;
	}
   
}
