<?php
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 *
 */
class GetIncentiveEvaluationResponseDetailsType
   extends PPXmlMessage{

	/**
	 *
	 * @access public
	 * @namespace ebl
	 * @var \PayPal\EBLBaseComponents\IncentiveDetailType[]
	 */
	public $IncentiveDetails;

	/**
	 *
	 * @access public
	 * @namespace ebl
	 * @var string
	 */
	public $RequestId;


}
