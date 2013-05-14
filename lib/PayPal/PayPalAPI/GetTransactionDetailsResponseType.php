<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\AbstractResponseType;
/**
 * 
 */
class GetTransactionDetailsResponseType  extends AbstractResponseType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\PaymentTransactionType	 
	 */ 
	public $PaymentTransactionDetails;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\ThreeDSecureInfoType	 
	 */ 
	public $ThreeDSecureDetails;


}
