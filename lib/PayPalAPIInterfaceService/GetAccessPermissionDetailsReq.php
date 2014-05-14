<?php 
/**
 * 
 */
class GetAccessPermissionDetailsReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var GetAccessPermissionDetailsRequestType 	 
	 */ 
	public $GetAccessPermissionDetailsRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:GetAccessPermissionDetailsReq>';
			if($this->GetAccessPermissionDetailsRequest != NULL)
			{
		   		$str .= '<ns:GetAccessPermissionDetailsRequest>';
				$str .= $this->GetAccessPermissionDetailsRequest->toXMLString();
				$str .= '</ns:GetAccessPermissionDetailsRequest>';
			}
			$str .= '</ns:GetAccessPermissionDetailsReq>';
			return $str;
	}
  
 
}
