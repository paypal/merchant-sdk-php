<?php 
/**
 * 
 */
class GetRecurringPaymentsProfileDetailsReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var GetRecurringPaymentsProfileDetailsRequestType 	 
	 */ 
	public $GetRecurringPaymentsProfileDetailsRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:GetRecurringPaymentsProfileDetailsReq>';
			if($this->GetRecurringPaymentsProfileDetailsRequest != NULL)
			{
		   		$str .= '<ns:GetRecurringPaymentsProfileDetailsRequest>';
				$str .= $this->GetRecurringPaymentsProfileDetailsRequest->toXMLString();
				$str .= '</ns:GetRecurringPaymentsProfileDetailsRequest>';
			}
			$str .= '</ns:GetRecurringPaymentsProfileDetailsReq>';
			return $str;
	}
  
 
}
