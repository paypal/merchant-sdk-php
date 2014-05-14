<?php 
/**
 * OfferDetailsType Specific information for an offer. 
 */
class OfferDetailsType  
   extends PPXmlMessage{

	/**
	 * Code used to identify the promotion offer. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $OfferCode;

	/**
	 * Specific infromation for BML, Similar structure could be
	 * added for sepcific  promotion needs like CrossPromotions 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var BMLOfferInfoType 	 
	 */ 
	public $BMLOfferInfo;


  
 
}
