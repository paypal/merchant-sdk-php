<?php 
/**
 * 
 */
class UpdateRecurringPaymentsProfileReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var UpdateRecurringPaymentsProfileRequestType 	 
	 */ 
	public $UpdateRecurringPaymentsProfileRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:UpdateRecurringPaymentsProfileReq>';
			if($this->UpdateRecurringPaymentsProfileRequest != NULL)
			{
		   		$str .= '<ns:UpdateRecurringPaymentsProfileRequest>';
				$str .= $this->UpdateRecurringPaymentsProfileRequest->toXMLString();
				$str .= '</ns:UpdateRecurringPaymentsProfileRequest>';
			}
			$str .= '</ns:UpdateRecurringPaymentsProfileReq>';
			return $str;
	}
  
 
}
