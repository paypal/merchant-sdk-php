<?php 
/**
 * 
 */
class DoAuthorizationReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var DoAuthorizationRequestType 	 
	 */ 
	public $DoAuthorizationRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:DoAuthorizationReq>';
			if($this->DoAuthorizationRequest != NULL)
			{
		   		$str .= '<ns:DoAuthorizationRequest>';
				$str .= $this->DoAuthorizationRequest->toXMLString();
				$str .= '</ns:DoAuthorizationRequest>';
			}
			$str .= '</ns:DoAuthorizationReq>';
			return $str;
	}
  
 
}
