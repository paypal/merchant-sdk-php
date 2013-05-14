<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\;
/**
 * Information that is used to indentify the Buyer. This is
 * used for auto authorization. Mandatory if Authorization is
 * requested. 
 */
class BuyerDetailType  
   extends PPXmlMessage{

	/**
	 * Information that is used to indentify the Buyer. This is
	 * used for auto authorization. Mandatory if Authorization is
	 * requested.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\IdentificationInfoType	 
	 */ 
	public $IdentificationInfo;


   
}
