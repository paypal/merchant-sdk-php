<?php 
/**
 * 
 */
class BMGetButtonDetailsReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var BMGetButtonDetailsRequestType 	 
	 */ 
	public $BMGetButtonDetailsRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:BMGetButtonDetailsReq>';
			if($this->BMGetButtonDetailsRequest != NULL)
			{
		   		$str .= '<ns:BMGetButtonDetailsRequest>';
				$str .= $this->BMGetButtonDetailsRequest->toXMLString();
				$str .= '</ns:BMGetButtonDetailsRequest>';
			}
			$str .= '</ns:BMGetButtonDetailsReq>';
			return $str;
	}
  
 
}
