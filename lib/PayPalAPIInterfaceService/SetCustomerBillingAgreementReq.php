<?php 
/**
 * 
 */
class SetCustomerBillingAgreementReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var SetCustomerBillingAgreementRequestType 	 
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
