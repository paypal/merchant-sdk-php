<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\;
/**
 * 
 */
class SetExpressCheckoutReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\\SetExpressCheckoutRequestType	 
	 */ 
	public $SetExpressCheckoutRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:SetExpressCheckoutReq>';
			if($this->SetExpressCheckoutRequest != NULL)
			{
		   		$str .= '<ns:SetExpressCheckoutRequest>';
				$str .= $this->SetExpressCheckoutRequest->toXMLString();
				$str .= '</ns:SetExpressCheckoutRequest>';
			}
			$str .= '</ns:SetExpressCheckoutReq>';
			return $str;
	}
   
}
