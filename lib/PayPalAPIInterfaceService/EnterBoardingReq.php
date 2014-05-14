<?php 
/**
 * 
 */
class EnterBoardingReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var EnterBoardingRequestType 	 
	 */ 
	public $EnterBoardingRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:EnterBoardingReq>';
			if($this->EnterBoardingRequest != NULL)
			{
		   		$str .= '<ns:EnterBoardingRequest>';
				$str .= $this->EnterBoardingRequest->toXMLString();
				$str .= '</ns:EnterBoardingRequest>';
			}
			$str .= '</ns:EnterBoardingReq>';
			return $str;
	}
  
 
}
