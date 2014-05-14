<?php 
/**
 * 
 */
class BillUserReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var BillUserRequestType 	 
	 */ 
	public $BillUserRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:BillUserReq>';
			if($this->BillUserRequest != NULL)
			{
		   		$str .= '<ns:BillUserRequest>';
				$str .= $this->BillUserRequest->toXMLString();
				$str .= '</ns:BillUserRequest>';
			}
			$str .= '</ns:BillUserReq>';
			return $str;
	}
  
 
}
