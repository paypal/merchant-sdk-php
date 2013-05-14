<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\;
/**
 * 
 */
class DoReauthorizationReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\\DoReauthorizationRequestType	 
	 */ 
	public $DoReauthorizationRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:DoReauthorizationReq>';
			if($this->DoReauthorizationRequest != NULL)
			{
		   		$str .= '<ns:DoReauthorizationRequest>';
				$str .= $this->DoReauthorizationRequest->toXMLString();
				$str .= '</ns:DoReauthorizationRequest>';
			}
			$str .= '</ns:DoReauthorizationReq>';
			return $str;
	}
   
}
