<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\;
/**
 * 
 */
class SetCustomerBillingAgreementReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\\SetCustomerBillingAgreementRequestType	 
	 */ 
	public $SetCustomerBillingAgreementRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:SetCustomerBillingAgreementReq>';
			if($this->SetCustomerBillingAgreementRequest != NULL)
			{
		   		$str .= '<ns:SetCustomerBillingAgreementRequest>';
				$str .= $this->SetCustomerBillingAgreementRequest->toXMLString();
				$str .= '</ns:SetCustomerBillingAgreementRequest>';
			}
			$str .= '</ns:SetCustomerBillingAgreementReq>';
			return $str;
	}
   
}
