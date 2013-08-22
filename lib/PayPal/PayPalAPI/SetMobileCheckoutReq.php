<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\PPXmlMessage;
/**
 * 
 */
class SetMobileCheckoutReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\PayPalAPI\SetMobileCheckoutRequestType	 
	 */ 
	public $SetMobileCheckoutRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:SetMobileCheckoutReq>';
			if($this->SetMobileCheckoutRequest != NULL)
			{
		   		$str .= '<ns:SetMobileCheckoutRequest>';
				$str .= $this->SetMobileCheckoutRequest->toXMLString();
				$str .= '</ns:SetMobileCheckoutRequest>';
			}
			$str .= '</ns:SetMobileCheckoutReq>';
			return $str;
	}
    
}
