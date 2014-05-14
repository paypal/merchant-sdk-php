<?php 
/**
 * 
 */
class GetExpressCheckoutDetailsReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var GetExpressCheckoutDetailsRequestType 	 
	 */ 
	public $GetExpressCheckoutDetailsRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:GetExpressCheckoutDetailsReq>';
			if($this->GetExpressCheckoutDetailsRequest != NULL)
			{
		   		$str .= '<ns:GetExpressCheckoutDetailsRequest>';
				$str .= $this->GetExpressCheckoutDetailsRequest->toXMLString();
				$str .= '</ns:GetExpressCheckoutDetailsRequest>';
			}
			$str .= '</ns:GetExpressCheckoutDetailsReq>';
			return $str;
	}
  
 
}
