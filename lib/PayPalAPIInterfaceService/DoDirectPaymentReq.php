<?php 
/**
 * 
 */
class DoDirectPaymentReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var DoDirectPaymentRequestType 	 
	 */ 
	public $DoDirectPaymentRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:DoDirectPaymentReq>';
			if($this->DoDirectPaymentRequest != NULL)
			{
		   		$str .= '<ns:DoDirectPaymentRequest>';
				$str .= $this->DoDirectPaymentRequest->toXMLString();
				$str .= '</ns:DoDirectPaymentRequest>';
			}
			$str .= '</ns:DoDirectPaymentReq>';
			return $str;
	}
  
 
}
