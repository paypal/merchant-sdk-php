<?php 
/**
 * 
 */
class DoVoidReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var DoVoidRequestType 	 
	 */ 
	public $DoVoidRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:DoVoidReq>';
			if($this->DoVoidRequest != NULL)
			{
		   		$str .= '<ns:DoVoidRequest>';
				$str .= $this->DoVoidRequest->toXMLString();
				$str .= '</ns:DoVoidRequest>';
			}
			$str .= '</ns:DoVoidReq>';
			return $str;
	}
  
 
}
