<?php 
namespace PayPal\PayPalAPI;
use PayPal\EBLBaseComponents\AbstractResponseType; 
/**
 * A timestamped token by which you identify to PayPal that you
 * are processing this payment with Mobile Checkout. The token
 * expires after three hours. Character length and limitations:
 * 20 single-byte characters
 */
class SetMobileCheckoutResponseType  extends AbstractResponseType  
  {

	/**
	 * A timestamped token by which you identify to PayPal that you
	 * are processing this payment with Mobile Checkout. The token
	 * expires after three hours. Character length and limitations:
	 * 20 single-byte characters
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Token;


}
