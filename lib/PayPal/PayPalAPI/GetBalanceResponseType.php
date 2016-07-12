<?php
namespace PayPal\PayPalAPI;
use PayPal\EBLBaseComponents\AbstractResponseType;
/**
 *
 */
class GetBalanceResponseType  extends AbstractResponseType
  {

	/**
	 *
	 * @access public
	 * @namespace ns
	 * @var \PayPal\CoreComponentTypes\BasicAmountType
	 */
	public $Balance;

	/**
	 *
	 * @access public
	 * @namespace ns
	 * @var string ISO8601
	 */
	public $BalanceTimeStamp;

	/**
	 *
	 * @access public
	 * @namespace ns
	 * @var \PayPal\CoreComponentTypes\BasicAmountType[]
	 */
	public $BalanceHoldings;


}
