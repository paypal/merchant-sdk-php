<?php 
/**
 * 
 */
class DoCancelReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var DoCancelRequestType 	 
	 */ 
	public $DoCancelRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:DoCancelReq>';
			if($this->DoCancelRequest != NULL)
			{
		   		$str .= '<ns:DoCancelRequest>';
				$str .= $this->DoCancelRequest->toXMLString();
				$str .= '</ns:DoCancelRequest>';
			}
			$str .= '</ns:DoCancelReq>';
			return $str;
	}
  
 
}
