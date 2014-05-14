<?php 
/**
 * A timestamped token by which you identify to PayPal that you
 * are processing this payment with Express Checkout. The token
 * expires after three hours. If you set Token in the
 * SetExpressCheckoutRequest, the value of Token in the
 * response is identical to the value in the request. Character
 * length and limitations: 20 single-byte characters
 */
class SetExpressCheckoutResponseType  extends AbstractResponseType  
  {

	/**
	 * A timestamped token by which you identify to PayPal that you
	 * are processing this payment with Express Checkout. The token
	 * expires after three hours. If you set Token in the
	 * SetExpressCheckoutRequest, the value of Token in the
	 * response is identical to the value in the request. Character
	 * length and limitations: 20 single-byte characters
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Token;


}
