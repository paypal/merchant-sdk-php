<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\;
/**
 * 
 */
class DoUATPAuthorizationReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\\DoUATPAuthorizationRequestType	 
	 */ 
	public $DoUATPAuthorizationRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:DoUATPAuthorizationReq>';
			if($this->DoUATPAuthorizationRequest != NULL)
			{
		   		$str .= '<ns:DoUATPAuthorizationRequest>';
				$str .= $this->DoUATPAuthorizationRequest->toXMLString();
				$str .= '</ns:DoUATPAuthorizationRequest>';
			}
			$str .= '</ns:DoUATPAuthorizationReq>';
			return $str;
	}
   
}
