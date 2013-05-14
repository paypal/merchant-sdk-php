<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\AbstractResponseType;
/**
 * 
 */
class GetBalanceResponseType  extends AbstractResponseType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\\BasicAmountType	 
	 */ 
	public $Balance;

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var dateTime	 
	 */ 
	public $BalanceTimeStamp;

	/**
	 * 
     * @array
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\\BasicAmountType	 
	 */ 
	public $BalanceHoldings;


}
