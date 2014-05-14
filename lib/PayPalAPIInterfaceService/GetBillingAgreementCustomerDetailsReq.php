<?php 
/**
 * 
 */
class GetBillingAgreementCustomerDetailsReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var GetBillingAgreementCustomerDetailsRequestType 	 
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
