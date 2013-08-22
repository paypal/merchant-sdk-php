<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\PPXmlMessage;
/**
 * 
 */
class DoUATPAuthorizationReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\PayPalAPI\DoUATPAuthorizationRequestType	 
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
