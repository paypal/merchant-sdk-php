<?php 
/**
 * 
 */
class GetAuthDetailsReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var GetAuthDetailsRequestType 	 
	 */ 
	public $GetAuthDetailsRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:GetAuthDetailsReq>';
			if($this->GetAuthDetailsRequest != NULL)
			{
		   		$str .= '<ns:GetAuthDetailsRequest>';
				$str .= $this->GetAuthDetailsRequest->toXMLString();
				$str .= '</ns:GetAuthDetailsRequest>';
			}
			$str .= '</ns:GetAuthDetailsReq>';
			return $str;
	}
  
 
}
