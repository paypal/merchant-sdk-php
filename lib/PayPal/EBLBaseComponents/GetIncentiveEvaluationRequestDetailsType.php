<?php
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 *
 */
class GetIncentiveEvaluationRequestDetailsType
   extends PPXmlMessage{

	/**
	 *
	 * @access public
	 * @namespace ebl
	 * @var string
	 */
	public $ExternalBuyerId;

	/**
	 *
	 * @access public
	 * @namespace ebl
	 * @var string[]
	 */
	public $IncentiveCodes;

	/**
	 *
	 * @access public
	 * @namespace ebl
	 * @var \PayPal\EBLBaseComponents\IncentiveApplyIndicationType[]
	 */
	public $ApplyIndication;

	/**
	 *
	 * @access public
	 * @namespace ebl
	 * @var \PayPal\EBLBaseComponents\IncentiveBucketType[]
	 */
	public $Buckets;

	/**
	 *
	 * @access public
	 * @namespace ebl
	 * @var \PayPal\CoreComponentTypes\BasicAmountType
	 */
	public $CartTotalAmt;

	/**
	 *
	 * @access public
	 * @namespace ebl
	 * @var \PayPal\EBLBaseComponents\IncentiveRequestDetailsType
	 */
	public $RequestDetails;



}
