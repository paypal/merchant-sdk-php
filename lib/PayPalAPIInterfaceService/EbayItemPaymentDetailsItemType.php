<?php 
/**
 * EbayItemPaymentDetailsItemType - Type declaration to be used
 * by other schemas. Information about an Ebay Payment Item. 
 */
class EbayItemPaymentDetailsItemType  
   extends PPXmlMessage{

	/**
	 * Auction ItemNumber. Optional Character length and
	 * limitations: 765 single-byte characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ItemNumber;

	/**
	 * Auction Transaction ID. Optional Character length and
	 * limitations: 255 single-byte characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $AuctionTransactionId;

	/**
	 * Ebay Order ID. Optional Character length and limitations: 64
	 * single-byte characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $OrderId;

	/**
	 * Ebay Cart ID. Optional Character length and limitations: 64
	 * single-byte characters 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $CartID;


  
 
}
