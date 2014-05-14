<?php 
/**
 * 
 */
class CreateBillingAgreementReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var CreateBillingAgreementRequestType 	 
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
