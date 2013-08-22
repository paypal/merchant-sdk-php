<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\PPXmlMessage;
/**
 * 
 */
class GetTransactionDetailsReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\PayPalAPI\GetTransactionDetailsRequestType	 
	 */ 
	public $GetTransactionDetailsRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:GetTransactionDetailsReq>';
			if($this->GetTransactionDetailsRequest != NULL)
			{
		   		$str .= '<ns:GetTransactionDetailsRequest>';
				$str .= $this->GetTransactionDetailsRequest->toXMLString();
				$str .= '</ns:GetTransactionDetailsRequest>';
			}
			$str .= '</ns:GetTransactionDetailsReq>';
			return $str;
	}
    
}
