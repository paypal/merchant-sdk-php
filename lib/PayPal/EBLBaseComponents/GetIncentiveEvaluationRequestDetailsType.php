<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\;
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
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $IncentiveCodes;

	/**
	 * 
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\IncentiveApplyIndicationType	 
	 */ 
	public $ApplyIndication;

	/**
	 * 
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\IncentiveBucketType	 
	 */ 
	public $Buckets;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\BasicAmountType	 
	 */ 
	public $CartTotalAmt;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\IncentiveRequestDetailsType	 
	 */ 
	public $RequestDetails;


   
}
