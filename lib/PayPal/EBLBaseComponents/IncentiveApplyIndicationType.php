<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * Defines which bucket or item that the incentive should be
 * applied to. 
 */
class IncentiveApplyIndicationType  
   extends PPXmlMessage{

	/**
	 * The Bucket ID that the incentive is applied to. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $PaymentRequestID;

	/**
	 * The item that the incentive is applied to. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $ItemId;


    
}
