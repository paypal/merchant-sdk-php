<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * BMLOfferInfoType Specific information for BML. 
 */
class BMLOfferInfoType  
   extends PPXmlMessage{

	/**
	 * Unique identification for merchant/buyer/offer combo. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $OfferTrackingID;


    
}
