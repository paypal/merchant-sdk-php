<?php 
/**
 * Person's name associated with this address. Character length
 * and limitations: 32 single-byte alphanumeric characters 
 */
class AddressType  
   extends PPXmlMessage{

	/**
	 * Person's name associated with this address. Character length
	 * and limitations: 32 single-byte alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Name;

	/**
	 * First street address. Character length and limitations: 300
	 * single-byte alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Street1;

	/**
	 * Second street address. Character length and limitations: 300
	 * single-byte alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Street2;

	/**
	 * Name of city. Character length and limitations: 120
	 * single-byte alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $CityName;

	/**
	 * State or province. Character length and limitations: 120
	 * single-byte alphanumeric characters For Canada and the USA,
	 * StateOrProvince must be the standard 2-character
	 * abbreviation of a state or province. Canadian Provinces
	 * Alberta AB British_Columbia BC Manitoba MB New_Brunswick NB
	 * Newfoundland NF Northwest_Territories NT Nova_Scotia NS
	 * Nunavut NU Ontario ON Prince_Edward_Island PE Quebec QC
	 * Saskatchewan SK Yukon YK United States Alabama  AL Alaska AK
	 * American_Samoa AS Arizona AZ Arkansas AR California CA
	 * Colorado CO Connecticut CT Delaware DE District_Of_Columbia
	 * DC Federated_States_Of_Micronesia FM Florida FL Georgia GA
	 * Guam GU Hawaii HI Idaho ID Illinois IL Indiana IN Iowa IA
	 * Kansas KS Kentucky KY Louisiana LA Maine ME Marshall_Islands
	 * MH Maryland MD Massachusetts MA Michigan MI Minnesota MN
	 * Mississippi MS Missouri MO Montana MT Nebraska NE Nevada NV
	 * New_Hampshire NH New_Jersey NJ New_Mexico NM New_York NY
	 * North_Carolina NC North_Dakota ND Northern_Mariana_Islands
	 * MP Ohio OH Oklahoma OK Oregon OR Palau PW Pennsylvania PA
	 * Puerto_Rico PR Rhode_Island RI South_Carolina SC
	 * South_Dakota SD Tennessee TN Texas TX Utah UT Vermont VT
	 * Virgin_Islands VI Virginia VA Washington WA West_Virginia WV
	 * Wisconsin WI Wyoming WY Armed_Forces_Americas AA
	 * Armed_Forces AE Armed_Forces_Pacific AP 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $StateOrProvince;

	/**
	 * ISO 3166 standard country code Character limit: Two
	 * single-byte characters. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Country;

	/**
	 * IMPORTANT: Do not set this element for SetExpressCheckout,
	 * DoExpressCheckoutPayment, DoDirectPayment,
	 * CreateRecurringPaymentsProfile or
	 * UpdateRecurringPaymentsProfile.  This element should only be
	 * used in response elements and typically  should not be used
	 * in creating request messages which specify the name of a
	 * country using the Country element (which refers to a 
	 * 2-letter country code). 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $CountryName;

	/**
	 * Telephone number associated with this address
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Phone;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $PostalCode;

	/**
	 * IMPORTANT: Do not set this element for SetExpressCheckout,
	 * DoExpressCheckoutPayment, DoDirectPayment,
	 * CreateRecurringPaymentsProfile, or
	 * UpdateRecurringPaymentsProfile.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $AddressID;

	/**
	 * IMPORTANT: Do not set this element for SetExpressCheckout,
	 * DoExpressCheckoutPayment, DoDirectPayment,
	 * CreateRecurringPaymentsProfile or
	 * UpdateRecurringPaymentsProfile.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $AddressOwner;

	/**
	 * IMPORTANT: Do not set this element for SetExpressCheckout,
	 * DoExpressCheckoutPayment, DoDirectPayment,
	 * CreateRecurringPaymentsProfile or
	 * UpdateRecurringPaymentsProfile.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ExternalAddressID;

	/**
	 * IMPORTANT: Do not set this element for SetExpressCheckout,
	 * DoExpressCheckoutPayment, DoDirectPayment,
	 * CreateRecurringPaymentsProfile or
	 * UpdateRecurringPaymentsProfile.  Only applicable to
	 * SellerPaymentAddress today. Seller's international name that
	 * is associated with the payment address. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $InternationalName;

	/**
	 * IMPORTANT: Do not set this element for SetExpressCheckout,
	 * DoExpressCheckoutPayment, DoDirectPayment,
	 * CreateRecurringPaymentsProfile or
	 * UpdateRecurringPaymentsProfile. Only applicable to
	 * SellerPaymentAddress today. International state and city for
	 * the seller's payment address. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $InternationalStateAndCity;

	/**
	 * IMPORTANT: Do not set this element for SetExpressCheckout,
	 * DoExpressCheckoutPayment, DoDirectPayment,
	 * CreateRecurringPaymentsProfile or
	 * UpdateRecurringPaymentsProfile. Only applicable to
	 * SellerPaymentAddress today. Seller's international street
	 * address that is associated with the payment address. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $InternationalStreet;

	/**
	 * Status of the address on file with PayPal. IMPORTANT: Do not
	 * set this element for SetExpressCheckout,
	 * DoExpressCheckoutPayment, DoDirectPayment,
	 * CreateRecurringPaymentsProfile or
	 * UpdateRecurringPaymentsProfile. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $AddressStatus;

	/**
	 * Returns Normalization Status of the Address. Possible values
	 * are Normalized, Unnormalized, and None. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $AddressNormalizationStatus;


  
 
}
