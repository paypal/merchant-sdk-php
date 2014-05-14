<?php 
/**
 * Details of incentive application on individual bucket. 
 */
class IncentiveInfoType  
   extends PPXmlMessage{

	/**
	 * Incentive redemption code. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $IncentiveCode;

	/**
	 * Defines which bucket or item that the incentive should be
	 * applied to. 
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var IncentiveApplyIndicationType 	 
	 */ 
	public $ApplyIndication;


  
 
}
