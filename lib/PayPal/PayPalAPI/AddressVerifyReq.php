<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\;
/**
 * 
 */
class AddressVerifyReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\\AddressVerifyRequestType	 
	 */ 
	public $AddressVerifyRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:AddressVerifyReq>';
			if($this->AddressVerifyRequest != NULL)
			{
		   		$str .= '<ns:AddressVerifyRequest>';
				$str .= $this->AddressVerifyRequest->toXMLString();
				$str .= '</ns:AddressVerifyRequest>';
			}
			$str .= '</ns:AddressVerifyReq>';
			return $str;
	}
   
}
