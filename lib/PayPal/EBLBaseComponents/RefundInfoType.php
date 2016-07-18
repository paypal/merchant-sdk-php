<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * Holds refunds payment status information 
 */
class RefundInfoType  
   extends PPXmlMessage{

	/**
	 * Refund status whether it is Instant or Delayed. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $RefundStatus;

	/**
	 * Tells us the reason when refund payment status is Delayed. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $PendingReason;


}
