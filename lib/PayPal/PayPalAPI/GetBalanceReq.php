<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\PPXmlMessage;
/**
 * 
 */
class GetBalanceReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\PayPalAPI\GetBalanceRequestType	 
	 */ 
	public $GetBalanceRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:GetBalanceReq>';
			if($this->GetBalanceRequest != NULL)
			{
		   		$str .= '<ns:GetBalanceRequest>';
				$str .= $this->GetBalanceRequest->toXMLString();
				$str .= '</ns:GetBalanceRequest>';
			}
			$str .= '</ns:GetBalanceReq>';
			return $str;
	}
    
}
