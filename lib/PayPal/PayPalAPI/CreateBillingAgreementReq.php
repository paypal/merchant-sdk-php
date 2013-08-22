<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\PPXmlMessage;
/**
 * 
 */
class CreateBillingAgreementReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\PayPalAPI\CreateBillingAgreementRequestType	 
	 */ 
	public $CreateBillingAgreementRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:CreateBillingAgreementReq>';
			if($this->CreateBillingAgreementRequest != NULL)
			{
		   		$str .= '<ns:CreateBillingAgreementRequest>';
				$str .= $this->CreateBillingAgreementRequest->toXMLString();
				$str .= '</ns:CreateBillingAgreementRequest>';
			}
			$str .= '</ns:CreateBillingAgreementReq>';
			return $str;
	}
    
}
