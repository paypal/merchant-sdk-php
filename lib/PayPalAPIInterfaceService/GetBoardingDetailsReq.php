<?php 
/**
 * 
 */
class GetBoardingDetailsReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var GetBoardingDetailsRequestType 	 
	 */ 
	public $GetBoardingDetailsRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:GetBoardingDetailsReq>';
			if($this->GetBoardingDetailsRequest != NULL)
			{
		   		$str .= '<ns:GetBoardingDetailsRequest>';
				$str .= $this->GetBoardingDetailsRequest->toXMLString();
				$str .= '</ns:GetBoardingDetailsRequest>';
			}
			$str .= '</ns:GetBoardingDetailsReq>';
			return $str;
	}
  
 
}
