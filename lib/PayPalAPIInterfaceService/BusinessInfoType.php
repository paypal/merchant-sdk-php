<?php 
/**
 * BusinessInfoType 
 */
class BusinessInfoType  
   extends PPXmlMessage{

	/**
	 * Type of business, such as corporation or sole proprietorship
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Type;

	/**
	 * Official name of business Character length and limitations:
	 * 75 alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Name;

	/**
	 * Merchantâs business postal address
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var AddressType 	 
	 */ 
	public $Address;

	/**
	 * Businessâs primary telephone number Character length and
	 * limitations: 20 alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $WorkPhone;

	/**
	 * Line of business, as defined in the enumerations
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Category;

	/**
	 * Business sub-category, as defined in the enumerations
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $SubCategory;

	/**
	 * Average transaction price, as defined by the enumerations.
	 * Enumeration Meaning AverageTransactionPrice-Not-Applicable
	 * AverageTransactionPrice-Range1 Less than $25 USD
	 * AverageTransactionPrice-Range2 $25 USD to $50 USD
	 * AverageTransactionPrice-Range3 $50 USD to $100 USD
	 * AverageTransactionPrice-Range4 $100 USD to $250 USD
	 * AverageTransactionPrice-Range5 $250 USD to $500 USD
	 * AverageTransactionPrice-Range6 $500 USD to $1,000 USD
	 * AverageTransactionPrice-Range7 $1,000 USD to $2,000 USD
	 * AverageTransactionPrice-Range8 $2,000 USD to $5,000 USD
	 * AverageTransactionPrice-Range9 $5,000 USD to $10,000 USD
	 * AverageTransactionPrice-Range10 More than $10,000 USD 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $AveragePrice;

	/**
	 * Average monthly sales volume, as defined by the
	 * enumerations. Enumeration Meaning
	 * AverageMonthlyVolume-Not-Applicable
	 * AverageMonthlyVolume-Range1 Less than $1,000 USD
	 * AverageMonthlyVolume-Range2 $1,000 USD to $5,000 USD
	 * AverageMonthlyVolume-Range3 $5,000 USD to $25,000 USD
	 * AverageMonthlyVolume-Range4 $25,000 USD to $100,000 USD
	 * AverageMonthlyVolume-Range5 $100,000 USD to $1,000,000 USD
	 * AverageMonthlyVolume-Range6 More than $1,000,000 USD 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $AverageMonthlyVolume;

	/**
	 * Main sales venue, such as eBay
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $SalesVenue;

	/**
	 * Primary URL of business Character length and limitations:
	 * 2,048 alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Website;

	/**
	 * Percentage of revenue attributable to online sales, as
	 * defined by the enumerations Enumeration Meaning
	 * PercentageRevenueFromOnlineSales-Not-Applicable
	 * PercentageRevenueFromOnlineSales-Range1 Less than 25%
	 * PercentageRevenueFromOnlineSales-Range2 25% to 50%
	 * PercentageRevenueFromOnlineSales-Range3 50% to 75%
	 * PercentageRevenueFromOnlineSales-Range4 75% to 100% 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $RevenueFromOnlineSales;

	/**
	 * Date the merchantâs business was established
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var dateTime 	 
	 */ 
	public $BusinessEstablished;

	/**
	 * Email address to contact businessâs customer service
	 * Character length and limitations: 127 alphanumeric
	 * characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $CustomerServiceEmail;

	/**
	 * Telephone number to contact businessâs customer service
	 * Character length and limitations: 32 alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $CustomerServicePhone;


  
 
}
