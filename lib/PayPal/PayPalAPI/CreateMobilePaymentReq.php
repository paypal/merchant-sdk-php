<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\PPXmlMessage;
/**
 * 
 */
class CreateMobilePaymentReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\PayPalAPI\CreateMobilePaymentRequestType	 
	 */ 
	public $CreateMobilePaymentRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:CreateMobilePaymentReq>';
			if($this->CreateMobilePaymentRequest != NULL)
			{
		   		$str .= '<ns:CreateMobilePaymentRequest>';
				$str .= $this->CreateMobilePaymentRequest->toXMLString();
				$str .= '</ns:CreateMobilePaymentRequest>';
			}
			$str .= '</ns:CreateMobilePaymentReq>';
			return $str;
	}
    
}
