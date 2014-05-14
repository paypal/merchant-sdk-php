<?php 
/**
 * 
 */
class MassPayReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var MassPayRequestType 	 
	 */ 
	public $MassPayRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:MassPayReq>';
			if($this->MassPayRequest != NULL)
			{
		   		$str .= '<ns:MassPayRequest>';
				$str .= $this->MassPayRequest->toXMLString();
				$str .= '</ns:MassPayRequest>';
			}
			$str .= '</ns:MassPayReq>';
			return $str;
	}
  
 
}
