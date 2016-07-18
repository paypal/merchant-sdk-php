<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\PPXmlMessage;
/**
 * 
 */
class AddressVerifyReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\PayPalAPI\AddressVerifyRequestType	 
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
