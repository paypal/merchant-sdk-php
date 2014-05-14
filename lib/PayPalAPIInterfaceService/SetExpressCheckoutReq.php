<?php 
/**
 * 
 */
class SetExpressCheckoutReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var SetExpressCheckoutRequestType 	 
	 */ 
	public $SetExpressCheckoutRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:SetExpressCheckoutReq>';
			if($this->SetExpressCheckoutRequest != NULL)
			{
		   		$str .= '<ns:SetExpressCheckoutRequest>';
				$str .= $this->SetExpressCheckoutRequest->toXMLString();
				$str .= '</ns:SetExpressCheckoutRequest>';
			}
			$str .= '</ns:SetExpressCheckoutReq>';
			return $str;
	}
  
 
}
