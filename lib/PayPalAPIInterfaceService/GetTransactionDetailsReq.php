<?php 
/**
 * 
 */
class GetTransactionDetailsReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var GetTransactionDetailsRequestType 	 
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
