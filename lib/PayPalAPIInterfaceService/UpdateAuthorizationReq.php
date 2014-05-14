<?php 
/**
 * 
 */
class UpdateAuthorizationReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var UpdateAuthorizationRequestType 	 
	 */ 
	public $UpdateAuthorizationRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:UpdateAuthorizationReq>';
			if($this->UpdateAuthorizationRequest != NULL)
			{
		   		$str .= '<ns:UpdateAuthorizationRequest>';
				$str .= $this->UpdateAuthorizationRequest->toXMLString();
				$str .= '</ns:UpdateAuthorizationRequest>';
			}
			$str .= '</ns:UpdateAuthorizationReq>';
			return $str;
	}
  
 
}
