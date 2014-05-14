<?php 
/**
 * 
 */
class BMManageButtonStatusReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var BMManageButtonStatusRequestType 	 
	 */ 
	public $BMManageButtonStatusRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:BMManageButtonStatusReq>';
			if($this->BMManageButtonStatusRequest != NULL)
			{
		   		$str .= '<ns:BMManageButtonStatusRequest>';
				$str .= $this->BMManageButtonStatusRequest->toXMLString();
				$str .= '</ns:BMManageButtonStatusRequest>';
			}
			$str .= '</ns:BMManageButtonStatusReq>';
			return $str;
	}
  
 
}
