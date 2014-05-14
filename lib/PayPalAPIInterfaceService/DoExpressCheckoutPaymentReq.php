<?php 
/**
 * 
 */
class DoExpressCheckoutPaymentReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var DoExpressCheckoutPaymentRequestType 	 
	 */ 
	public $DoExpressCheckoutPaymentRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:DoExpressCheckoutPaymentReq>';
			if($this->DoExpressCheckoutPaymentRequest != NULL)
			{
		   		$str .= '<ns:DoExpressCheckoutPaymentRequest>';
				$str .= $this->DoExpressCheckoutPaymentRequest->toXMLString();
				$str .= '</ns:DoExpressCheckoutPaymentRequest>';
			}
			$str .= '</ns:DoExpressCheckoutPaymentReq>';
			return $str;
	}
  
 
}
