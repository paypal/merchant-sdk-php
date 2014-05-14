<?php 
/**
 * @hasAttribute
 * AuctionInfoType Basic information about an auction. 
 */
class AuctionInfoType  
   extends PPXmlMessage{

	/**
	 * Customer's auction ID 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $BuyerID;

	/**
	 * Auction's close date 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var dateTime 	 
	 */ 
	public $ClosingDate;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 
	 * @attribute 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $multiItem;


}
