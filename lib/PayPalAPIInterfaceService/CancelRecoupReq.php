<?php 
/**
 * 
 */
class CancelRecoupReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var CancelRecoupRequestType 	 
	 */ 
	public $CancelRecoupRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:CancelRecoupReq>';
			if($this->CancelRecoupRequest != NULL)
			{
		   		$str .= '<ns:CancelRecoupRequest>';
				$str .= $this->CancelRecoupRequest->toXMLString();
				$str .= '</ns:CancelRecoupRequest>';
			}
			$str .= '</ns:CancelRecoupReq>';
			return $str;
	}
  
 
}
