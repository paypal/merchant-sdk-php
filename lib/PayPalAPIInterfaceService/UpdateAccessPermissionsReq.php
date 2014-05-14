<?php 
/**
 * 
 */
class UpdateAccessPermissionsReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var UpdateAccessPermissionsRequestType 	 
	 */ 
	public $UpdateAccessPermissionsRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:UpdateAccessPermissionsReq>';
			if($this->UpdateAccessPermissionsRequest != NULL)
			{
		   		$str .= '<ns:UpdateAccessPermissionsRequest>';
				$str .= $this->UpdateAccessPermissionsRequest->toXMLString();
				$str .= '</ns:UpdateAccessPermissionsRequest>';
			}
			$str .= '</ns:UpdateAccessPermissionsReq>';
			return $str;
	}
  
 
}
