<?php 
/**
 * 
 */
class DoMobileCheckoutPaymentReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var DoMobileCheckoutPaymentRequestType 	 
	 */ 
	public $DoMobileCheckoutPaymentRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:DoMobileCheckoutPaymentReq>';
			if($this->DoMobileCheckoutPaymentRequest != NULL)
			{
		   		$str .= '<ns:DoMobileCheckoutPaymentRequest>';
				$str .= $this->DoMobileCheckoutPaymentRequest->toXMLString();
				$str .= '</ns:DoMobileCheckoutPaymentRequest>';
			}
			$str .= '</ns:DoMobileCheckoutPaymentReq>';
			return $str;
	}
  
 
}
