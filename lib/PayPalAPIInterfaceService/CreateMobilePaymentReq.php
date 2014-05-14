<?php 
/**
 * 
 */
class CreateMobilePaymentReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var CreateMobilePaymentRequestType 	 
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
