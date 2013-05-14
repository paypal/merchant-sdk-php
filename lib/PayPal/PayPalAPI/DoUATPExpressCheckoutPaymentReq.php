<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\;
/**
 * 
 */
class DoUATPExpressCheckoutPaymentReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\\DoUATPExpressCheckoutPaymentRequestType	 
	 */ 
	public $DoUATPExpressCheckoutPaymentRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:DoUATPExpressCheckoutPaymentReq>';
			if($this->DoUATPExpressCheckoutPaymentRequest != NULL)
			{
		   		$str .= '<ns:DoUATPExpressCheckoutPaymentRequest>';
				$str .= $this->DoUATPExpressCheckoutPaymentRequest->toXMLString();
				$str .= '</ns:DoUATPExpressCheckoutPaymentRequest>';
			}
			$str .= '</ns:DoUATPExpressCheckoutPaymentReq>';
			return $str;
	}
   
}
