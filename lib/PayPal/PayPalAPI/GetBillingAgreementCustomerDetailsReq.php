<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\PPXmlMessage;
/**
 * 
 */
class GetBillingAgreementCustomerDetailsReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\PayPalAPI\GetBillingAgreementCustomerDetailsRequestType	 
	 */ 
	public $GetBillingAgreementCustomerDetailsRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:GetBillingAgreementCustomerDetailsReq>';
			if($this->GetBillingAgreementCustomerDetailsRequest != NULL)
			{
		   		$str .= '<ns:GetBillingAgreementCustomerDetailsRequest>';
				$str .= $this->GetBillingAgreementCustomerDetailsRequest->toXMLString();
				$str .= '</ns:GetBillingAgreementCustomerDetailsRequest>';
			}
			$str .= '</ns:GetBillingAgreementCustomerDetailsReq>';
			return $str;
	}
    
}
