<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\PPXmlMessage;
/**
 * 
 */
class GetMobileStatusReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\PayPalAPI\GetMobileStatusRequestType	 
	 */ 
	public $GetMobileStatusRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:GetMobileStatusReq>';
			if($this->GetMobileStatusRequest != NULL)
			{
		   		$str .= '<ns:GetMobileStatusRequest>';
				$str .= $this->GetMobileStatusRequest->toXMLString();
				$str .= '</ns:GetMobileStatusRequest>';
			}
			$str .= '</ns:GetMobileStatusReq>';
			return $str;
	}
    
}
