<?php 
/**
 * OffersAndCouponsInfoType Information about a Offers and
 * Coupons. 
 */
class OfferCouponInfoType  
   extends PPXmlMessage{

	/**
	 * Type of the incentive 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Type;

	/**
	 * ID of the Incentive used in transaction
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ID;

	/**
	 * Amount used on transaction
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Amount;

	/**
	 * Amount Currency
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $AmountCurrency;


}
