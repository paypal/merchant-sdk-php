<?php
 /**
 * Stub objects for PayPalAPIInterfaceService 
 * Auto generated code 
 * 
 */
/**
 * AmountType
 */
class AmountType {
	/**
	 * @access public
	 * @var CurrencyCodeType
	 */
	public $currencyID;

	/**
	 * @access public
	 * @var double
	 */
	public $value;

}

/**
 * BasicAmountType
On requests, you must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. 
 * Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
 */
class BasicAmountType {
	/**
	 * @access public
	 * @var CurrencyCodeType
	 */
	public $currencyID;

	/**
	 * @access public
	 * @var string
	 */
	public $value;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='currencyid') {
				$this->currencyID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='value') {
				$this->value = $arry["text"];
			}
		}
		}
	}

	public function __construct($currencyID = null, $value = null) {
		$this->currencyID  = $currencyID;
		$this->value  = $value;
	}

	public function toXMLString()  {
		$str = '';
		if($this->currencyID != null ) {
			$str .= '	currencyID="'.$this->currencyID.'">';
		 }
		if($this->value != null ) {
			$str .=$this->value;
		 }

		return $str;
	}

}

/**
 * MeasureType
 */
class MeasureType {
	/**
	 * @access public
	 * @var token
	 */
	public $unit;

	/**
	 * @access public
	 * @var double
	 */
	public $value;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='unit') {
				$this->unit = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='value') {
				$this->value = $arry["text"];
			}
		}
		}
	}

	public function __construct($unit = null, $value = null) {
		$this->unit  = $unit;
		$this->value  = $value;
	}

	public function toXMLString()  {
		$str = '';
		if($this->unit != null ) {
			$str .= '<cc:unit>'.$this->unit.'</cc:unit>';
		 }
		if($this->value != null ) {
			$str .=$this->value;
		 }

		return $str;
	}

}

/**
 * QuantityType
 */
class QuantityType {
	/**
	 * @access public
	 * @var token
	 */
	public $unit;

	/**
	 * @access public
	 * @var double
	 */
	public $value;

}

/**
 * AccountEntryType
 * Balance as of a given entry, can be 0.00.
 */
class AccountEntryType {
	/**
	 * Balance as of a given entry, can be 0.00.
	 *
	 * @access public
	 * @var AmountType
	 */
	public $Balance;

	/**
	 * Credit Amount for a detail entry, can be 0.00. 
	 *
	 * @access public
	 * @var AmountType
	 */
	public $Credit;

	/**
	 * Date entry was posted, in GMT. 
	 *
	 * @access public
	 * @var dateTime
	 */
	public $Date;

	/**
	 * Debit Amount for this detail entry, can be 0.00.      
	 *
	 * @access public
	 * @var AmountType
	 */
	public $Debit;

	/**
	 * Item number if transaction is associated with an auction or 0 
	 * if no item is associated with an account entry.      
	 *
	 * @access public
	 * @var ItemIDType
	 */
	public $ItemID;

	/**
	 * Memo line for an account entry, can be empty string.
	 *
	 * @access public
	 * @var string
	 */
	public $Memo;

	/**
	 * eBay reference number for an account entry.    
	 *
	 * @access public
	 * @var int
	 */
	public $RefNumber;

	/**
	 * Integer code for account details entry type. This element
	 * element specifies an index to a table of explanations for 
	 * accounting charges. 
	 *
	 * @access public
	 * @var int
	 */
	public $AccountEntryDetailsType;

}

/**
 * AdditionalAccountType
 * The AdditionalAccount component represents historical data related to 
 * accounts that the user held with a country of residency other than 
 * the current one. eBay users can have one active account at a time. 
 * For users who change their country of residency and modify their 
 * eBay registration to reflect this change, the new country of residence 
 * becomes the currently active account. Any account associated with 
 * a previous country is treated as an additional account. Because the 
 * currency for these additional accounts are different than the active 
 * account, each additional account includes an indicator of the currency 
 * for that account. Users who never change their country of residence 
 * will not have any additional accounts.
 */
class AdditionalAccountType {
	/**
	 * @access public
	 * @var AmountType
	 */
	public $Balance;

	/**
	 * @access public
	 * @var CurrencyCodeType
	 */
	public $Currency;

	/**
	 * @access public
	 * @var string
	 */
	public $AccountCode;

}

/**
 * PromotedItemType
 * Merchandizing info for an Item. This contains a list of crosssell
 * or upsell items.
 */
class PromotedItemType {
	/**
	 * Item ID for the base item. Based on this item other items are 
	 * promoted. it is teh only tag that would show up in all calls that use promoted item type. 
	 * some are not in soap yet, such as get and ser promotion rules
	 *
	 * @access public
	 * @var string
	 */
	public $ItemID;

	/**
	 * URL for the picture of the promoted item.           
	 *
	 * @access public
	 * @var string
	 */
	public $PictureURL;

	/**
	 * Where to display in the list of items.currentl y even forget and set does not have to be minoccur =0 
	 * but if we ever were to do revise promotion tems, it can be omitted
	 *
	 * @access public
	 * @var int
	 */
	public $position;

	/**
	 * Promotion Price. Price at which the buyer can buy the item now.
	 *
	 * @access public
	 * @var AmountType
	 */
	public $PromotionPrice;

	/**
	 * @access public
	 * @var PromotionItemPriceTypeCodeType
	 */
	public $PromotionPriceType;

	/**
	 * @access public
	 * @var PromotionItemSelectionCodeType
	 */
	public $SelectionType;

	/**
	 * Item Title for the promoted item.           
	 *
	 * @access public
	 * @var string
	 */
	public $Title;

	/**
	 * @access public
	 * @var ListingTypeCodeType
	 */
	public $ListingType;

}

/**
 * CrossPromotionsType
 * Merchandizing info for an Item. This contains a list of crosssell
 * or upsell items.
 * PrimaryScheme, PromotionMethod,SellerId,ItemId, ShippingDiscount
 * do not have be min occur 0
 */
class CrossPromotionsType {
	/**
	 * Item ID for the base item. Based on this item other items are 
	 * promoted.
	 *
	 * @access public
	 * @var string
	 */
	public $ItemID;

	/**
	 * @access public
	 * @var PromotionSchemeCodeType
	 */
	public $PrimaryScheme;

	/**
	 * @access public
	 * @var PromotionMethodCodeType
	 */
	public $PromotionMethod;

	/**
	 * Id of the Seller who is promoting this item.           
	 *
	 * @access public
	 * @var string
	 */
	public $SellerID;

	/**
	 * Shipping Discount offered or not by the seller.
	 *
	 * @access public
	 * @var boolean
	 */
	public $ShippingDiscount;

	/**
	 * Key of the Seller who is promoting this item.           
	 *
	 * @access public
	 * @var string
	 */
	public $SellerKey;

	/**
	 * Store Name for the seller.
	 *
	 * @access public
	 * @var string
	 */
	public $StoreName;

	/**
	 * array
	 * @access public
	 * @var PromotedItemType
	 */
	public $PromotedItem;

}

/**
 * AccountSummaryType
 * Includes account summary for the user. 
 */
class AccountSummaryType {
	/**
	 * @access public
	 * @var AccountStateCodeType
	 */
	public $AccountState;

	/**
	 * array
	 * @access public
	 * @var AdditionalAccountType
	 */
	public $AdditionalAccount;

	/**
	 * Number of additional accounts.
	 *
	 * @access public
	 * @var int
	 */
	public $AdditionalAccountsCount;

	/**
	 * Amount past due, 0.00 if not past due. 
	 *
	 * @access public
	 * @var AmountType
	 */
	public $AmountPastDue;

	/**
	 * First four digits (with remainder Xed-out). This may be an empty 
	 * string depending upon the value of the payment type for the 
	 * user account (e.g, if no debit-card specified).
	 *
	 * @access public
	 * @var string
	 */
	public $BankAccountInfo;

	/**
	 * Last time/day BankAccountInfo and/or BankRoutingInfo was 
	 * modified, in GMT. This may be an empty string depending 
	 * upon the value of the payment type for the user account 
	 * (e.g, if no debit-card specified).
	 *
	 * @access public
	 * @var dateTime
	 */
	public $BankModifyDate;

	/**
	 * Indicates the billing cycle in which eBay sends a billing 
	 * invoice to the specified user. Possible values:
	 * 0 = On the last day of the month.
	 * 15 = On the 15th day of the month. 
	 *
	 * @access public
	 * @var dateTime
	 */
	public $BillingCycleDate;

	/**
	 * Expiration date for the credit card selected as payment method, 
	 * in GMT. Empty string if no credit card is on file or if account is
	 * inactive -- even if there is a credit card on file.
	 *
	 * @access public
	 * @var dateTime
	 */
	public $CCExp;

	/**
	 * Last four digits of user's credit card selected as payment
	 * type. Empty string if no credit is on file. This may be an empty 
	 * string depending upon the value of the payment type for the 
	 * user account (e.g, if no debit-card specified).
	 *
	 * @access public
	 * @var string
	 */
	public $CCInfo;

	/**
	 * Last date credit card or credit card expiration date was 
	 * modified, in GMT. This may be an empty string depending 
	 * upon the value of the payment type for the user account 
	 * (e.g, Empty string if no credit card is on file.
	 *
	 * @access public
	 * @var dateTime
	 */
	public $CCModifyDate;

	/**
	 * User's current balance. Can be 0.00, positive, or negative. 
	 *
	 * @access public
	 * @var AmountType
	 */
	public $CurrentBalance;

	/**
	 * Amount of last payment posted, 0.00 if no payments posted. 
	 *
	 * @access public
	 * @var AmountType
	 */
	public $LastAmountPaid;

	/**
	 * Amount of last invoice. 0.00 if account not yet invoiced. 
	 *
	 * @access public
	 * @var AmountType
	 */
	public $LastInvoiceAmount;

	/**
	 * Date of last invoice sent by eBay to the user, in GMT. 
	 * Empty string if this account has not been invoiced yet. 
	 *
	 * @access public
	 * @var dateTime
	 */
	public $LastInvoiceDate;

	/**
	 * Date of last payment by specified user to eBay, in GMT. 
	 * Empty string if no payments posted. 
	 *
	 * @access public
	 * @var dateTime
	 */
	public $LastPaymentDate;

	/**
	 * Indicates whether the account has past due amounts 
	 * outstanding. Possible values:
	 * true = Account is past due.
	 * false = Account is current. 
	 *
	 * @access public
	 * @var boolean
	 */
	public $PastDue;

	/**
	 * Indicates the method the specified user selected for paying 
	 * eBay. The values for PaymentType vary for each SiteID. 
	 *
	 * @access public
	 * @var SellerPaymentMethodCodeType
	 */
	public $PaymentMethod;

}

/**
 * BuyerType
 * Information about user used by buying applications
 */
class BuyerType {
	/**
	 * @access public
	 * @var AddressType
	 */
	public $ShippingAddress;

}

/**
 * SellerType
 * Information about user used by selling applications
 * there are number of required elements - they will always show up for seller node
 * there is not such a call to do revise seller info. only added minoccur=0 to elements that will not show up in every 
 * type of request/responce
 */
class SellerType {
	/**
	 * @access public
	 * @var boolean
	 */
	public $AllowPaymentEdit;

	/**
	 * @access public
	 * @var CurrencyCodeType
	 */
	public $BillingCurrency;

	/**
	 * @access public
	 * @var boolean
	 */
	public $CheckoutEnabled;

	/**
	 * @access public
	 * @var boolean
	 */
	public $CIPBankAccountStored;

	/**
	 * @access public
	 * @var boolean
	 */
	public $GoodStanding;

	/**
	 * @access public
	 * @var boolean
	 */
	public $LiveAuctionAuthorized;

	/**
	 * Indicates whether the user has elected to participate 
	 * as a seller in the Merchandising Manager feature. 
	 *
	 * @access public
	 * @var MerchandizingPrefCodeType
	 */
	public $MerchandizingPref;

	/**
	 * @access public
	 * @var boolean
	 */
	public $QualifiesForB2BVAT;

	/**
	 * @access public
	 * @var SellerLevelCodeType
	 */
	public $SellerLevel;

	/**
	 * @access public
	 * @var AddressType
	 */
	public $SellerPaymentAddress;

	/**
	 * @access public
	 * @var SchedulingInfoType
	 */
	public $SchedulingInfo;

	/**
	 * @access public
	 * @var boolean
	 */
	public $StoreOwner;

	/**
	 * @access public
	 * @var anyURI
	 */
	public $StoreURL;

}

/**
 * FeeType
 * Definition of an eBay Fee type.
 */
class FeeType {
	/**
	 * @access public
	 * @var string
	 */
	public $Name;

	/**
	 * @access public
	 * @var AmountType
	 */
	public $Fee;

}

/**
 * FeesType
 * Following are the current set of eBay fee types
 * AuctionLengthFee
 * BoldFee
 * BuyItNowFee
 * CategoryFeaturedFee
 * FeaturedFee
 * FeaturedGalleryFee
 * FixedPriceDurationFee
 * GalleryFee
 * GiftIconFee
 * HighLightFee
 * InsertionFee
 * ListingDesignerFee
 * ListingFee
 * PhotoDisplayFee
 * PhotoFee
 * ReserveFee
 * SchedulingFee
 * ThirtyDaysAucFee
 * Instances of this type could hold one or more supported types of fee.
 */
class FeesType {
	/**
	 * array
	 * @access public
	 * @var FeeType
	 */
	public $Fee;

}

/**
 * ShippingCarrierDetailsType
 * Calculated cost of shipping, based on shipping parameters and 
 * selected shipping service. Only returned if ShippingType = 2
 * (i.e., calculated shipping rate).
 */
class ShippingCarrierDetailsType {
	/**
	 * Calculated cost of shipping, based on shipping parameters and 
	 * selected shipping service. Only returned if ShippingType = 2
	 * (i.e., calculated shipping rate).
	 *
	 * @access public
	 * @var AmountType
	 */
	public $CarrierShippingFee;

	/**
	 * @access public
	 * @var AmountType
	 */
	public $InsuranceFee;

	/**
	 * @access public
	 * @var InsuranceOptionCodeType
	 */
	public $InsuranceOption;

	/**
	 * Optional fees a seller might assess for the shipping of the item. 
	 *
	 * @access public
	 * @var AmountType
	 */
	public $PackagingHandlingCosts;

	/**
	 * Describes any error message associated with the attempt 
	 * to calculate shipping rates. If there was no error, returns 
	 * "No Error" (without the quotation marks).
	 *
	 * @access public
	 * @var string
	 */
	public $ShippingRateErrorMessage;

	/**
	 * is unique identified of shipping carrier, without this element the whole node makes no sence
	 *
	 * @access public
	 * @var ShippingServiceCodeType
	 */
	public $ShippingService;

}

/**
 * CalculatedShippingRateType
 * Potal/zip code from where package will be shipped.
 */
class CalculatedShippingRateType {
	/**
	 * Potal/zip code from where package will be shipped.
	 *
	 * @access public
	 * @var string
	 */
	public $OriginatingPostalCode;

	/**
	 * Indicates an item that cannot go through the stamping machine 
	 * at the shipping service office (a value of True) and requires 
	 * special or fragile handling. Only returned if ShippingType = 2. 
	 *
	 * @access public
	 * @var boolean
	 */
	public $ShippingIrregular;

	/**
	 * contains information about shipping fees per each shipping service chosen by the seller
	 *
	 * array
	 * @access public
	 * @var ShippingCarrierDetailsType
	 */
	public $CarrierDetails;

	/**
	 * May need to be moved into details - wait for George! The size of the package to be shipped. Possible values are:
	 * None
	 * Letter
	 * Large envelope
	 * USPS flat rate envelope
	 * Package/thick envelope
	 * USPS large package/oversize 1
	 * Very large package/oversize 2
	 * UPS Letter
	 *
	 * @access public
	 * @var ShippingPackageCodeType
	 */
	public $ShippingPackage;

	/**
	 * Shipping weight unit of measure (major). If unit of weight is kilogram 
	 * (i.e., metric system) this would be the exact weight value in kilogram 
	 * (i.e., complete decimal number, e.g., 2.23 kg). Only returned if 
	 * ShippingType is 2. 
	 *
	 * @access public
	 * @var MeasureType
	 */
	public $WeightMajor;

	/**
	 * Shipping weight unit of measure (minor). If unit of weight is  in pounds and/or
	 * ounces, this would be the exact weight value in ounces (i.e., complete 
	 * decimal number, e.g., 8.2 or 8.0 ounces). Only returned if ShippingType is 2. 
	 *
	 * @access public
	 * @var MeasureType
	 */
	public $WeightMinor;

}

/**
 * FlatShippingRateType
 * Any additional shipping costs for the item. 
 */
class FlatShippingRateType {
	/**
	 * Any additional shipping costs for the item. 
	 *
	 * @access public
	 * @var AmountType
	 */
	public $AdditionalShippingCosts;

	/**
	 * @access public
	 * @var AmountType
	 */
	public $FlatShippingHandlingCosts;

	/**
	 * @access public
	 * @var AmountType
	 */
	public $InsuranceFee;

	/**
	 * @access public
	 * @var InsuranceOptionCodeType
	 */
	public $InsuranceOption;

	/**
	 * @access public
	 * @var ShippingServiceCodeType
	 */
	public $ShippingService;

}

/**
 * SalesTaxType
 * Amount of the sales tax to be collected for the transaction. 
 * Sales tax is only for US. 
 */
class SalesTaxType {
	/**
	 * Amount of the sales tax to be collected for the transaction. 
	 * Sales tax is only for US. 
	 *
	 * @access public
	 * @var float
	 */
	public $SalesTaxPercent;

	/**
	 * Sales tax for the transaction, expressed as a percentage. Should 
	 * be empty for items listed on international sites (hence, this is 
	 * US-only element).
	 *
	 * @access public
	 * @var string
	 */
	public $SalesTaxState;

	/**
	 * Indicates whether shipping is included in the tax. Applicable if 
	 * ShippingType = 1 or 2. This element is used for US-only.
	 *
	 * @access public
	 * @var boolean
	 */
	public $ShippingIncludedInTax;

}

/**
 * ShippingDetailsType
 * Specifies the shipping payment details.
 */
class ShippingDetailsType {
	/**
	 * Indicates whether the buyer edited the payment amount. 
	 *
	 * @access public
	 * @var boolean
	 */
	public $AllowPaymentEdit;

	/**
	 * Calculated shipping rate details.  If present, then the calculated shipping rate option was used. 
	 *
	 * @access public
	 * @var CalculatedShippingRateType
	 */
	public $CalculatedShippingRate;

	/**
	 * Indicates whether the payment instructions are included (e.g., for updating the
	 * details of a transaction).
	 *
	 * @access public
	 * @var boolean
	 */
	public $ChangePaymentInstructions;

	/**
	 * Flat shipping rate details. If present, then the flat shipping rate option was used. 
	 *
	 * array
	 * @access public
	 * @var FlatShippingRateType
	 */
	public $FlatShippingRate;

	/**
	 * Total cost of insurance for the transaction.
	 *
	 * @access public
	 * @var AmountType
	 */
	public $InsuranceTotal;

	/**
	 * Indicates whether buyer selected to have insurance. 
	 *
	 * @access public
	 * @var boolean
	 */
	public $InsuranceWanted;

	/**
	 * Payment instuctions.   
	 *
	 * @access public
	 * @var string
	 */
	public $PaymentInstructions;

	/**
	 * Sales tax details. Sales tax applicable for only US sites.
	 * For non-US sites this sub-element should not be used.
	 *
	 * @access public
	 * @var SalesTaxType
	 */
	public $SalesTax;

	/**
	 * Postal/Zip code from where the seller will ship the item.
	 *
	 * @access public
	 * @var string
	 */
	public $SellerPostalCode;

}

/**
 * SiteHostedPictureType
 * URLs for item picture that are stored/hosted at eBay site.
 */
class SiteHostedPictureType {
	/**
	 * URLs for item picture that are stored/hosted at eBay site.
	 *
	 * array
	 * @access public
	 * @var anyURI
	 */
	public $PictureURL;

	/**
	 * Type of display for photos used for PhotoHosting slide show. 
	 * Here are display options:
	 * None = No special Picture Services features.
	 * SlideShow = Slideshow of multiple pictures.
	 * SuperSize = Super-size format picture.
	 * PicturePack = Picture Pack.
	 * Default is 'None'. 
	 *
	 * @access public
	 * @var PhotoDisplayCodeType
	 */
	public $PhotoDisplay;

	/**
	 * This will be either "Featured" or "Gallery".
	 *
	 * @access public
	 * @var GalleryTypeCodeType
	 */
	public $GalleryType;

}

/**
 * VendorHostedPictureType
 * URLs for item picture that are stored/hosted at eBay site.
 */
class VendorHostedPictureType {
	/**
	 * URLs for item picture that are stored/hosted at eBay site.
	 *
	 * @access public
	 * @var anyURI
	 */
	public $PictureURL;

	/**
	 * URL for a picture for the gallery. If the GalleryFeatured 
	 * argument is true, a value must be supplied for either 
	 * the GalleryURL or the PictureURL argument. 
	 * In either case:
	 * (a) If a URL is provided for only PictureURL, it is used 
	 * as the Gallery thumbnail. 
	 * (b) If a URL is provided for both GalleryURL and 
	 * PictureURL, then the picture indicated in GalleryURL 
	 * is used as the thumbnail. 
	 * The image used for the Gallery thumbnail (specified 
	 * in the GalleryURL or PictureURL argument) must be 
	 * in one of the graphics formats JPEG, BMP, TIF, or GIF. 
	 *
	 * @access public
	 * @var anyURI
	 */
	public $GalleryURL;

	/**
	 * This will be either "Featured" or "Gallery".
	 *
	 * @access public
	 * @var GalleryTypeCodeType
	 */
	public $GalleryType;

}

/**
 * ValType
 */
class ValType {
	/**
	 * @access public
	 * @var string
	 */
	public $ValueLiteral;

}

/**
 * AttributeType
 * Specific physical attribute of an item.
 */
class AttributeType {
	/**
	 * ValueList of the Attribute being described by the AttributeID.
	 *
	 * array
	 * @access public
	 * @var ValType
	 */
	public $Value;

}

/**
 * AttributeSetType
 * AttributeSet.
 */
class AttributeSetType {
	/**
	 * array
	 * @access public
	 * @var AttributeType
	 */
	public $Attribute;

}

/**
 * ListOfAttributeSetType
 */
class ListOfAttributeSetType {
	/**
	 * array
	 * @access public
	 * @var AttributeSetType
	 */
	public $AttributeSet;

}

/**
 * CategoryType
 * Container for data on the primary category of listing.
 */
class CategoryType {
	/**
	 * @access public
	 * @var boolean
	 */
	public $AutoPayEnabled;

	/**
	 * @access public
	 * @var boolean
	 */
	public $B2BVATEnabled;

	/**
	 * @access public
	 * @var boolean
	 */
	public $CatalogEnabled;

	/**
	 * @access public
	 * @var string
	 */
	public $CategoryID;

	/**
	 * @access public
	 * @var int
	 */
	public $CategoryLevel;

	/**
	 * @access public
	 * @var string
	 */
	public $CategoryName;

	/**
	 * array
	 * @access public
	 * @var string
	 */
	public $CategoryParentID;

	/**
	 * array
	 * @access public
	 * @var string
	 */
	public $CategoryParentName;

	/**
	 * CSIDList is not present if Attributes enabled.
	 *
	 * array
	 * @access public
	 * @var string
	 */
	public $CSIDList;

	/**
	 * @access public
	 * @var boolean
	 */
	public $Expired;

	/**
	 * @access public
	 * @var boolean
	 */
	public $IntlAutosFixedCat;

	/**
	 * @access public
	 * @var boolean
	 */
	public $LeafCategory;

	/**
	 * @access public
	 * @var boolean
	 */
	public $Virtual;

}

/**
 * StorefrontType
 * Contains the eBay Stores-specific item attributes 
 * department number and store location. StorefrontInfo 
 * is shown for any item that belongs to an eBay Store 
 * owner, regardless of whether it is fixed price or 
 * auction type. Returned as null for international 
 * fixed price items.
 */
class StorefrontType {
	/**
	 * assumed this type is specific to add/get/revise item, then each StorefrontType nust have category id, for store details this node makes no sense to use
	 *
	 * @access public
	 * @var int
	 */
	public $StoreCategoryID;

	/**
	 * in case or revise item for example - to change store category (department) you do not need to change store URL, so it will notbe in request
	 *
	 * @access public
	 * @var anyURI
	 */
	public $StoreURL;

}

/**
 * ListingDesignerType
 * Identifies the Layout and the Theme template 
 * associated with the item. in case of revision - all data can be min occur = 0
 */
class ListingDesignerType {
	/**
	 * Identifies the Layout template associated with the item.
	 *
	 * @access public
	 * @var int
	 */
	public $LayoutID;

	/**
	 * A value of true for OptimalPictureSize indicates that the picture 
	 * URL will be enlarged to fit description of the item.
	 *
	 * @access public
	 * @var boolean
	 */
	public $OptimalPictureSize;

	/**
	 * Identifies the Theme template associated with the item.
	 *
	 * @access public
	 * @var int
	 */
	public $ThemeID;

}

/**
 * CharityType
 * Contains information about a Charity listing.in case of revision - all data can be min occur = 0
 */
class CharityType {
	/**
	 * @access public
	 * @var string
	 */
	public $CharityName;

	/**
	 * @access public
	 * @var int
	 */
	public $CharityNumber;

	/**
	 * @access public
	 * @var float
	 */
	public $DonationPercent;

}

/**
 * SellingStatusType
 * Contains the listed items price details which consists of
 * following information: BuyItNowPrice, ConvertedBuyItNowPrice,
 * ConvertedPrice, ConvertedStartPrice, CurrentPrice, MinimumToBid, 
 * ReservePrice, and StartPrice.  need to take in account get seller events when defining minoccurs = 0       
 */
class SellingStatusType {
	/**
	 * Number of bids placed so far against the item. Not
	 * returned for International Fixed Price items.
	 *
	 * @access public
	 * @var int
	 */
	public $BidCount;

	/**
	 * Smallest amount a bid must be above the current high 
	 * bid. Not returned International Fixed Price items.
	 *
	 * @access public
	 * @var AmountType
	 */
	public $BidIncrement;

	/**
	 * Converted current price of listed item.
	 *
	 * @access public
	 * @var AmountType
	 */
	public $ConvertedCurrentPrice;

	/**
	 * For auction-format listings, current minimum asking price 
	 * or the current highest bid for the item if bids have been 
	 * placed. Shows minimum bid if no bids have been placed 
	 * against the item. This field does not reflect the actual current 
	 * price of the item if it's a Type=7 or Type=9 (Fixed Price) 
	 * item and the price has been revised. (See StartPrice for 
	 * revised asking price.) 
	 *
	 * @access public
	 * @var AmountType
	 */
	public $CurrentPrice;

	/**
	 * Contains one User node representing the current high 
	 * bidder. GetItem returns a high bidder for auctions that have 
	 * ended and have a winning bidder. For Fixed Price listings, 
	 * in-progress auctions, or auction items that received no 
	 * bids, GetItem returns a HighBidder node with empty tags. 
	 *
	 * @access public
	 * @var UserType
	 */
	public $HighBidder;

	/**
	 * Applicable to ad-format items only. Indicates how many 
	 * leads to potential buyers are associated with this item. 
	 * For other item types (other than ad-format items), returns
	 * a value of 0 (zero).
	 *
	 * @access public
	 * @var int
	 */
	public $LeadCount;

	/**
	 * Minimum acceptable bid for the item. Not returned for 
	 * International Fixed Price items.     
	 *
	 * @access public
	 * @var AmountType
	 */
	public $MinimumToBid;

	/**
	 * Number of items purchased so far. (Subtract from the value
	 * returned in the Quantity field to calculate the number of items
	 * remaining.)
	 *
	 * @access public
	 * @var int
	 */
	public $QuantitySold;

	/**
	 * Returns true if the reserve price was met or no reserve
	 * price was specified.  
	 *
	 * @access public
	 * @var boolean
	 */
	public $ReserveMet;

	/**
	 * @access public
	 * @var boolean
	 */
	public $SecondChanceEligible;

}

/**
 * ReviseStatusType
 * Contains the revise status information details (e.g., item properties 
 * information). ths node contains system set data only - always output and always all data. no minccurs needed,
 * except for motors specific data, since it wil lnot be retruned for non motors items
 */
class ReviseStatusType {
	/**
	 * Indicates whether the item was revised since the auction started. 
	 *
	 * @access public
	 * @var boolean
	 */
	public $ItemRevised;

	/**
	 * If true, indicates that a Buy It Now Price was added for
	 * the item. Only returned for Motors items.
	 *
	 * @access public
	 * @var boolean
	 */
	public $BuyItNowAdded;

	/**
	 * Replaces BinLowered as of API version 305. If true,
	 * indicates that the Buy It Now Price was lowered for the
	 * item. Only returned for Motors items. 
	 *
	 * @access public
	 * @var boolean
	 */
	public $BuyItNowLowered;

	/**
	 * If true, indicates that the Reserve Price was lowered for
	 * the item. Only returned for Motors items.
	 *
	 * @access public
	 * @var boolean
	 */
	public $ReserveLowered;

	/**
	 * If true, indicates that the Reserve Price was removed
	 * from the item. Only returned for eBay Motors items.
	 *
	 * @access public
	 * @var boolean
	 */
	public $ReserveRemoved;

}

/**
 * ListingDetailsType
 * Contains the listed item details which consists of following information: .         
 */
class ListingDetailsType {
	/**
	 *
	 * @access public
	 * @var boolean
	 */
	public $Adult;

	/**
	 *
	 * @access public
	 * @var boolean
	 */
	public $BindingAuction;

	/**
	 *
	 * @access public
	 * @var boolean
	 */
	public $CheckoutEnabled;

	/**
	 * Converted value of the BuyItNowPrice in the currency 
	 * indicated by SiteCurrency. This value must be refreshed 
	 * every 24 hours to pick up the current conversion rates.
	 *
	 * @access public
	 * @var AmountType
	 */
	public $ConvertedBuyItNowPrice;

	/**
	 * Converted value of the StartPrice field in the currency 
	 * indicated by SiteCurrency. This value must be refreshed 
	 * every 24 hours to pick up the current conversion rates.
	 *
	 * @access public
	 * @var AmountType
	 */
	public $ConvertedStartPrice;

	/**
	 * Indicates the converted reserve price for a reserve auction. Returned 
	 * only if DetailLevel = 4. ReservePrice is only returned for auctions with 
	 * a reserve price where the user calling GetItem is the item's seller. 
	 * Returned as null for International Fixed Price items. For more information 
	 * on reserve price auctions, see http://pages.ebay.com/help/basics/f-format.html#1. 
	 *
	 * @access public
	 * @var AmountType
	 */
	public $ConvertedReservePrice;

	/**
	 *
	 * @access public
	 * @var boolean
	 */
	public $HasReservePrice;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $RegionName;

	/**
	 * Indicates the new ItemID for a relisted item. When an item is 
	 * relisted, the old (expired) listing is annotated with the new 
	 * (relist) ItemID. This field only appears when the old listing is 
	 * retrieved.
	 *
	 * @access public
	 * @var string
	 */
	public $RelistedItemID;

	/**
	 * The ItemID for the original listing (i.e., OriginalItemID specific 
	 * to Second Chance Offer items). 
	 *
	 * @access public
	 * @var string
	 */
	public $SecondChanceOriginalItemID;

	/**
	 * Time stamp for the start of the listing (in GMT). For regular items, 
	 * StartTime is not sent in at listing time.
	 *
	 * @access public
	 * @var dateTime
	 */
	public $StartTime;

	/**
	 * Time stamp for the end of the listing (in GMT).
	 *
	 * @access public
	 * @var dateTime
	 */
	public $EndTime;

	/**
	 *
	 * @access public
	 * @var anyURI
	 */
	public $ViewItemURL;

}

/**
 * ItemType
 * Returns custom, application-specific data associated 
 * with the item. The data in this field is stored with the item 
 * in the items table at eBay, but is not used in any way by 
 * eBay. Use ApplicationData to store such special information 
 * as a part or SKU number. Maximum 32 characters in length.
 */
class ItemType {
	/**
	 * Returns custom, application-specific data associated 
	 * with the item. The data in this field is stored with the item 
	 * in the items table at eBay, but is not used in any way by 
	 * eBay. Use ApplicationData to store such special information 
	 * as a part or SKU number. Maximum 32 characters in length.
	 *
	 * @access public
	 * @var string
	 */
	public $ApplicationData;

	/**
	 * Carries one or more instances of the AttributeSet in a list.
	 *
	 * @access public
	 * @var ListOfAttributeSetType
	 */
	public $ListOfAttributeSets;

	/**
	 * If true (1), indicates that the seller requested immediate 
	 * payment for the item. False (0) if immediate payment was 
	 * not requested. (Does not indicate whether the item is 
	 * still a candidate for puchase via immediate payment.) 
	 * Only applicable for items listed on US and UK sites in 
	 * categories that support immediate payment, when seller 
	 * has a Premier or Business PayPal account.
	 *
	 * @access public
	 * @var boolean
	 */
	public $AutoPay;

	/**
	 * Indicates the status of the item's eligibility for the Buyer 
	 * Protection Program. Possible values:
	 * ItemIneligible - Item is ineligible (e.g., category not applicable)
	 * ItemEligible - Item is eligible per standard criteria 
	 * ItemMarkedIneligible - Item marked ineligible per special criteria (e.g., seller's account closed)
	 * ItemMarkedIneligible - Item marked elegible per other criteria
	 * Applicable for items listed to the US site and for the Parts 
	 * and Accessories category (6028) or Everything Else category 
	 * (10368) (or their subcategories) on the eBay Motors site.
	 *
	 * @access public
	 * @var BuyerProtectionCodeType
	 */
	public $BuyerProtection;

	/**
	 * Amount a Buyer would need to bid to take advantage 
	 * of the Buy It Now feature. Not applicable to Fixed-Price 
	 * items (Type = 7 or 9) or AdFormat-type listings. For 
	 * Fixed-Price items, see StartPrice instead. 
	 *
	 * @access public
	 * @var AmountType
	 */
	public $BuyItNowPrice;

	/**
	 * Charity listing container. 
	 *
	 * @access public
	 * @var CharityType
	 */
	public $Charity;

	/**
	 * 2-letter ISO 3166 Country Code.   
	 *
	 * @access public
	 * @var CountryCodeType
	 */
	public $Country;

	/**
	 * CrossPromotions container, if applicable shows promoted items
	 *
	 * @access public
	 * @var CrossPromotionsType
	 */
	public $CrossPromotion;

	/**
	 * 3-letter ISO Currency Code.
	 *
	 * @access public
	 * @var CurrencyCodeType
	 */
	public $Currency;

	/**
	 * Item Description.
	 *
	 * @access public
	 * @var string
	 */
	public $Description;

	/**
	 * Online Escrow paid for by buyer or seller. Cannot use 
	 * with real estate auctions. Escrow is recommended for 
	 * for transactions over $500. Escrow service, 
	 * available via Escrow.com, protects both buyer and 
	 * seller by acting as a trusted third-party during the 
	 * transaction and managing the payment process
	 * from start to finish. Also, if escrow by seller option used,
	 * then for Motors, this means that Escrow will be 
	 * negotiated at the end of the auction.
	 *
	 * @access public
	 * @var EscrowCodeType
	 */
	public $Escrow;

	/**
	 * If set, a generic gift icon displays in the listing's 
	 * Title. GiftIcon must be set to to be able to use 
	 * GiftServices options (e.g., GiftExpressShipping, 
	 * GiftShipToRecipient, or GiftWrap).
	 *
	 * @access public
	 * @var int
	 */
	public $GiftIcon;

	/**
	 * Gift service options offered by the seller of 
	 * the listed item.    
	 *
	 * array
	 * @access public
	 * @var GiftServicesCodeType
	 */
	public $GiftServices;

	/**
	 * Optional hit counter for the item's listing page. Possible 
	 * values are:
	 * "NoHitCounter"  
	 * "HonestyStyle"  
	 * "GreenLED"  
	 * "Hidden"  
	 *
	 * @access public
	 * @var HitCounterCodeType
	 */
	public $HitCounter;

	/**
	 * The ID that uniquely identifies the item listing.
	 *
	 * @access public
	 * @var ItemIDType
	 */
	public $ItemID;

	/**
	 * Includes listing details in terms of start and 
	 * end time of listing (in GMT) as well as other 
	 * details (e.g., orginal item for second chance,
	 * converted start price, etc.).
	 *
	 * @access public
	 * @var ListingDetailsType
	 */
	public $ListingDetails;

	/**
	 * When an item is first listed (using AddItem), a Layout template 
	 * or a Theme template (or both) can be assigned to the item. 
	 * A Layout template is assigned to a new item by specifying 
	 * the Layout template ID (in the AddItem input argument 
	 * LayoutID). Similarly, a Theme template is assigned to the 
	 * item using the ThemeID argument.      
	 *
	 * @access public
	 * @var ListingDesignerType
	 */
	public $ListingDesigner;

	/**
	 * Describes the number of days the auction will be active.      
	 *
	 * @access public
	 * @var ListingDurationCodeType
	 */
	public $ListingDuration;

	/**
	 * Describes the types of enhancment supported
	 * for the item's listing.   
	 *
	 * array
	 * @access public
	 * @var ListingEnhancementsCodeType
	 */
	public $ListingEnhancement;

	/**
	 * Describes the type of listing for the item a seller 
	 * has chosen (e.g., Chinese, Dutch, FixedPrice, etc.).    
	 *
	 * @access public
	 * @var ListingTypeCodeType
	 */
	public $ListingType;

	/**
	 * Indicates the geographical location of the item.    
	 *
	 * @access public
	 * @var string
	 */
	public $Location;

	/**
	 * Needed for add item only for partners.
	 *
	 * @access public
	 * @var string
	 */
	public $PartnerCode;

	/**
	 * Needed for add item only for partners.
	 *
	 * @access public
	 * @var string
	 */
	public $PartnerName;

	/**
	 * List of payment methods accepted by a seller from a buyer for 
	 * a (checkout) transaction.
	 *
	 * array
	 * @access public
	 * @var BuyerPaymentMethodCodeType
	 */
	public $PaymentMethods;

	/**
	 * Valid PayPal e-mail address if seller has chosen PayPal 
	 * as a payment method for the listed item.
	 *
	 * @access public
	 * @var string
	 */
	public $PayPalEmailAddress;

	/**
	 * Container for data on the primary category of listing. 
	 *
	 * @access public
	 * @var CategoryType
	 */
	public $PrimaryCategory;

	/**
	 * Private auction. Not applicable to Fixed Price items.
	 *
	 * @access public
	 * @var boolean
	 */
	public $PrivateListing;

	/**
	 * Number of items being sold in the auction.
	 *
	 * @access public
	 * @var int
	 */
	public $Quantity;

	/**
	 * Region where the item is listed. See Region Table for values. 
	 * If the item is listed with a Region of 0 (zero), then this return 
	 * field denotes no region association with the item, meaning 
	 * that it is not listing the item regionally.
	 *
	 * @access public
	 * @var string
	 */
	public $RegionID;

	/**
	 * If true, creates a link from the old listing for the item to the new 
	 * relist page, which accommodates users who might still look for 
	 * the item under its old item ID. Also adds the relist ID to the old 
	 * listing's record in the eBay database, which can be returned by 
	 * calling GetItem for the old ItemId. If your application creates the 
	 * listing page for the user, you need to add the relist link option to 
	 * your application for your users.
	 *
	 * @access public
	 * @var boolean
	 */
	public $RelistLink;

	/**
	 * Indicates the reserve price for a reserve auction. Returned 
	 * only if DetailLevel = 4. ReservePrice is only returned for 
	 * auctions with a reserve price where the user calling GetItem 
	 * is the item's seller. Returned as null for International Fixed 
	 * Price items. For more information on reserve price auctions, 
	 * see http://pages.ebay.com/help/basics/f-format.html#1. 
	 *
	 * @access public
	 * @var AmountType
	 */
	public $ReservePrice;

	/**
	 * Revise Status contains information about the item being
	 * revised.
	 *
	 * @access public
	 * @var ReviseStatusType
	 */
	public $ReviseStatus;

	/**
	 * @access public
	 * @var dateTime
	 */
	public $ScheduleTime;

	/**
	 * Container for data on the secondary category of listing. 
	 * Secondary category is optional.
	 *
	 * @access public
	 * @var CategoryType
	 */
	public $SecondaryCategory;

	/**
	 * Item picture information for pictures hosted at eBay site.
	 *
	 * @access public
	 * @var SiteHostedPictureType
	 */
	public $SiteHostedPicture;

	/**
	 * Seller user.     
	 *
	 * @access public
	 * @var UserType
	 */
	public $Seller;

	/**
	 * Container for for selling status information (e.g., BidCount,
	 * BidIncrement, HighBidder, MinimimumToBid, etc).
	 *
	 * @access public
	 * @var SellingStatusType
	 */
	public $SellingStatus;

	/**
	 * Specifies where the seller is willing to ship the item. 
	 * Default "SiteOnly". Valid values are: 
	 * SiteOnly (the default)
	 * WorldWide
	 * SitePlusRegions
	 * WillNotShip
	 * If SitePlusRegions is selected, then at least one 
	 * regions argument (ShipToNorthAmerica, ShipToEurope, 
	 * etc.) must also be set.
	 *
	 * @access public
	 * @var ShippingOptionCodeType
	 */
	public $ShippingOption;

	/**
	 * Contains the shipping payment related information for the 
	 * listed item.
	 *
	 * @access public
	 * @var ShippingDetailsType
	 */
	public $ShippingDetails;

	/**
	 * Regions that seller will ship to.     
	 *
	 * array
	 * @access public
	 * @var ShippingRegionCodeType
	 */
	public $ShippingRegions;

	/**
	 * Describes who pays for the delivery of an item (e.g., buyer 
	 * or seller). 
	 *
	 * @access public
	 * @var ShippingTermsCodeType
	 */
	public $ShippingTerms;

	/**
	 * eBay site on which item is listed.
	 *
	 * @access public
	 * @var SiteCodeType
	 */
	public $Site;

	/**
	 * Starting price for the item. For Type=7 or Type=9 (Fixed Price) 
	 * items, if the item price (MinimumBid) is revised, this field 
	 * returns the new price. 
	 *
	 * @access public
	 * @var AmountType
	 */
	public $StartPrice;

	/**
	 * Storefront is shown for any item that 
	 * belongs to an eBay Store owner, regardless of 
	 * whether it is fixed price or auction type.  Not 
	 * returned for International Fixed Price items.     
	 *
	 * @access public
	 * @var StorefrontType
	 */
	public $Storefront;

	/**
	 * Subtitle to use in addition to the title. Provides more keywords when buyers search in titles and descriptions.
	 *
	 * @access public
	 * @var string
	 */
	public $SubTitle;

	/**
	 * Time until the the end of the listing (e.g., the amount of time left 
	 * in an active auction).
	 *
	 * @access public
	 * @var duration
	 */
	public $TimeLeft;

	/**
	 * Name of the item as it appears for auctions. 
	 *
	 * @access public
	 * @var string
	 */
	public $Title;

	/**
	 * Universally unique constraint tag. The UUID is unique to a category.
	 *
	 * @access public
	 * @var UUIDType
	 */
	public $UUID;

	/**
	 * VAT info container. 
	 *
	 * @access public
	 * @var VATDetailsType
	 */
	public $VATDetails;

	/**
	 * Item picture information for pictures hosted at vendor (i.e., remote) site.
	 *
	 * @access public
	 * @var VendorHostedPictureType
	 */
	public $VendorHostedPicture;

}

/**
 * TransactionsType
 * Contains information about multiple individual transations.
 */
class TransactionsType {
	/**
	 * array
	 * @access public
	 * @var TransactionType
	 */
	public $Transaction;

}

/**
 * TransactionType
 * Contains information about a single transaction. A transaction contains information 
 * about the sale of a particular item. The system creates a transaction when a buyer 
 * has made a purchase (Fixed Price items) or is the winning bidder (BIN and auction 
 * items). A listing can be associated with one or more transactions in these cases:
 * Multi-Item Fixed Price Listings
 * Dutch Auction Listings
 * A listing is associated with a single transaction in these cases:
 * Single-Item Fixed Price Listings
 * Single-Item Auction Listings
 */
class TransactionType {
	/**
	 * The amount the buyer paid for the item or agreed to pay, 
	 * depending on how far into the checkout process the item is. 
	 * If the seller allowed the buyer to change the item total, the buyer 
	 * is able to change the total until the time that the transaction's 
	 * status moves to Complete. Determine whether the buyer 
	 * changed the amount by calling GetSellerTransactions or 
	 * GetSellerTransactions and comparing the AmountPaid value 
	 * to what the seller expected. For Motors items, AmountPaid is 
	 * the amount paid by the buyer for the deposit.
	 *
	 * @access public
	 * @var AmountType
	 */
	public $AmountPaid;

	/**
	 * Container for buyer data. 
	 *
	 * @access public
	 * @var UserType
	 */
	public $Buyer;

	/**
	 * Includes shipping payment data.  
	 *
	 * @access public
	 * @var ShippingDetailsType
	 */
	public $ShippingDetails;

	/**
	 * Value returned in the Transaction/AmountPaid element, converted 
	 * to the currency indicated by SiteCurrency.
	 *
	 * @access public
	 * @var AmountType
	 */
	public $ConvertedAmountPaid;

	/**
	 * Value returned in the Transaction/TransactionPrice element, 
	 * converted to the currency indicated by SiteCurrency.
	 *
	 * @access public
	 * @var AmountType
	 */
	public $ConvertedTransactionPrice;

	/**
	 * For fixed-price, Stores, and BIN items indicates when the 
	 * purchase (or BIN) occurred. For all other item types indicates 
	 * when the transaction was created (the time when checkout 
	 * was initiated).
	 *
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;

	/**
	 * Deposit type for Motors items. If item is not a Motors item, 
	 * then returns a DepositType of None. Possible values:
	 * None
	 * Other Method
	 * Fast Deposit
	 *
	 * @access public
	 * @var DepositTypeCodeType
	 */
	public $DepositType;

	/**
	 * Item info associated with the transaction. 
	 *
	 * @access public
	 * @var ItemType
	 */
	public $Item;

	/**
	 * Contains the number of individual items the buyer purchased in 
	 * the transaction. 
	 *
	 * @access public
	 * @var int
	 */
	public $QuantityPurchased;

	/**
	 * Shipping cost totals shown to user (for both flat and calculated 
	 * rates).		
	 *
	 * @access public
	 * @var AmountType
	 */
	public $ShippingHandlingTotal;

	/**
	 * Container node for transaction status data.      		
	 *
	 * @access public
	 * @var TransactionStatusType
	 */
	public $Status;

	/**
	 * Unique identifier for a transaction. Returns 0 when Type=1 
	 * (Chinese auction). Typically, an ItemID and a TransactionID 
	 * uniquely identify a checkout  transaction.
	 *
	 * @access public
	 * @var string
	 */
	public $TransactionID;

	/**
	 * Unique identifier for an authorization.
	 *
	 * @access public
	 * @var string
	 */
	public $AuthorizationID;

	/**
	 * Price of the item, before shipping and sales tax. For Motors, 
	 * TransactionPrice is the deposit amount.
	 *
	 * @access public
	 * @var AmountType
	 */
	public $TransactionPrice;

	/**
	 * VAT rate for the item, if the item price includes the VAT rate. 
	 * Specify the VATPercent if you want include the net price in 
	 * addition to the gross price in the listing. VAT rates vary 
	 * depending on the item and on the user's country of residence; 
	 * therefore a business seller is responsible for entering the 
	 * correct VAT rate (it will not be calculated by eBay).
	 *
	 * @access public
	 * @var decimal
	 */
	public $VATPercent;

}

/**
 * PaymentMeansType
 */
class PaymentMeansType {
	/**
	 * @access public
	 * @var SellerPaymentMethodCodeType
	 */
	public $TypeCodeID;

}

/**
 * PaymentType
 */
class PaymentType {
	/**
	 * @access public
	 * @var PaymentMeansType
	 */
	public $PaymentMeans;

}

/**
 * TransactionStatusType
 * Indicates the success or failure of an eBay Online Payment for 
 * the transaction. If the payment failed, the value returned indicates 
 * the reason for the failure. Possible values:
 * 0 = No payment failure.
 * 3 = Buyer's eCheck bounced.
 * 4 = Buyer's credit card failed.
 * 5 = Buyer failed payment as reported by seller.
 * 7 = Payment from buyer to seller is in PayPal process, but has not yet been completed.
 */
class TransactionStatusType {
	/**
	 * Indicates the success or failure of an eBay Online Payment for 
	 * the transaction. If the payment failed, the value returned indicates 
	 * the reason for the failure. Possible values:
	 * 0 = No payment failure.
	 * 3 = Buyer's eCheck bounced.
	 * 4 = Buyer's credit card failed.
	 * 5 = Buyer failed payment as reported by seller.
	 * 7 = Payment from buyer to seller is in PayPal process, but has not yet been completed.
	 *
	 * @access public
	 * @var int
	 */
	public $eBayPaymentStatus;

	/**
	 * Indicates the current state of the checkout process for the transaction. Possible values:
	 * 0 = Checkout complete.
	 * 1 = Checkout incomplete. No details specified.
	 * 2 = Buyer requests total.
	 * 3 = Seller responded to buyer's request.
	 *
	 * @access public
	 * @var int
	 */
	public $IncompleteState;

	/**
	 * Indicates last date and time checkout status or incomplete state was updated 
	 * (in GMT). 
	 *
	 * @access public
	 * @var dateTime
	 */
	public $LastTimeModified;

	/**
	 * Payment method used by the buyer. (See BuyerPaymentCodeList/Type).
	 *
	 * @access public
	 * @var BuyerPaymentMethodCodeType
	 */
	public $PaymentMethodUsed;

	/**
	 * Indicates whether the transaction process complete or incomplete. 
	 * Possible values:
	 * 1 = Incomplete
	 * 2 = Complete
	 *
	 * @access public
	 * @var int
	 */
	public $StatusIs;

}

/**
 * UserType
 * Feedback scores are a quantitative expression of the desirability of dealing 
 * with that person as a Buyer or a Seller in auction transactions. Each 
 * auction transaction can result in one feedback entry for a given user 
 * (the Buyer can leave one feedback about the Seller and the Seller can leave 
 * one feedback about the Buyer). That one feedback can be positive, negative, 
 * or neutral. The aggregated feedback counts for a particular user represent 
 * that user's overall feedback score (referred to as a "feedback rating" on the 
 * eBay site). This rating is commonly expressed as the eBay Feedback score
 * for the user. 
 */
class UserType {
	/**
	 * @access public
	 * @var boolean
	 */
	public $AboutMePage;

	/**
	 * @access public
	 * @var string
	 */
	public $EAISToken;

	/**
	 * @access public
	 * @var string
	 */
	public $Email;

	/**
	 * Feedback scores are a quantitative expression of the desirability of dealing 
	 * with that person as a Buyer or a Seller in auction transactions. Each 
	 * auction transaction can result in one feedback entry for a given user 
	 * (the Buyer can leave one feedback about the Seller and the Seller can leave 
	 * one feedback about the Buyer). That one feedback can be positive, negative, 
	 * or neutral. The aggregated feedback counts for a particular user represent 
	 * that user's overall feedback score (referred to as a "feedback rating" on the 
	 * eBay site). This rating is commonly expressed as the eBay Feedback score
	 * for the user. 
	 *
	 * @access public
	 * @var int
	 */
	public $FeedbackScore;

	/**
	 * @access public
	 * @var boolean
	 */
	public $FeedbackPrivate;

	/**
	 * @access public
	 * @var FeedbackRatingStarCodeType
	 */
	public $FeedbackRatingStar;

	/**
	 * @access public
	 * @var boolean
	 */
	public $IDVerified;

	/**
	 * @access public
	 * @var boolean
	 */
	public $NewUser;

	/**
	 * @access public
	 * @var AddressType
	 */
	public $RegistrationAddress;

	/**
	 * @access public
	 * @var dateTime
	 */
	public $RegistrationDate;

	/**
	 * @access public
	 * @var SiteCodeType
	 */
	public $Site;

	/**
	 * @access public
	 * @var UserStatusCodeType
	 */
	public $Status;

	/**
	 * @access public
	 * @var UserIDType
	 */
	public $UserID;

	/**
	 * @access public
	 * @var boolean
	 */
	public $UserIDChanged;

	/**
	 * @access public
	 * @var dateTime
	 */
	public $UserIDLastChanged;

	/**
	 * If present, indicates whether or not the user is subject to VAT. 
	 * Users who have registered with eBay as VAT-exempt are not 
	 * subject to VAT. See Value-Added Tax (VAT). Not returned for 
	 * users whose country of residence is outside the EU. 
	 * Possible values for the user's status:
	 * 2 = Residence in an EU country but user registered as VAT-exempt
	 * 3 = Residence in an EU country and user not registered as VAT-exempt 
	 *
	 * @access public
	 * @var VATStatusCodeType
	 */
	public $VATStatus;

	/**
	 * @access public
	 * @var BuyerType
	 */
	public $BuyerInfo;

	/**
	 * @access public
	 * @var SellerType
	 */
	public $SellerInfo;

}

/**
 * VATDetailsType
 * Contains information required To list a business item.
 * BusinessSeller - only for add item, the RestrictedToBusiness and VATPercent for both get and add,
 * for revise all must be optional
 */
class VATDetailsType {
	/**
	 * @access public
	 * @var boolean
	 */
	public $BusinessSeller;

	/**
	 * @access public
	 * @var boolean
	 */
	public $RestrictedToBusiness;

	/**
	 * @access public
	 * @var float
	 */
	public $VATPercent;

}

/**
 * SchedulingInfoType
 * Contains information for Scheduling limits for the user. All dtails must be present,unless we will have revise call one day,
 * just in case we might let's make min occur = 0
 */
class SchedulingInfoType {
	/**
	 * @access public
	 * @var int
	 */
	public $MaxScheduledMinutes;

	/**
	 * @access public
	 * @var int
	 */
	public $MinScheduledMinutes;

	/**
	 * @access public
	 * @var int
	 */
	public $MaxScheduledItems;

}

/**
 * ItemArrayType
 */
class ItemArrayType {
	/**
	 * array
	 * @access public
	 * @var ItemType
	 */
	public $Item;

}

/**
 * CategoryArrayType
 */
class CategoryArrayType {
	/**
	 * array
	 * @access public
	 * @var CategoryType
	 */
	public $Category;

}

/**
 * PaginationType
 */
class PaginationType {
	/**
	 * @access public
	 * @var int
	 */
	public $EntriesPerPage;

	/**
	 * @access public
	 * @var int
	 */
	public $PageNumber;

}

/**
 * ModifiedFieldType
 */
class ModifiedFieldType {
	/**
	 * @access public
	 * @var string
	 */
	public $Field;

	/**
	 * @access public
	 * @var ModifyCodeType
	 */
	public $ModifyType;

}

/**
 * PaginationResultType
 */
class PaginationResultType {
	/**
	 * @access public
	 * @var int
	 */
	public $TotalNumberOfPages;

	/**
	 * @access public
	 * @var int
	 */
	public $TotalNumberOfEntries;

}

/**
 * ErrorParameterType
 * Value of the application-specific error parameter.
 */
class ErrorParameterType {
	/**
	 * Value of the application-specific error parameter.
	 *
	 * @access public
	 * @var string
	 */
	public $Value;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='value') {
				$this->Value = $arry["text"];
			}
		}
		}
	}
}

/**
 * ErrorType
 * Error code can be used by a receiving application to debugging a response 
 * message. These codes will need to be uniquely defined for each application. 
 */
class ErrorType {
	/**
	 * @access public
	 * @var string
	 */
	public $ShortMessage;

	/**
	 * @access public
	 * @var string
	 */
	public $LongMessage;

	/**
	 * Error code can be used by a receiving application to debugging a response 
	 * message. These codes will need to be uniquely defined for each application. 
	 *
	 * @access public
	 * @var token
	 */
	public $ErrorCode;

	/**
	 * SeverityCode indicates whether the error is an application
	 * level error or if it is informational error, i.e., warning.
	 *
	 * @access public
	 * @var SeverityCodeType
	 */
	public $SeverityCode;

	/**
	 * This optional element may carry additional application-specific error variables 
	 * that indicate specific information about the error condition particularly in the 
	 * cases where there are multiple instances of the ErrorType which require 
	 * additional context.
	 *
	 * array
	 * @access public
	 * @var ErrorParameterType
	 */
	public $ErrorParameters;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='shortmessage') {
				$this->ShortMessage = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='longmessage') {
				$this->LongMessage = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='errorcode') {
				$this->ErrorCode = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='severitycode') {
				$this->SeverityCode = $arry["text"];
			}
			if (is_array($arry["children"])&& ($arry["children"])!=null) 	{
			$i=0;
			while(true) {
			if($arry["name"]=="errorparameters[$i]") {
				$this->ErrorParameters[$i] = new ErrorParameterType();
				$this->ErrorParameters[$i]->init($arry["children"]);
			}
			else break;
			$i++;
			}
		}
				if(is_array($arry["children"]) && ($arry["children"])!=null && $arry["name"]=="errorparameters") {
				$this->ErrorParameters = new ErrorParameterType();
				$this->ErrorParameters->init($arry["children"]);
					}
		}
		}
	}
}

/**
 * FaultDetailsType
 * Error code can be used by a receiving application to debugging a SOAP response 
 * message that contain one or more SOAP Fault detail objects, i.e., fault detail sub-elements. 
 * These codes will need to be uniquely defined for each fault scenario.
 */
class FaultDetailsType {
	/**
	 * Error code can be used by a receiving application to debugging a SOAP response 
	 * message that contain one or more SOAP Fault detail objects, i.e., fault detail sub-elements. 
	 * These codes will need to be uniquely defined for each fault scenario.
	 *
	 * @access public
	 * @var string
	 */
	public $ErrorCode;

	/**
	 * Severity indicates whether the error is a serious fault
	 * or if it is informational error, i.e., warning.
	 *
	 * @access public
	 * @var string
	 */
	public $Severity;

	/**
	 * @access public
	 * @var string
	 */
	public $DetailedMessage;

}

/**
 * AbstractRequestType
 * Base type definition of request payload that can carry any type 
 * of payload content with optional versioning information and detail level
 * requirements.
 */
class AbstractRequestType {
	/**
	 * This specifies the required detail level that is needed by a client application pertaining to
	 * a particular data component (e.g., Item, Transaction, etc.). The detail level is specified in
	 * the DetailLevelCodeType which has all the enumerated values of the detail level for 
	 * each component.  
	 *
	 * array
	 * @access public
	 * @var DetailLevelCodeType
	 */
	public $DetailLevel;

	/**
	 * This should be the standard RFC 3066 language identification tag, e.g., en_US.
	 *
	 * @access public
	 * @var string
	 */
	public $ErrorLanguage;

	/**
	 * This refers to the version of the request payload schema.
	 *
	 * @access public
	 * @var string
	 */
	public $Version;


	public function toXMLString()  {
		$str = '';
		if($this->DetailLevel != null ) {
		for($i=0; $i<count($this->DetailLevel);$i++) {
			$str .= '<ebl:DetailLevel>'.$this->DetailLevel[$i].'</ebl:DetailLevel>';
		 }
		 }
		if($this->ErrorLanguage != null ) {
			$str .= '<ebl:ErrorLanguage>'.$this->ErrorLanguage.'</ebl:ErrorLanguage>';
		 }
		if($this->Version != null ) {
			$str .= '<ebl:Version>'.$this->Version.'</ebl:Version>';
		 }

		return $str;
	}

}

/**
 * AbstractResponseType
 * Base type definition of a response payload that can carry any 
 * type of payload content with following optional elements:
 * - timestamp of response message, 
 * - application level acknowledgement, and 
 * - application-level errors and warnings.
 */
class AbstractResponseType {
	/**
	 * This value represents the date and time (GMT) when the response 
	 * was generated by a service provider (as a result of processing 
	 * of a request). 
	 *
	 * @access public
	 * @var dateTime
	 */
	public $Timestamp;

	/**
	 * Application level acknowledgement code.
	 *
	 * @access public
	 * @var AckCodeType
	 */
	public $Ack;

	/**
	 * CorrelationID may be used optionally with an application 
	 * level acknowledgement.
	 *
	 * @access public
	 * @var string
	 */
	public $CorrelationID;

	/**
	 * array
	 * @access public
	 * @var ErrorType
	 */
	public $Errors;

	/**
	 * This refers to the version of the response payload schema.
	 *
	 * @access public
	 * @var string
	 */
	public $Version;

	/**
	 * This refers to the specific software build that was used in the deployment 
	 * for processing the request and generating the response.
	 *
	 * @access public
	 * @var string
	 */
	public $Build;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='timestamp') {
				$this->Timestamp = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='ack') {
				$this->Ack = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='correlationid') {
				$this->CorrelationID = $arry["text"];
			}
			if (is_array($arry["children"])&& ($arry["children"])!=null) 	{
			$i=0;
			while(true) {
			if($arry["name"]=="errors[$i]") {
				$this->Errors[$i] = new ErrorType();
				$this->Errors[$i]->init($arry["children"]);
			}
			else break;
			$i++;
			}
		}
				if(is_array($arry["children"]) && ($arry["children"])!=null && $arry["name"]=="errors") {
				$this->Errors = new ErrorType();
				$this->Errors->init($arry["children"]);
					}
			if($arry != null && isset($arry['text']) && $arry['name']=='version') {
				$this->Version = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='build') {
				$this->Build = $arry["text"];
			}
		}
		}
	}
}

/**
 * PhoneNumberType
 * Country code associated with this phone number.  
 */
class PhoneNumberType {
	/**
	 * Country code associated with this phone number.  
	 *
	 * @access public
	 * @var string
	 */
	public $CountryCode;

	/**
	 * Phone number associated with this phone.  
	 *
	 * @access public
	 * @var string
	 */
	public $PhoneNumber;

	/**
	 * Extension associated with this phone number.  
	 *
	 * @access public
	 * @var string
	 */
	public $Extension;


	public function toXMLString()  {
		$str = '';
		if($this->CountryCode != null ) {
			$str .= '<ebl:CountryCode>'.$this->CountryCode.'</ebl:CountryCode>';
		 }
		if($this->PhoneNumber != null ) {
			$str .= '<ebl:PhoneNumber>'.$this->PhoneNumber.'</ebl:PhoneNumber>';
		 }
		if($this->Extension != null ) {
			$str .= '<ebl:Extension>'.$this->Extension.'</ebl:Extension>';
		 }

		return $str;
	}

}

/**
 * AddressType
 * Person's name associated with this address. 
Character length and limitations: 32 single-byte alphanumeric characters
 */
class AddressType {
	/**
	 * Person's name associated with this address. 
Character length and limitations: 32 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $Name;

	/**
	 * First street address. 
Character length and limitations: 300 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $Street1;

	/**
	 * Second street address. 
Character length and limitations: 300 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $Street2;

	/**
	 * Name of city. 
Character length and limitations: 120 single-byte alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $CityName;

	/**
	 * State or province. 
Character length and limitations: 120 single-byte alphanumeric characters
	 * For Canada and the USA, StateOrProvince must be the standard 2-character abbreviation of a state or province.
	 * Canadian Provinces
	 * Alberta
	 * AB 
	 * British_Columbia
	 * BC
	 * Manitoba
	 * MB
	 * New_Brunswick
	 * NB
	 * Newfoundland
	 * NF
	 * Northwest_Territories
	 * NT
	 * Nova_Scotia
	 * NS 
	 * Nunavut
	 * NU
	 * Ontario
	 * ON
	 * Prince_Edward_Island
	 * PE
	 * Quebec
	 * QC
	 * Saskatchewan
	 * SK
	 * Yukon
	 * YK
	 * United States
	 * Alabama
	 * AL 
	 * Alaska
	 * AK
	 * American_Samoa
	 * AS
	 * Arizona
	 * AZ
	 * Arkansas
	 * AR
	 * California
	 * CA
	 * Colorado
	 * CO
	 * Connecticut
	 * CT
	 * Delaware
	 * DE
	 * District_Of_Columbia
	 * DC
	 * Federated_States_Of_Micronesia
	 * FM
	 * Florida
	 * FL
	 * Georgia
	 * GA
	 * Guam
	 * GU
	 * Hawaii
	 * HI
	 * Idaho
	 * ID 
	 * Illinois
	 * IL
	 * Indiana
	 * IN
	 * Iowa
	 * IA
	 * Kansas
	 * KS
	 * Kentucky
	 * KY
	 * Louisiana
	 * LA
	 * Maine
	 * ME
	 * Marshall_Islands
	 * MH
	 * Maryland
	 * MD
	 * Massachusetts
	 * MA
	 * Michigan
	 * MI
	 * Minnesota
	 * MN
	 * Mississippi
	 * MS
	 * Missouri
	 * MO
	 * Montana
	 * MT
	 * Nebraska
	 * NE
	 * Nevada
	 * NV
	 * New_Hampshire
	 * NH
	 * New_Jersey
	 * NJ
	 * New_Mexico
	 * NM
	 * New_York
	 * NY
	 * North_Carolina
	 * NC
	 * North_Dakota
	 * ND
	 * Northern_Mariana_Islands
	 * MP
	 * Ohio
	 * OH 
	 * Oklahoma
	 * OK
	 * Oregon
	 * OR
	 * Palau
	 * PW
	 * Pennsylvania
	 * PA
	 * Puerto_Rico
	 * PR
	 * Rhode_Island
	 * RI
	 * South_Carolina
	 * SC
	 * South_Dakota
	 * SD
	 * Tennessee
	 * TN 
	 * Texas
	 * TX
	 * Utah
	 * UT
	 * Vermont
	 * VT
	 * Virgin_Islands
	 * VI
	 * Virginia
	 * VA
	 * Washington
	 * WA
	 * West_Virginia
	 * WV
	 * Wisconsin
	 * WI
	 * Wyoming
	 * WY
	 * Armed_Forces_Americas
	 * AA
	 * Armed_Forces
	 * AE
	 * Armed_Forces_Pacific
	 * AP
	 *
	 * @access public
	 * @var string
	 */
	public $StateOrProvince;

	/**
	 * ISO 3166 standard country code
	 * Character limit: Two single-byte characters. 	 *
	 * @access public
	 * @var CountryCodeType
	 */
	public $Country;

	/**
	 * IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile.
	 * This element should only be used in response elements and typically
	 * should not be used in creating request messages which specify the 
	 * name of a country using the Country element (which refers to a
	 * 2-letter country code).      
	 *
	 * @access public
	 * @var string
	 */
	public $CountryName;

	/**
	 * Telephone number associated with this address	 *
	 * @access public
	 * @var string
	 */
	public $Phone;

	/**
	 * @access public
	 * @var string
	 */
	public $PostalCode;

	/**
	 * IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile, or UpdateRecurringPaymentsProfile.
	 *
	 * @access public
	 * @var string
	 */
	public $AddressID;

	/**
	 * IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile.
	 *
	 * @access public
	 * @var AddressOwnerCodeType
	 */
	public $AddressOwner;

	/**
	 * IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile.
	 *
	 * @access public
	 * @var string
	 */
	public $ExternalAddressID;

	/**
	 * IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile.
	 * Only applicable to SellerPaymentAddress today. Seller's international name that is associated with the payment address. 
	 *
	 * @access public
	 * @var string
	 */
	public $InternationalName;

	/**
	 * IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile.
	 * Only applicable to SellerPaymentAddress today. International state and city for the seller's payment address. 
	 *
	 * @access public
	 * @var string
	 */
	public $InternationalStateAndCity;

	/**
	 * IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile.
	 * Only applicable to SellerPaymentAddress today. Seller's international street address that is associated with the payment address.
	 *
	 * @access public
	 * @var string
	 */
	public $InternationalStreet;

	/**
	 * Status of the address on file with PayPal.
	 * IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile.
	 *
	 * @access public
	 * @var AddressStatusCodeType
	 */
	public $AddressStatus;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='name') {
				$this->Name = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='street1') {
				$this->Street1 = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='street2') {
				$this->Street2 = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='cityname') {
				$this->CityName = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='stateorprovince') {
				$this->StateOrProvince = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='country') {
				$this->Country = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='countryname') {
				$this->CountryName = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='phone') {
				$this->Phone = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='postalcode') {
				$this->PostalCode = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='addressid') {
				$this->AddressID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='addressowner') {
				$this->AddressOwner = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='externaladdressid') {
				$this->ExternalAddressID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='internationalname') {
				$this->InternationalName = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='internationalstateandcity') {
				$this->InternationalStateAndCity = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='internationalstreet') {
				$this->InternationalStreet = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='addressstatus') {
				$this->AddressStatus = $arry["text"];
			}
		}
		}
	}

	public function toXMLString()  {
		$str = '';
		if($this->Name != null ) {
			$str .= '<ebl:Name>'.$this->Name.'</ebl:Name>';
		 }
		if($this->Street1 != null ) {
			$str .= '<ebl:Street1>'.$this->Street1.'</ebl:Street1>';
		 }
		if($this->Street2 != null ) {
			$str .= '<ebl:Street2>'.$this->Street2.'</ebl:Street2>';
		 }
		if($this->CityName != null ) {
			$str .= '<ebl:CityName>'.$this->CityName.'</ebl:CityName>';
		 }
		if($this->StateOrProvince != null ) {
			$str .= '<ebl:StateOrProvince>'.$this->StateOrProvince.'</ebl:StateOrProvince>';
		 }
		if($this->Country != null ) {
			$str .= '<ebl:Country>'.$this->Country.'</ebl:Country>';
		 }
		if($this->CountryName != null ) {
			$str .= '<ebl:CountryName>'.$this->CountryName.'</ebl:CountryName>';
		 }
		if($this->Phone != null ) {
			$str .= '<ebl:Phone>'.$this->Phone.'</ebl:Phone>';
		 }
		if($this->PostalCode != null ) {
			$str .= '<ebl:PostalCode>'.$this->PostalCode.'</ebl:PostalCode>';
		 }
		if($this->AddressID != null ) {
			$str .= '<ebl:AddressID>'.$this->AddressID.'</ebl:AddressID>';
		 }
		if($this->AddressOwner != null ) {
			$str .= '<ebl:AddressOwner>'.$this->AddressOwner.'</ebl:AddressOwner>';
		 }
		if($this->ExternalAddressID != null ) {
			$str .= '<ebl:ExternalAddressID>'.$this->ExternalAddressID.'</ebl:ExternalAddressID>';
		 }
		if($this->InternationalName != null ) {
			$str .= '<ebl:InternationalName>'.$this->InternationalName.'</ebl:InternationalName>';
		 }
		if($this->InternationalStateAndCity != null ) {
			$str .= '<ebl:InternationalStateAndCity>'.$this->InternationalStateAndCity.'</ebl:InternationalStateAndCity>';
		 }
		if($this->InternationalStreet != null ) {
			$str .= '<ebl:InternationalStreet>'.$this->InternationalStreet.'</ebl:InternationalStreet>';
		 }
		if($this->AddressStatus != null ) {
			$str .= '<ebl:AddressStatus>'.$this->AddressStatus.'</ebl:AddressStatus>';
		 }

		return $str;
	}

}

/**
 * PersonNameType
 */
class PersonNameType {
	/**
	 * @access public
	 * @var string
	 */
	public $Salutation;

	/**
	 * @access public
	 * @var string
	 */
	public $FirstName;

	/**
	 * @access public
	 * @var string
	 */
	public $MiddleName;

	/**
	 * @access public
	 * @var string
	 */
	public $LastName;

	/**
	 * @access public
	 * @var string
	 */
	public $Suffix;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='salutation') {
				$this->Salutation = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='firstname') {
				$this->FirstName = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='middlename') {
				$this->MiddleName = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='lastname') {
				$this->LastName = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='suffix') {
				$this->Suffix = $arry["text"];
			}
		}
		}
	}

	public function toXMLString()  {
		$str = '';
		if($this->Salutation != null ) {
			$str .= '<ebl:Salutation>'.$this->Salutation.'</ebl:Salutation>';
		 }
		if($this->FirstName != null ) {
			$str .= '<ebl:FirstName>'.$this->FirstName.'</ebl:FirstName>';
		 }
		if($this->MiddleName != null ) {
			$str .= '<ebl:MiddleName>'.$this->MiddleName.'</ebl:MiddleName>';
		 }
		if($this->LastName != null ) {
			$str .= '<ebl:LastName>'.$this->LastName.'</ebl:LastName>';
		 }
		if($this->Suffix != null ) {
			$str .= '<ebl:Suffix>'.$this->Suffix.'</ebl:Suffix>';
		 }

		return $str;
	}

}

/**
 * IncentiveAppliedToType
 */
class IncentiveAppliedToType {
	/**
	 * @access public
	 * @var string
	 */
	public $BucketId;

	/**
	 * @access public
	 * @var string
	 */
	public $ItemId;

	/**
	 * @access public
	 * @var BasicAmountType
	 */
	public $IncentiveAmount;

	/**
	 * @access public
	 * @var string
	 */
	public $SubType;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='bucketid') {
				$this->BucketId = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='itemid') {
				$this->ItemId = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="incentiveamount") {
				$this->IncentiveAmount = new BasicAmountType();
				$this->IncentiveAmount->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='subtype') {
				$this->SubType = $arry["text"];
			}
		}
		}
	}
}

/**
 * IncentiveDetailType
 */
class IncentiveDetailType {
	/**
	 * @access public
	 * @var string
	 */
	public $RedemptionCode;

	/**
	 * @access public
	 * @var string
	 */
	public $DisplayCode;

	/**
	 * @access public
	 * @var string
	 */
	public $ProgramId;

	/**
	 * @access public
	 * @var IncentiveTypeCodeType
	 */
	public $IncentiveType;

	/**
	 * @access public
	 * @var string
	 */
	public $IncentiveDescription;

	/**
	 * array
	 * @access public
	 * @var IncentiveAppliedToType
	 */
	public $AppliedTo;

	/**
	 * @access public
	 * @var string
	 */
	public $Status;

	/**
	 * @access public
	 * @var string
	 */
	public $ErrorCode;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='redemptioncode') {
				$this->RedemptionCode = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='displaycode') {
				$this->DisplayCode = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='programid') {
				$this->ProgramId = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='incentivetype') {
				$this->IncentiveType = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='incentivedescription') {
				$this->IncentiveDescription = $arry["text"];
			}
			if (is_array($arry["children"])&& ($arry["children"])!=null) 	{
			$i=0;
			while(true) {
			if($arry["name"]=="appliedto[$i]") {
				$this->AppliedTo[$i] = new IncentiveAppliedToType();
				$this->AppliedTo[$i]->init($arry["children"]);
			}
			else break;
			$i++;
			}
		}
				if(is_array($arry["children"]) && ($arry["children"])!=null && $arry["name"]=="appliedto") {
				$this->AppliedTo = new IncentiveAppliedToType();
				$this->AppliedTo->init($arry["children"]);
					}
			if($arry != null && isset($arry['text']) && $arry['name']=='status') {
				$this->Status = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='errorcode') {
				$this->ErrorCode = $arry["text"];
			}
		}
		}
	}
}

/**
 * IncentiveItemType
 */
class IncentiveItemType {
	/**
	 * @access public
	 * @var string
	 */
	public $ItemId;

	/**
	 * @access public
	 * @var dateTime
	 */
	public $PurchaseTime;

	/**
	 * @access public
	 * @var string
	 */
	public $ItemCategoryList;

	/**
	 * @access public
	 * @var BasicAmountType
	 */
	public $ItemPrice;

	/**
	 * @access public
	 * @var integer
	 */
	public $ItemQuantity;


	public function toXMLString()  {
		$str = '';
		if($this->ItemId != null ) {
			$str .= '<ebl:ItemId>'.$this->ItemId.'</ebl:ItemId>';
		 }
		if($this->PurchaseTime != null ) {
			$str .= '<ebl:PurchaseTime>'.$this->PurchaseTime.'</ebl:PurchaseTime>';
		 }
		if($this->ItemCategoryList != null ) {
			$str .= '<ebl:ItemCategoryList>'.$this->ItemCategoryList.'</ebl:ItemCategoryList>';
		 }
		if($this->ItemPrice != null ) {
			$str .='<ebl:ItemPrice';
			$str .= $this->ItemPrice->toXMLString();
			$str .=  '</ebl:ItemPrice>';
		 }
		if($this->ItemQuantity != null ) {
			$str .= '<ebl:ItemQuantity>'.$this->ItemQuantity.'</ebl:ItemQuantity>';
		 }

		return $str;
	}

}

/**
 * IncentiveBucketType
 */
class IncentiveBucketType {
	/**
	 * array
	 * @access public
	 * @var IncentiveItemType
	 */
	public $Items;

	/**
	 * @access public
	 * @var string
	 */
	public $BucketId;

	/**
	 * @access public
	 * @var string
	 */
	public $SellerId;

	/**
	 * @access public
	 * @var string
	 */
	public $ExternalSellerId;

	/**
	 * @access public
	 * @var BasicAmountType
	 */
	public $BucketSubtotalAmt;

	/**
	 * @access public
	 * @var BasicAmountType
	 */
	public $BucketShippingAmt;

	/**
	 * @access public
	 * @var BasicAmountType
	 */
	public $BucketInsuranceAmt;

	/**
	 * @access public
	 * @var BasicAmountType
	 */
	public $BucketSalesTaxAmt;

	/**
	 * @access public
	 * @var BasicAmountType
	 */
	public $BucketTotalAmt;


	public function toXMLString()  {
		$str = '';
		if($this->Items != null ) {
		for($i=0; $i<count($this->Items);$i++) {
			$str .= '<ebl:Items>';
			$str .= $this->Items[$i]->toXMLString();
			$str .=  '</ebl:Items>';
		 }
		 }
		if($this->BucketId != null ) {
			$str .= '<ebl:BucketId>'.$this->BucketId.'</ebl:BucketId>';
		 }
		if($this->SellerId != null ) {
			$str .= '<ebl:SellerId>'.$this->SellerId.'</ebl:SellerId>';
		 }
		if($this->ExternalSellerId != null ) {
			$str .= '<ebl:ExternalSellerId>'.$this->ExternalSellerId.'</ebl:ExternalSellerId>';
		 }
		if($this->BucketSubtotalAmt != null ) {
			$str .='<ebl:BucketSubtotalAmt';
			$str .= $this->BucketSubtotalAmt->toXMLString();
			$str .=  '</ebl:BucketSubtotalAmt>';
		 }
		if($this->BucketShippingAmt != null ) {
			$str .='<ebl:BucketShippingAmt';
			$str .= $this->BucketShippingAmt->toXMLString();
			$str .=  '</ebl:BucketShippingAmt>';
		 }
		if($this->BucketInsuranceAmt != null ) {
			$str .='<ebl:BucketInsuranceAmt';
			$str .= $this->BucketInsuranceAmt->toXMLString();
			$str .=  '</ebl:BucketInsuranceAmt>';
		 }
		if($this->BucketSalesTaxAmt != null ) {
			$str .='<ebl:BucketSalesTaxAmt';
			$str .= $this->BucketSalesTaxAmt->toXMLString();
			$str .=  '</ebl:BucketSalesTaxAmt>';
		 }
		if($this->BucketTotalAmt != null ) {
			$str .='<ebl:BucketTotalAmt';
			$str .= $this->BucketTotalAmt->toXMLString();
			$str .=  '</ebl:BucketTotalAmt>';
		 }

		return $str;
	}

}

/**
 * IncentiveRequestDetailsType
 */
class IncentiveRequestDetailsType {
	/**
	 * @access public
	 * @var string
	 */
	public $RequestId;

	/**
	 * @access public
	 * @var IncentiveRequestCodeType
	 */
	public $RequestType;

	/**
	 * @access public
	 * @var IncentiveRequestDetailLevelCodeType
	 */
	public $RequestDetailLevel;


	public function toXMLString()  {
		$str = '';
		if($this->RequestId != null ) {
			$str .= '<ebl:RequestId>'.$this->RequestId.'</ebl:RequestId>';
		 }
		if($this->RequestType != null ) {
			$str .= '<ebl:RequestType>'.$this->RequestType.'</ebl:RequestType>';
		 }
		if($this->RequestDetailLevel != null ) {
			$str .= '<ebl:RequestDetailLevel>'.$this->RequestDetailLevel.'</ebl:RequestDetailLevel>';
		 }

		return $str;
	}

}

/**
 * GetIncentiveEvaluationRequestDetailsType
 */
class GetIncentiveEvaluationRequestDetailsType {
	/**
	 * @access public
	 * @var string
	 */
	public $ExternalBuyerId;

	/**
	 * array
	 * @access public
	 * @var string
	 */
	public $IncentiveCodes;

	/**
	 * array
	 * @access public
	 * @var IncentiveApplyIndicationType
	 */
	public $ApplyIndication;

	/**
	 * array
	 * @access public
	 * @var IncentiveBucketType
	 */
	public $Buckets;

	/**
	 * @access public
	 * @var BasicAmountType
	 */
	public $CartTotalAmt;

	/**
	 * @access public
	 * @var IncentiveRequestDetailsType
	 */
	public $RequestDetails;


	public function toXMLString()  {
		$str = '';
		if($this->ExternalBuyerId != null ) {
			$str .= '<ebl:ExternalBuyerId>'.$this->ExternalBuyerId.'</ebl:ExternalBuyerId>';
		 }
		if($this->IncentiveCodes != null ) {
		for($i=0; $i<count($this->IncentiveCodes);$i++) {
			$str .= '<ebl:IncentiveCodes>'.$this->IncentiveCodes[$i].'</ebl:IncentiveCodes>';
		 }
		 }
		if($this->ApplyIndication != null ) {
		for($i=0; $i<count($this->ApplyIndication);$i++) {
			$str .= '<ebl:ApplyIndication>';
			$str .= $this->ApplyIndication[$i]->toXMLString();
			$str .=  '</ebl:ApplyIndication>';
		 }
		 }
		if($this->Buckets != null ) {
		for($i=0; $i<count($this->Buckets);$i++) {
			$str .= '<ebl:Buckets>';
			$str .= $this->Buckets[$i]->toXMLString();
			$str .=  '</ebl:Buckets>';
		 }
		 }
		if($this->CartTotalAmt != null ) {
			$str .='<ebl:CartTotalAmt';
			$str .= $this->CartTotalAmt->toXMLString();
			$str .=  '</ebl:CartTotalAmt>';
		 }
		if($this->RequestDetails != null ) {
			$str .='<ebl:RequestDetails>';
			$str .= $this->RequestDetails->toXMLString();
			$str .=  '</ebl:RequestDetails>';
		 }

		return $str;
	}

}

/**
 * GetIncentiveEvaluationResponseDetailsType
 */
class GetIncentiveEvaluationResponseDetailsType {
	/**
	 * array
	 * @access public
	 * @var IncentiveDetailType
	 */
	public $IncentiveDetails;

	/**
	 * @access public
	 * @var string
	 */
	public $RequestId;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if (is_array($arry["children"])&& ($arry["children"])!=null) 	{
			$i=0;
			while(true) {
			if($arry["name"]=="incentivedetails[$i]") {
				$this->IncentiveDetails[$i] = new IncentiveDetailType();
				$this->IncentiveDetails[$i]->init($arry["children"]);
			}
			else break;
			$i++;
			}
		}
				if(is_array($arry["children"]) && ($arry["children"])!=null && $arry["name"]=="incentivedetails") {
				$this->IncentiveDetails = new IncentiveDetailType();
				$this->IncentiveDetails->init($arry["children"]);
					}
			if($arry != null && isset($arry['text']) && $arry['name']=='requestid') {
				$this->RequestId = $arry["text"];
			}
		}
		}
	}
}

/**
 * SetExpressCheckoutRequestDetailsType
 * The total cost of the order to the customer. If shipping cost and tax charges are known, include them in OrderTotal; if not, OrderTotal should be the current sub-total of the order. 
 * You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. 
 * Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
 */
class SetExpressCheckoutRequestDetailsType {
	/**
The total cost of the order to the customer. If shipping cost and tax charges are known, include them in OrderTotal; if not, OrderTotal should be the current sub-total of the order. 
	 * You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. 
	 * Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $OrderTotal;

	/**
URL to which the customer's browser is returned after choosing to pay with PayPal. PayPal recommends that the value of ReturnURL be the final review page on which the customer confirms the order and payment. 
	 * Required
	 * Character length and limitations: no limit. 	 *
	 * @access public
	 * @var string
	 */
	public $ReturnURL;

	/**
URL to which the customer is returned if he does not approve the use of PayPal to pay you. PayPal recommends that the value of CancelURL be the original page on which the customer chose to pay with PayPal. 
	 * Required
	 * Character length and limitations: no limit
	 *
	 * @access public
	 * @var string
	 */
	public $CancelURL;

	/**
Tracking URL for ebay. 
	 * Required
	 * Character length and limitations: no limit
	 *
	 * @access public
	 * @var string
	 */
	public $TrackingImageURL;

	/**
URL to which the customer's browser is returned after paying with giropay online. 
	 * Optional
	 * Character length and limitations: no limit.
	 *
	 * @access public
	 * @var string
	 */
	public $giropaySuccessURL;

	/**
URL to which the customer's browser is returned after fail to pay with giropay online. 
	 * Optional
	 * Character length and limitations: no limit.
	 *
	 * @access public
	 * @var string
	 */
	public $giropayCancelURL;

	/**
URL to which the customer's browser can be returned in the mEFT done page. 
	 * Optional
	 * Character length and limitations: no limit.
	 *
	 * @access public
	 * @var string
	 */
	public $BanktxnPendingURL;

	/**
On your first invocation of SetExpressCheckoutRequest, the value of this token is returned by SetExpressCheckoutResponse. 
	 * Optional
	 * Include this element and its value only if you want to modify an existing checkout session with another invocation of SetExpressCheckoutRequest; for example, if you want the customer to edit his shipping address on PayPal. 
	 * Character length and limitations: 20 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $Token;

	/**
The expected maximum total amount of the complete order, including shipping cost and tax charges. 
	 * Optional
	 * You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. 
	 * Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $MaxAmount;

	/**
Description of items the customer is purchasing. 
	 * Optional
	 * Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $OrderDescription;

	/**
A free-form field for your own use, such as a tracking number or other value you want PayPal to return on GetExpressCheckoutDetailsResponse and DoExpressCheckoutPaymentResponse. 
	 * Optional
	 * Character length and limitations: 256 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $Custom;

	/**
Your own unique invoice or tracking number. PayPal returns this value to you on DoExpressCheckoutPaymentResponse. 
	 * Optional
	 * Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $InvoiceID;

	/**
The value 1 indicates that you require that the customer's shipping address on file with PayPal be a confirmed address. Any value other than 1 indicates that the customer's shipping address on file with PayPal need NOT be a confirmed address. Setting this element overrides the setting you have specified in the recipient's Merchant Account Profile. 
	 * Optional
	 * Character length and limitations: One single-byte numeric character.
	 *
	 * @access public
	 * @var string
	 */
	public $ReqConfirmShipping;

	/**
The value 1 indicates that you require that the customer's billing address on file. Setting this element overrides the setting you have specified in Admin.
	 * Optional
	 * Character length and limitations: One single-byte numeric character.
	 *
	 * @access public
	 * @var string
	 */
	public $ReqBillingAddress;

	/**
	 * The billing address for the buyer.
	 * Optional
	 * If you include the BillingAddress element, the AddressType elements are required:
	 * Name
	 * Street1
	 * CityName
	 * CountryCode
	 * Do not set set the CountryName element.
	 *
	 * @access public
	 * @var AddressType
	 */
	public $BillingAddress;

	/**
The value 1 indicates that on the PayPal pages, no shipping address fields should be displayed whatsoever. 
	 * Optional
	 * Character length and limitations: Four single-byte numeric characters.
	 *
	 * @access public
	 * @var string
	 */
	public $NoShipping;

	/**
The value 1 indicates that the PayPal pages should display the shipping address set by you in the Address element on this SetExpressCheckoutRequest, not the shipping address on file with PayPal for this customer. Displaying the PayPal street address on file does not allow the customer to edit that address. 
	 * Optional
	 * Character length and limitations: Four single-byte numeric characters.
	 *
	 * @access public
	 * @var string
	 */
	public $AddressOverride;

	/**
	 * Locale of pages displayed by PayPal during Express Checkout. 
	 * Optional
	 * Character length and limitations: Five single-byte alphabetic characters, upper- or lowercase. 
	 * Allowable values: 
	 * AU or en_AU
	 * DE or de_DE
	 * FR or fr_FR
	 * GB or en_GB
	 * IT or it_IT
	 * JP or ja_JP
	 * US or en_US
	 *
	 * @access public
	 * @var string
	 */
	public $LocaleCode;

	/**
Sets the Custom Payment Page Style for payment pages associated with this button/link. PageStyle corresponds to the HTML variable page_style for customizing payment pages. The value is the same as the Page Style Name you chose when adding or editing the page style from the Profile subtab of the My Account tab of your PayPal account. 
	 * Optional
	 * Character length and limitations: 30 single-byte alphabetic characters.
	 *
	 * @access public
	 * @var string
	 */
	public $PageStyle;

	/**
	 * A URL for the image you want to appear at the top left of the payment page. The image has a maximum size of 750 pixels wide by 90 pixels high. PayPal recommends that you provide an image that is stored on a secure (https) server. 
	 * Optional
	 * Character length and limitations: 127
	 *
	 * @access public
	 * @var string
	 */
	public $cppheaderimage;

	/**
	 * Sets the border color around the header of the payment page. The border is a 2-pixel perimeter around the header space, which is 750 pixels wide by 90 pixels high. 
	 * Optional
	 * Character length and limitations: Six character HTML hexadecimal color code in ASCII
	 *
	 * @access public
	 * @var string
	 */
	public $cppheaderbordercolor;

	/**
	 * Sets the background color for the header of the payment page. 
	 * Optional
	 * Character length and limitation: Six character HTML hexadecimal color code in ASCII
	 *
	 * @access public
	 * @var string
	 */
	public $cppheaderbackcolor;

	/**
	 * Sets the background color for the payment page. 
	 * Optional
	 * Character length and limitation: Six character HTML hexadecimal color code in ASCII
	 *
	 * @access public
	 * @var string
	 */
	public $cpppayflowcolor;

	/**
	 * Sets the cart gradient color for the Mini Cart on 1X flow. 
	 * Optional
	 * Character length and limitation: Six character HTML hexadecimal color code in ASCII
	 *
	 * @access public
	 * @var string
	 */
	public $cppcartbordercolor;

	/**
	 * A URL for the image you want to appear above the mini-cart. The image has a maximum size of 190 pixels wide by 60 pixels high. PayPal recommends that you provide an image that is stored on a secure (https) server. 
	 * Optional
	 * Character length and limitations: 127
	 *
	 * @access public
	 * @var string
	 */
	public $cpplogoimage;

	/**
Customer's shipping address. 
	 * Optional
	 * If you include a shipping address and set the AddressOverride element on the request, PayPal returns this same address in GetExpressCheckoutDetailsResponse. 
	 *
	 * @access public
	 * @var AddressType
	 */
	public $Address;

	/**
	 * How you want to obtain payment. 
	 * Required
	 * Authorization indicates that this payment is a basic authorization subject to settlement with PayPal Authorization and Capture.
	 * Order indicates that this payment is is an order authorization subject to settlement with PayPal Authorization and Capture.
	 * Sale indicates that this is a final sale for which you are requesting payment.
	 * IMPORTANT: You cannot set PaymentAction to Sale or Order on SetExpressCheckoutRequest and then change PaymentAction to Authorization on the final Express Checkout API, DoExpressCheckoutPaymentRequest.
	 * Character length and limit: Up to 13 single-byte alphabetic characters
	 *
	 * @access public
	 * @var PaymentActionCodeType
	 */
	public $PaymentAction;

	/**
	 * This will indicate which flow you are choosing (expresschecheckout or expresscheckout optional)
	 * Optional
	 * None
	 * Sole indicates that you are in the ExpressO flow
	 * Mark indicates that you are in the old express flow.
	 *
	 * @access public
	 * @var SolutionTypeType
	 */
	public $SolutionType;

	/**
	 * This indicates Which page to display for ExpressO (Billing or Login) 
	 * Optional
	 * None
	 * Billing indicates that you are not a paypal account holder
	 * Login indicates that you are a paypal account holder
	 *
	 * @access public
	 * @var LandingPageType
	 */
	public $LandingPage;

	/**
	 * Email address of the buyer as entered during checkout. PayPal uses this value to pre-fill the PayPal membership sign-up portion of the PayPal login page. 
	 * Optional
	 * Character length and limit: 127 single-byte alphanumeric characters 
	 *
	 * @access public
	 * @var string
	 */
	public $BuyerEmail;

	/**
	 * @access public
	 * @var ChannelType
	 */
	public $ChannelType;

	/**
	 * array
	 * @access public
	 * @var BillingAgreementDetailsType
	 */
	public $BillingAgreementDetails;

	/**
	 * Promo Code
	 * Optional
	 * List of promo codes supplied by merchant. These promo codes enable the Merchant Services Promotion Financing feature.
	 *
	 * array
	 * @access public
	 * @var string
	 */
	public $PromoCodes;

	/**
	 * Default Funding option for PayLater Checkout button.
	 *
	 * @access public
	 * @var string
	 */
	public $PayPalCheckOutBtnType;

	/**
	 *
	 * @access public
	 * @var ProductCategoryType
	 */
	public $ProductCategory;

	/**
	 *
	 * @access public
	 * @var ShippingServiceCodeType
	 */
	public $ShippingMethod;

	/**
	 * Date and time (in GMT in the format yyyy-MM-ddTHH:mm:ssZ) at which address was changed by the user. 
	 *
	 * @access public
	 * @var dateTime
	 */
	public $ProfileAddressChangeDate;

	/**
	 * The value 1 indicates that the customer may enter a note to the merchant on the PayPal page during checkout. The note is returned in the GetExpressCheckoutDetails response and the DoExpressCheckoutPayment response.
	 * Optional
	 * Character length and limitations: One single-byte numeric character.
	 * Allowable values: 0,1 
	 *
	 * @access public
	 * @var string
	 */
	public $AllowNote;

	/**
	 * Funding source preferences. 
	 *
	 * @access public
	 * @var FundingSourceDetailsType
	 */
	public $FundingSourceDetails;

	/**
	 * The label that needs to be displayed on the cancel links in the PayPal hosted checkout pages.  
	 * Optional  
	 * Character length and limit: 127 single-byte alphanumeric characters 
	 *
	 * @access public
	 * @var string
	 */
	public $BrandName;

	/**
	 * URL for PayPal to use to retrieve shipping, handling, insurance, and tax details from your website.
	 * Optional
	 * Character length and limitations: 2048 characters.
	 *
	 * @access public
	 * @var string
	 */
	public $CallbackURL;

	/**
	 * Enhanced data for different industry segments. 
	 * Optional
	 *
	 * @access public
	 * @var EnhancedCheckoutDataType
	 */
	public $EnhancedCheckoutData;

	/**
	 * List of other payment methods the user can pay with.
	 * Optional
	 * Refer to the OtherPaymentMethodDetailsType for more details.
	 *
	 * array
	 * @access public
	 * @var OtherPaymentMethodDetailsType
	 */
	public $OtherPaymentMethods;

	/**
	 * Details about the buyer's account. 
	 * Optional
	 * Refer to the BuyerDetailsType for more details. 
	 *
	 * @access public
	 * @var BuyerDetailsType
	 */
	public $BuyerDetails;

	/**
	 * Information about the payment.
	 *
	 * array
	 * @access public
	 * @var PaymentDetailsType
	 */
	public $PaymentDetails;

	/**
	 * List of Fall Back Shipping options provided by merchant.
	 *
	 * array
	 * @access public
	 * @var ShippingOptionType
	 */
	public $FlatRateShippingOptions;

	/**
	 * Information about the call back timeout override.
	 *
	 * @access public
	 * @var string
	 */
	public $CallbackTimeout;

	/**
	 * Information about the call back version.
	 *
	 * @access public
	 * @var string
	 */
	public $CallbackVersion;

	/**
	 * Information about the Customer service number.
	 *
	 * @access public
	 * @var string
	 */
	public $CustomerServiceNumber;

	/**
	 * Information about the Gift message enable.
	 *
	 * @access public
	 * @var string
	 */
	public $GiftMessageEnable;

	/**
	 * Information about the Gift receipt enable.
	 *
	 * @access public
	 * @var string
	 */
	public $GiftReceiptEnable;

	/**
	 * Information about the Gift Wrap enable.
	 *
	 * @access public
	 * @var string
	 */
	public $GiftWrapEnable;

	/**
	 * Information about the Gift Wrap name.
	 *
	 * @access public
	 * @var string
	 */
	public $GiftWrapName;

	/**
	 * Information about the Gift Wrap amount.
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $GiftWrapAmount;

	/**
	 * Information about the Buyer email option enable .
	 *
	 * @access public
	 * @var string
	 */
	public $BuyerEmailOptInEnable;

	/**
	 * Information about the survey enable.
	 *
	 * @access public
	 * @var string
	 */
	public $SurveyEnable;

	/**
	 * Information about the survey question.
	 *
	 * @access public
	 * @var string
	 */
	public $SurveyQuestion;

	/**
	 * Information about the survey choices for survey question.
	 *
	 * array
	 * @access public
	 * @var string
	 */
	public $SurveyChoice;

	/**
	 * @access public
	 * @var TotalType
	 */
	public $TotalType;

	/**
	 * Any message the seller would like to be displayed in the Mini Cart for UX.
	 *
	 * @access public
	 * @var string
	 */
	public $NoteToBuyer;

	/**
	 * Incentive Code
	 * Optional
	 * List of incentive codes supplied by ebay/merchant.
	 *
	 * array
	 * @access public
	 * @var IncentiveInfoType
	 */
	public $Incentives;

	/**
	 * Merchant specified flag which indicates whether to return Funding Instrument Details in DoEC or not.
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $ReqInstrumentDetails;

	/**
	 * This element contains information that allows the merchant to request to
	 * opt into external remember me on behalf of the buyer or to request login
	 * bypass using external remember me.  Note the opt-in details are silently
	 * ignored if the ExternalRememberMeID is present.
	 *
	 * @access public
	 * @var ExternalRememberMeOptInDetailsType
	 */
	public $ExternalRememberMeOptInDetails;

	/**
	 * An optional set of values related to flow-specific details.
	 *
	 * @access public
	 * @var FlowControlDetailsType
	 */
	public $FlowControlDetails;

	/**
	 * An optional set of values related to display-specific details.
	 *
	 * @access public
	 * @var DisplayControlDetailsType
	 */
	public $DisplayControlDetails;

	/**
	 * An optional set of values related to tracking for external partner.
	 *
	 * @access public
	 * @var ExternalPartnerTrackingDetailsType
	 */
	public $ExternalPartnerTrackingDetails;


	public function toXMLString()  {
		$str = '';
		if($this->OrderTotal != null ) {
			$str .='<ebl:OrderTotal';
			$str .= $this->OrderTotal->toXMLString();
			$str .=  '</ebl:OrderTotal>';
		 }
		if($this->ReturnURL != null ) {
			$str .= '<ebl:ReturnURL>'.$this->ReturnURL.'</ebl:ReturnURL>';
		 }
		if($this->CancelURL != null ) {
			$str .= '<ebl:CancelURL>'.$this->CancelURL.'</ebl:CancelURL>';
		 }
		if($this->TrackingImageURL != null ) {
			$str .= '<ebl:TrackingImageURL>'.$this->TrackingImageURL.'</ebl:TrackingImageURL>';
		 }
		if($this->giropaySuccessURL != null ) {
			$str .= '<ebl:giropaySuccessURL>'.$this->giropaySuccessURL.'</ebl:giropaySuccessURL>';
		 }
		if($this->giropayCancelURL != null ) {
			$str .= '<ebl:giropayCancelURL>'.$this->giropayCancelURL.'</ebl:giropayCancelURL>';
		 }
		if($this->BanktxnPendingURL != null ) {
			$str .= '<ebl:BanktxnPendingURL>'.$this->BanktxnPendingURL.'</ebl:BanktxnPendingURL>';
		 }
		if($this->Token != null ) {
			$str .= '<ebl:Token>'.$this->Token.'</ebl:Token>';
		 }
		if($this->MaxAmount != null ) {
			$str .='<ebl:MaxAmount';
			$str .= $this->MaxAmount->toXMLString();
			$str .=  '</ebl:MaxAmount>';
		 }
		if($this->OrderDescription != null ) {
			$str .= '<ebl:OrderDescription>'.$this->OrderDescription.'</ebl:OrderDescription>';
		 }
		if($this->Custom != null ) {
			$str .= '<ebl:Custom>'.$this->Custom.'</ebl:Custom>';
		 }
		if($this->InvoiceID != null ) {
			$str .= '<ebl:InvoiceID>'.$this->InvoiceID.'</ebl:InvoiceID>';
		 }
		if($this->ReqConfirmShipping != null ) {
			$str .= '<ebl:ReqConfirmShipping>'.$this->ReqConfirmShipping.'</ebl:ReqConfirmShipping>';
		 }
		if($this->ReqBillingAddress != null ) {
			$str .= '<ebl:ReqBillingAddress>'.$this->ReqBillingAddress.'</ebl:ReqBillingAddress>';
		 }
		if($this->BillingAddress != null ) {
			$str .='<ebl:BillingAddress>';
			$str .= $this->BillingAddress->toXMLString();
			$str .=  '</ebl:BillingAddress>';
		 }
		if($this->NoShipping != null ) {
			$str .= '<ebl:NoShipping>'.$this->NoShipping.'</ebl:NoShipping>';
		 }
		if($this->AddressOverride != null ) {
			$str .= '<ebl:AddressOverride>'.$this->AddressOverride.'</ebl:AddressOverride>';
		 }
		if($this->LocaleCode != null ) {
			$str .= '<ebl:LocaleCode>'.$this->LocaleCode.'</ebl:LocaleCode>';
		 }
		if($this->PageStyle != null ) {
			$str .= '<ebl:PageStyle>'.$this->PageStyle.'</ebl:PageStyle>';
		 }
		if($this->cppheaderimage != null ) {
			$str .= '<ebl:cpp-header-image>'.$this->cppheaderimage.'</ebl:cpp-header-image>';
		 }
		if($this->cppheaderbordercolor != null ) {
			$str .= '<ebl:cpp-header-border-color>'.$this->cppheaderbordercolor.'</ebl:cpp-header-border-color>';
		 }
		if($this->cppheaderbackcolor != null ) {
			$str .= '<ebl:cpp-header-back-color>'.$this->cppheaderbackcolor.'</ebl:cpp-header-back-color>';
		 }
		if($this->cpppayflowcolor != null ) {
			$str .= '<ebl:cpp-payflow-color>'.$this->cpppayflowcolor.'</ebl:cpp-payflow-color>';
		 }
		if($this->cppcartbordercolor != null ) {
			$str .= '<ebl:cpp-cart-border-color>'.$this->cppcartbordercolor.'</ebl:cpp-cart-border-color>';
		 }
		if($this->cpplogoimage != null ) {
			$str .= '<ebl:cpp-logo-image>'.$this->cpplogoimage.'</ebl:cpp-logo-image>';
		 }
		if($this->Address != null ) {
			$str .='<ebl:Address>';
			$str .= $this->Address->toXMLString();
			$str .=  '</ebl:Address>';
		 }
		if($this->PaymentAction != null ) {
			$str .= '<ebl:PaymentAction>'.$this->PaymentAction.'</ebl:PaymentAction>';
		 }
		if($this->SolutionType != null ) {
			$str .= '<ebl:SolutionType>'.$this->SolutionType.'</ebl:SolutionType>';
		 }
		if($this->LandingPage != null ) {
			$str .= '<ebl:LandingPage>'.$this->LandingPage.'</ebl:LandingPage>';
		 }
		if($this->BuyerEmail != null ) {
			$str .= '<ebl:BuyerEmail>'.$this->BuyerEmail.'</ebl:BuyerEmail>';
		 }
		if($this->ChannelType != null ) {
			$str .= '<ebl:ChannelType>'.$this->ChannelType.'</ebl:ChannelType>';
		 }
		if($this->BillingAgreementDetails != null ) {
		for($i=0; $i<count($this->BillingAgreementDetails);$i++) {
			$str .= '<ebl:BillingAgreementDetails>';
			$str .= $this->BillingAgreementDetails[$i]->toXMLString();
			$str .=  '</ebl:BillingAgreementDetails>';
		 }
		 }
		if($this->PromoCodes != null ) {
		for($i=0; $i<count($this->PromoCodes);$i++) {
			$str .= '<ebl:PromoCodes>'.$this->PromoCodes[$i].'</ebl:PromoCodes>';
		 }
		 }
		if($this->PayPalCheckOutBtnType != null ) {
			$str .= '<ebl:PayPalCheckOutBtnType>'.$this->PayPalCheckOutBtnType.'</ebl:PayPalCheckOutBtnType>';
		 }
		if($this->ProductCategory != null ) {
			$str .= '<ebl:ProductCategory>'.$this->ProductCategory.'</ebl:ProductCategory>';
		 }
		if($this->ShippingMethod != null ) {
			$str .= '<ebl:ShippingMethod>'.$this->ShippingMethod.'</ebl:ShippingMethod>';
		 }
		if($this->ProfileAddressChangeDate != null ) {
			$str .= '<ebl:ProfileAddressChangeDate>'.$this->ProfileAddressChangeDate.'</ebl:ProfileAddressChangeDate>';
		 }
		if($this->AllowNote != null ) {
			$str .= '<ebl:AllowNote>'.$this->AllowNote.'</ebl:AllowNote>';
		 }
		if($this->FundingSourceDetails != null ) {
			$str .='<ebl:FundingSourceDetails>';
			$str .= $this->FundingSourceDetails->toXMLString();
			$str .=  '</ebl:FundingSourceDetails>';
		 }
		if($this->BrandName != null ) {
			$str .= '<ebl:BrandName>'.$this->BrandName.'</ebl:BrandName>';
		 }
		if($this->CallbackURL != null ) {
			$str .= '<ebl:CallbackURL>'.$this->CallbackURL.'</ebl:CallbackURL>';
		 }
		if($this->EnhancedCheckoutData != null ) {
			$str .='<ebl:EnhancedCheckoutData>';
			$str .= $this->EnhancedCheckoutData->toXMLString();
			$str .=  '</ebl:EnhancedCheckoutData>';
		 }
		if($this->OtherPaymentMethods != null ) {
		for($i=0; $i<count($this->OtherPaymentMethods);$i++) {
			$str .= '<ebl:OtherPaymentMethods>';
			$str .= $this->OtherPaymentMethods[$i]->toXMLString();
			$str .=  '</ebl:OtherPaymentMethods>';
		 }
		 }
		if($this->BuyerDetails != null ) {
			$str .='<ebl:BuyerDetails>';
			$str .= $this->BuyerDetails->toXMLString();
			$str .=  '</ebl:BuyerDetails>';
		 }
		if($this->PaymentDetails != null ) {
		for($i=0; $i<count($this->PaymentDetails);$i++) {
			$str .= '<ebl:PaymentDetails>';
			$str .= $this->PaymentDetails[$i]->toXMLString();
			$str .=  '</ebl:PaymentDetails>';
		 }
		 }
		if($this->FlatRateShippingOptions != null ) {
		for($i=0; $i<count($this->FlatRateShippingOptions);$i++) {
			$str .= '<ebl:FlatRateShippingOptions>';
			$str .= $this->FlatRateShippingOptions[$i]->toXMLString();
			$str .=  '</ebl:FlatRateShippingOptions>';
		 }
		 }
		if($this->CallbackTimeout != null ) {
			$str .= '<ebl:CallbackTimeout>'.$this->CallbackTimeout.'</ebl:CallbackTimeout>';
		 }
		if($this->CallbackVersion != null ) {
			$str .= '<ebl:CallbackVersion>'.$this->CallbackVersion.'</ebl:CallbackVersion>';
		 }
		if($this->CustomerServiceNumber != null ) {
			$str .= '<ebl:CustomerServiceNumber>'.$this->CustomerServiceNumber.'</ebl:CustomerServiceNumber>';
		 }
		if($this->GiftMessageEnable != null ) {
			$str .= '<ebl:GiftMessageEnable>'.$this->GiftMessageEnable.'</ebl:GiftMessageEnable>';
		 }
		if($this->GiftReceiptEnable != null ) {
			$str .= '<ebl:GiftReceiptEnable>'.$this->GiftReceiptEnable.'</ebl:GiftReceiptEnable>';
		 }
		if($this->GiftWrapEnable != null ) {
			$str .= '<ebl:GiftWrapEnable>'.$this->GiftWrapEnable.'</ebl:GiftWrapEnable>';
		 }
		if($this->GiftWrapName != null ) {
			$str .= '<ebl:GiftWrapName>'.$this->GiftWrapName.'</ebl:GiftWrapName>';
		 }
		if($this->GiftWrapAmount != null ) {
			$str .='<ebl:GiftWrapAmount';
			$str .= $this->GiftWrapAmount->toXMLString();
			$str .=  '</ebl:GiftWrapAmount>';
		 }
		if($this->BuyerEmailOptInEnable != null ) {
			$str .= '<ebl:BuyerEmailOptInEnable>'.$this->BuyerEmailOptInEnable.'</ebl:BuyerEmailOptInEnable>';
		 }
		if($this->SurveyEnable != null ) {
			$str .= '<ebl:SurveyEnable>'.$this->SurveyEnable.'</ebl:SurveyEnable>';
		 }
		if($this->SurveyQuestion != null ) {
			$str .= '<ebl:SurveyQuestion>'.$this->SurveyQuestion.'</ebl:SurveyQuestion>';
		 }
		if($this->SurveyChoice != null ) {
		for($i=0; $i<count($this->SurveyChoice);$i++) {
			$str .= '<ebl:SurveyChoice>'.$this->SurveyChoice[$i].'</ebl:SurveyChoice>';
		 }
		 }
		if($this->TotalType != null ) {
			$str .= '<ebl:TotalType>'.$this->TotalType.'</ebl:TotalType>';
		 }
		if($this->NoteToBuyer != null ) {
			$str .= '<ebl:NoteToBuyer>'.$this->NoteToBuyer.'</ebl:NoteToBuyer>';
		 }
		if($this->Incentives != null ) {
		for($i=0; $i<count($this->Incentives);$i++) {
			$str .= '<ebl:Incentives>';
			$str .= $this->Incentives[$i]->toXMLString();
			$str .=  '</ebl:Incentives>';
		 }
		 }
		if($this->ReqInstrumentDetails != null ) {
			$str .= '<ebl:ReqInstrumentDetails>'.$this->ReqInstrumentDetails.'</ebl:ReqInstrumentDetails>';
		 }
		if($this->ExternalRememberMeOptInDetails != null ) {
			$str .='<ebl:ExternalRememberMeOptInDetails>';
			$str .= $this->ExternalRememberMeOptInDetails->toXMLString();
			$str .=  '</ebl:ExternalRememberMeOptInDetails>';
		 }
		if($this->FlowControlDetails != null ) {
			$str .='<ebl:FlowControlDetails>';
			$str .= $this->FlowControlDetails->toXMLString();
			$str .=  '</ebl:FlowControlDetails>';
		 }
		if($this->DisplayControlDetails != null ) {
			$str .='<ebl:DisplayControlDetails>';
			$str .= $this->DisplayControlDetails->toXMLString();
			$str .=  '</ebl:DisplayControlDetails>';
		 }
		if($this->ExternalPartnerTrackingDetails != null ) {
			$str .='<ebl:ExternalPartnerTrackingDetails>';
			$str .= $this->ExternalPartnerTrackingDetails->toXMLString();
			$str .=  '</ebl:ExternalPartnerTrackingDetails>';
		 }

		return $str;
	}

}

/**
 * ExecuteCheckoutOperationsRequestDetailsType
 * On your first invocation of ExecuteCheckoutOperationsRequest, the value of this token is returned by ExecuteCheckoutOperationsResponse.
 * Optional
 * Include this element and its value only if you want to modify an existing checkout session with another invocation of ExecuteCheckoutOperationsRequest; for example, if you want the customer to edit his shipping address on PayPal.
 * Character length and limitations: 20 single-byte characters
 */
class ExecuteCheckoutOperationsRequestDetailsType {
	/**
	 * On your first invocation of ExecuteCheckoutOperationsRequest, the value of this token is returned by ExecuteCheckoutOperationsResponse.
	 * Optional
	 * Include this element and its value only if you want to modify an existing checkout session with another invocation of ExecuteCheckoutOperationsRequest; for example, if you want the customer to edit his shipping address on PayPal.
	 * Character length and limitations: 20 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $Token;

	/**
	 * All the Data required to initiate the checkout session is passed in this element.
	 *
	 * @access public
	 * @var SetDataRequestType
	 */
	public $SetDataRequest;

	/**
	 * If auto authorization is required, this should be passed in with IsRequested set to yes.
	 *
	 * @access public
	 * @var AuthorizationRequestType
	 */
	public $AuthorizationRequest;


	public function __construct($SetDataRequest = null) {
		$this->SetDataRequest  = $SetDataRequest;
	}

	public function toXMLString()  {
		$str = '';
		if($this->Token != null ) {
			$str .= '<ebl:Token>'.$this->Token.'</ebl:Token>';
		 }
		if($this->SetDataRequest != null ) {
			$str .='<ebl:SetDataRequest>';
			$str .= $this->SetDataRequest->toXMLString();
			$str .=  '</ebl:SetDataRequest>';
		 }
		if($this->AuthorizationRequest != null ) {
			$str .='<ebl:AuthorizationRequest>';
			$str .= $this->AuthorizationRequest->toXMLString();
			$str .=  '</ebl:AuthorizationRequest>';
		 }

		return $str;
	}

}

/**
 * SetDataRequestType
 * Details about Billing Agreements requested to be created.
 */
class SetDataRequestType {
	/**
	 * Details about Billing Agreements requested to be created.
	 *
	 * array
	 * @access public
	 * @var BillingApprovalDetailsType
	 */
	public $BillingApprovalDetails;

	/**
	 * Only needed if Auto Authorization is requested. The authentication session token will be passed in here.
	 *
	 * @access public
	 * @var BuyerDetailType
	 */
	public $BuyerDetail;

	/**
	 * Requests for specific buyer information like Billing Address to be returned through GetExpressCheckoutDetails should be specified under this.
	 *
	 * @access public
	 * @var InfoSharingDirectivesType
	 */
	public $InfoSharingDirectives;


	public function toXMLString()  {
		$str = '';
		if($this->BillingApprovalDetails != null ) {
		for($i=0; $i<count($this->BillingApprovalDetails);$i++) {
			$str .= '<ebl:BillingApprovalDetails>';
			$str .= $this->BillingApprovalDetails[$i]->toXMLString();
			$str .=  '</ebl:BillingApprovalDetails>';
		 }
		 }
		if($this->BuyerDetail != null ) {
			$str .='<ebl:BuyerDetail>';
			$str .= $this->BuyerDetail->toXMLString();
			$str .=  '</ebl:BuyerDetail>';
		 }
		if($this->InfoSharingDirectives != null ) {
			$str .='<ebl:InfoSharingDirectives>';
			$str .= $this->InfoSharingDirectives->toXMLString();
			$str .=  '</ebl:InfoSharingDirectives>';
		 }

		return $str;
	}

}

/**
 * AuthorizationRequestType
 */
class AuthorizationRequestType {
	/**
	 *
	 * @access public
	 * @var boolean
	 */
	public $IsRequested;


	public function __construct($IsRequested = null) {
		$this->IsRequested  = $IsRequested;
	}

	public function toXMLString()  {
		$str = '';
		if($this->IsRequested != null ) {
			$str .= '<ebl:IsRequested>'.$this->IsRequested.'</ebl:IsRequested>';
		 }

		return $str;
	}

}

/**
 * BillingApprovalDetailsType
 * The Type of Approval requested - Billing Agreement or Profile
 */
class BillingApprovalDetailsType {
	/**
The Type of Approval requested - Billing Agreement or Profile	 *
	 * @access public
	 * @var ApprovalTypeType
	 */
	public $ApprovalType;

	/**
The Approval subtype - Must be MerchantInitiatedBilling for BillingAgreement ApprovalType	 *
	 * @access public
	 * @var ApprovalSubTypeType
	 */
	public $ApprovalSubType;

	/**
Description about the Order	 *
	 * @access public
	 * @var OrderDetailsType
	 */
	public $OrderDetails;

	/**
Directives about the type of payment	 *
	 * @access public
	 * @var PaymentDirectivesType
	 */
	public $PaymentDirectives;

	/**
Client may pass in its identification of this Billing Agreement. It used for the client's tracking purposes.	 *
	 * @access public
	 * @var string
	 */
	public $Custom;


	public function __construct($ApprovalType = null) {
		$this->ApprovalType  = $ApprovalType;
	}

	public function toXMLString()  {
		$str = '';
		if($this->ApprovalType != null ) {
			$str .= '<ebl:ApprovalType>'.$this->ApprovalType.'</ebl:ApprovalType>';
		 }
		if($this->ApprovalSubType != null ) {
			$str .= '<ebl:ApprovalSubType>'.$this->ApprovalSubType.'</ebl:ApprovalSubType>';
		 }
		if($this->OrderDetails != null ) {
			$str .='<ebl:OrderDetails>';
			$str .= $this->OrderDetails->toXMLString();
			$str .=  '</ebl:OrderDetails>';
		 }
		if($this->PaymentDirectives != null ) {
			$str .='<ebl:PaymentDirectives>';
			$str .= $this->PaymentDirectives->toXMLString();
			$str .=  '</ebl:PaymentDirectives>';
		 }
		if($this->Custom != null ) {
			$str .= '<ebl:Custom>'.$this->Custom.'</ebl:Custom>';
		 }

		return $str;
	}

}

/**
 * InfoSharingDirectivesType
 * If Billing Address should be returned in GetExpressCheckoutDetails response, this parameter should be set to yes here
 */
class InfoSharingDirectivesType {
	/**
If Billing Address should be returned in GetExpressCheckoutDetails response, this parameter should be set to yes here	 *
	 * @access public
	 * @var string
	 */
	public $ReqBillingAddress;


	public function toXMLString()  {
		$str = '';
		if($this->ReqBillingAddress != null ) {
			$str .= '<ebl:ReqBillingAddress>'.$this->ReqBillingAddress.'</ebl:ReqBillingAddress>';
		 }

		return $str;
	}

}

/**
 * OrderDetailsType
 * Description of the Order.
 */
class OrderDetailsType {
	/**
Description of the Order.	 *
	 * @access public
	 * @var string
	 */
	public $Description;

	/**
Expected maximum amount that the merchant may pull using DoReferenceTransaction	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $MaxAmount;


	public function toXMLString()  {
		$str = '';
		if($this->Description != null ) {
			$str .= '<ebl:Description>'.$this->Description.'</ebl:Description>';
		 }
		if($this->MaxAmount != null ) {
			$str .='<ebl:MaxAmount';
			$str .= $this->MaxAmount->toXMLString();
			$str .=  '</ebl:MaxAmount>';
		 }

		return $str;
	}

}

/**
 * PaymentDirectivesType
 * Type of the Payment is it Instant or Echeck or Any.
 */
class PaymentDirectivesType {
	/**
Type of the Payment is it Instant or Echeck or Any.	 *
	 * @access public
	 * @var MerchantPullPaymentCodeType
	 */
	public $PaymentType;


	public function toXMLString()  {
		$str = '';
		if($this->PaymentType != null ) {
			$str .= '<ebl:PaymentType>'.$this->PaymentType.'</ebl:PaymentType>';
		 }

		return $str;
	}

}

/**
 * BuyerDetailType
 * Information that is used to indentify the Buyer. This is used for auto authorization. Mandatory if Authorization is requested.
 */
class BuyerDetailType {
	/**
Information that is used to indentify the Buyer. This is used for auto authorization. Mandatory if Authorization is requested.	 *
	 * @access public
	 * @var IdentificationInfoType
	 */
	public $IdentificationInfo;


	public function toXMLString()  {
		$str = '';
		if($this->IdentificationInfo != null ) {
			$str .='<ebl:IdentificationInfo>';
			$str .= $this->IdentificationInfo->toXMLString();
			$str .=  '</ebl:IdentificationInfo>';
		 }

		return $str;
	}

}

/**
 * IdentificationInfoType
 * Mobile specific buyer identification.
 */
class IdentificationInfoType {
	/**
Mobile specific buyer identification.	 *
	 * @access public
	 * @var MobileIDInfoType
	 */
	public $MobileIDInfo;

	/**
Contains login bypass information.	 *
	 * @access public
	 * @var RememberMeIDInfoType
	 */
	public $RememberMeIDInfo;

	/**
Identity Access Token.	 *
	 * @access public
	 * @var IdentityTokenInfoType
	 */
	public $IdentityTokenInfo;


	public function toXMLString()  {
		$str = '';
		if($this->MobileIDInfo != null ) {
			$str .='<ebl:MobileIDInfo>';
			$str .= $this->MobileIDInfo->toXMLString();
			$str .=  '</ebl:MobileIDInfo>';
		 }
		if($this->RememberMeIDInfo != null ) {
			$str .='<ebl:RememberMeIDInfo>';
			$str .= $this->RememberMeIDInfo->toXMLString();
			$str .=  '</ebl:RememberMeIDInfo>';
		 }
		if($this->IdentityTokenInfo != null ) {
			$str .='<ebl:IdentityTokenInfo>';
			$str .= $this->IdentityTokenInfo->toXMLString();
			$str .=  '</ebl:IdentityTokenInfo>';
		 }

		return $str;
	}

}

/**
 * MobileIDInfoType
 * The Session token returned during buyer authentication.
 */
class MobileIDInfoType {
	/**
The Session token returned during buyer authentication.	 *
	 * @access public
	 * @var string
	 */
	public $SessionToken;


	public function toXMLString()  {
		$str = '';
		if($this->SessionToken != null ) {
			$str .= '<ebl:SessionToken>'.$this->SessionToken.'</ebl:SessionToken>';
		 }

		return $str;
	}

}

/**
 * RememberMeIDInfoType
 * External remember-me ID returned by GetExpressCheckoutDetails on successful opt-in. The
 * ExternalRememberMeID is a 17-character alphanumeric (encrypted) string that identifies
 * the buyer's remembered login with a merchant and has meaning only to the merchant.  If
 * present, requests that the web flow attempt bypass of login.
 */
class RememberMeIDInfoType {
	/**
	 * External remember-me ID returned by GetExpressCheckoutDetails on successful opt-in. The
	 * ExternalRememberMeID is a 17-character alphanumeric (encrypted) string that identifies
	 * the buyer's remembered login with a merchant and has meaning only to the merchant.  If
	 * present, requests that the web flow attempt bypass of login.
	 *
	 * @access public
	 * @var string
	 */
	public $ExternalRememberMeID;


	public function toXMLString()  {
		$str = '';
		if($this->ExternalRememberMeID != null ) {
			$str .= '<ebl:ExternalRememberMeID>'.$this->ExternalRememberMeID.'</ebl:ExternalRememberMeID>';
		 }

		return $str;
	}

}

/**
 * IdentityTokenInfoType
 * Identity Access token from merchant
 */
class IdentityTokenInfoType {
	/**
Identity Access token from merchant	 *
	 * @access public
	 * @var string
	 */
	public $AccessToken;


	public function __construct($AccessToken = null) {
		$this->AccessToken  = $AccessToken;
	}

	public function toXMLString()  {
		$str = '';
		if($this->AccessToken != null ) {
			$str .= '<ebl:AccessToken>'.$this->AccessToken.'</ebl:AccessToken>';
		 }

		return $str;
	}

}

/**
 * FundingSourceDetailsType
 * Allowable values: 0,1  
 * The value 1 indicates that the customer can accept push funding, and 0 means they cannot.
 * Optional
 * Character length and limitations: One single-byte numeric character.
 */
class FundingSourceDetailsType {
	/**
	 * Allowable values: 0,1  
	 * The value 1 indicates that the customer can accept push funding, and 0 means they cannot.
	 * Optional
	 * Character length and limitations: One single-byte numeric character.
	 *
	 * @access public
	 * @var string
	 */
	public $AllowPushFunding;

	/**
	 * Allowable values: ELV, CreditCard, ChinaUnionPay, BML 
	 * This element could be used to specify the perered funding option 
	 * for a guest users. It has effect only if LandingPage element is set to Billing. 
	 * Otherwise it will be ignored. 
	 *
	 * @access public
	 * @var UserSelectedFundingSourceType
	 */
	public $UserSelectedFundingSource;


	public function toXMLString()  {
		$str = '';
		if($this->AllowPushFunding != null ) {
			$str .= '<ebl:AllowPushFunding>'.$this->AllowPushFunding.'</ebl:AllowPushFunding>';
		 }
		if($this->UserSelectedFundingSource != null ) {
			$str .= '<ebl:UserSelectedFundingSource>'.$this->UserSelectedFundingSource.'</ebl:UserSelectedFundingSource>';
		 }

		return $str;
	}

}

/**
 * BillingAgreementDetailsType
 */
class BillingAgreementDetailsType {
	/**
	 *
	 * @access public
	 * @var BillingCodeType
	 */
	public $BillingType;

	/**
	 * Only needed for AutoBill billinng type.
	 *
	 * @access public
	 * @var string
	 */
	public $BillingAgreementDescription;

	/**
	 *
	 * @access public
	 * @var MerchantPullPaymentCodeType
	 */
	public $PaymentType;

	/**
	 * Custom annotation field for your exclusive use.
	 *
	 * @access public
	 * @var string
	 */
	public $BillingAgreementCustom;


	public function __construct($BillingType = null) {
		$this->BillingType  = $BillingType;
	}

	public function toXMLString()  {
		$str = '';
		if($this->BillingType != null ) {
			$str .= '<ebl:BillingType>'.$this->BillingType.'</ebl:BillingType>';
		 }
		if($this->BillingAgreementDescription != null ) {
			$str .= '<ebl:BillingAgreementDescription>'.$this->BillingAgreementDescription.'</ebl:BillingAgreementDescription>';
		 }
		if($this->PaymentType != null ) {
			$str .= '<ebl:PaymentType>'.$this->PaymentType.'</ebl:PaymentType>';
		 }
		if($this->BillingAgreementCustom != null ) {
			$str .= '<ebl:BillingAgreementCustom>'.$this->BillingAgreementCustom.'</ebl:BillingAgreementCustom>';
		 }

		return $str;
	}

}

/**
 * GetExpressCheckoutDetailsResponseDetailsType
 * The timestamped token value that was returned by SetExpressCheckoutResponse and passed on GetExpressCheckoutDetailsRequest. 
 * Character length and limitations: 20 single-byte characters
 */
class GetExpressCheckoutDetailsResponseDetailsType {
	/**
	 * The timestamped token value that was returned by SetExpressCheckoutResponse and passed on GetExpressCheckoutDetailsRequest. 
	 * Character length and limitations: 20 single-byte characters	 *
	 * @access public
	 * @var string
	 */
	public $Token;

	/**
	 * Information about the payer	 *
	 * @access public
	 * @var PayerInfoType
	 */
	public $PayerInfo;

	/**
	 * A free-form field for your own use, as set by you in the Custom element of SetExpressCheckoutRequest. 
	 * Character length and limitations: 256 single-byte alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $Custom;

	/**
	 * Your own invoice or tracking number, as set by you in the InvoiceID element of SetExpressCheckoutRequest. 
	 * Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $InvoiceID;

	/**
	 * Payer's contact telephone number. PayPal returns a contact telephone number only if your Merchant account profile settings require that the buyer enter one.	 *
	 * @access public
	 * @var string
	 */
	public $ContactPhone;

	/**
	 *
	 * @access public
	 * @var boolean
	 */
	public $BillingAgreementAcceptedStatus;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $RedirectRequired;

	/**
Customer's billing address.
	 * Optional
	 * If you have credit card mapped in your account then billing address of the credit card is returned otherwise your primary address is returned , PayPal returns this address in GetExpressCheckoutDetailsResponse.
	 *
	 * @access public
	 * @var AddressType
	 */
	public $BillingAddress;

	/**
	 * Text note entered by the buyer in PayPal flow.
	 *
	 * @access public
	 * @var string
	 */
	public $Note;

	/**
	 * Returns the status of the EC checkout session.
	 * Values include 'PaymentActionNotInitiated', 'PaymentActionFailed', 'PaymentActionInProgress', 'PaymentCompleted'.
	 *
	 * @access public
	 * @var string
	 */
	public $CheckoutStatus;

	/**
	 * PayPal may offer a discount or gift certificate to the buyer, which will be represented by a negativeamount. If the buyer has a negative balance, PayPal will add that amount to the current charges, which will be represented as a positive amount.
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $PayPalAdjustment;

	/**
	 * Information about the individual purchased items.
	 *
	 * array
	 * @access public
	 * @var PaymentDetailsType
	 */
	public $PaymentDetails;

	/**
	 * Information about the user selected options.
	 *
	 * @access public
	 * @var UserSelectedOptionType
	 */
	public $UserSelectedOptions;

	/**
	 * Information about the incentives that were applied from Ebay RYP page and PayPal RYP page.
	 *
	 * array
	 * @access public
	 * @var IncentiveDetailsType
	 */
	public $IncentiveDetails;

	/**
	 * Information about the Gift message.
	 *
	 * @access public
	 * @var string
	 */
	public $GiftMessage;

	/**
	 * Information about the Gift receipt enable.
	 *
	 * @access public
	 * @var string
	 */
	public $GiftReceiptEnable;

	/**
	 * Information about the Gift Wrap name.
	 *
	 * @access public
	 * @var string
	 */
	public $GiftWrapName;

	/**
	 * Information about the Gift Wrap amount.
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $GiftWrapAmount;

	/**
	 * Information about the Buyer marketing email.
	 *
	 * @access public
	 * @var string
	 */
	public $BuyerMarketingEmail;

	/**
	 * Information about the survey question.
	 *
	 * @access public
	 * @var string
	 */
	public $SurveyQuestion;

	/**
	 * Information about the survey choice selected by the user.
	 *
	 * array
	 * @access public
	 * @var string
	 */
	public $SurveyChoiceSelected;

	/**
	 * Contains payment request information about each bucket in the cart.
	 *
	 * array
	 * @access public
	 * @var PaymentRequestInfoType
	 */
	public $PaymentRequestInfo;

	/**
	 * Response information resulting from opt-in operation or current login bypass status.
	 *
	 * @access public
	 * @var ExternalRememberMeStatusDetailsType
	 */
	public $ExternalRememberMeStatusDetails;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='token') {
				$this->Token = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="payerinfo") {
				$this->PayerInfo = new PayerInfoType();
				$this->PayerInfo->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='custom') {
				$this->Custom = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='invoiceid') {
				$this->InvoiceID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='contactphone') {
				$this->ContactPhone = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='billingagreementacceptedstatus') {
				$this->BillingAgreementAcceptedStatus = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='redirectrequired') {
				$this->RedirectRequired = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="billingaddress") {
				$this->BillingAddress = new AddressType();
				$this->BillingAddress->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='note') {
				$this->Note = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='checkoutstatus') {
				$this->CheckoutStatus = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="paypaladjustment") {
				$this->PayPalAdjustment = new BasicAmountType();
				$this->PayPalAdjustment->init($arry["children"]);
					}
			}
			if (is_array($arry["children"])&& ($arry["children"])!=null) 	{
			$i=0;
			while(true) {
			if($arry["name"]=="paymentdetails[$i]") {
				$this->PaymentDetails[$i] = new PaymentDetailsType();
				$this->PaymentDetails[$i]->init($arry["children"]);
			}
			else break;
			$i++;
			}
		}
				if(is_array($arry["children"]) && ($arry["children"])!=null && $arry["name"]=="paymentdetails") {
				$this->PaymentDetails = new PaymentDetailsType();
				$this->PaymentDetails->init($arry["children"]);
					}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="userselectedoptions") {
				$this->UserSelectedOptions = new UserSelectedOptionType();
				$this->UserSelectedOptions->init($arry["children"]);
					}
			}
			if (is_array($arry["children"])&& ($arry["children"])!=null) 	{
			$i=0;
			while(true) {
			if($arry["name"]=="incentivedetails[$i]") {
				$this->IncentiveDetails[$i] = new IncentiveDetailsType();
				$this->IncentiveDetails[$i]->init($arry["children"]);
			}
			else break;
			$i++;
			}
		}
				if(is_array($arry["children"]) && ($arry["children"])!=null && $arry["name"]=="incentivedetails") {
				$this->IncentiveDetails = new IncentiveDetailsType();
				$this->IncentiveDetails->init($arry["children"]);
					}
			if($arry != null && isset($arry['text']) && $arry['name']=='giftmessage') {
				$this->GiftMessage = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='giftreceiptenable') {
				$this->GiftReceiptEnable = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='giftwrapname') {
				$this->GiftWrapName = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="giftwrapamount") {
				$this->GiftWrapAmount = new BasicAmountType();
				$this->GiftWrapAmount->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='buyermarketingemail') {
				$this->BuyerMarketingEmail = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='surveyquestion') {
				$this->SurveyQuestion = $arry["text"];
			}
			if (is_array($arry["children"])&& ($arry["children"])!=null) 	{
			$i=0;
			while(true) {
			if($arry["name"]=="paymentrequestinfo[$i]") {
				$this->PaymentRequestInfo[$i] = new PaymentRequestInfoType();
				$this->PaymentRequestInfo[$i]->init($arry["children"]);
			}
			else break;
			$i++;
			}
		}
				if(is_array($arry["children"]) && ($arry["children"])!=null && $arry["name"]=="paymentrequestinfo") {
				$this->PaymentRequestInfo = new PaymentRequestInfoType();
				$this->PaymentRequestInfo->init($arry["children"]);
					}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="externalremembermestatusdetails") {
				$this->ExternalRememberMeStatusDetails = new ExternalRememberMeStatusDetailsType();
				$this->ExternalRememberMeStatusDetails->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * ExecuteCheckoutOperationsResponseDetailsType
 */
class ExecuteCheckoutOperationsResponseDetailsType {
	/**
	 * @access public
	 * @var SetDataResponseType
	 */
	public $SetDataResponse;

	/**
	 * @access public
	 * @var AuthorizationResponseType
	 */
	public $AuthorizationResponse;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="setdataresponse") {
				$this->SetDataResponse = new SetDataResponseType();
				$this->SetDataResponse->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="authorizationresponse") {
				$this->AuthorizationResponse = new AuthorizationResponseType();
				$this->AuthorizationResponse->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * SetDataResponseType
 * If Checkout session was initialized successfully, the corresponding token is returned in this element.
 */
class SetDataResponseType {
	/**
	 * If Checkout session was initialized successfully, the corresponding token is returned in this element.
	 *
	 * @access public
	 * @var string
	 */
	public $Token;

	/**
	 * array
	 * @access public
	 * @var ErrorType
	 */
	public $SetDataError;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='token') {
				$this->Token = $arry["text"];
			}
			if (is_array($arry["children"])&& ($arry["children"])!=null) 	{
			$i=0;
			while(true) {
			if($arry["name"]=="setdataerror[$i]") {
				$this->SetDataError[$i] = new ErrorType();
				$this->SetDataError[$i]->init($arry["children"]);
			}
			else break;
			$i++;
			}
		}
				if(is_array($arry["children"]) && ($arry["children"])!=null && $arry["name"]=="setdataerror") {
				$this->SetDataError = new ErrorType();
				$this->SetDataError->init($arry["children"]);
					}
		}
		}
	}
}

/**
 * AuthorizationResponseType
 * Status will denote whether Auto authorization was successful or not.
 */
class AuthorizationResponseType {
	/**
	 * Status will denote whether Auto authorization was successful or not.
	 *
	 * @access public
	 * @var AckCodeType
	 */
	public $Status;

	/**
	 * array
	 * @access public
	 * @var ErrorType
	 */
	public $AuthorizationError;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='status') {
				$this->Status = $arry["text"];
			}
			if (is_array($arry["children"])&& ($arry["children"])!=null) 	{
			$i=0;
			while(true) {
			if($arry["name"]=="authorizationerror[$i]") {
				$this->AuthorizationError[$i] = new ErrorType();
				$this->AuthorizationError[$i]->init($arry["children"]);
			}
			else break;
			$i++;
			}
		}
				if(is_array($arry["children"]) && ($arry["children"])!=null && $arry["name"]=="authorizationerror") {
				$this->AuthorizationError = new ErrorType();
				$this->AuthorizationError->init($arry["children"]);
					}
		}
		}
	}
}

/**
 * DoExpressCheckoutPaymentRequestDetailsType
 * How you want to obtain payment. 
 * Required
 * Authorization indicates that this payment is a basic authorization subject to settlement with PayPal Authorization and Capture.
 * Order indicates that this payment is is an order authorization subject to settlement with PayPal Authorization and Capture.
 * Sale indicates that this is a final sale for which you are requesting payment.
 * IMPORTANT: You cannot set PaymentAction to Sale on SetExpressCheckoutRequest and then change PaymentAction to Authorization on the final Express Checkout API, DoExpressCheckoutPaymentRequest.
 * Character length and limit: Up to 13 single-byte alphabetic characters
 */
class DoExpressCheckoutPaymentRequestDetailsType {
	/**
	 * How you want to obtain payment. 
	 * Required
	 * Authorization indicates that this payment is a basic authorization subject to settlement with PayPal Authorization and Capture.
	 * Order indicates that this payment is is an order authorization subject to settlement with PayPal Authorization and Capture.
	 * Sale indicates that this is a final sale for which you are requesting payment.
	 * IMPORTANT: You cannot set PaymentAction to Sale on SetExpressCheckoutRequest and then change PaymentAction to Authorization on the final Express Checkout API, DoExpressCheckoutPaymentRequest.
	 * Character length and limit: Up to 13 single-byte alphabetic characters
	 *
	 * @access public
	 * @var PaymentActionCodeType
	 */
	public $PaymentAction;

	/**
	 * The timestamped token value that was returned by SetExpressCheckoutResponse and passed on GetExpressCheckoutDetailsRequest. 
	 * Required
	 * Character length and limitations: 20 single-byte characters	 *
	 * @access public
	 * @var string
	 */
	public $Token;

	/**
	 * Encrypted PayPal customer account identification number as returned by GetExpressCheckoutDetailsResponse. 
	 * Required
	 * Character length and limitations: 127 single-byte characters.
	 *
	 * @access public
	 * @var string
	 */
	public $PayerID;

	/**
	 * URL on Merchant site pertaining to this invoice. 
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $OrderURL;

	/**
	 * Information about the payment 
	 * Required
	 *
	 * array
	 * @access public
	 * @var PaymentDetailsType
	 */
	public $PaymentDetails;

	/**
	 * Flag to indicate if previously set promoCode shall be overriden. Value 1 indicates overriding.
	 *
	 * @access public
	 * @var string
	 */
	public $PromoOverrideFlag;

	/**
	 * Promotional financing code for item. Overrides any previous PromoCode setting.
	 *
	 * @access public
	 * @var string
	 */
	public $PromoCode;

	/**
	 * Contains data for enhanced data like Airline Itinerary Data.
	 *
	 * @access public
	 * @var EnhancedDataType
	 */
	public $EnhancedData;

	/**
	 * Soft Descriptor supported for Sale and Auth in DEC only. For Order this will be ignored.
	 *
	 * @access public
	 * @var string
	 */
	public $SoftDescriptor;

	/**
	 * Information about the user selected options.
	 *
	 * @access public
	 * @var UserSelectedOptionType
	 */
	public $UserSelectedOptions;

	/**
	 * Information about the Gift message.
	 *
	 * @access public
	 * @var string
	 */
	public $GiftMessage;

	/**
	 * Information about the Gift receipt enable.
	 *
	 * @access public
	 * @var string
	 */
	public $GiftReceiptEnable;

	/**
	 * Information about the Gift Wrap name.
	 *
	 * @access public
	 * @var string
	 */
	public $GiftWrapName;

	/**
	 * Information about the Gift Wrap amount.
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $GiftWrapAmount;

	/**
	 * Information about the Buyer marketing email.
	 *
	 * @access public
	 * @var string
	 */
	public $BuyerMarketingEmail;

	/**
	 * Information about the survey question.
	 *
	 * @access public
	 * @var string
	 */
	public $SurveyQuestion;

	/**
	 * Information about the survey choice selected by the user.
	 *
	 * array
	 * @access public
	 * @var string
	 */
	public $SurveyChoiceSelected;

	/**
An identification code for use by third-party applications to identify transactions. 
	 * Optional
	 * Character length and limitations: 32 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $ButtonSource;

	/**
	 * Merchant specified flag which indicates whether to create billing agreement as part of DoEC or not.
	 * Optional
	 *
	 * @access public
	 * @var boolean
	 */
	public $SkipBACreation;


	public function toXMLString()  {
		$str = '';
		if($this->PaymentAction != null ) {
			$str .= '<ebl:PaymentAction>'.$this->PaymentAction.'</ebl:PaymentAction>';
		 }
		if($this->Token != null ) {
			$str .= '<ebl:Token>'.$this->Token.'</ebl:Token>';
		 }
		if($this->PayerID != null ) {
			$str .= '<ebl:PayerID>'.$this->PayerID.'</ebl:PayerID>';
		 }
		if($this->OrderURL != null ) {
			$str .= '<ebl:OrderURL>'.$this->OrderURL.'</ebl:OrderURL>';
		 }
		if($this->PaymentDetails != null ) {
		for($i=0; $i<count($this->PaymentDetails);$i++) {
			$str .= '<ebl:PaymentDetails>';
			$str .= $this->PaymentDetails[$i]->toXMLString();
			$str .=  '</ebl:PaymentDetails>';
		 }
		 }
		if($this->PromoOverrideFlag != null ) {
			$str .= '<ebl:PromoOverrideFlag>'.$this->PromoOverrideFlag.'</ebl:PromoOverrideFlag>';
		 }
		if($this->PromoCode != null ) {
			$str .= '<ebl:PromoCode>'.$this->PromoCode.'</ebl:PromoCode>';
		 }
		if($this->EnhancedData != null ) {
			$str .='<ebl:EnhancedData>';
			$str .= $this->EnhancedData->toXMLString();
			$str .=  '</ebl:EnhancedData>';
		 }
		if($this->SoftDescriptor != null ) {
			$str .= '<ebl:SoftDescriptor>'.$this->SoftDescriptor.'</ebl:SoftDescriptor>';
		 }
		if($this->UserSelectedOptions != null ) {
			$str .='<ebl:UserSelectedOptions>';
			$str .= $this->UserSelectedOptions->toXMLString();
			$str .=  '</ebl:UserSelectedOptions>';
		 }
		if($this->GiftMessage != null ) {
			$str .= '<ebl:GiftMessage>'.$this->GiftMessage.'</ebl:GiftMessage>';
		 }
		if($this->GiftReceiptEnable != null ) {
			$str .= '<ebl:GiftReceiptEnable>'.$this->GiftReceiptEnable.'</ebl:GiftReceiptEnable>';
		 }
		if($this->GiftWrapName != null ) {
			$str .= '<ebl:GiftWrapName>'.$this->GiftWrapName.'</ebl:GiftWrapName>';
		 }
		if($this->GiftWrapAmount != null ) {
			$str .='<ebl:GiftWrapAmount';
			$str .= $this->GiftWrapAmount->toXMLString();
			$str .=  '</ebl:GiftWrapAmount>';
		 }
		if($this->BuyerMarketingEmail != null ) {
			$str .= '<ebl:BuyerMarketingEmail>'.$this->BuyerMarketingEmail.'</ebl:BuyerMarketingEmail>';
		 }
		if($this->SurveyQuestion != null ) {
			$str .= '<ebl:SurveyQuestion>'.$this->SurveyQuestion.'</ebl:SurveyQuestion>';
		 }
		if($this->SurveyChoiceSelected != null ) {
		for($i=0; $i<count($this->SurveyChoiceSelected);$i++) {
			$str .= '<ebl:SurveyChoiceSelected>'.$this->SurveyChoiceSelected[$i].'</ebl:SurveyChoiceSelected>';
		 }
		 }
		if($this->ButtonSource != null ) {
			$str .= '<ebl:ButtonSource>'.$this->ButtonSource.'</ebl:ButtonSource>';
		 }
		if($this->SkipBACreation != null ) {
			$str .= '<ebl:SkipBACreation>'.$this->SkipBACreation.'</ebl:SkipBACreation>';
		 }

		return $str;
	}

}

/**
 * DoExpressCheckoutPaymentResponseDetailsType
 * The timestamped token value that was returned by SetExpressCheckoutResponse and passed on GetExpressCheckoutDetailsRequest. 
 * Character length and limitations:20 single-byte characters
 */
class DoExpressCheckoutPaymentResponseDetailsType {
	/**
	 * The timestamped token value that was returned by SetExpressCheckoutResponse and passed on GetExpressCheckoutDetailsRequest. 
	 * Character length and limitations:20 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $Token;

	/**
Information about the transaction 	 *
	 * array
	 * @access public
	 * @var PaymentInfoType
	 */
	public $PaymentInfo;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $BillingAgreementID;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $RedirectRequired;

	/**
Memo entered by sender in PayPal Review Page note field.
	 * Optional
	 * Character length and limitations: 255 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $Note;

	/**
	 * Redirect back to PayPal, PayPal can host the success page. 	          
	 *
	 * @access public
	 * @var string
	 */
	public $SuccessPageRedirectRequested;

	/**
	 * Information about the user selected options.
	 *
	 * @access public
	 * @var UserSelectedOptionType
	 */
	public $UserSelectedOptions;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='token') {
				$this->Token = $arry["text"];
			}
			if (is_array($arry["children"])&& ($arry["children"])!=null) 	{
			$i=0;
			while(true) {
			if($arry["name"]=="paymentinfo[$i]") {
				$this->PaymentInfo[$i] = new PaymentInfoType();
				$this->PaymentInfo[$i]->init($arry["children"]);
			}
			else break;
			$i++;
			}
		}
				if(is_array($arry["children"]) && ($arry["children"])!=null && $arry["name"]=="paymentinfo") {
				$this->PaymentInfo = new PaymentInfoType();
				$this->PaymentInfo->init($arry["children"]);
					}
			if($arry != null && isset($arry['text']) && $arry['name']=='billingagreementid') {
				$this->BillingAgreementID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='redirectrequired') {
				$this->RedirectRequired = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='note') {
				$this->Note = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='successpageredirectrequested') {
				$this->SuccessPageRedirectRequested = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="userselectedoptions") {
				$this->UserSelectedOptions = new UserSelectedOptionType();
				$this->UserSelectedOptions->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * DoCaptureResponseDetailsType
 * The authorization identification number you specified in the request. 
Character length and limits: 19 single-byte characters maximum
 */
class DoCaptureResponseDetailsType {
	/**
The authorization identification number you specified in the request. 
Character length and limits: 19 single-byte characters maximum
	 *
	 * @access public
	 * @var string
	 */
	public $AuthorizationID;

	/**
Information about the transaction 	 *
	 * @access public
	 * @var PaymentInfoType
	 */
	public $PaymentInfo;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='authorizationid') {
				$this->AuthorizationID = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="paymentinfo") {
				$this->PaymentInfo = new PaymentInfoType();
				$this->PaymentInfo->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * DoDirectPaymentRequestDetailsType
 * How you want to obtain payment. 
 * Required
 * Authorization indicates that this payment is a basic authorization subject to settlement with PayPal Authorization and Capture.
 * Sale indicates that this is a final sale for which you are requesting payment.
 * NOTE: Order is not allowed for Direct Payment.
 * Character length and limit: Up to 13 single-byte alphabetic characters
 */
class DoDirectPaymentRequestDetailsType {
	/**
	 * How you want to obtain payment. 
	 * Required
	 * Authorization indicates that this payment is a basic authorization subject to settlement with PayPal Authorization and Capture.
	 * Sale indicates that this is a final sale for which you are requesting payment.
	 * NOTE: Order is not allowed for Direct Payment.
	 * Character length and limit: Up to 13 single-byte alphabetic characters	 *
	 * @access public
	 * @var PaymentActionCodeType
	 */
	public $PaymentAction;

	/**
	 * Information about the payment 
	 * Required
	 *
	 * @access public
	 * @var PaymentDetailsType
	 */
	public $PaymentDetails;

	/**
	 * Information about the credit card to be charged. 
	 * Required
	 *
	 * @access public
	 * @var CreditCardDetailsType
	 */
	public $CreditCard;

	/**
	 * IP address of the payer's browser as recorded in its HTTP request to your website. PayPal records this IP addresses as a means to detect possible fraud. 
	 * Required
	 * Character length and limitations: 15 single-byte characters, including periods, in dotted-quad format: ???.???.???.???
	 *
	 * @access public
	 * @var string
	 */
	public $IPAddress;

	/**
	 * Your customer session identification token. PayPal records this optional session identification token as an additional means to detect possible fraud. 
	 * Optional
	 * Character length and limitations: 64 single-byte numeric characters	 *
	 * @access public
	 * @var string
	 */
	public $MerchantSessionId;

	/**
	 *
	 * @access public
	 * @var boolean
	 */
	public $ReturnFMFDetails;


	public function toXMLString()  {
		$str = '';
		if($this->PaymentAction != null ) {
			$str .= '<ebl:PaymentAction>'.$this->PaymentAction.'</ebl:PaymentAction>';
		 }
		if($this->PaymentDetails != null ) {
			$str .='<ebl:PaymentDetails>';
			$str .= $this->PaymentDetails->toXMLString();
			$str .=  '</ebl:PaymentDetails>';
		 }
		if($this->CreditCard != null ) {
			$str .='<ebl:CreditCard>';
			$str .= $this->CreditCard->toXMLString();
			$str .=  '</ebl:CreditCard>';
		 }
		if($this->IPAddress != null ) {
			$str .= '<ebl:IPAddress>'.$this->IPAddress.'</ebl:IPAddress>';
		 }
		if($this->MerchantSessionId != null ) {
			$str .= '<ebl:MerchantSessionId>'.$this->MerchantSessionId.'</ebl:MerchantSessionId>';
		 }
		if($this->ReturnFMFDetails != null ) {
			$str .= '<ebl:ReturnFMFDetails>'.$this->ReturnFMFDetails.'</ebl:ReturnFMFDetails>';
		 }

		return $str;
	}

}

/**
 * CreateMobilePaymentRequestDetailsType
 * Type of the payment
 * Required
 */
class CreateMobilePaymentRequestDetailsType {
	/**
Type of the payment
	 * Required
	 *
	 * @access public
	 * @var MobilePaymentCodeType
	 */
	public $PaymentType;

	/**
	 * How you want to obtain payment.  Defaults to Sale.
	 * Optional
	 * Authorization indicates that this payment is a basic authorization subject to settlement with PayPal Authorization and Capture.
	 * Sale indicates that this is a final sale for which you are requesting payment.
	 *
	 * @access public
	 * @var PaymentActionCodeType
	 */
	public $PaymentAction;

	/**
Phone number of the user making the payment.
	 * Required
	 *
	 * @access public
	 * @var PhoneNumberType
	 */
	public $SenderPhone;

	/**
Type of recipient specified, i.e., phone number or email address
	 * Required
	 *
	 * @access public
	 * @var MobileRecipientCodeType
	 */
	public $RecipientType;

	/**
Email address of the recipient
	 *
	 * @access public
	 * @var string
	 */
	public $RecipientEmail;

	/**
Phone number of the recipipent
	 * Required
	 *
	 * @access public
	 * @var PhoneNumberType
	 */
	public $RecipientPhone;

	/**
Amount of item before tax and shipping
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $ItemAmount;

	/**
The tax charged on the transaction
Tax
	 * Optional
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Tax;

	/**
Per-transaction shipping charge
	 * Optional
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Shipping;

	/**
Name of the item being ordered
	 * Optional
	 * Character length and limitations: 255 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $ItemName;

	/**
SKU of the item being ordered
	 * Optional
	 * Character length and limitations: 255 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $ItemNumber;

	/**
Memo entered by sender in PayPal Website Payments note field.
	 * Optional
	 * Character length and limitations: 255 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $Note;

	/**
Unique ID for the order.  Required for non-P2P transactions
	 * Optional
	 * Character length and limitations: 255 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $CustomID;

	/**
Indicates whether the sender's phone number will be shared with recipient
	 * Optional
	 *
	 * @access public
	 * @var integer
	 */
	public $SharePhoneNumber;

	/**
Indicates whether the sender's home address will be shared with recipient
	 * Optional
	 *
	 * @access public
	 * @var integer
	 */
	public $ShareHomeAddress;


	public function toXMLString()  {
		$str = '';
		if($this->PaymentType != null ) {
			$str .= '<ebl:PaymentType>'.$this->PaymentType.'</ebl:PaymentType>';
		 }
		if($this->PaymentAction != null ) {
			$str .= '<ebl:PaymentAction>'.$this->PaymentAction.'</ebl:PaymentAction>';
		 }
		if($this->SenderPhone != null ) {
			$str .='<ebl:SenderPhone>';
			$str .= $this->SenderPhone->toXMLString();
			$str .=  '</ebl:SenderPhone>';
		 }
		if($this->RecipientType != null ) {
			$str .= '<ebl:RecipientType>'.$this->RecipientType.'</ebl:RecipientType>';
		 }
		if($this->RecipientEmail != null ) {
			$str .= '<ebl:RecipientEmail>'.$this->RecipientEmail.'</ebl:RecipientEmail>';
		 }
		if($this->RecipientPhone != null ) {
			$str .='<ebl:RecipientPhone>';
			$str .= $this->RecipientPhone->toXMLString();
			$str .=  '</ebl:RecipientPhone>';
		 }
		if($this->ItemAmount != null ) {
			$str .='<ebl:ItemAmount';
			$str .= $this->ItemAmount->toXMLString();
			$str .=  '</ebl:ItemAmount>';
		 }
		if($this->Tax != null ) {
			$str .='<ebl:Tax';
			$str .= $this->Tax->toXMLString();
			$str .=  '</ebl:Tax>';
		 }
		if($this->Shipping != null ) {
			$str .='<ebl:Shipping';
			$str .= $this->Shipping->toXMLString();
			$str .=  '</ebl:Shipping>';
		 }
		if($this->ItemName != null ) {
			$str .= '<ebl:ItemName>'.$this->ItemName.'</ebl:ItemName>';
		 }
		if($this->ItemNumber != null ) {
			$str .= '<ebl:ItemNumber>'.$this->ItemNumber.'</ebl:ItemNumber>';
		 }
		if($this->Note != null ) {
			$str .= '<ebl:Note>'.$this->Note.'</ebl:Note>';
		 }
		if($this->CustomID != null ) {
			$str .= '<ebl:CustomID>'.$this->CustomID.'</ebl:CustomID>';
		 }
		if($this->SharePhoneNumber != null ) {
			$str .= '<ebl:SharePhoneNumber>'.$this->SharePhoneNumber.'</ebl:SharePhoneNumber>';
		 }
		if($this->ShareHomeAddress != null ) {
			$str .= '<ebl:ShareHomeAddress>'.$this->ShareHomeAddress.'</ebl:ShareHomeAddress>';
		 }

		return $str;
	}

}

/**
 * GetMobileStatusRequestDetailsType
 * Phone number for status inquiry 
 */
class GetMobileStatusRequestDetailsType {
	/**
Phone number for status inquiry 	 *
	 * @access public
	 * @var PhoneNumberType
	 */
	public $Phone;


	public function toXMLString()  {
		$str = '';
		if($this->Phone != null ) {
			$str .='<ebl:Phone>';
			$str .= $this->Phone->toXMLString();
			$str .=  '</ebl:Phone>';
		 }

		return $str;
	}

}

/**
 * SetAuthFlowParamRequestDetailsType
 * URL to which the customer's browser is returned after choosing to login with PayPal.
 * Required
 * Character length and limitations: no limit. 
 */
class SetAuthFlowParamRequestDetailsType {
	/**
URL to which the customer's browser is returned after choosing to login with PayPal.
	 * Required
	 * Character length and limitations: no limit. 	 *
	 * @access public
	 * @var string
	 */
	public $ReturnURL;

	/**
URL to which the customer is returned if he does not approve the use of PayPal login. 
	 * Required
	 * Character length and limitations: no limit
	 *
	 * @access public
	 * @var string
	 */
	public $CancelURL;

	/**
URL to which the customer's browser is returned after user logs out from PayPal. 
	 * Required
	 * Character length and limitations: no limit. 	 *
	 * @access public
	 * @var string
	 */
	public $LogoutURL;

	/**
The type of the flow.
	 * Optional
	 * Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $InitFlowType;

	/**
The used to decide SkipLogin allowed or not.
	 * Optional
	 * Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $SkipLoginPage;

	/**
The name of the field Merchant requires from PayPal after user's login.
	 * Optional
	 * Character length and limitations: 256 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $ServiceName1;

	/**
Whether the field is required, opt-in or opt-out.
	 * Optional
	 * Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $ServiceDefReq1;

	/**
The name of the field Merchant requires from PayPal after user's login.
	 * Optional
	 * Character length and limitations: 256 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $ServiceName2;

	/**
Whether the field is required, opt-in or opt-out.
	 * Optional
	 * Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $ServiceDefReq2;

	/**
	 * Locale of pages displayed by PayPal during Authentication Login.
	 * Optional
	 * Character length and limitations: Five single-byte alphabetic characters, upper- or lowercase. 
	 * Allowable values: 
	 * AU or en_AU
	 * DE or de_DE
	 * FR or fr_FR
	 * GB or en_GB
	 * IT or it_IT
	 * JP or ja_JP
	 * US or en_US
	 *
	 * @access public
	 * @var string
	 */
	public $LocaleCode;

	/**
Sets the Custom Payment Page Style for flow pages associated with this button/link. PageStyle corresponds to the HTML variable page_style for customizing flow pages. The value is the same as the Page Style Name you chose when adding or editing the page style from the Profile subtab of the My Account tab of your PayPal account. 
	 * Optional
	 * Character length and limitations: 30 single-byte alphabetic characters.
	 *
	 * @access public
	 * @var string
	 */
	public $PageStyle;

	/**
	 * A URL for the image you want to appear at the top left of the flow page. The image has a maximum size of 750 pixels wide by 90 pixels high. PayPal recommends that you provide an image that is stored on a secure (https) server. 
	 * Optional
	 * Character length and limitations: 127
	 *
	 * @access public
	 * @var string
	 */
	public $cppheaderimage;

	/**
	 * Sets the border color around the header of the flow page. The border is a 2-pixel perimeter around the header space, which is 750 pixels wide by 90 pixels high. 
	 * Optional
	 * Character length and limitations: Six character HTML hexadecimal color code in ASCII
	 *
	 * @access public
	 * @var string
	 */
	public $cppheaderbordercolor;

	/**
	 * Sets the background color for the header of the flow page. 
	 * Optional
	 * Character length and limitation: Six character HTML hexadecimal color code in ASCII
	 *
	 * @access public
	 * @var string
	 */
	public $cppheaderbackcolor;

	/**
	 * Sets the background color for the payment page. 
	 * Optional
	 * Character length and limitation: Six character HTML hexadecimal color code in ASCII
	 *
	 * @access public
	 * @var string
	 */
	public $cpppayflowcolor;

	/**
First Name of the user, this information is used if user chooses to signup with PayPal.
	 * Optional
	 * Character length and limitation: Six character HTML hexadecimal color code in ASCII
	 *
	 * @access public
	 * @var string
	 */
	public $FirstName;

	/**
Last Name of the user, this information is used if user chooses to signup with PayPal.
	 * Optional
	 * Character length and limitation: Six character HTML hexadecimal color code in ASCII
	 *
	 * @access public
	 * @var string
	 */
	public $LastName;

	/**
User address, this information is used when user chooses to signup for PayPal.
	 * Optional
	 * If you include a shipping address and set the AddressOverride element on the request, PayPal returns this same address in GetExpressCheckoutDetailsResponse. 
	 *
	 * @access public
	 * @var AddressType
	 */
	public $Address;


	public function toXMLString()  {
		$str = '';
		if($this->ReturnURL != null ) {
			$str .= '<ebl:ReturnURL>'.$this->ReturnURL.'</ebl:ReturnURL>';
		 }
		if($this->CancelURL != null ) {
			$str .= '<ebl:CancelURL>'.$this->CancelURL.'</ebl:CancelURL>';
		 }
		if($this->LogoutURL != null ) {
			$str .= '<ebl:LogoutURL>'.$this->LogoutURL.'</ebl:LogoutURL>';
		 }
		if($this->InitFlowType != null ) {
			$str .= '<ebl:InitFlowType>'.$this->InitFlowType.'</ebl:InitFlowType>';
		 }
		if($this->SkipLoginPage != null ) {
			$str .= '<ebl:SkipLoginPage>'.$this->SkipLoginPage.'</ebl:SkipLoginPage>';
		 }
		if($this->ServiceName1 != null ) {
			$str .= '<ebl:ServiceName1>'.$this->ServiceName1.'</ebl:ServiceName1>';
		 }
		if($this->ServiceDefReq1 != null ) {
			$str .= '<ebl:ServiceDefReq1>'.$this->ServiceDefReq1.'</ebl:ServiceDefReq1>';
		 }
		if($this->ServiceName2 != null ) {
			$str .= '<ebl:ServiceName2>'.$this->ServiceName2.'</ebl:ServiceName2>';
		 }
		if($this->ServiceDefReq2 != null ) {
			$str .= '<ebl:ServiceDefReq2>'.$this->ServiceDefReq2.'</ebl:ServiceDefReq2>';
		 }
		if($this->LocaleCode != null ) {
			$str .= '<ebl:LocaleCode>'.$this->LocaleCode.'</ebl:LocaleCode>';
		 }
		if($this->PageStyle != null ) {
			$str .= '<ebl:PageStyle>'.$this->PageStyle.'</ebl:PageStyle>';
		 }
		if($this->cppheaderimage != null ) {
			$str .= '<ebl:cpp-header-image>'.$this->cppheaderimage.'</ebl:cpp-header-image>';
		 }
		if($this->cppheaderbordercolor != null ) {
			$str .= '<ebl:cpp-header-border-color>'.$this->cppheaderbordercolor.'</ebl:cpp-header-border-color>';
		 }
		if($this->cppheaderbackcolor != null ) {
			$str .= '<ebl:cpp-header-back-color>'.$this->cppheaderbackcolor.'</ebl:cpp-header-back-color>';
		 }
		if($this->cpppayflowcolor != null ) {
			$str .= '<ebl:cpp-payflow-color>'.$this->cpppayflowcolor.'</ebl:cpp-payflow-color>';
		 }
		if($this->FirstName != null ) {
			$str .= '<ebl:FirstName>'.$this->FirstName.'</ebl:FirstName>';
		 }
		if($this->LastName != null ) {
			$str .= '<ebl:LastName>'.$this->LastName.'</ebl:LastName>';
		 }
		if($this->Address != null ) {
			$str .='<ebl:Address>';
			$str .= $this->Address->toXMLString();
			$str .=  '</ebl:Address>';
		 }

		return $str;
	}

}

/**
 * GetAuthDetailsResponseDetailsType
 * The first name of the User.
 * Character length and limitations: 127 single-byte alphanumeric characters
 */
class GetAuthDetailsResponseDetailsType {
	/**
The first name of the User.
	 * Character length and limitations: 127 single-byte alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $FirstName;

	/**
The Last name of the user.
	 * Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $LastName;

	/**
	 * The email address of the user.
	 * Character length and limitations: 256 single-byte alphanumeric characters.
	 *
	 * @access public
	 * @var string
	 */
	public $Email;

	/**
	 * Encrypted PayPal customer account identification number.
	 * Required
	 * Character length and limitations: 127 single-byte characters.
	 *
	 * @access public
	 * @var string
	 */
	public $PayerID;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='firstname') {
				$this->FirstName = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='lastname') {
				$this->LastName = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='email') {
				$this->Email = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='payerid') {
				$this->PayerID = $arry["text"];
			}
		}
		}
	}
}

/**
 * SetAccessPermissionsRequestDetailsType
 * URL to which the customer's browser is returned after choosing to login with PayPal.
 * Required
 * Character length and limitations: no limit. 
 */
class SetAccessPermissionsRequestDetailsType {
	/**
URL to which the customer's browser is returned after choosing to login with PayPal.
	 * Required
	 * Character length and limitations: no limit. 
	 *
	 * @access public
	 * @var string
	 */
	public $ReturnURL;

	/**
URL to which the customer is returned if he does not approve the use of PayPal login. 
	 * Required
	 * Character length and limitations: no limit
	 *
	 * @access public
	 * @var string
	 */
	public $CancelURL;

	/**
URL to which the customer's browser is returned after user logs out from PayPal. 
	 * Required
	 * Character length and limitations: no limit. 
	 *
	 * @access public
	 * @var string
	 */
	public $LogoutURL;

	/**
The type of the flow.
	 * Optional
	 * Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $InitFlowType;

	/**
The used to decide SkipLogin allowed or not.
	 * Optional
	 * Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $SkipLoginPage;

	/**
	 * contains information about API Services
	 *
	 * array
	 * @access public
	 * @var string
	 */
	public $RequiredAccessPermissions;

	/**
	 * contains information about API Services
	 *
	 * array
	 * @access public
	 * @var string
	 */
	public $OptionalAccessPermissions;

	/**
	 * Locale of pages displayed by PayPal during Authentication Login.
	 * Optional
	 * Character length and limitations: Five single-byte alphabetic characters, upper- or lowercase. 
	 * Allowable values: 
	 * AU or en_AU
	 * DE or de_DE
	 * FR or fr_FR
	 * GB or en_GB
	 * IT or it_IT
	 * JP or ja_JP
	 * US or en_US
	 *
	 * @access public
	 * @var string
	 */
	public $LocaleCode;

	/**
Sets the Custom Payment Page Style for flow pages associated with this button/link. PageStyle corresponds to the HTML variable page_style for customizing flow pages. The value is the same as the Page Style Name you chose when adding or editing the page style from the Profile subtab of the My Account tab of your PayPal account. 
	 * Optional
	 * Character length and limitations: 30 single-byte alphabetic characters.
	 *
	 * @access public
	 * @var string
	 */
	public $PageStyle;

	/**
	 * A URL for the image you want to appear at the top left of the flow page. The image has a maximum size of 750 pixels wide by 90 pixels high. PayPal recommends that you provide an image that is stored on a secure (https) server. 
	 * Optional
	 * Character length and limitations: 127
	 *
	 * @access public
	 * @var string
	 */
	public $cppheaderimage;

	/**
	 * Sets the border color around the header of the flow page. The border is a 2-pixel perimeter around the header space, which is 750 pixels wide by 90 pixels high. 
	 * Optional
	 * Character length and limitations: Six character HTML hexadecimal color code in ASCII
	 *
	 * @access public
	 * @var string
	 */
	public $cppheaderbordercolor;

	/**
	 * Sets the background color for the header of the flow page. 
	 * Optional
	 * Character length and limitation: Six character HTML hexadecimal color code in ASCII
	 *
	 * @access public
	 * @var string
	 */
	public $cppheaderbackcolor;

	/**
	 * Sets the background color for the payment page. 
	 * Optional
	 * Character length and limitation: Six character HTML hexadecimal color code in ASCII
	 *
	 * @access public
	 * @var string
	 */
	public $cpppayflowcolor;

	/**
First Name of the user, this information is used if user chooses to signup with PayPal.
	 * Optional
	 * Character length and limitation: Six character HTML hexadecimal color code in ASCII
	 *
	 * @access public
	 * @var string
	 */
	public $FirstName;

	/**
Last Name of the user, this information is used if user chooses to signup with PayPal.
	 * Optional
	 * Character length and limitation: Six character HTML hexadecimal color code in ASCII
	 *
	 * @access public
	 * @var string
	 */
	public $LastName;

	/**
User address, this information is used when user chooses to signup for PayPal.
	 * Optional
	 * If you include a shipping address and set the AddressOverride element on the request, PayPal returns this same address in GetExpressCheckoutDetailsResponse. 
	 *
	 * @access public
	 * @var AddressType
	 */
	public $Address;


	public function toXMLString()  {
		$str = '';
		if($this->ReturnURL != null ) {
			$str .= '<ebl:ReturnURL>'.$this->ReturnURL.'</ebl:ReturnURL>';
		 }
		if($this->CancelURL != null ) {
			$str .= '<ebl:CancelURL>'.$this->CancelURL.'</ebl:CancelURL>';
		 }
		if($this->LogoutURL != null ) {
			$str .= '<ebl:LogoutURL>'.$this->LogoutURL.'</ebl:LogoutURL>';
		 }
		if($this->InitFlowType != null ) {
			$str .= '<ebl:InitFlowType>'.$this->InitFlowType.'</ebl:InitFlowType>';
		 }
		if($this->SkipLoginPage != null ) {
			$str .= '<ebl:SkipLoginPage>'.$this->SkipLoginPage.'</ebl:SkipLoginPage>';
		 }
		if($this->RequiredAccessPermissions != null ) {
		for($i=0; $i<count($this->RequiredAccessPermissions);$i++) {
			$str .= '<ebl:RequiredAccessPermissions>'.$this->RequiredAccessPermissions[$i].'</ebl:RequiredAccessPermissions>';
		 }
		 }
		if($this->OptionalAccessPermissions != null ) {
		for($i=0; $i<count($this->OptionalAccessPermissions);$i++) {
			$str .= '<ebl:OptionalAccessPermissions>'.$this->OptionalAccessPermissions[$i].'</ebl:OptionalAccessPermissions>';
		 }
		 }
		if($this->LocaleCode != null ) {
			$str .= '<ebl:LocaleCode>'.$this->LocaleCode.'</ebl:LocaleCode>';
		 }
		if($this->PageStyle != null ) {
			$str .= '<ebl:PageStyle>'.$this->PageStyle.'</ebl:PageStyle>';
		 }
		if($this->cppheaderimage != null ) {
			$str .= '<ebl:cpp-header-image>'.$this->cppheaderimage.'</ebl:cpp-header-image>';
		 }
		if($this->cppheaderbordercolor != null ) {
			$str .= '<ebl:cpp-header-border-color>'.$this->cppheaderbordercolor.'</ebl:cpp-header-border-color>';
		 }
		if($this->cppheaderbackcolor != null ) {
			$str .= '<ebl:cpp-header-back-color>'.$this->cppheaderbackcolor.'</ebl:cpp-header-back-color>';
		 }
		if($this->cpppayflowcolor != null ) {
			$str .= '<ebl:cpp-payflow-color>'.$this->cpppayflowcolor.'</ebl:cpp-payflow-color>';
		 }
		if($this->FirstName != null ) {
			$str .= '<ebl:FirstName>'.$this->FirstName.'</ebl:FirstName>';
		 }
		if($this->LastName != null ) {
			$str .= '<ebl:LastName>'.$this->LastName.'</ebl:LastName>';
		 }
		if($this->Address != null ) {
			$str .='<ebl:Address>';
			$str .= $this->Address->toXMLString();
			$str .=  '</ebl:Address>';
		 }

		return $str;
	}

}

/**
 * GetAccessPermissionDetailsResponseDetailsType
 * The first name of the User.
 * Character length and limitations: 127 single-byte alphanumeric characters
 */
class GetAccessPermissionDetailsResponseDetailsType {
	/**
The first name of the User.
	 * Character length and limitations: 127 single-byte alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $FirstName;

	/**
The Last name of the user.
	 * Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $LastName;

	/**
	 * The email address of the user.
	 * Character length and limitations: 256 single-byte alphanumeric characters.
	 *
	 * @access public
	 * @var string
	 */
	public $Email;

	/**
	 * contains information about API Services
	 *
	 * array
	 * @access public
	 * @var string
	 */
	public $AccessPermissionName;

	/**
	 * contains information about API Services
	 *
	 * array
	 * @access public
	 * @var string
	 */
	public $AccessPermissionStatus;

	/**
	 * Encrypted PayPal customer account identification number.
	 * Required
	 * Character length and limitations: 127 single-byte characters.
	 *
	 * @access public
	 * @var string
	 */
	public $PayerID;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='firstname') {
				$this->FirstName = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='lastname') {
				$this->LastName = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='email') {
				$this->Email = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='payerid') {
				$this->PayerID = $arry["text"];
			}
		}
		}
	}
}

/**
 * BAUpdateResponseDetailsType
 */
class BAUpdateResponseDetailsType {
	/**
	 *
	 * @access public
	 * @var string
	 */
	public $BillingAgreementID;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $BillingAgreementDescription;

	/**
	 *
	 * @access public
	 * @var MerchantPullStatusCodeType
	 */
	public $BillingAgreementStatus;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $BillingAgreementCustom;

	/**
	 *
	 * @access public
	 * @var PayerInfoType
	 */
	public $PayerInfo;

	/**
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $BillingAgreementMax;

	/**
Customer's billing address.
	 * Optional
	 * If you have credit card mapped in your account then billing address of the 
	 * credit card is returned otherwise your primary address is returned , PayPal 
	 * returns this address in BAUpdateResponseDetails.
	 *
	 * @access public
	 * @var AddressType
	 */
	public $BillingAddress;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='billingagreementid') {
				$this->BillingAgreementID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='billingagreementdescription') {
				$this->BillingAgreementDescription = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='billingagreementstatus') {
				$this->BillingAgreementStatus = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='billingagreementcustom') {
				$this->BillingAgreementCustom = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="payerinfo") {
				$this->PayerInfo = new PayerInfoType();
				$this->PayerInfo->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="billingagreementmax") {
				$this->BillingAgreementMax = new BasicAmountType();
				$this->BillingAgreementMax->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="billingaddress") {
				$this->BillingAddress = new AddressType();
				$this->BillingAddress->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * MerchantPullPaymentResponseType
 * MerchantPullPaymentResponseType
 * Response data from the merchant pull.
 */
class MerchantPullPaymentResponseType {
	/**
	 * information about the customer	 *
	 * @access public
	 * @var PayerInfoType
	 */
	public $PayerInfo;

	/**
Information about the transaction 	 *
	 * @access public
	 * @var PaymentInfoType
	 */
	public $PaymentInfo;

	/**
	 * Specific information about the preapproved payment 	 *
	 * @access public
	 * @var MerchantPullInfoType
	 */
	public $MerchantPullInfo;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="payerinfo") {
				$this->PayerInfo = new PayerInfoType();
				$this->PayerInfo->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="paymentinfo") {
				$this->PaymentInfo = new PaymentInfoType();
				$this->PaymentInfo->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="merchantpullinfo") {
				$this->MerchantPullInfo = new MerchantPullInfoType();
				$this->MerchantPullInfo->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * MerchantPullInfoType
 * MerchantPullInfoType 
 * Information about the merchant pull.
 */
class MerchantPullInfoType {
	/**
	 * Current status of billing agreement 
	 *
	 * @access public
	 * @var MerchantPullStatusCodeType
	 */
	public $MpStatus;

	/**
Monthly maximum payment amount	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $MpMax;

	/**
The value of the mp_custom variable that you specified in a FORM submission to PayPal during the creation or updating of a customer billing agreement 
	 *
	 * @access public
	 * @var string
	 */
	public $MpCustom;

	/**
The value of the mp_desc variable (description of goods or services) associated with the billing agreement 
	 *
	 * @access public
	 * @var string
	 */
	public $Desc;

	/**
Invoice value as set by BillUserRequest API call 	 *
	 * @access public
	 * @var string
	 */
	public $Invoice;

	/**
Custom field as set by BillUserRequest API call 	 *
	 * @access public
	 * @var string
	 */
	public $Custom;

	/**
Note: This field is no longer used and is always empty.	 *
	 * @access public
	 * @var string
	 */
	public $PaymentSourceID;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='mpstatus') {
				$this->MpStatus = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="mpmax") {
				$this->MpMax = new BasicAmountType();
				$this->MpMax->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='mpcustom') {
				$this->MpCustom = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='desc') {
				$this->Desc = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='invoice') {
				$this->Invoice = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='custom') {
				$this->Custom = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='paymentsourceid') {
				$this->PaymentSourceID = $arry["text"];
			}
		}
		}
	}
}

/**
 * PaymentTransactionSearchResultType
 * PaymentTransactionSearchResultType 
 * Results from a PaymentTransaction search
 */
class PaymentTransactionSearchResultType {
	/**
The date and time (in UTC/GMT format) the transaction occurred	 *
	 * @access public
	 * @var dateTime
	 */
	public $Timestamp;

	/**
The time zone of the transaction 	 *
	 * @access public
	 * @var string
	 */
	public $Timezone;

	/**
The type of the transaction	 *
	 * @access public
	 * @var string
	 */
	public $Type;

	/**
The email address of the payer	 *
	 * @access public
	 * @var string
	 */
	public $Payer;

	/**
Display name of the payer	 *
	 * @access public
	 * @var string
	 */
	public $PayerDisplayName;

	/**
The transaction ID of the seller	 *
	 * @access public
	 * @var string
	 */
	public $TransactionID;

	/**
The status of the transaction	 *
	 * @access public
	 * @var string
	 */
	public $Status;

	/**
The total gross amount charged, including any profile shipping cost and taxes	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $GrossAmount;

	/**
The fee that PayPal charged for the transaction 	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $FeeAmount;

	/**
The net amount of the transaction 	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $NetAmount;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='timestamp') {
				$this->Timestamp = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='timezone') {
				$this->Timezone = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='type') {
				$this->Type = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='payer') {
				$this->Payer = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='payerdisplayname') {
				$this->PayerDisplayName = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='transactionid') {
				$this->TransactionID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='status') {
				$this->Status = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="grossamount") {
				$this->GrossAmount = new BasicAmountType();
				$this->GrossAmount->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="feeamount") {
				$this->FeeAmount = new BasicAmountType();
				$this->FeeAmount->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="netamount") {
				$this->NetAmount = new BasicAmountType();
				$this->NetAmount->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * ShippingInfoType
 */
class ShippingInfoType {
	/**
	 * @access public
	 * @var string
	 */
	public $ShippingMethod;

	/**
	 * @access public
	 * @var string
	 */
	public $ShippingCarrier;

	/**
	 * @access public
	 * @var BasicAmountType
	 */
	public $ShippingAmount;

	/**
	 * @access public
	 * @var BasicAmountType
	 */
	public $HandlingAmount;

	/**
	 * @access public
	 * @var BasicAmountType
	 */
	public $InsuranceAmount;

}

/**
 * TaxInfoType
 */
class TaxInfoType {
	/**
	 * @access public
	 * @var BasicAmountType
	 */
	public $TaxAmount;

	/**
	 * @access public
	 * @var string
	 */
	public $SalesTaxPercentage;

	/**
	 * @access public
	 * @var string
	 */
	public $TaxState;

}

/**
 * MerchantPullPaymentType
 * MerchantPullPayment 
 * Parameters to make initiate a pull payment
 */
class MerchantPullPaymentType {
	/**
	 * The amount to charge to the customer. 
	 * Required
	 * Only numeric characters and a decimal separator are allowed. Limit: 10 single-byte characters, including two for decimals You must set the currencyID attribute to one of the three-character currency code for any of the supported PayPal currencies. 
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Amount;

	/**
	 * Preapproved Payments billing agreement identification number between the PayPal customer and you. 
	 * Required
	 * Character limit: 19 single-byte alphanumeric characters.
	 * The format of a billing agreement identification number is the single-character prefix B, followed by a hyphen and an alphanumeric character string: 
	 * B-unique_alphanumeric_string
	 *
	 * @access public
	 * @var string
	 */
	public $MpID;

	/**
Specifies type of PayPal payment you require 
	 * Optional
	 *
	 * @access public
	 * @var MerchantPullPaymentCodeType
	 */
	public $PaymentType;

	/**
Text entered by the customer in the Note field during enrollment 
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $Memo;

	/**
Subject line of confirmation email sent to recipient
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $EmailSubject;

	/**
The tax charged on the transaction
	 * Optional
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Tax;

	/**
Per-transaction shipping charge 
	 * Optional	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Shipping;

	/**
Per-transaction handling charge
	 * Optional	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Handling;

	/**
Name of purchased item
	 * Optional	 *
	 * @access public
	 * @var string
	 */
	public $ItemName;

	/**
Reference number of purchased item
	 * Optional	 *
	 * @access public
	 * @var string
	 */
	public $ItemNumber;

	/**
Your invoice number  
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $Invoice;

	/**
Custom annotation field for tracking or other use
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $Custom;

	/**
An identification code for use by third-party applications to identify transactions. 
	 * Optional
	 * Character length and limitations: 32 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $ButtonSource;

	/**
Passed in soft descriptor string to be appended. 
	 * Optional
	 * Character length and limitations: single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $SoftDescriptor;


	public function toXMLString()  {
		$str = '';
		if($this->Amount != null ) {
			$str .='<ebl:Amount';
			$str .= $this->Amount->toXMLString();
			$str .=  '</ebl:Amount>';
		 }
		if($this->MpID != null ) {
			$str .= '<ebl:MpID>'.$this->MpID.'</ebl:MpID>';
		 }
		if($this->PaymentType != null ) {
			$str .= '<ebl:PaymentType>'.$this->PaymentType.'</ebl:PaymentType>';
		 }
		if($this->Memo != null ) {
			$str .= '<ebl:Memo>'.$this->Memo.'</ebl:Memo>';
		 }
		if($this->EmailSubject != null ) {
			$str .= '<ebl:EmailSubject>'.$this->EmailSubject.'</ebl:EmailSubject>';
		 }
		if($this->Tax != null ) {
			$str .='<ebl:Tax';
			$str .= $this->Tax->toXMLString();
			$str .=  '</ebl:Tax>';
		 }
		if($this->Shipping != null ) {
			$str .='<ebl:Shipping';
			$str .= $this->Shipping->toXMLString();
			$str .=  '</ebl:Shipping>';
		 }
		if($this->Handling != null ) {
			$str .='<ebl:Handling';
			$str .= $this->Handling->toXMLString();
			$str .=  '</ebl:Handling>';
		 }
		if($this->ItemName != null ) {
			$str .= '<ebl:ItemName>'.$this->ItemName.'</ebl:ItemName>';
		 }
		if($this->ItemNumber != null ) {
			$str .= '<ebl:ItemNumber>'.$this->ItemNumber.'</ebl:ItemNumber>';
		 }
		if($this->Invoice != null ) {
			$str .= '<ebl:Invoice>'.$this->Invoice.'</ebl:Invoice>';
		 }
		if($this->Custom != null ) {
			$str .= '<ebl:Custom>'.$this->Custom.'</ebl:Custom>';
		 }
		if($this->ButtonSource != null ) {
			$str .= '<ebl:ButtonSource>'.$this->ButtonSource.'</ebl:ButtonSource>';
		 }
		if($this->SoftDescriptor != null ) {
			$str .= '<ebl:SoftDescriptor>'.$this->SoftDescriptor.'</ebl:SoftDescriptor>';
		 }

		return $str;
	}

}

/**
 * PaymentTransactionType
 * PaymentTransactionType 
 * Information about a PayPal payment from the seller side
 */
class PaymentTransactionType {
	/**
Information about the recipient of the payment 	 *
	 * @access public
	 * @var ReceiverInfoType
	 */
	public $ReceiverInfo;

	/**
Information about the payer 	 *
	 * @access public
	 * @var PayerInfoType
	 */
	public $PayerInfo;

	/**
Information about the transaction 	 *
	 * @access public
	 * @var PaymentInfoType
	 */
	public $PaymentInfo;

	/**
Information about an individual item in the transaction	 *
	 * @access public
	 * @var PaymentItemInfoType
	 */
	public $PaymentItemInfo;

	/**
Information about an individual Offer and Coupon information in the transaction	 *
	 * @access public
	 * @var OfferCouponInfoType
	 */
	public $OfferCouponInfo;

	/**
	 * Information about the user selected options.
	 *
	 * @access public
	 * @var UserSelectedOptionType
	 */
	public $UserSelectedOptions;

	/**
	 * Information about the Gift message.
	 *
	 * @access public
	 * @var string
	 */
	public $GiftMessage;

	/**
	 * Information about the Gift receipt.
	 *
	 * @access public
	 * @var string
	 */
	public $GiftReceipt;

	/**
	 * Information about the Gift Wrap name.
	 *
	 * @access public
	 * @var string
	 */
	public $GiftWrapName;

	/**
	 * Information about the Gift Wrap amount.
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $GiftWrapAmount;

	/**
	 * Information about the Buyer email.
	 *
	 * @access public
	 * @var string
	 */
	public $BuyerEmailOptIn;

	/**
	 * Information about the survey question.
	 *
	 * @access public
	 * @var string
	 */
	public $SurveyQuestion;

	/**
	 * Information about the survey choice selected by the user.
	 *
	 * array
	 * @access public
	 * @var string
	 */
	public $SurveyChoiceSelected;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="receiverinfo") {
				$this->ReceiverInfo = new ReceiverInfoType();
				$this->ReceiverInfo->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="payerinfo") {
				$this->PayerInfo = new PayerInfoType();
				$this->PayerInfo->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="paymentinfo") {
				$this->PaymentInfo = new PaymentInfoType();
				$this->PaymentInfo->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="paymentiteminfo") {
				$this->PaymentItemInfo = new PaymentItemInfoType();
				$this->PaymentItemInfo->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="offercouponinfo") {
				$this->OfferCouponInfo = new OfferCouponInfoType();
				$this->OfferCouponInfo->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="userselectedoptions") {
				$this->UserSelectedOptions = new UserSelectedOptionType();
				$this->UserSelectedOptions->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='giftmessage') {
				$this->GiftMessage = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='giftreceipt') {
				$this->GiftReceipt = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='giftwrapname') {
				$this->GiftWrapName = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="giftwrapamount") {
				$this->GiftWrapAmount = new BasicAmountType();
				$this->GiftWrapAmount->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='buyeremailoptin') {
				$this->BuyerEmailOptIn = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='surveyquestion') {
				$this->SurveyQuestion = $arry["text"];
			}
		}
		}
	}
}

/**
 * ReceiverInfoType
 * ReceiverInfoType 
 * Receiver information.
 */
class ReceiverInfoType {
	/**
	 * Email address or account ID of the payment recipient (the seller). Equivalent to Receiver if payment is sent to primary account. 
Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $Business;

	/**
Primary email address of the payment recipient (the seller). If you are the recipient of the payment and the payment is sent to your non-primary email address, the value of Receiver is still your primary email address. 
Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $Receiver;

	/**
Unique account ID of the payment recipient (the seller). This value is the same as the value of the recipient's referral ID. 	 *
	 * @access public
	 * @var string
	 */
	public $ReceiverID;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='business') {
				$this->Business = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='receiver') {
				$this->Receiver = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='receiverid') {
				$this->ReceiverID = $arry["text"];
			}
		}
		}
	}
}

/**
 * PayerInfoType
 * PayerInfoType 
 * Payer information
 */
class PayerInfoType {
	/**
	 * Email address of payer 
Character length and limitations: 127 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $Payer;

	/**
	 * Unique customer ID 
Character length and limitations: 17 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $PayerID;

	/**
	 * Status of payer's email address
	 *
	 * @access public
	 * @var PayPalUserStatusCodeType
	 */
	public $PayerStatus;

	/**
	 * Name of payer 	 *
	 * @access public
	 * @var PersonNameType
	 */
	public $PayerName;

	/**
	 * Payment sender's country of residence using standard two-character ISO 3166 country codes. 
Character length and limitations: Two single-byte characters
	 *
	 * @access public
	 * @var CountryCodeType
	 */
	public $PayerCountry;

	/**
	 * Payer's business name. 
Character length and limitations: 127 single-byte characters	 *
	 * @access public
	 * @var string
	 */
	public $PayerBusiness;

	/**
	 * Payer's business address	 *
	 * @access public
	 * @var AddressType
	 */
	public $Address;

	/**
Business contact telephone number	 *
	 * @access public
	 * @var string
	 */
	public $ContactPhone;

	/**
	 * Details about payer's tax info.
	 * Refer to the TaxIdDetailsType for more details.
	 *
	 * @access public
	 * @var TaxIdDetailsType
	 */
	public $TaxIdDetails;

	/**
Holds any enhanced information about the payer	 *
	 * @access public
	 * @var EnhancedPayerInfoType
	 */
	public $EnhancedPayerInfo;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='payer') {
				$this->Payer = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='payerid') {
				$this->PayerID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='payerstatus') {
				$this->PayerStatus = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="payername") {
				$this->PayerName = new PersonNameType();
				$this->PayerName->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='payercountry') {
				$this->PayerCountry = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='payerbusiness') {
				$this->PayerBusiness = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="address") {
				$this->Address = new AddressType();
				$this->Address->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='contactphone') {
				$this->ContactPhone = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="taxiddetails") {
				$this->TaxIdDetails = new TaxIdDetailsType();
				$this->TaxIdDetails->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="enhancedpayerinfo") {
				$this->EnhancedPayerInfo = new EnhancedPayerInfoType();
				$this->EnhancedPayerInfo->init($arry["children"]);
					}
			}
		}
		}
	}

	public function toXMLString()  {
		$str = '';
		if($this->Payer != null ) {
			$str .= '<ebl:Payer>'.$this->Payer.'</ebl:Payer>';
		 }
		if($this->PayerID != null ) {
			$str .= '<ebl:PayerID>'.$this->PayerID.'</ebl:PayerID>';
		 }
		if($this->PayerStatus != null ) {
			$str .= '<ebl:PayerStatus>'.$this->PayerStatus.'</ebl:PayerStatus>';
		 }
		if($this->PayerName != null ) {
			$str .='<ebl:PayerName>';
			$str .= $this->PayerName->toXMLString();
			$str .=  '</ebl:PayerName>';
		 }
		if($this->PayerCountry != null ) {
			$str .= '<ebl:PayerCountry>'.$this->PayerCountry.'</ebl:PayerCountry>';
		 }
		if($this->PayerBusiness != null ) {
			$str .= '<ebl:PayerBusiness>'.$this->PayerBusiness.'</ebl:PayerBusiness>';
		 }
		if($this->Address != null ) {
			$str .='<ebl:Address>';
			$str .= $this->Address->toXMLString();
			$str .=  '</ebl:Address>';
		 }
		if($this->ContactPhone != null ) {
			$str .= '<ebl:ContactPhone>'.$this->ContactPhone.'</ebl:ContactPhone>';
		 }
		if($this->TaxIdDetails != null ) {
			$str .='<ebl:TaxIdDetails>';
			$str .= $this->TaxIdDetails->toXMLString();
			$str .=  '</ebl:TaxIdDetails>';
		 }
		if($this->EnhancedPayerInfo != null ) {
			$str .='<ebl:EnhancedPayerInfo>';
			$str .= $this->EnhancedPayerInfo->toXMLString();
			$str .=  '</ebl:EnhancedPayerInfo>';
		 }

		return $str;
	}

}

/**
 * InstrumentDetailsType
 * InstrumentDetailsType
 * Promotional Instrument Information.
 */
class InstrumentDetailsType {
	/**
	 * This field holds the category of the instrument only when it is promotional. Return value 1 represents BML.
	 *
	 * @access public
	 * @var string
	 */
	public $InstrumentCategory;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='instrumentcategory') {
				$this->InstrumentCategory = $arry["text"];
			}
		}
		}
	}
}

/**
 * BMLOfferInfoType
 * BMLOfferInfoType
 * Specific information for BML.
 */
class BMLOfferInfoType {
	/**
	 * Unique identification for merchant/buyer/offer combo.
	 *
	 * @access public
	 * @var string
	 */
	public $OfferTrackingID;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='offertrackingid') {
				$this->OfferTrackingID = $arry["text"];
			}
		}
		}
	}

	public function toXMLString()  {
		$str = '';
		if($this->OfferTrackingID != null ) {
			$str .= '<ebl:OfferTrackingID>'.$this->OfferTrackingID.'</ebl:OfferTrackingID>';
		 }

		return $str;
	}

}

/**
 * OfferDetailsType
 * OfferDetailsType
 * Specific information for an offer.
 */
class OfferDetailsType {
	/**
	 * Code used to identify the promotion offer.
	 *
	 * @access public
	 * @var string
	 */
	public $OfferCode;

	/**
	 * Specific infromation for BML, Similar structure could be added for sepcific
	 * promotion needs like CrossPromotions
	 *
	 * @access public
	 * @var BMLOfferInfoType
	 */
	public $BMLOfferInfo;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='offercode') {
				$this->OfferCode = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="bmlofferinfo") {
				$this->BMLOfferInfo = new BMLOfferInfoType();
				$this->BMLOfferInfo->init($arry["children"]);
					}
			}
		}
		}
	}

	public function toXMLString()  {
		$str = '';
		if($this->OfferCode != null ) {
			$str .= '<ebl:OfferCode>'.$this->OfferCode.'</ebl:OfferCode>';
		 }
		if($this->BMLOfferInfo != null ) {
			$str .='<ebl:BMLOfferInfo>';
			$str .= $this->BMLOfferInfo->toXMLString();
			$str .=  '</ebl:BMLOfferInfo>';
		 }

		return $str;
	}

}

/**
 * PaymentInfoType
 * PaymentInfoType 
 * Payment information.
 */
class PaymentInfoType {
	/**
A transaction identification number. 
Character length and limits: 19 single-byte characters maximum
	 *
	 * @access public
	 * @var string
	 */
	public $TransactionID;

	/**
Its Ebay transaction id.
	 * EbayTransactionID will returned for immediate pay item transaction in ECA 
	 *
	 * @access public
	 * @var string
	 */
	public $EbayTransactionID;

	/**
	 * Parent or related transaction identification number. This field is populated for the following transaction types: 
	 * Reversal
	 * Capture of an authorized transaction.
	 * Reauthorization of a transaction.
	 * Capture of an order. The value of ParentTransactionID is the original OrderID.
	 * Authorization of an order. The value of ParentTransactionID is the original OrderID.
	 * Capture of an order authorization.
	 * Void of an order. The value of ParentTransactionID is the original OrderID.
	 * Character length and limits: 19 single-byte characters maximum	 *
	 * @access public
	 * @var string
	 */
	public $ParentTransactionID;

	/**
	 * Receipt ID 
	 * Character length and limitations: 16 digits in xxxx-xxxx-xxxx-xxxx format	 *
	 * @access public
	 * @var string
	 */
	public $ReceiptID;

	/**
	 * The type of transaction 
	 * cart: Transaction created via the PayPal Shopping Cart feature or by Express Checkout with multiple purchased item
	 * express-checkout: Transaction created by Express Checkout with a single purchased items
	 * send-money: Transaction created by customer from the Send Money tab on the PayPal website.
	 * web-accept: Transaction created by customer via Buy Now, Donation, or Auction Smart Logos.
	 * subscr-*: Transaction created by customer via Subscription. eot means "end of subscription term."
	 * merch-pmt: preapproved payment.
	 * mass-pay: Transaction created via MassPay.
	 * virtual-terminal: Transaction created via merchant virtual terminal.
	 * credit: Transaction created via merchant virtual terminal or API to credit a customer.
	 *
	 * @access public
	 * @var PaymentTransactionCodeType
	 */
	public $TransactionType;

	/**
	 * The type of payment	 *
	 * @access public
	 * @var PaymentCodeType
	 */
	public $PaymentType;

	/**
	 * The type of funding source	 *
	 * @access public
	 * @var RefundSourceCodeType
	 */
	public $RefundSourceCodeType;

	/**
	 * eCheck latest expected clear date 	 *
	 * @access public
	 * @var dateTime
	 */
	public $ExpectedeCheckClearDate;

	/**
	 * Date and time of payment 	 *
	 * @access public
	 * @var dateTime
	 */
	public $PaymentDate;

	/**
	 * Full amount of the customer's payment, before transaction fee is subtracted	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $GrossAmount;

	/**
	 * Transaction fee associated with the payment 	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $FeeAmount;

	/**
Amount deposited into the account's primary balance after a currency conversion from automatic conversion through your Payment Receiving Preferences or manual conversion through manually accepting a payment. This amount is calculated after fees and taxes have been assessed. 	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $SettleAmount;

	/**
	 * Amount of tax for transaction 	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $TaxAmount;

	/**
	 * Exchange rate for transaction 	 *
	 * @access public
	 * @var string
	 */
	public $ExchangeRate;

	/**
	 * The status of the payment:
	 * None: No status
	 * Created: A giropay payment has been initiated.
	 * Canceled-Reversal: A reversal has been canceled. For example, you won a dispute with the customer, and the funds for the transaction that was reversed have been returned to you.
	 * Completed: The payment has been completed, and the funds have been added successfully to your account balance.
	 * Denied: You denied the payment. This happens only if the payment was previously pending because of possible reasons described for the PendingReason element.
	 * Expired: This authorization has expired and cannot be captured.
	 * Failed: The payment has failed. This happens only if the payment was made from your customer's bank account.
	 * In-Progress: The transaction is in process of authorization and capture.
	 * Partially-Refunded: The transaction has been partially refunded.
	 * Pending: The payment is pending. See "PendingReason" for more information.
	 * Refunded: You refunded the payment.
	 * Reversed: A payment was reversed due to a chargeback or other type of reversal. The funds have been removed from your account balance and returned to the buyer. The reason for the reversal is specified in the ReasonCode element.
	 * Processed: A payment has been accepted.
	 * Voided: This authorization has been voided.
	 * Completed-Funds-Held: The payment has been completed, and the funds have been added successfully to your pending balance. See the "HoldDecision" field for more information.
	 *
	 * @access public
	 * @var PaymentStatusCodeType
	 */
	public $PaymentStatus;

	/**
	 * The reason the payment is pending: 
none: No pending reason
	 * address: The payment is pending because your customer did not include a confirmed shipping address and your Payment Receiving Preferences is set such that you want to manually accept or deny each of these payments. To change your preference, go to the Preferences section of your Profile.
	 * authorization: You set PaymentAction to Authorization on SetExpressCheckoutRequest and have not yet captured funds.
	 * echeck: The payment is pending because it was made by an eCheck that has not yet cleared.
	 * intl: The payment is pending because you hold a non-U.S. account and do not have a withdrawal mechanism. You must manually accept or deny this payment from your Account Overview.
	 * multi-currency: You do not have a balance in the currency sent, and you do not have your Payment Receiving Preferences set to automatically convert and accept this payment. You must manually accept or deny this payment.
	 * unilateral: The payment is pending because it was made to an email address that is not yet registered or confirmed.
	 * upgrade: The payment is pending because it was made via credit card and you must upgrade your account to Business or Premier status in order to receive the funds. upgrade can also mean that you have reached the monthly limit for transactions on your account.
	 * verify: The payment is pending because you are not yet verified. You must verify your account before you can accept this payment.
	 * other: The payment is pending for a reason other than those listed above. For more information, contact PayPal Customer Service.
	 *
	 * @access public
	 * @var PendingStatusCodeType
	 */
	public $PendingReason;

	/**
	 * The reason for a reversal if TransactionType is reversal: 
none: No reason code
	 * chargeback: A reversal has occurred on this transaction due to a chargeback by your customer.
	 * guarantee: A reversal has occurred on this transaction due to your customer triggering a money-back guarantee.
	 * buyer-complaint: A reversal has occurred on this transaction due to a complaint about the transaction from your customer.
	 * refund: A reversal has occurred on this transaction because you have given the customer a refund.
	 * other: A reversal has occurred on this transaction due to a reason not listed above.
	 *
	 * @access public
	 * @var ReversalReasonCodeType
	 */
	public $ReasonCode;

	/**
	 * HoldDecision is returned in the response only if PaymentStatus is Completed-Funds-Held. The reason the funds are kept in pending balance: 
newsellerpaymenthold: The seller is new.
	 * paymenthold: A hold is placed on your transaction due to a reason not listed above.
	 *
	 * @access public
	 * @var string
	 */
	public $HoldDecision;

	/**
	 * Shipping method selected by the user during check-out.
	 *
	 * @access public
	 * @var string
	 */
	public $ShippingMethod;

	/**
	 * Protection Eligibility for this Transaction - None, SPP or ESPP
	 *
	 * @access public
	 * @var string
	 */
	public $ProtectionEligibility;

	/**
	 * Protection Eligibility details  for this Transaction
	 *
	 * @access public
	 * @var string
	 */
	public $ProtectionEligibilityType;

	/**
	 * Amount of shipping charged on transaction	 *
	 * @access public
	 * @var string
	 */
	public $ShipAmount;

	/**
	 * Amount of ship handling charged on transaction	 *
	 * @access public
	 * @var string
	 */
	public $ShipHandleAmount;

	/**
	 * Amount of shipping discount on transaction	 *
	 * @access public
	 * @var string
	 */
	public $ShipDiscount;

	/**
	 * Amount of Insurance amount on transaction	 *
	 * @access public
	 * @var string
	 */
	public $InsuranceAmount;

	/**
	 * Subject as entered in the transaction	 *
	 * @access public
	 * @var string
	 */
	public $Subject;

	/**
	 * StoreID as entered in the transaction	 *
	 * @access public
	 * @var string
	 */
	public $StoreID;

	/**
	 * TerminalID as entered in the transaction	 *
	 * @access public
	 * @var string
	 */
	public $TerminalID;

	/**
	 * Details about the seller.
	 * Optional 
	 *
	 * @access public
	 * @var SellerDetailsType
	 */
	public $SellerDetails;

	/**
	 * Unique identifier and mandatory for each bucket in case of split payement
	 *
	 * @access public
	 * @var string
	 */
	public $PaymentRequestID;

	/**
	 * Thes are filters that could result in accept/deny/pending action.
	 *
	 * @access public
	 * @var FMFDetailsType
	 */
	public $FMFDetails;

	/**
	 * This will be enhanced info for the payment: Example: UATP details
	 *
	 * @access public
	 * @var EnhancedPaymentInfoType
	 */
	public $EnhancedPaymentInfo;

	/**
	 * This will indicate the payment status for individual payment request in case of split payment
	 *
	 * @access public
	 * @var ErrorType
	 */
	public $PaymentError;

	/**
	 * Type of the payment instrument.
	 *
	 * @access public
	 * @var InstrumentDetailsType
	 */
	public $InstrumentDetails;

	/**
	 * Offer Details.
	 *
	 * @access public
	 * @var OfferDetailsType
	 */
	public $OfferDetails;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='transactionid') {
				$this->TransactionID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='ebaytransactionid') {
				$this->EbayTransactionID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='parenttransactionid') {
				$this->ParentTransactionID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='receiptid') {
				$this->ReceiptID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='transactiontype') {
				$this->TransactionType = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='paymenttype') {
				$this->PaymentType = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='refundsourcecodetype') {
				$this->RefundSourceCodeType = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='expectedecheckcleardate') {
				$this->ExpectedeCheckClearDate = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='paymentdate') {
				$this->PaymentDate = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="grossamount") {
				$this->GrossAmount = new BasicAmountType();
				$this->GrossAmount->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="feeamount") {
				$this->FeeAmount = new BasicAmountType();
				$this->FeeAmount->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="settleamount") {
				$this->SettleAmount = new BasicAmountType();
				$this->SettleAmount->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="taxamount") {
				$this->TaxAmount = new BasicAmountType();
				$this->TaxAmount->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='exchangerate') {
				$this->ExchangeRate = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='paymentstatus') {
				$this->PaymentStatus = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='pendingreason') {
				$this->PendingReason = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='reasoncode') {
				$this->ReasonCode = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='holddecision') {
				$this->HoldDecision = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='shippingmethod') {
				$this->ShippingMethod = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='protectioneligibility') {
				$this->ProtectionEligibility = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='protectioneligibilitytype') {
				$this->ProtectionEligibilityType = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='shipamount') {
				$this->ShipAmount = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='shiphandleamount') {
				$this->ShipHandleAmount = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='shipdiscount') {
				$this->ShipDiscount = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='insuranceamount') {
				$this->InsuranceAmount = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='subject') {
				$this->Subject = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='storeid') {
				$this->StoreID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='terminalid') {
				$this->TerminalID = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="sellerdetails") {
				$this->SellerDetails = new SellerDetailsType();
				$this->SellerDetails->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='paymentrequestid') {
				$this->PaymentRequestID = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="fmfdetails") {
				$this->FMFDetails = new FMFDetailsType();
				$this->FMFDetails->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="enhancedpaymentinfo") {
				$this->EnhancedPaymentInfo = new EnhancedPaymentInfoType();
				$this->EnhancedPaymentInfo->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="paymenterror") {
				$this->PaymentError = new ErrorType();
				$this->PaymentError->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="instrumentdetails") {
				$this->InstrumentDetails = new InstrumentDetailsType();
				$this->InstrumentDetails->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="offerdetails") {
				$this->OfferDetails = new OfferDetailsType();
				$this->OfferDetails->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * SubscriptionTermsType
 * SubscriptionTermsType 
 * Terms of a PayPal subscription.
 */
class SubscriptionTermsType {
	/**
	 * @access public
	 * @var BasicAmountType
	 */
	public $Amount;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="amount") {
				$this->Amount = new BasicAmountType();
				$this->Amount->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * SubscriptionInfoType
 * SubscriptionInfoType 
 * Information about a PayPal Subscription.
 */
class SubscriptionInfoType {
	/**
	 * ID generated by PayPal for the subscriber. 
Character length and limitations: no limit	 *
	 * @access public
	 * @var string
	 */
	public $SubscriptionID;

	/**
	 * Subscription start date 	 *
	 * @access public
	 * @var dateTime
	 */
	public $SubscriptionDate;

	/**
	 * Date when the subscription modification will be effective 	 *
	 * @access public
	 * @var dateTime
	 */
	public $EffectiveDate;

	/**
	 * Date PayPal will retry a failed subscription payment 	 *
	 * @access public
	 * @var dateTime
	 */
	public $RetryTime;

	/**
	 * Username generated by PayPal and given to subscriber to access the subscription. 
Character length and limitations: 64 alphanumeric single-byte characters	 *
	 * @access public
	 * @var string
	 */
	public $Username;

	/**
	 * Password generated by PayPal and given to subscriber to access the subscription. For security, the value of the password is hashed. 
Character length and limitations: 128 alphanumeric single-byte characters	 *
	 * @access public
	 * @var string
	 */
	public $Password;

	/**
	 * The number of payment installments that will occur at the regular rate. 
Character length and limitations: no limit	 *
	 * @access public
	 * @var string
	 */
	public $Recurrences;

	/**
	 * Subscription duration and charges	 *
	 * array
	 * @access public
	 * @var SubscriptionTermsType
	 */
	public $Terms;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='subscriptionid') {
				$this->SubscriptionID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='subscriptiondate') {
				$this->SubscriptionDate = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='effectivedate') {
				$this->EffectiveDate = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='retrytime') {
				$this->RetryTime = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='username') {
				$this->Username = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='password') {
				$this->Password = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='recurrences') {
				$this->Recurrences = $arry["text"];
			}
			if (is_array($arry["children"])&& ($arry["children"])!=null) 	{
			$i=0;
			while(true) {
			if($arry["name"]=="terms[$i]") {
				$this->Terms[$i] = new SubscriptionTermsType();
				$this->Terms[$i]->init($arry["children"]);
			}
			else break;
			$i++;
			}
		}
				if(is_array($arry["children"]) && ($arry["children"])!=null && $arry["name"]=="terms") {
				$this->Terms = new SubscriptionTermsType();
				$this->Terms->init($arry["children"]);
					}
		}
		}
	}
}

/**
 * AuctionInfoType
 * AuctionInfoType 
 * Basic information about an auction.
 */
class AuctionInfoType {
	/**
	 * Customer's auction ID		 *
	 * @access public
	 * @var string
	 */
	public $BuyerID;

	/**
	 * Auction's close date 	 *
	 * @access public
	 * @var dateTime
	 */
	public $ClosingDate;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='buyerid') {
				$this->BuyerID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='closingdate') {
				$this->ClosingDate = $arry["text"];
			}
		}
		}
	}
}

/**
 * OptionType
 * OptionType 
 * PayPal item options for shopping cart.
 */
class OptionType {

	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
		}
		}
	}
}

/**
 * EbayItemPaymentDetailsItemType
 * EbayItemPaymentDetailsItemType - Type declaration to be used by other schemas.
 * Information about an Ebay Payment Item.
 */
class EbayItemPaymentDetailsItemType {
	/**
	 * Auction ItemNumber. 
	 * Optional
	 * Character length and limitations: 765 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $ItemNumber;

	/**
	 * Auction Transaction ID. 
	 * Optional
	 * Character length and limitations: 255 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $AuctionTransactionId;

	/**
	 * Ebay Order ID. 
	 * Optional
	 * Character length and limitations: 64 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $OrderId;

	/**
	 * Ebay Cart ID.
	 * Optional
	 * Character length and limitations: 64 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $CartID;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='itemnumber') {
				$this->ItemNumber = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='auctiontransactionid') {
				$this->AuctionTransactionId = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='orderid') {
				$this->OrderId = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='cartid') {
				$this->CartID = $arry["text"];
			}
		}
		}
	}

	public function toXMLString()  {
		$str = '';
		if($this->ItemNumber != null ) {
			$str .= '<ebl:ItemNumber>'.$this->ItemNumber.'</ebl:ItemNumber>';
		 }
		if($this->AuctionTransactionId != null ) {
			$str .= '<ebl:AuctionTransactionId>'.$this->AuctionTransactionId.'</ebl:AuctionTransactionId>';
		 }
		if($this->OrderId != null ) {
			$str .= '<ebl:OrderId>'.$this->OrderId.'</ebl:OrderId>';
		 }
		if($this->CartID != null ) {
			$str .= '<ebl:CartID>'.$this->CartID.'</ebl:CartID>';
		 }

		return $str;
	}

}

/**
 * PaymentDetailsItemType
 * PaymentDetailsItemType 
 * Information about a Payment Item.
 */
class PaymentDetailsItemType {
	/**
	 * Item name. 
	 * Optional
	 * Character length and limitations: 127 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $Name;

	/**
	 * Item number. 
	 * Optional
	 * Character length and limitations: 127 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $Number;

	/**
	 * Item quantity. 
	 * Optional
	 * Character length and limitations: Any positive integer	 *
	 * @access public
	 * @var integer
	 */
	public $Quantity;

	/**
	 * Item sales tax. 
	 * Optional
	 * Character length and limitations: any valid currency amount; currency code is set the same as for OrderTotal.
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Tax;

	/**
	 * Cost of item 
You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. 
	 * Optional
	 * Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Amount;

	/**
	 * Ebay specific details.
	 * Optional
	 *
	 * @access public
	 * @var EbayItemPaymentDetailsItemType
	 */
	public $EbayItemPaymentDetailsItem;

	/**
	 * Promotional financing code for item. Part of the Merchant Services Promotion Financing feature.
	 *
	 * @access public
	 * @var string
	 */
	public $PromoCode;

	/**
	 *
	 * @access public
	 * @var ProductCategoryType
	 */
	public $ProductCategory;

	/**
	 * Item description. 
	 * Optional
	 * Character length and limitations: 127 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $Description;

	/**
	 * Information about the Item weight.
	 *
	 * @access public
	 * @var MeasureType
	 */
	public $ItemWeight;

	/**
	 * Information about the Item length.
	 *
	 * @access public
	 * @var MeasureType
	 */
	public $ItemLength;

	/**
	 * Information about the Item width.
	 *
	 * @access public
	 * @var MeasureType
	 */
	public $ItemWidth;

	/**
	 * Information about the Item height.
	 *
	 * @access public
	 * @var MeasureType
	 */
	public $ItemHeight;

	/**
	 * URL for the item.
	 * Optional
	 * Character length and limitations: no limit.
	 *
	 * @access public
	 * @var string
	 */
	public $ItemURL;

	/**
	 * Enhanced data for each item in the cart.
	 * Optional
	 *
	 * @access public
	 * @var EnhancedItemDataType
	 */
	public $EnhancedItemData;

	/**
	 * Item category - physical or digital. 
	 * Optional
	 *
	 * @access public
	 * @var ItemCategoryType
	 */
	public $ItemCategory;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='name') {
				$this->Name = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='number') {
				$this->Number = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='quantity') {
				$this->Quantity = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="tax") {
				$this->Tax = new BasicAmountType();
				$this->Tax->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="amount") {
				$this->Amount = new BasicAmountType();
				$this->Amount->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="ebayitempaymentdetailsitem") {
				$this->EbayItemPaymentDetailsItem = new EbayItemPaymentDetailsItemType();
				$this->EbayItemPaymentDetailsItem->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='promocode') {
				$this->PromoCode = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='productcategory') {
				$this->ProductCategory = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='description') {
				$this->Description = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="itemweight") {
				$this->ItemWeight = new MeasureType();
				$this->ItemWeight->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="itemlength") {
				$this->ItemLength = new MeasureType();
				$this->ItemLength->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="itemwidth") {
				$this->ItemWidth = new MeasureType();
				$this->ItemWidth->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="itemheight") {
				$this->ItemHeight = new MeasureType();
				$this->ItemHeight->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='itemurl') {
				$this->ItemURL = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="enhanceditemdata") {
				$this->EnhancedItemData = new EnhancedItemDataType();
				$this->EnhancedItemData->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='itemcategory') {
				$this->ItemCategory = $arry["text"];
			}
		}
		}
	}

	public function toXMLString()  {
		$str = '';
		if($this->Name != null ) {
			$str .= '<ebl:Name>'.$this->Name.'</ebl:Name>';
		 }
		if($this->Number != null ) {
			$str .= '<ebl:Number>'.$this->Number.'</ebl:Number>';
		 }
		if($this->Quantity != null ) {
			$str .= '<ebl:Quantity>'.$this->Quantity.'</ebl:Quantity>';
		 }
		if($this->Tax != null ) {
			$str .='<ebl:Tax';
			$str .= $this->Tax->toXMLString();
			$str .=  '</ebl:Tax>';
		 }
		if($this->Amount != null ) {
			$str .='<ebl:Amount';
			$str .= $this->Amount->toXMLString();
			$str .=  '</ebl:Amount>';
		 }
		if($this->EbayItemPaymentDetailsItem != null ) {
			$str .='<ebl:EbayItemPaymentDetailsItem>';
			$str .= $this->EbayItemPaymentDetailsItem->toXMLString();
			$str .=  '</ebl:EbayItemPaymentDetailsItem>';
		 }
		if($this->PromoCode != null ) {
			$str .= '<ebl:PromoCode>'.$this->PromoCode.'</ebl:PromoCode>';
		 }
		if($this->ProductCategory != null ) {
			$str .= '<ebl:ProductCategory>'.$this->ProductCategory.'</ebl:ProductCategory>';
		 }
		if($this->Description != null ) {
			$str .= '<ebl:Description>'.$this->Description.'</ebl:Description>';
		 }
		if($this->ItemWeight != null ) {
			$str .='<ebl:ItemWeight';
			$str .= $this->ItemWeight->toXMLString();
			$str .=  '</ebl:ItemWeight>';
		 }
		if($this->ItemLength != null ) {
			$str .='<ebl:ItemLength';
			$str .= $this->ItemLength->toXMLString();
			$str .=  '</ebl:ItemLength>';
		 }
		if($this->ItemWidth != null ) {
			$str .='<ebl:ItemWidth';
			$str .= $this->ItemWidth->toXMLString();
			$str .=  '</ebl:ItemWidth>';
		 }
		if($this->ItemHeight != null ) {
			$str .='<ebl:ItemHeight';
			$str .= $this->ItemHeight->toXMLString();
			$str .=  '</ebl:ItemHeight>';
		 }
		if($this->ItemURL != null ) {
			$str .= '<ebl:ItemURL>'.$this->ItemURL.'</ebl:ItemURL>';
		 }
		if($this->EnhancedItemData != null ) {
			$str .='<ebl:EnhancedItemData>';
			$str .= $this->EnhancedItemData->toXMLString();
			$str .=  '</ebl:EnhancedItemData>';
		 }
		if($this->ItemCategory != null ) {
			$str .= '<ebl:ItemCategory>'.$this->ItemCategory.'</ebl:ItemCategory>';
		 }

		return $str;
	}

}

/**
 * PaymentItemType
 * PaymentItemType 
 * Information about a Payment Item.
 */
class PaymentItemType {
	/**
	 * eBay Auction Transaction ID of the Item 
	 * Optional
	 * Character length and limitations: 255 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $EbayItemTxnId;

	/**
	 * Item name set by you or entered by the customer. 
Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $Name;

	/**
	 * Item number set by you. 
	 * Character length and limitations: 127 single-byte alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $Number;

	/**
	 * Quantity set by you or entered by the customer. 
	 * Character length and limitations: no limit	 *
	 * @access public
	 * @var string
	 */
	public $Quantity;

	/**
	 * Amount of tax charged on payment 	 *
	 * @access public
	 * @var string
	 */
	public $SalesTax;

	/**
	 * Amount of shipping charged on payment 	 *
	 * @access public
	 * @var string
	 */
	public $ShippingAmount;

	/**
	 * Amount of handling charged on payment 	 *
	 * @access public
	 * @var string
	 */
	public $HandlingAmount;

	/**
	 * Coupon ID Number 	 *
	 * @access public
	 * @var string
	 */
	public $CouponID;

	/**
	 * Amount Value of The Coupon 	 *
	 * @access public
	 * @var string
	 */
	public $CouponAmount;

	/**
	 * Currency of the Coupon Amount 	 *
	 * @access public
	 * @var string
	 */
	public $CouponAmountCurrency;

	/**
	 * Amount of Discount on this Loyalty Card	 *
	 * @access public
	 * @var string
	 */
	public $LoyaltyCardDiscountAmount;

	/**
	 * Currency of the Discount	 *
	 * @access public
	 * @var string
	 */
	public $LoyaltyCardDiscountCurrency;

	/**
	 * Cost of item 	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Amount;

	/**
	 * Item options selected in PayPal shopping cart 	 *
	 * array
	 * @access public
	 * @var OptionType
	 */
	public $Options;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='ebayitemtxnid') {
				$this->EbayItemTxnId = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='name') {
				$this->Name = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='number') {
				$this->Number = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='quantity') {
				$this->Quantity = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='salestax') {
				$this->SalesTax = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='shippingamount') {
				$this->ShippingAmount = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='handlingamount') {
				$this->HandlingAmount = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='couponid') {
				$this->CouponID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='couponamount') {
				$this->CouponAmount = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='couponamountcurrency') {
				$this->CouponAmountCurrency = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='loyaltycarddiscountamount') {
				$this->LoyaltyCardDiscountAmount = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='loyaltycarddiscountcurrency') {
				$this->LoyaltyCardDiscountCurrency = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="amount") {
				$this->Amount = new BasicAmountType();
				$this->Amount->init($arry["children"]);
					}
			}
			if (is_array($arry["children"])&& ($arry["children"])!=null) 	{
			$i=0;
			while(true) {
			if($arry["name"]=="options[$i]") {
				$this->Options[$i] = new OptionType();
				$this->Options[$i]->init($arry["children"]);
			}
			else break;
			$i++;
			}
		}
				if(is_array($arry["children"]) && ($arry["children"])!=null && $arry["name"]=="options") {
				$this->Options = new OptionType();
				$this->Options->init($arry["children"]);
					}
		}
		}
	}
}

/**
 * PaymentItemInfoType
 * PaymentItemInfoType 
 * Information about a PayPal item.
 */
class PaymentItemInfoType {
	/**
	 * Invoice number you set in the original transaction.
	 * Character length and limitations: 127 single-byte alphanumeric characters 	 *
	 * @access public
	 * @var string
	 */
	public $InvoiceID;

	/**
	 * Custom field you set in the original transaction. 
	 * Character length and limitations: 127 single-byte alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $Custom;

	/**
	 * Memo entered by your customer in PayPal Website Payments note field. 
	 * Character length and limitations: 255 single-byte alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $Memo;

	/**
	 * Amount of tax charged on transaction	 *
	 * @access public
	 * @var string
	 */
	public $SalesTax;

	/**
	 * Details about the indivudal purchased item	 *
	 * array
	 * @access public
	 * @var PaymentItemType
	 */
	public $PaymentItem;

	/**
	 * Information about the transaction if it was created via PayPal Subcriptions	 *
	 * @access public
	 * @var SubscriptionInfoType
	 */
	public $Subscription;

	/**
	 * Information about the transaction if it was created via an auction	 *
	 * @access public
	 * @var AuctionInfoType
	 */
	public $Auction;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='invoiceid') {
				$this->InvoiceID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='custom') {
				$this->Custom = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='memo') {
				$this->Memo = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='salestax') {
				$this->SalesTax = $arry["text"];
			}
			if (is_array($arry["children"])&& ($arry["children"])!=null) 	{
			$i=0;
			while(true) {
			if($arry["name"]=="paymentitem[$i]") {
				$this->PaymentItem[$i] = new PaymentItemType();
				$this->PaymentItem[$i]->init($arry["children"]);
			}
			else break;
			$i++;
			}
		}
				if(is_array($arry["children"]) && ($arry["children"])!=null && $arry["name"]=="paymentitem") {
				$this->PaymentItem = new PaymentItemType();
				$this->PaymentItem->init($arry["children"]);
					}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="subscription") {
				$this->Subscription = new SubscriptionInfoType();
				$this->Subscription->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="auction") {
				$this->Auction = new AuctionInfoType();
				$this->Auction->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * OfferCouponInfoType
 * OffersAndCouponsInfoType
 * Information about a Offers and Coupons.
 */
class OfferCouponInfoType {
	/**
	 * Type of the incentive 	 *
	 * @access public
	 * @var string
	 */
	public $Type;

	/**
	 * ID of the Incentive used in transaction	 *
	 * @access public
	 * @var string
	 */
	public $ID;

	/**
	 * Amount used on transaction	 *
	 * @access public
	 * @var string
	 */
	public $Amount;

	/**
	 * Amount Currency	 *
	 * @access public
	 * @var string
	 */
	public $AmountCurrency;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='type') {
				$this->Type = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='id') {
				$this->ID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='amount') {
				$this->Amount = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='amountcurrency') {
				$this->AmountCurrency = $arry["text"];
			}
		}
		}
	}
}

/**
 * PaymentDetailsType
 * PaymentDetailsType 
 * Information about a payment.  Used by DCC and Express Checkout.
 */
class PaymentDetailsType {
	/**
	 * Total of order, including shipping, handling, and tax. 
You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies.
	 * Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,). 	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $OrderTotal;

	/**
	 * Sum of cost of all items in this order. 
You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies.
	 * Optional
	 * separator must be a comma (,).
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $ItemTotal;

	/**
	 * Total shipping costs for this order. 
You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies.
	 * Optional
	 * Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $ShippingTotal;

	/**
	 * Total handling costs for this order. 
You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies.
	 * Optional
	 * Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $HandlingTotal;

	/**
	 * Sum of tax for all items in this order. 
You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies.
	 * Optional
	 * Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $TaxTotal;

	/**
	 * Description of items the customer is purchasing. 
	 * Optional
	 * Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $OrderDescription;

	/**
	 * A free-form field for your own use. 
	 * Optional
	 * Character length and limitations: 256 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $Custom;

	/**
	 * Your own invoice or tracking number. 
	 * Optional
	 * Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $InvoiceID;

	/**
	 * An identification code for use by third-party applications to identify transactions. 
	 * Optional
	 * Character length and limitations: 32 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $ButtonSource;

	/**
	 * Your URL for receiving Instant Payment Notification (IPN) about this transaction. 
	 * Optional
	 * If you do not specify NotifyURL in the request, the notification URL from your Merchant Profile is used, if one exists. 
	 * Character length and limitations: 2,048 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $NotifyURL;

	/**
	 * Address the order will be shipped to. 
	 * Optional
	 * If you include the ShipToAddress element, the AddressType elements are required: 
	 * Name
	 * Street1
	 * CityName
	 * CountryCode
	 * Do not set set the CountryName element.
	 *
	 * @access public
	 * @var AddressType
	 */
	public $ShipToAddress;

	/**
	 *
	 * @access public
	 * @var ShippingServiceCodeType
	 */
	public $ShippingMethod;

	/**
	 * Date and time (in GMT in the format yyyy-MM-ddTHH:mm:ssZ) at which address was changed by the user. 
	 *
	 * @access public
	 * @var dateTime
	 */
	public $ProfileAddressChangeDate;

	/**
	 * Information about the individual purchased items	 *
	 * array
	 * @access public
	 * @var PaymentDetailsItemType
	 */
	public $PaymentDetailsItem;

	/**
	 * Total shipping insurance costs for this order.
	 * Optional
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $InsuranceTotal;

	/**
	 * Shipping discount for this order, specified as a negative number.
	 * Optional
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $ShippingDiscount;

	/**
	 * Information about the Insurance options.
	 *
	 * @access public
	 * @var string
	 */
	public $InsuranceOptionOffered;

	/**
	 * Allowed payment methods for this transaction.
	 *
	 * @access public
	 * @var AllowedPaymentMethodType
	 */
	public $AllowedPaymentMethod;

	/**
	 * Enhanced Data section to accept channel specific data.
	 * Optional
	 * Refer to EnhancedPaymentDataType for details.
	 *
	 * @access public
	 * @var EnhancedPaymentDataType
	 */
	public $EnhancedPaymentData;

	/**
	 * Details about the seller.
	 * Optional 
	 *
	 * @access public
	 * @var SellerDetailsType
	 */
	public $SellerDetails;

	/**
	 * Note to recipient/seller. 
	 * Optional 
	 * Character length and limitations: 127 single-byte alphanumeric characters.
	 *
	 * @access public
	 * @var string
	 */
	public $NoteText;

	/**
	 * PayPal Transaction Id, returned once DoExpressCheckout is completed. 
	 *
	 * @access public
	 * @var string
	 */
	public $TransactionId;

	/**
	 * How you want to obtain payment.
	 * This payment action input will be used for split payments
	 * Authorization indicates that this payment is a basic authorization subject to settlement with PayPal Authorization and Capture.
	 * Order indicates that this payment is is an order authorization subject to settlement with PayPal Authorization and Capture.
	 * Sale indicates that this is a final sale for which you are requesting payment.
	 * IMPORTANT: You cannot set PaymentAction to Sale on SetExpressCheckoutRequest and then change PaymentAction to Authorization on the final Express Checkout API, DoExpressCheckoutPaymentRequest.
	 * Character length and limit: Up to 13 single-byte alphabetic characters
	 *
	 * @access public
	 * @var PaymentActionCodeType
	 */
	public $PaymentAction;

	/**
	 * Unique identifier and mandatory for the particular payment request in case of multiple payment
	 *
	 * @access public
	 * @var string
	 */
	public $PaymentRequestID;

	/**
	 * URL on Merchant site pertaining to this invoice. 
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $OrderURL;

	/**
	 * Soft Descriptor supported for Sale and Auth in DEC only. For Order this will be ignored.
	 *
	 * @access public
	 * @var string
	 */
	public $SoftDescriptor;

	/**
	 * BranchLevel is used to identify chain payment.
	 * If BranchLevel is 0 or 1, this payment is where money moves to.
	 * If BranchLevel greater than 1, this payment contains the actual seller info.	
	 * Optional
	 *
	 * @access public
	 * @var integer
	 */
	public $BranchLevel;

	/**
	 * Soft Descriptor supported for Sale and Auth in DEC only. For Order this will be ignored.
	 *
	 * @access public
	 * @var OfferDetailsType
	 */
	public $OfferDetails;

	/**
	 * Flag to indicate the recurring transaction
	 *
	 * @access public
	 * @var RecurringFlagType
	 */
	public $Recurring;

	/**
	 * Indicates the purpose of this payment like Refund
	 *
	 * @access public
	 * @var PaymentReasonType
	 */
	public $PaymentReason;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="ordertotal") {
				$this->OrderTotal = new BasicAmountType();
				$this->OrderTotal->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="itemtotal") {
				$this->ItemTotal = new BasicAmountType();
				$this->ItemTotal->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="shippingtotal") {
				$this->ShippingTotal = new BasicAmountType();
				$this->ShippingTotal->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="handlingtotal") {
				$this->HandlingTotal = new BasicAmountType();
				$this->HandlingTotal->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="taxtotal") {
				$this->TaxTotal = new BasicAmountType();
				$this->TaxTotal->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='orderdescription') {
				$this->OrderDescription = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='custom') {
				$this->Custom = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='invoiceid') {
				$this->InvoiceID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='buttonsource') {
				$this->ButtonSource = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='notifyurl') {
				$this->NotifyURL = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="shiptoaddress") {
				$this->ShipToAddress = new AddressType();
				$this->ShipToAddress->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='shippingmethod') {
				$this->ShippingMethod = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='profileaddresschangedate') {
				$this->ProfileAddressChangeDate = $arry["text"];
			}
			if (is_array($arry["children"])&& ($arry["children"])!=null) 	{
			$i=0;
			while(true) {
			if($arry["name"]=="paymentdetailsitem[$i]") {
				$this->PaymentDetailsItem[$i] = new PaymentDetailsItemType();
				$this->PaymentDetailsItem[$i]->init($arry["children"]);
			}
			else break;
			$i++;
			}
		}
				if(is_array($arry["children"]) && ($arry["children"])!=null && $arry["name"]=="paymentdetailsitem") {
				$this->PaymentDetailsItem = new PaymentDetailsItemType();
				$this->PaymentDetailsItem->init($arry["children"]);
					}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="insurancetotal") {
				$this->InsuranceTotal = new BasicAmountType();
				$this->InsuranceTotal->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="shippingdiscount") {
				$this->ShippingDiscount = new BasicAmountType();
				$this->ShippingDiscount->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='insuranceoptionoffered') {
				$this->InsuranceOptionOffered = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='allowedpaymentmethod') {
				$this->AllowedPaymentMethod = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="enhancedpaymentdata") {
				$this->EnhancedPaymentData = new EnhancedPaymentDataType();
				$this->EnhancedPaymentData->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="sellerdetails") {
				$this->SellerDetails = new SellerDetailsType();
				$this->SellerDetails->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='notetext') {
				$this->NoteText = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='transactionid') {
				$this->TransactionId = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='paymentaction') {
				$this->PaymentAction = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='paymentrequestid') {
				$this->PaymentRequestID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='orderurl') {
				$this->OrderURL = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='softdescriptor') {
				$this->SoftDescriptor = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='branchlevel') {
				$this->BranchLevel = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="offerdetails") {
				$this->OfferDetails = new OfferDetailsType();
				$this->OfferDetails->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='recurring') {
				$this->Recurring = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='paymentreason') {
				$this->PaymentReason = $arry["text"];
			}
		}
		}
	}

	public function toXMLString()  {
		$str = '';
		if($this->OrderTotal != null ) {
			$str .='<ebl:OrderTotal';
			$str .= $this->OrderTotal->toXMLString();
			$str .=  '</ebl:OrderTotal>';
		 }
		if($this->ItemTotal != null ) {
			$str .='<ebl:ItemTotal';
			$str .= $this->ItemTotal->toXMLString();
			$str .=  '</ebl:ItemTotal>';
		 }
		if($this->ShippingTotal != null ) {
			$str .='<ebl:ShippingTotal';
			$str .= $this->ShippingTotal->toXMLString();
			$str .=  '</ebl:ShippingTotal>';
		 }
		if($this->HandlingTotal != null ) {
			$str .='<ebl:HandlingTotal';
			$str .= $this->HandlingTotal->toXMLString();
			$str .=  '</ebl:HandlingTotal>';
		 }
		if($this->TaxTotal != null ) {
			$str .='<ebl:TaxTotal';
			$str .= $this->TaxTotal->toXMLString();
			$str .=  '</ebl:TaxTotal>';
		 }
		if($this->OrderDescription != null ) {
			$str .= '<ebl:OrderDescription>'.$this->OrderDescription.'</ebl:OrderDescription>';
		 }
		if($this->Custom != null ) {
			$str .= '<ebl:Custom>'.$this->Custom.'</ebl:Custom>';
		 }
		if($this->InvoiceID != null ) {
			$str .= '<ebl:InvoiceID>'.$this->InvoiceID.'</ebl:InvoiceID>';
		 }
		if($this->ButtonSource != null ) {
			$str .= '<ebl:ButtonSource>'.$this->ButtonSource.'</ebl:ButtonSource>';
		 }
		if($this->NotifyURL != null ) {
			$str .= '<ebl:NotifyURL>'.$this->NotifyURL.'</ebl:NotifyURL>';
		 }
		if($this->ShipToAddress != null ) {
			$str .='<ebl:ShipToAddress>';
			$str .= $this->ShipToAddress->toXMLString();
			$str .=  '</ebl:ShipToAddress>';
		 }
		if($this->ShippingMethod != null ) {
			$str .= '<ebl:ShippingMethod>'.$this->ShippingMethod.'</ebl:ShippingMethod>';
		 }
		if($this->ProfileAddressChangeDate != null ) {
			$str .= '<ebl:ProfileAddressChangeDate>'.$this->ProfileAddressChangeDate.'</ebl:ProfileAddressChangeDate>';
		 }
		if($this->PaymentDetailsItem != null ) {
		for($i=0; $i<count($this->PaymentDetailsItem);$i++) {
			$str .= '<ebl:PaymentDetailsItem>';
			$str .= $this->PaymentDetailsItem[$i]->toXMLString();
			$str .=  '</ebl:PaymentDetailsItem>';
		 }
		 }
		if($this->InsuranceTotal != null ) {
			$str .='<ebl:InsuranceTotal';
			$str .= $this->InsuranceTotal->toXMLString();
			$str .=  '</ebl:InsuranceTotal>';
		 }
		if($this->ShippingDiscount != null ) {
			$str .='<ebl:ShippingDiscount';
			$str .= $this->ShippingDiscount->toXMLString();
			$str .=  '</ebl:ShippingDiscount>';
		 }
		if($this->InsuranceOptionOffered != null ) {
			$str .= '<ebl:InsuranceOptionOffered>'.$this->InsuranceOptionOffered.'</ebl:InsuranceOptionOffered>';
		 }
		if($this->AllowedPaymentMethod != null ) {
			$str .= '<ebl:AllowedPaymentMethod>'.$this->AllowedPaymentMethod.'</ebl:AllowedPaymentMethod>';
		 }
		if($this->EnhancedPaymentData != null ) {
			$str .='<ebl:EnhancedPaymentData>';
			$str .= $this->EnhancedPaymentData->toXMLString();
			$str .=  '</ebl:EnhancedPaymentData>';
		 }
		if($this->SellerDetails != null ) {
			$str .='<ebl:SellerDetails>';
			$str .= $this->SellerDetails->toXMLString();
			$str .=  '</ebl:SellerDetails>';
		 }
		if($this->NoteText != null ) {
			$str .= '<ebl:NoteText>'.$this->NoteText.'</ebl:NoteText>';
		 }
		if($this->TransactionId != null ) {
			$str .= '<ebl:TransactionId>'.$this->TransactionId.'</ebl:TransactionId>';
		 }
		if($this->PaymentAction != null ) {
			$str .= '<ebl:PaymentAction>'.$this->PaymentAction.'</ebl:PaymentAction>';
		 }
		if($this->PaymentRequestID != null ) {
			$str .= '<ebl:PaymentRequestID>'.$this->PaymentRequestID.'</ebl:PaymentRequestID>';
		 }
		if($this->OrderURL != null ) {
			$str .= '<ebl:OrderURL>'.$this->OrderURL.'</ebl:OrderURL>';
		 }
		if($this->SoftDescriptor != null ) {
			$str .= '<ebl:SoftDescriptor>'.$this->SoftDescriptor.'</ebl:SoftDescriptor>';
		 }
		if($this->BranchLevel != null ) {
			$str .= '<ebl:BranchLevel>'.$this->BranchLevel.'</ebl:BranchLevel>';
		 }
		if($this->OfferDetails != null ) {
			$str .='<ebl:OfferDetails>';
			$str .= $this->OfferDetails->toXMLString();
			$str .=  '</ebl:OfferDetails>';
		 }
		if($this->Recurring != null ) {
			$str .= '<ebl:Recurring>'.$this->Recurring.'</ebl:Recurring>';
		 }
		if($this->PaymentReason != null ) {
			$str .= '<ebl:PaymentReason>'.$this->PaymentReason.'</ebl:PaymentReason>';
		 }

		return $str;
	}

}

/**
 * IncentiveDetailsType
 * Information about the incentives that were applied from Ebay RYP page and PayPal RYP page.
 */
class IncentiveDetailsType {
	/**
	 * Unique Identifier consisting of redemption code, user friendly descripotion, incentive type, campaign code, incenitve application order and site redeemed o
n.
	 *
	 * @access public
	 * @var string
	 */
	public $UniqueIdentifier;

	/**
	 * Defines if the incentive has been applied on Ebay or PayPal.
	 *
	 * @access public
	 * @var IncentiveSiteAppliedOnType
	 */
	public $SiteAppliedOn;

	/**
	 * The total discount amount for the incentive, summation of discounts up across all the buckets/items.
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $TotalDiscountAmount;

	/**
	 * Status of incentive processing. Sussess or Error.
	 *
	 * @access public
	 * @var IncentiveAppliedStatusType
	 */
	public $Status;

	/**
	 * Error code if there are any errors. Zero otherwise.
	 *
	 * @access public
	 * @var integer
	 */
	public $ErrorCode;

	/**
	 * Details of incentive application on individual bucket/item.  
	 *
	 * array
	 * @access public
	 * @var IncentiveAppliedDetailsType
	 */
	public $IncentiveAppliedDetails;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='uniqueidentifier') {
				$this->UniqueIdentifier = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='siteappliedon') {
				$this->SiteAppliedOn = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="totaldiscountamount") {
				$this->TotalDiscountAmount = new BasicAmountType();
				$this->TotalDiscountAmount->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='status') {
				$this->Status = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='errorcode') {
				$this->ErrorCode = $arry["text"];
			}
			if (is_array($arry["children"])&& ($arry["children"])!=null) 	{
			$i=0;
			while(true) {
			if($arry["name"]=="incentiveapplieddetails[$i]") {
				$this->IncentiveAppliedDetails[$i] = new IncentiveAppliedDetailsType();
				$this->IncentiveAppliedDetails[$i]->init($arry["children"]);
			}
			else break;
			$i++;
			}
		}
				if(is_array($arry["children"]) && ($arry["children"])!=null && $arry["name"]=="incentiveapplieddetails") {
				$this->IncentiveAppliedDetails = new IncentiveAppliedDetailsType();
				$this->IncentiveAppliedDetails->init($arry["children"]);
					}
		}
		}
	}
}

/**
 * IncentiveAppliedDetailsType
 * Details of incentive application on individual bucket/item.  
 */
class IncentiveAppliedDetailsType {
	/**
	 * PaymentRequestID uniquely identifies a bucket. It is the "bucket id" in the world of EC API.
	 *
	 * @access public
	 * @var string
	 */
	public $PaymentRequestID;

	/**
	 * The item id passed through by the merchant. 
	 *
	 * @access public
	 * @var string
	 */
	public $ItemId;

	/**
	 * The item transaction id passed through by the merchant. 
	 *
	 * @access public
	 * @var string
	 */
	public $ExternalTxnId;

	/**
	 * Discount offerred for this bucket or item. 
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $DiscountAmount;

	/**
	 * SubType for coupon. 
	 *
	 * @access public
	 * @var string
	 */
	public $SubType;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='paymentrequestid') {
				$this->PaymentRequestID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='itemid') {
				$this->ItemId = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='externaltxnid') {
				$this->ExternalTxnId = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="discountamount") {
				$this->DiscountAmount = new BasicAmountType();
				$this->DiscountAmount->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='subtype') {
				$this->SubType = $arry["text"];
			}
		}
		}
	}
}

/**
 * SellerDetailsType
 * Details about the seller.
 */
class SellerDetailsType {
	/**
	 * Unique identifier for the seller.
	 * Optional 
	 *
	 * @access public
	 * @var string
	 */
	public $SellerId;

	/**
	 * The user name of the user at the marketplaces site.
	 * Optional 
	 *
	 * @access public
	 * @var string
	 */
	public $SellerUserName;

	/**
	 * Date when the user registered with the marketplace.
	 * Optional 
	 *
	 * @access public
	 * @var dateTime
	 */
	public $SellerRegistrationDate;

	/**
	 * Seller Paypal Account Id contains the seller EmailId or PayerId or PhoneNo passed during the Request. 
	 *
	 * @access public
	 * @var string
	 */
	public $PayPalAccountID;

	/**
	 * Unique PayPal customer account identification number (of the seller). This feild is meant for Response. This field is ignored, if passed in the Request.
	 *
	 * @access public
	 * @var string
	 */
	public $SecureMerchantAccountID;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='sellerid') {
				$this->SellerId = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='sellerusername') {
				$this->SellerUserName = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='sellerregistrationdate') {
				$this->SellerRegistrationDate = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='paypalaccountid') {
				$this->PayPalAccountID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='securemerchantaccountid') {
				$this->SecureMerchantAccountID = $arry["text"];
			}
		}
		}
	}

	public function toXMLString()  {
		$str = '';
		if($this->SellerId != null ) {
			$str .= '<ebl:SellerId>'.$this->SellerId.'</ebl:SellerId>';
		 }
		if($this->SellerUserName != null ) {
			$str .= '<ebl:SellerUserName>'.$this->SellerUserName.'</ebl:SellerUserName>';
		 }
		if($this->SellerRegistrationDate != null ) {
			$str .= '<ebl:SellerRegistrationDate>'.$this->SellerRegistrationDate.'</ebl:SellerRegistrationDate>';
		 }
		if($this->PayPalAccountID != null ) {
			$str .= '<ebl:PayPalAccountID>'.$this->PayPalAccountID.'</ebl:PayPalAccountID>';
		 }
		if($this->SecureMerchantAccountID != null ) {
			$str .= '<ebl:SecureMerchantAccountID>'.$this->SecureMerchantAccountID.'</ebl:SecureMerchantAccountID>';
		 }

		return $str;
	}

}

/**
 * OtherPaymentMethodDetailsType
 * Lists the Payment Methods (other than PayPal) that the use can pay with e.g. Money Order. 
 * Optional.
 */
class OtherPaymentMethodDetailsType {
	/**
	 * The identifier of the Payment Method.
	 *
	 * @access public
	 * @var string
	 */
	public $OtherPaymentMethodId;

	/**
	 * Valid values are 'Method', 'SubMethod'.
	 *
	 * @access public
	 * @var string
	 */
	public $OtherPaymentMethodType;

	/**
	 * The name of the Payment Method.
	 *
	 * @access public
	 * @var string
	 */
	public $OtherPaymentMethodLabel;

	/**
	 * The short description of the Payment Method, goes along with the label.
	 *
	 * @access public
	 * @var string
	 */
	public $OtherPaymentMethodLabelDescription;

	/**
	 * The title for the long description.
	 *
	 * @access public
	 * @var string
	 */
	public $OtherPaymentMethodLongDescriptionTitle;

	/**
	 * The long description of the Payment Method.
	 *
	 * @access public
	 * @var string
	 */
	public $OtherPaymentMethodLongDescription;

	/**
	 * The icon of the Payment Method.
	 *
	 * @access public
	 * @var string
	 */
	public $OtherPaymentMethodIcon;

	/**
	 * If this flag is true, then OtherPaymentMethodIcon is required to have a valid value; the label will be hidden and only ICON will be shown.
	 *
	 * @access public
	 * @var boolean
	 */
	public $OtherPaymentMethodHideLabel;


	public function toXMLString()  {
		$str = '';
		if($this->OtherPaymentMethodId != null ) {
			$str .= '<ebl:OtherPaymentMethodId>'.$this->OtherPaymentMethodId.'</ebl:OtherPaymentMethodId>';
		 }
		if($this->OtherPaymentMethodType != null ) {
			$str .= '<ebl:OtherPaymentMethodType>'.$this->OtherPaymentMethodType.'</ebl:OtherPaymentMethodType>';
		 }
		if($this->OtherPaymentMethodLabel != null ) {
			$str .= '<ebl:OtherPaymentMethodLabel>'.$this->OtherPaymentMethodLabel.'</ebl:OtherPaymentMethodLabel>';
		 }
		if($this->OtherPaymentMethodLabelDescription != null ) {
			$str .= '<ebl:OtherPaymentMethodLabelDescription>'.$this->OtherPaymentMethodLabelDescription.'</ebl:OtherPaymentMethodLabelDescription>';
		 }
		if($this->OtherPaymentMethodLongDescriptionTitle != null ) {
			$str .= '<ebl:OtherPaymentMethodLongDescriptionTitle>'.$this->OtherPaymentMethodLongDescriptionTitle.'</ebl:OtherPaymentMethodLongDescriptionTitle>';
		 }
		if($this->OtherPaymentMethodLongDescription != null ) {
			$str .= '<ebl:OtherPaymentMethodLongDescription>'.$this->OtherPaymentMethodLongDescription.'</ebl:OtherPaymentMethodLongDescription>';
		 }
		if($this->OtherPaymentMethodIcon != null ) {
			$str .= '<ebl:OtherPaymentMethodIcon>'.$this->OtherPaymentMethodIcon.'</ebl:OtherPaymentMethodIcon>';
		 }
		if($this->OtherPaymentMethodHideLabel != null ) {
			$str .= '<ebl:OtherPaymentMethodHideLabel>'.$this->OtherPaymentMethodHideLabel.'</ebl:OtherPaymentMethodHideLabel>';
		 }

		return $str;
	}

}

/**
 * BuyerDetailsType
 * Details about the buyer's account passed in by the merchant or partner.
 * Optional.
 */
class BuyerDetailsType {
	/**
	 * The client's unique ID for this user.
	 *
	 * @access public
	 * @var string
	 */
	public $BuyerId;

	/**
	 * The user name of the user at the marketplaces site.
	 *
	 * @access public
	 * @var string
	 */
	public $BuyerUserName;

	/**
	 * Date when the user registered with the marketplace.
	 *
	 * @access public
	 * @var dateTime
	 */
	public $BuyerRegistrationDate;

	/**
	 * Details about payer's tax info.
	 * Refer to the TaxIdDetailsType for more details.
	 *
	 * @access public
	 * @var TaxIdDetailsType
	 */
	public $TaxIdDetails;

	/**
	 * Contains information that identifies the buyer. e.g. email address or the external remember me id.
	 *
	 * @access public
	 * @var IdentificationInfoType
	 */
	public $IdentificationInfo;


	public function toXMLString()  {
		$str = '';
		if($this->BuyerId != null ) {
			$str .= '<ebl:BuyerId>'.$this->BuyerId.'</ebl:BuyerId>';
		 }
		if($this->BuyerUserName != null ) {
			$str .= '<ebl:BuyerUserName>'.$this->BuyerUserName.'</ebl:BuyerUserName>';
		 }
		if($this->BuyerRegistrationDate != null ) {
			$str .= '<ebl:BuyerRegistrationDate>'.$this->BuyerRegistrationDate.'</ebl:BuyerRegistrationDate>';
		 }
		if($this->TaxIdDetails != null ) {
			$str .='<ebl:TaxIdDetails>';
			$str .= $this->TaxIdDetails->toXMLString();
			$str .=  '</ebl:TaxIdDetails>';
		 }
		if($this->IdentificationInfo != null ) {
			$str .='<ebl:IdentificationInfo>';
			$str .= $this->IdentificationInfo->toXMLString();
			$str .=  '</ebl:IdentificationInfo>';
		 }

		return $str;
	}

}

/**
 * TaxIdDetailsType
 * Details about the payer's tax info passed in by the merchant or partner.
 * Optional.
 */
class TaxIdDetailsType {
	/**
	 * The payer's Tax ID type; CNPJ/CPF for BR country.
	 *
	 * @access public
	 * @var string
	 */
	public $TaxIdType;

	/**
	 * The payer's Tax ID
	 *
	 * @access public
	 * @var string
	 */
	public $TaxId;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='taxidtype') {
				$this->TaxIdType = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='taxid') {
				$this->TaxId = $arry["text"];
			}
		}
		}
	}

	public function toXMLString()  {
		$str = '';
		if($this->TaxIdType != null ) {
			$str .= '<ebl:TaxIdType>'.$this->TaxIdType.'</ebl:TaxIdType>';
		 }
		if($this->TaxId != null ) {
			$str .= '<ebl:TaxId>'.$this->TaxId.'</ebl:TaxId>';
		 }

		return $str;
	}

}

/**
 * ThreeDSecureRequestType
 * The Common 3DS fields. Common for both GTD and DCC API's.
 */
class ThreeDSecureRequestType {
	/**
	 * @access public
	 * @var string
	 */
	public $Eci3ds;

	/**
	 * @access public
	 * @var string
	 */
	public $Cavv;

	/**
	 * @access public
	 * @var string
	 */
	public $Xid;

	/**
	 * @access public
	 * @var string
	 */
	public $MpiVendor3ds;

	/**
	 * @access public
	 * @var string
	 */
	public $AuthStatus3ds;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='eci3ds') {
				$this->Eci3ds = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='cavv') {
				$this->Cavv = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='xid') {
				$this->Xid = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='mpivendor3ds') {
				$this->MpiVendor3ds = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='authstatus3ds') {
				$this->AuthStatus3ds = $arry["text"];
			}
		}
		}
	}

	public function toXMLString()  {
		$str = '';
		if($this->Eci3ds != null ) {
			$str .= '<ebl:Eci3ds>'.$this->Eci3ds.'</ebl:Eci3ds>';
		 }
		if($this->Cavv != null ) {
			$str .= '<ebl:Cavv>'.$this->Cavv.'</ebl:Cavv>';
		 }
		if($this->Xid != null ) {
			$str .= '<ebl:Xid>'.$this->Xid.'</ebl:Xid>';
		 }
		if($this->MpiVendor3ds != null ) {
			$str .= '<ebl:MpiVendor3ds>'.$this->MpiVendor3ds.'</ebl:MpiVendor3ds>';
		 }
		if($this->AuthStatus3ds != null ) {
			$str .= '<ebl:AuthStatus3ds>'.$this->AuthStatus3ds.'</ebl:AuthStatus3ds>';
		 }

		return $str;
	}

}

/**
 * ThreeDSecureResponseType
 * 3DS remaining fields.
 */
class ThreeDSecureResponseType {
	/**
	 * @access public
	 * @var string
	 */
	public $Vpas;

	/**
	 * @access public
	 * @var string
	 */
	public $EciSubmitted3DS;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='vpas') {
				$this->Vpas = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='ecisubmitted3ds') {
				$this->EciSubmitted3DS = $arry["text"];
			}
		}
		}
	}
}

/**
 * ThreeDSecureInfoType
 * 3DSecureInfoType
 * Information about 3D Secure parameters.
 */
class ThreeDSecureInfoType {
	/**
	 * @access public
	 * @var ThreeDSecureRequestType
	 */
	public $ThreeDSecureRequest;

	/**
	 * @access public
	 * @var ThreeDSecureResponseType
	 */
	public $ThreeDSecureResponse;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="threedsecurerequest") {
				$this->ThreeDSecureRequest = new ThreeDSecureRequestType();
				$this->ThreeDSecureRequest->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="threedsecureresponse") {
				$this->ThreeDSecureResponse = new ThreeDSecureResponseType();
				$this->ThreeDSecureResponse->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * CreditCardDetailsType
 * CreditCardDetailsType 
 * Information about a Credit Card.
 */
class CreditCardDetailsType {
	/**
	 * @access public
	 * @var CreditCardTypeType
	 */
	public $CreditCardType;

	/**
	 * @access public
	 * @var string
	 */
	public $CreditCardNumber;

	/**
	 * @access public
	 * @var int
	 */
	public $ExpMonth;

	/**
	 * @access public
	 * @var int
	 */
	public $ExpYear;

	/**
	 * @access public
	 * @var PayerInfoType
	 */
	public $CardOwner;

	/**
	 * @access public
	 * @var string
	 */
	public $CVV2;

	/**
	 * @access public
	 * @var int
	 */
	public $StartMonth;

	/**
	 * @access public
	 * @var int
	 */
	public $StartYear;

	/**
	 * @access public
	 * @var string
	 */
	public $IssueNumber;

	/**
	 * @access public
	 * @var ThreeDSecureRequestType
	 */
	public $ThreeDSecureRequest;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='creditcardtype') {
				$this->CreditCardType = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='creditcardnumber') {
				$this->CreditCardNumber = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='expmonth') {
				$this->ExpMonth = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='expyear') {
				$this->ExpYear = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="cardowner") {
				$this->CardOwner = new PayerInfoType();
				$this->CardOwner->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='cvv2') {
				$this->CVV2 = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='startmonth') {
				$this->StartMonth = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='startyear') {
				$this->StartYear = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='issuenumber') {
				$this->IssueNumber = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="threedsecurerequest") {
				$this->ThreeDSecureRequest = new ThreeDSecureRequestType();
				$this->ThreeDSecureRequest->init($arry["children"]);
					}
			}
		}
		}
	}

	public function toXMLString()  {
		$str = '';
		if($this->CreditCardType != null ) {
			$str .= '<ebl:CreditCardType>'.$this->CreditCardType.'</ebl:CreditCardType>';
		 }
		if($this->CreditCardNumber != null ) {
			$str .= '<ebl:CreditCardNumber>'.$this->CreditCardNumber.'</ebl:CreditCardNumber>';
		 }
		if($this->ExpMonth != null ) {
			$str .= '<ebl:ExpMonth>'.$this->ExpMonth.'</ebl:ExpMonth>';
		 }
		if($this->ExpYear != null ) {
			$str .= '<ebl:ExpYear>'.$this->ExpYear.'</ebl:ExpYear>';
		 }
		if($this->CardOwner != null ) {
			$str .='<ebl:CardOwner>';
			$str .= $this->CardOwner->toXMLString();
			$str .=  '</ebl:CardOwner>';
		 }
		if($this->CVV2 != null ) {
			$str .= '<ebl:CVV2>'.$this->CVV2.'</ebl:CVV2>';
		 }
		if($this->StartMonth != null ) {
			$str .= '<ebl:StartMonth>'.$this->StartMonth.'</ebl:StartMonth>';
		 }
		if($this->StartYear != null ) {
			$str .= '<ebl:StartYear>'.$this->StartYear.'</ebl:StartYear>';
		 }
		if($this->IssueNumber != null ) {
			$str .= '<ebl:IssueNumber>'.$this->IssueNumber.'</ebl:IssueNumber>';
		 }
		if($this->ThreeDSecureRequest != null ) {
			$str .='<ebl:ThreeDSecureRequest>';
			$str .= $this->ThreeDSecureRequest->toXMLString();
			$str .=  '</ebl:ThreeDSecureRequest>';
		 }

		return $str;
	}

}

/**
 * ShippingOptionType
 * Fallback shipping options type.
 */
class ShippingOptionType {
	/**
	 * @access public
	 * @var string
	 */
	public $ShippingOptionIsDefault;

	/**
	 * @access public
	 * @var BasicAmountType
	 */
	public $ShippingOptionAmount;

	/**
	 * @access public
	 * @var string
	 */
	public $ShippingOptionName;


	public function toXMLString()  {
		$str = '';
		if($this->ShippingOptionIsDefault != null ) {
			$str .= '<ebl:ShippingOptionIsDefault>'.$this->ShippingOptionIsDefault.'</ebl:ShippingOptionIsDefault>';
		 }
		if($this->ShippingOptionAmount != null ) {
			$str .='<ebl:ShippingOptionAmount';
			$str .= $this->ShippingOptionAmount->toXMLString();
			$str .=  '</ebl:ShippingOptionAmount>';
		 }
		if($this->ShippingOptionName != null ) {
			$str .= '<ebl:ShippingOptionName>'.$this->ShippingOptionName.'</ebl:ShippingOptionName>';
		 }

		return $str;
	}

}

/**
 * UserSelectedOptionType
 * Information on user selected options
 */
class UserSelectedOptionType {
	/**
	 * @access public
	 * @var string
	 */
	public $ShippingCalculationMode;

	/**
	 * @access public
	 * @var string
	 */
	public $InsuranceOptionSelected;

	/**
	 * @access public
	 * @var string
	 */
	public $ShippingOptionIsDefault;

	/**
	 * @access public
	 * @var BasicAmountType
	 */
	public $ShippingOptionAmount;

	/**
	 * @access public
	 * @var string
	 */
	public $ShippingOptionName;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='shippingcalculationmode') {
				$this->ShippingCalculationMode = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='insuranceoptionselected') {
				$this->InsuranceOptionSelected = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='shippingoptionisdefault') {
				$this->ShippingOptionIsDefault = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="shippingoptionamount") {
				$this->ShippingOptionAmount = new BasicAmountType();
				$this->ShippingOptionAmount->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='shippingoptionname') {
				$this->ShippingOptionName = $arry["text"];
			}
		}
		}
	}

	public function toXMLString()  {
		$str = '';
		if($this->ShippingCalculationMode != null ) {
			$str .= '<ebl:ShippingCalculationMode>'.$this->ShippingCalculationMode.'</ebl:ShippingCalculationMode>';
		 }
		if($this->InsuranceOptionSelected != null ) {
			$str .= '<ebl:InsuranceOptionSelected>'.$this->InsuranceOptionSelected.'</ebl:InsuranceOptionSelected>';
		 }
		if($this->ShippingOptionIsDefault != null ) {
			$str .= '<ebl:ShippingOptionIsDefault>'.$this->ShippingOptionIsDefault.'</ebl:ShippingOptionIsDefault>';
		 }
		if($this->ShippingOptionAmount != null ) {
			$str .='<ebl:ShippingOptionAmount';
			$str .= $this->ShippingOptionAmount->toXMLString();
			$str .=  '</ebl:ShippingOptionAmount>';
		 }
		if($this->ShippingOptionName != null ) {
			$str .= '<ebl:ShippingOptionName>'.$this->ShippingOptionName.'</ebl:ShippingOptionName>';
		 }

		return $str;
	}

}

/**
 * CreditCardNumberTypeType
 */
class CreditCardNumberTypeType {
	/**
	 * @access public
	 * @var CreditCardTypeType
	 */
	public $CreditCardType;

	/**
	 * @access public
	 * @var string
	 */
	public $CreditCardNumber;


	public function toXMLString()  {
		$str = '';
		if($this->CreditCardType != null ) {
			$str .= '<ebl:CreditCardType>'.$this->CreditCardType.'</ebl:CreditCardType>';
		 }
		if($this->CreditCardNumber != null ) {
			$str .= '<ebl:CreditCardNumber>'.$this->CreditCardNumber.'</ebl:CreditCardNumber>';
		 }

		return $str;
	}

}

/**
 * ReferenceCreditCardDetailsType
 * CreditCardDetailsType for DCC Reference Transaction
 * Information about a Credit Card.
 */
class ReferenceCreditCardDetailsType {
	/**
	 * @access public
	 * @var CreditCardNumberTypeType
	 */
	public $CreditCardNumberType;

	/**
	 * @access public
	 * @var int
	 */
	public $ExpMonth;

	/**
	 * @access public
	 * @var int
	 */
	public $ExpYear;

	/**
	 * @access public
	 * @var PersonNameType
	 */
	public $CardOwnerName;

	/**
	 * @access public
	 * @var AddressType
	 */
	public $BillingAddress;

	/**
	 * @access public
	 * @var string
	 */
	public $CVV2;

	/**
	 * @access public
	 * @var int
	 */
	public $StartMonth;

	/**
	 * @access public
	 * @var int
	 */
	public $StartYear;

	/**
	 * @access public
	 * @var string
	 */
	public $IssueNumber;


	public function toXMLString()  {
		$str = '';
		if($this->CreditCardNumberType != null ) {
			$str .='<ebl:CreditCardNumberType>';
			$str .= $this->CreditCardNumberType->toXMLString();
			$str .=  '</ebl:CreditCardNumberType>';
		 }
		if($this->ExpMonth != null ) {
			$str .= '<ebl:ExpMonth>'.$this->ExpMonth.'</ebl:ExpMonth>';
		 }
		if($this->ExpYear != null ) {
			$str .= '<ebl:ExpYear>'.$this->ExpYear.'</ebl:ExpYear>';
		 }
		if($this->CardOwnerName != null ) {
			$str .='<ebl:CardOwnerName>';
			$str .= $this->CardOwnerName->toXMLString();
			$str .=  '</ebl:CardOwnerName>';
		 }
		if($this->BillingAddress != null ) {
			$str .='<ebl:BillingAddress>';
			$str .= $this->BillingAddress->toXMLString();
			$str .=  '</ebl:BillingAddress>';
		 }
		if($this->CVV2 != null ) {
			$str .= '<ebl:CVV2>'.$this->CVV2.'</ebl:CVV2>';
		 }
		if($this->StartMonth != null ) {
			$str .= '<ebl:StartMonth>'.$this->StartMonth.'</ebl:StartMonth>';
		 }
		if($this->StartYear != null ) {
			$str .= '<ebl:StartYear>'.$this->StartYear.'</ebl:StartYear>';
		 }
		if($this->IssueNumber != null ) {
			$str .= '<ebl:IssueNumber>'.$this->IssueNumber.'</ebl:IssueNumber>';
		 }

		return $str;
	}

}

/**
 * CustomSecurityHeaderType
 * Custom Securiy Header.
 */
class CustomSecurityHeaderType {
	/**
	 * @access public
	 * @var string
	 */
	public $eBayAuthToken;

	/**
	 * @access public
	 * @var string
	 */
	public $HardExpirationWarning;

	/**
	 * @access public
	 * @var UserIdPasswordType
	 */
	public $Credentials;

}

/**
 * UserIdPasswordType
 * The username is the identifier for an account.
 */
class UserIdPasswordType {
	/**
	 * @access public
	 * @var string
	 */
	public $AppId;

	/**
	 * @access public
	 * @var string
	 */
	public $DevId;

	/**
	 * @access public
	 * @var string
	 */
	public $AuthCert;

	/**
	 * The username is the identifier for an account.
	 *
	 * @access public
	 * @var string
	 */
	public $Username;

	/**
	 * Password contains the current password associated with the username.  
	 *
	 * @access public
	 * @var string
	 */
	public $Password;

	/**
	 * Signature for Three Token authentication.
	 *
	 * @access public
	 * @var string
	 */
	public $Signature;

	/**
	 * This field identifies an account (e.g., payment) on whose behalf the operation is being performed. 
	 * For instance one account holder may delegate the abililty to perform certain operations 
	 * to another account holder.  This delegation is done through a separate mechanism.  
	 * If the base username has not been authorized by the subject the request will be rejected.
	 *
	 * @access public
	 * @var string
	 */
	public $Subject;

	/**
	 * Authentication Session Token for authentication and authorization.
	 *
	 * @access public
	 * @var string
	 */
	public $AuthToken;

}

/**
 * SetCustomerBillingAgreementRequestDetailsType
 */
class SetCustomerBillingAgreementRequestDetailsType {
	/**
	 *
	 * @access public
	 * @var BillingAgreementDetailsType
	 */
	public $BillingAgreementDetails;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $ReturnURL;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $CancelURL;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $LocaleCode;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $PageStyle;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $cppheaderimage;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $cppheaderbordercolor;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $cppheaderbackcolor;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $cpppayflowcolor;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $BuyerEmail;

	/**
The value 1 indicates that you require that the customer's billing address on file. Setting this element overrides the setting you have specified in Admin.
	 * Optional
	 * Character length and limitations: One single-byte numeric character.
	 *
	 * @access public
	 * @var string
	 */
	public $ReqBillingAddress;


	public function __construct($BillingAgreementDetails = null, $ReturnURL = null, $CancelURL = null) {
		$this->BillingAgreementDetails  = $BillingAgreementDetails;
		$this->ReturnURL  = $ReturnURL;
		$this->CancelURL  = $CancelURL;
	}

	public function toXMLString()  {
		$str = '';
		if($this->BillingAgreementDetails != null ) {
			$str .='<ebl:BillingAgreementDetails>';
			$str .= $this->BillingAgreementDetails->toXMLString();
			$str .=  '</ebl:BillingAgreementDetails>';
		 }
		if($this->ReturnURL != null ) {
			$str .= '<ebl:ReturnURL>'.$this->ReturnURL.'</ebl:ReturnURL>';
		 }
		if($this->CancelURL != null ) {
			$str .= '<ebl:CancelURL>'.$this->CancelURL.'</ebl:CancelURL>';
		 }
		if($this->LocaleCode != null ) {
			$str .= '<ebl:LocaleCode>'.$this->LocaleCode.'</ebl:LocaleCode>';
		 }
		if($this->PageStyle != null ) {
			$str .= '<ebl:PageStyle>'.$this->PageStyle.'</ebl:PageStyle>';
		 }
		if($this->cppheaderimage != null ) {
			$str .= '<ebl:cpp-header-image>'.$this->cppheaderimage.'</ebl:cpp-header-image>';
		 }
		if($this->cppheaderbordercolor != null ) {
			$str .= '<ebl:cpp-header-border-color>'.$this->cppheaderbordercolor.'</ebl:cpp-header-border-color>';
		 }
		if($this->cppheaderbackcolor != null ) {
			$str .= '<ebl:cpp-header-back-color>'.$this->cppheaderbackcolor.'</ebl:cpp-header-back-color>';
		 }
		if($this->cpppayflowcolor != null ) {
			$str .= '<ebl:cpp-payflow-color>'.$this->cpppayflowcolor.'</ebl:cpp-payflow-color>';
		 }
		if($this->BuyerEmail != null ) {
			$str .= '<ebl:BuyerEmail>'.$this->BuyerEmail.'</ebl:BuyerEmail>';
		 }
		if($this->ReqBillingAddress != null ) {
			$str .= '<ebl:ReqBillingAddress>'.$this->ReqBillingAddress.'</ebl:ReqBillingAddress>';
		 }

		return $str;
	}

}

/**
 * GetBillingAgreementCustomerDetailsResponseDetailsType
 */
class GetBillingAgreementCustomerDetailsResponseDetailsType {
	/**
	 *
	 * @access public
	 * @var PayerInfoType
	 */
	public $PayerInfo;

	/**
Customer's billing address.
	 * Optional
	 * If you have a credit card mapped in your PayPal account, PayPal returns the billing address of the credit billing address otherwise your primary address as billing address in GetBillingAgreementCustomerDetails.
	 *
	 * @access public
	 * @var AddressType
	 */
	public $BillingAddress;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="payerinfo") {
				$this->PayerInfo = new PayerInfoType();
				$this->PayerInfo->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="billingaddress") {
				$this->BillingAddress = new AddressType();
				$this->BillingAddress->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * DeviceDetailsType
 * Device ID Optional
 * Character length and limits: 256 single-byte characters 
 * DeviceID length morethan 256 is truncated
 */
class DeviceDetailsType {
	/**
Device ID Optional
	 * Character length and limits: 256 single-byte characters 
	 * DeviceID length morethan 256 is truncated
	 *
	 * @access public
	 * @var string
	 */
	public $DeviceID;


	public function toXMLString()  {
		$str = '';
		if($this->DeviceID != null ) {
			$str .= '<ebl:DeviceID>'.$this->DeviceID.'</ebl:DeviceID>';
		 }

		return $str;
	}

}

/**
 * SenderDetailsType
 */
class SenderDetailsType {
	/**
	 *
	 * @access public
	 * @var DeviceDetailsType
	 */
	public $DeviceDetails;


	public function toXMLString()  {
		$str = '';
		if($this->DeviceDetails != null ) {
			$str .='<ebl:DeviceDetails>';
			$str .= $this->DeviceDetails->toXMLString();
			$str .=  '</ebl:DeviceDetails>';
		 }

		return $str;
	}

}

/**
 * DoReferenceTransactionRequestDetailsType
 */
class DoReferenceTransactionRequestDetailsType {
	/**
	 *
	 * @access public
	 * @var string
	 */
	public $ReferenceID;

	/**
	 *
	 * @access public
	 * @var PaymentActionCodeType
	 */
	public $PaymentAction;

	/**
	 *
	 * @access public
	 * @var MerchantPullPaymentCodeType
	 */
	public $PaymentType;

	/**
	 *
	 * @access public
	 * @var PaymentDetailsType
	 */
	public $PaymentDetails;

	/**
	 *
	 * @access public
	 * @var ReferenceCreditCardDetailsType
	 */
	public $CreditCard;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $IPAddress;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $MerchantSessionId;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $ReqConfirmShipping;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $SoftDescriptor;

	/**
	 *
	 * @access public
	 * @var SenderDetailsType
	 */
	public $SenderDetails;


	public function __construct($ReferenceID = null, $PaymentAction = null, $PaymentDetails = null) {
		$this->ReferenceID  = $ReferenceID;
		$this->PaymentAction  = $PaymentAction;
		$this->PaymentDetails  = $PaymentDetails;
	}

	public function toXMLString()  {
		$str = '';
		if($this->ReferenceID != null ) {
			$str .= '<ebl:ReferenceID>'.$this->ReferenceID.'</ebl:ReferenceID>';
		 }
		if($this->PaymentAction != null ) {
			$str .= '<ebl:PaymentAction>'.$this->PaymentAction.'</ebl:PaymentAction>';
		 }
		if($this->PaymentType != null ) {
			$str .= '<ebl:PaymentType>'.$this->PaymentType.'</ebl:PaymentType>';
		 }
		if($this->PaymentDetails != null ) {
			$str .='<ebl:PaymentDetails>';
			$str .= $this->PaymentDetails->toXMLString();
			$str .=  '</ebl:PaymentDetails>';
		 }
		if($this->CreditCard != null ) {
			$str .='<ebl:CreditCard>';
			$str .= $this->CreditCard->toXMLString();
			$str .=  '</ebl:CreditCard>';
		 }
		if($this->IPAddress != null ) {
			$str .= '<ebl:IPAddress>'.$this->IPAddress.'</ebl:IPAddress>';
		 }
		if($this->MerchantSessionId != null ) {
			$str .= '<ebl:MerchantSessionId>'.$this->MerchantSessionId.'</ebl:MerchantSessionId>';
		 }
		if($this->ReqConfirmShipping != null ) {
			$str .= '<ebl:ReqConfirmShipping>'.$this->ReqConfirmShipping.'</ebl:ReqConfirmShipping>';
		 }
		if($this->SoftDescriptor != null ) {
			$str .= '<ebl:SoftDescriptor>'.$this->SoftDescriptor.'</ebl:SoftDescriptor>';
		 }
		if($this->SenderDetails != null ) {
			$str .='<ebl:SenderDetails>';
			$str .= $this->SenderDetails->toXMLString();
			$str .=  '</ebl:SenderDetails>';
		 }

		return $str;
	}

}

/**
 * DoReferenceTransactionResponseDetailsType
 */
class DoReferenceTransactionResponseDetailsType {
	/**
	 *
	 * @access public
	 * @var string
	 */
	public $BillingAgreementID;

	/**
	 *
	 * @access public
	 * @var PaymentInfoType
	 */
	public $PaymentInfo;

	/**
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Amount;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $AVSCode;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $CVV2Code;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $TransactionID;

	/**
	 * Response code from the processor when a recurring transaction is declined
	 *
	 * @access public
	 * @var string
	 */
	public $PaymentAdviceCode;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='billingagreementid') {
				$this->BillingAgreementID = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="paymentinfo") {
				$this->PaymentInfo = new PaymentInfoType();
				$this->PaymentInfo->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="amount") {
				$this->Amount = new BasicAmountType();
				$this->Amount->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='avscode') {
				$this->AVSCode = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='cvv2code') {
				$this->CVV2Code = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='transactionid') {
				$this->TransactionID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='paymentadvicecode') {
				$this->PaymentAdviceCode = $arry["text"];
			}
		}
		}
	}
}

/**
 * DoNonReferencedCreditRequestDetailsType
 */
class DoNonReferencedCreditRequestDetailsType {
	/**
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Amount;

	/**
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $NetAmount;

	/**
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $TaxAmount;

	/**
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $ShippingAmount;

	/**
	 *
	 * @access public
	 * @var CreditCardDetailsType
	 */
	public $CreditCard;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $ReceiverEmail;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $Comment;


	public function toXMLString()  {
		$str = '';
		if($this->Amount != null ) {
			$str .='<ebl:Amount';
			$str .= $this->Amount->toXMLString();
			$str .=  '</ebl:Amount>';
		 }
		if($this->NetAmount != null ) {
			$str .='<ebl:NetAmount';
			$str .= $this->NetAmount->toXMLString();
			$str .=  '</ebl:NetAmount>';
		 }
		if($this->TaxAmount != null ) {
			$str .='<ebl:TaxAmount';
			$str .= $this->TaxAmount->toXMLString();
			$str .=  '</ebl:TaxAmount>';
		 }
		if($this->ShippingAmount != null ) {
			$str .='<ebl:ShippingAmount';
			$str .= $this->ShippingAmount->toXMLString();
			$str .=  '</ebl:ShippingAmount>';
		 }
		if($this->CreditCard != null ) {
			$str .='<ebl:CreditCard>';
			$str .= $this->CreditCard->toXMLString();
			$str .=  '</ebl:CreditCard>';
		 }
		if($this->ReceiverEmail != null ) {
			$str .= '<ebl:ReceiverEmail>'.$this->ReceiverEmail.'</ebl:ReceiverEmail>';
		 }
		if($this->Comment != null ) {
			$str .= '<ebl:Comment>'.$this->Comment.'</ebl:Comment>';
		 }

		return $str;
	}

}

/**
 * DoNonReferencedCreditResponseDetailsType
 */
class DoNonReferencedCreditResponseDetailsType {
	/**
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Amount;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $TransactionID;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="amount") {
				$this->Amount = new BasicAmountType();
				$this->Amount->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='transactionid') {
				$this->TransactionID = $arry["text"];
			}
		}
		}
	}
}

/**
 * EnterBoardingRequestDetailsType
 * Onboarding program code given to you by PayPal.
 * Required
 * Character length and limitations: 64 alphanumeric characters
 */
class EnterBoardingRequestDetailsType {
	/**
	 * Onboarding program code given to you by PayPal.
	 * Required
	 * Character length and limitations: 64 alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $ProgramCode;

	/**
	 * A list of comma-separated values that indicate the PayPal products you are implementing for this merchant:
	 * Direct Payment (dp) allows payments by credit card without requiring the customer to have a PayPal account. 
	 * Express Checkout (ec) allows customers to fund transactions with their PayPal account. 
	 * Authorization and Capture (auth_settle) allows merchants to verify availability of funds in a PayPal account, but capture them at a later time. 
	 * Administrative APIs (admin_api) is a collection of the PayPal APIs for transaction searching, getting transaction details, refunding, and mass payments. 
	 * Required
	 * Character length and limitations: 64 alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $ProductList;

	/**
	 * Any custom information you want to store for this partner
	 * Optional
	 * Character length and limitations: 256 alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $PartnerCustom;

	/**
	 * The URL for the logo displayed on the PayPal Partner Welcome Page.
	 * Optional
	 * Character length and limitations: 2,048 alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $ImageUrl;

	/**
	 * Marketing category tha configures the graphic displayed n the PayPal Partner Welcome page.	 *
	 * @access public
	 * @var MarketingCategoryType
	 */
	public $MarketingCategory;

	/**
	 * Information about the merchant’s business	 *
	 * @access public
	 * @var BusinessInfoType
	 */
	public $BusinessInfo;

	/**
	 * Information about the merchant (the business owner)	 *
	 * @access public
	 * @var BusinessOwnerInfoType
	 */
	public $OwnerInfo;

	/**
	 * Information about the merchant's bank account	 *
	 * @access public
	 * @var BankAccountDetailsType
	 */
	public $BankAccount;


	public function toXMLString()  {
		$str = '';
		if($this->ProgramCode != null ) {
			$str .= '<ebl:ProgramCode>'.$this->ProgramCode.'</ebl:ProgramCode>';
		 }
		if($this->ProductList != null ) {
			$str .= '<ebl:ProductList>'.$this->ProductList.'</ebl:ProductList>';
		 }
		if($this->PartnerCustom != null ) {
			$str .= '<ebl:PartnerCustom>'.$this->PartnerCustom.'</ebl:PartnerCustom>';
		 }
		if($this->ImageUrl != null ) {
			$str .= '<ebl:ImageUrl>'.$this->ImageUrl.'</ebl:ImageUrl>';
		 }
		if($this->MarketingCategory != null ) {
			$str .= '<ebl:MarketingCategory>'.$this->MarketingCategory.'</ebl:MarketingCategory>';
		 }
		if($this->BusinessInfo != null ) {
			$str .='<ebl:BusinessInfo>';
			$str .= $this->BusinessInfo->toXMLString();
			$str .=  '</ebl:BusinessInfo>';
		 }
		if($this->OwnerInfo != null ) {
			$str .='<ebl:OwnerInfo>';
			$str .= $this->OwnerInfo->toXMLString();
			$str .=  '</ebl:OwnerInfo>';
		 }
		if($this->BankAccount != null ) {
			$str .='<ebl:BankAccount>';
			$str .= $this->BankAccount->toXMLString();
			$str .=  '</ebl:BankAccount>';
		 }

		return $str;
	}

}

/**
 * BusinessInfoType
 * BusinessInfoType 
 */
class BusinessInfoType {
	/**
	 * Type of business, such as corporation or sole proprietorship	 *
	 * @access public
	 * @var BusinessTypeType
	 */
	public $Type;

	/**
	 * Official name of business
	 * Character length and limitations: 75 alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $Name;

	/**
	 * Merchant’s business postal address	 *
	 * @access public
	 * @var AddressType
	 */
	public $Address;

	/**
	 * Business’s primary telephone number
	 * Character length and limitations: 20 alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $WorkPhone;

	/**
	 * Line of business, as defined in the enumerations	 *
	 * @access public
	 * @var BusinessCategoryType
	 */
	public $Category;

	/**
	 * Business sub-category, as defined in the enumerations	 *
	 * @access public
	 * @var BusinessSubCategoryType
	 */
	public $SubCategory;

	/**
	 * Average transaction price, as defined by the enumerations.
	 * Enumeration
	 * Meaning
	 * AverageTransactionPrice-Not-Applicable	
	 * AverageTransactionPrice-Range1
	 * Less than $25 USD
	 * AverageTransactionPrice-Range2
	 * $25 USD to $50 USD
	 * AverageTransactionPrice-Range3
	 * $50 USD to $100 USD
	 * AverageTransactionPrice-Range4
	 * $100 USD to $250 USD
	 * AverageTransactionPrice-Range5
	 * $250 USD to $500 USD
	 * AverageTransactionPrice-Range6
	 * $500 USD to $1,000 USD
	 * AverageTransactionPrice-Range7
	 * $1,000 USD to $2,000 USD
	 * AverageTransactionPrice-Range8
	 * $2,000 USD to $5,000 USD
	 * AverageTransactionPrice-Range9
	 * $5,000 USD to $10,000 USD
	 * AverageTransactionPrice-Range10
	 * More than $10,000 USD
	 *
	 * @access public
	 * @var AverageTransactionPriceType
	 */
	public $AveragePrice;

	/**
	 * Average monthly sales volume, as defined by the enumerations.
	 * Enumeration
	 * Meaning
	 * AverageMonthlyVolume-Not-Applicable
	 * AverageMonthlyVolume-Range1
	 * Less than $1,000 USD
	 * AverageMonthlyVolume-Range2
	 * $1,000 USD to $5,000 USD
	 * AverageMonthlyVolume-Range3
	 * $5,000 USD to $25,000 USD
	 * AverageMonthlyVolume-Range4
	 * $25,000 USD to $100,000 USD
	 * AverageMonthlyVolume-Range5
	 * $100,000 USD to $1,000,000 USD
	 * AverageMonthlyVolume-Range6
	 * More than $1,000,000 USD
	 *
	 * @access public
	 * @var AverageMonthlyVolumeType
	 */
	public $AverageMonthlyVolume;

	/**
	 * Main sales venue, such as eBay	 *
	 * @access public
	 * @var SalesVenueType
	 */
	public $SalesVenue;

	/**
	 * Primary URL of business
	 * Character length and limitations: 2,048 alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $Website;

	/**
	 * Percentage of revenue attributable to online sales, as defined by the enumerations
	 * Enumeration
	 * Meaning
	 * PercentageRevenueFromOnlineSales-Not-Applicable	
	 * PercentageRevenueFromOnlineSales-Range1
	 * Less than 25%
	 * PercentageRevenueFromOnlineSales-Range2
	 * 25% to 50%
	 * PercentageRevenueFromOnlineSales-Range3
	 * 50% to 75%
	 * PercentageRevenueFromOnlineSales-Range4
	 * 75% to 100%
	 *
	 * @access public
	 * @var PercentageRevenueFromOnlineSalesType
	 */
	public $RevenueFromOnlineSales;

	/**
	 * Date the merchant’s business was established	 *
	 * @access public
	 * @var dateTime
	 */
	public $BusinessEstablished;

	/**
	 * Email address to contact business’s customer service
	 * Character length and limitations: 127 alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $CustomerServiceEmail;

	/**
	 * Telephone number to contact business’s customer service
	 * Character length and limitations: 32 alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $CustomerServicePhone;


	public function toXMLString()  {
		$str = '';
		if($this->Type != null ) {
			$str .= '<ebl:Type>'.$this->Type.'</ebl:Type>';
		 }
		if($this->Name != null ) {
			$str .= '<ebl:Name>'.$this->Name.'</ebl:Name>';
		 }
		if($this->Address != null ) {
			$str .='<ebl:Address>';
			$str .= $this->Address->toXMLString();
			$str .=  '</ebl:Address>';
		 }
		if($this->WorkPhone != null ) {
			$str .= '<ebl:WorkPhone>'.$this->WorkPhone.'</ebl:WorkPhone>';
		 }
		if($this->Category != null ) {
			$str .= '<ebl:Category>'.$this->Category.'</ebl:Category>';
		 }
		if($this->SubCategory != null ) {
			$str .= '<ebl:SubCategory>'.$this->SubCategory.'</ebl:SubCategory>';
		 }
		if($this->AveragePrice != null ) {
			$str .= '<ebl:AveragePrice>'.$this->AveragePrice.'</ebl:AveragePrice>';
		 }
		if($this->AverageMonthlyVolume != null ) {
			$str .= '<ebl:AverageMonthlyVolume>'.$this->AverageMonthlyVolume.'</ebl:AverageMonthlyVolume>';
		 }
		if($this->SalesVenue != null ) {
			$str .= '<ebl:SalesVenue>'.$this->SalesVenue.'</ebl:SalesVenue>';
		 }
		if($this->Website != null ) {
			$str .= '<ebl:Website>'.$this->Website.'</ebl:Website>';
		 }
		if($this->RevenueFromOnlineSales != null ) {
			$str .= '<ebl:RevenueFromOnlineSales>'.$this->RevenueFromOnlineSales.'</ebl:RevenueFromOnlineSales>';
		 }
		if($this->BusinessEstablished != null ) {
			$str .= '<ebl:BusinessEstablished>'.$this->BusinessEstablished.'</ebl:BusinessEstablished>';
		 }
		if($this->CustomerServiceEmail != null ) {
			$str .= '<ebl:CustomerServiceEmail>'.$this->CustomerServiceEmail.'</ebl:CustomerServiceEmail>';
		 }
		if($this->CustomerServicePhone != null ) {
			$str .= '<ebl:CustomerServicePhone>'.$this->CustomerServicePhone.'</ebl:CustomerServicePhone>';
		 }

		return $str;
	}

}

/**
 * BusinessOwnerInfoType
 * BusinessOwnerInfoType 
 */
class BusinessOwnerInfoType {
	/**
	 * Details about the business owner	 *
	 * @access public
	 * @var PayerInfoType
	 */
	public $Owner;

	/**
	 * Business owner’s home telephone number
	 * Character length and limitations: 32 alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $HomePhone;

	/**
	 * Business owner’s mobile telephone number
	 * Character length and limitations: 32 alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $MobilePhone;

	/**
	 * Business owner’s social security number
	 * Character length and limitations: 9 alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $SSN;


	public function toXMLString()  {
		$str = '';
		if($this->Owner != null ) {
			$str .='<ebl:Owner>';
			$str .= $this->Owner->toXMLString();
			$str .=  '</ebl:Owner>';
		 }
		if($this->HomePhone != null ) {
			$str .= '<ebl:HomePhone>'.$this->HomePhone.'</ebl:HomePhone>';
		 }
		if($this->MobilePhone != null ) {
			$str .= '<ebl:MobilePhone>'.$this->MobilePhone.'</ebl:MobilePhone>';
		 }
		if($this->SSN != null ) {
			$str .= '<ebl:SSN>'.$this->SSN.'</ebl:SSN>';
		 }

		return $str;
	}

}

/**
 * BankAccountDetailsType
 * BankAccountDetailsType 
 */
class BankAccountDetailsType {
	/**
	 * Name of bank
	 * Character length and limitations: 192 alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $Name;

	/**
	 * Type of bank account: Checking or Savings	 *
	 * @access public
	 * @var BankAccountTypeType
	 */
	public $Type;

	/**
	 * Merchant’s bank routing number
	 * Character length and limitations: 23 alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $RoutingNumber;

	/**
	 * Merchant’s bank account number
	 * Character length and limitations: 256 alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $AccountNumber;


	public function toXMLString()  {
		$str = '';
		if($this->Name != null ) {
			$str .= '<ebl:Name>'.$this->Name.'</ebl:Name>';
		 }
		if($this->Type != null ) {
			$str .= '<ebl:Type>'.$this->Type.'</ebl:Type>';
		 }
		if($this->RoutingNumber != null ) {
			$str .= '<ebl:RoutingNumber>'.$this->RoutingNumber.'</ebl:RoutingNumber>';
		 }
		if($this->AccountNumber != null ) {
			$str .= '<ebl:AccountNumber>'.$this->AccountNumber.'</ebl:AccountNumber>';
		 }

		return $str;
	}

}

/**
 * GetBoardingDetailsResponseDetailsType
 * Status of merchant's onboarding process:
 * Completed
Cancelled
Pending
 * Character length and limitations: Eight alphabetic characters
 */
class GetBoardingDetailsResponseDetailsType {
	/**
	 * Status of merchant's onboarding process:
	 * Completed
Cancelled
Pending
	 * Character length and limitations: Eight alphabetic characters	 *
	 * @access public
	 * @var BoardingStatusType
	 */
	public $Status;

	/**
	 * Date the boarding process started	 *
	 * @access public
	 * @var dateTime
	 */
	public $StartDate;

	/**
	 * Date the merchant’s status or progress was last updated	 *
	 * @access public
	 * @var dateTime
	 */
	public $LastUpdated;

	/**
	 * Reason for merchant’s cancellation of sign-up.
	 * Character length and limitations: 1,024 alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $Reason;

	/**
	 * @access public
	 * @var string
	 */
	public $ProgramName;

	/**
	 * @access public
	 * @var string
	 */
	public $ProgramCode;

	/**
	 * @access public
	 * @var string
	 */
	public $CampaignID;

	/**
	 * Indicates if there is a limitation on the amount of money the business can withdraw from PayPal	 *
	 * @access public
	 * @var UserWithdrawalLimitTypeType
	 */
	public $UserWithdrawalLimit;

	/**
	 * Custom information you set on the EnterBoarding API call
	 * Character length and limitations: 256 alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $PartnerCustom;

	/**
	 * Details about the owner of the account	 *
	 * @access public
	 * @var PayerInfoType
	 */
	public $AccountOwner;

	/**
	 * Merchant’s PayPal API credentials	 *
	 * @access public
	 * @var APICredentialsType
	 */
	public $Credentials;

	/**
	 * The APIs that this merchant has granted the business partner permission to call on his behalf.
	 * For example:
	 * SetExpressCheckout,GetExpressCheckoutDetails,DoExpressCheckoutPayment
	 *
	 * @access public
	 * @var string
	 */
	public $ConfigureAPIs;

	/**
	 * Primary email verification status. Confirmed, Unconfirmed	 *
	 * @access public
	 * @var string
	 */
	public $EmailVerificationStatus;

	/**
	 * Gives VettingStatus - Pending, Cancelled, Approved, UnderReview
	 * Character length and limitations: 256 alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $VettingStatus;

	/**
	 * Gives BankAccountVerificationStatus - Added, Confirmed
	 * Character length and limitations: 256 alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $BankAccountVerificationStatus;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='status') {
				$this->Status = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='startdate') {
				$this->StartDate = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='lastupdated') {
				$this->LastUpdated = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='reason') {
				$this->Reason = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='programname') {
				$this->ProgramName = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='programcode') {
				$this->ProgramCode = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='campaignid') {
				$this->CampaignID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='userwithdrawallimit') {
				$this->UserWithdrawalLimit = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='partnercustom') {
				$this->PartnerCustom = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="accountowner") {
				$this->AccountOwner = new PayerInfoType();
				$this->AccountOwner->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="credentials") {
				$this->Credentials = new APICredentialsType();
				$this->Credentials->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='configureapis') {
				$this->ConfigureAPIs = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='emailverificationstatus') {
				$this->EmailVerificationStatus = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='vettingstatus') {
				$this->VettingStatus = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='bankaccountverificationstatus') {
				$this->BankAccountVerificationStatus = $arry["text"];
			}
		}
		}
	}
}

/**
 * APICredentialsType
 * APICredentialsType 
 */
class APICredentialsType {
	/**
	 * Merchant’s PayPal API username
Character length and limitations: 128 alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $Username;

	/**
	 * Merchant’s PayPal API password
Character length and limitations: 40 alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $Password;

	/**
	 * Merchant’s PayPal API signature, if one exists.
	 * Character length and limitations: 256 alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $Signature;

	/**
	 * Merchant’s PayPal API certificate in PEM format, if one exists
	 * The certificate consists of two parts: the private key (2,048 bytes) and the certificate proper (4,000 bytes).
	 * Character length and limitations: 6,048 alphanumeric characters	 *
	 * @access public
	 * @var string
	 */
	public $Certificate;

	/**
	 * Merchant’s PayPal API authentication mechanism.
	 * Auth-None: no authentication mechanism on file
	 * Cert: API certificate
	 * Sign: API signature
	 * Character length and limitations: 9 alphanumeric characters	 *
	 * @access public
	 * @var APIAuthenticationType
	 */
	public $Type;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='username') {
				$this->Username = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='password') {
				$this->Password = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='signature') {
				$this->Signature = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='certificate') {
				$this->Certificate = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='type') {
				$this->Type = $arry["text"];
			}
		}
		}
	}
}

/**
 * SetMobileCheckoutRequestDetailsType
 * The phone number of the buyer's mobile device, if available.
 * Optional
 */
class SetMobileCheckoutRequestDetailsType {
	/**
The phone number of the buyer's mobile device, if available.
	 * Optional
	 *
	 * @access public
	 * @var PhoneNumberType
	 */
	public $BuyerPhone;

	/**
	 * Cost of this item before tax and shipping.
You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies.
	 * Required
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $ItemAmount;

	/**
	 * Tax amount for this item.
You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies.
	 * Optional
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Tax;

	/**
	 * Shipping amount for this item.
You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies.
	 * Optional
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Shipping;

	/**
Description of the item that the customer is purchasing. 
	 * Required
	 * Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $ItemName;

	/**
Reference number of the item that the customer is purchasing. 
	 * Optional
	 * Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $ItemNumber;

	/**
A free-form field for your own use, such as a tracking number or other value you want returned to you in IPN.
	 * Optional
	 * Character length and limitations: 256 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $Custom;

	/**
Your own unique invoice or tracking number.
	 * Optional
	 * Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $InvoiceID;

	/**
URL to which the customer's browser is returned after choosing to pay with PayPal. PayPal recommends that the value of ReturnURL be the final review page on which the customer confirms the order and payment. 
	 * Required
	 * Character length and limitations: no limit. 	 *
	 * @access public
	 * @var string
	 */
	public $ReturnURL;

	/**
URL to which the customer is returned if he does not approve the use of PayPal to pay you. PayPal recommends that the value of CancelURL be the original page on which the customer chose to pay with PayPal. 
	 * Optional
	 * Character length and limitations: no limit
	 *
	 * @access public
	 * @var string
	 */
	public $CancelURL;

	/**
The value 1 indicates that you require that the customer's shipping address on file with PayPal be a confirmed address. Setting this element overrides the setting you have specified in your Merchant Account Profile. 
	 * Optional
	 *
	 * @access public
	 * @var int
	 */
	public $AddressDisplayOptions;

	/**
The value 1 indicates that you require that the customer specifies a contact phone for the transactxion.  Default is 0 / none required.
	 * Optional
	 *
	 * @access public
	 * @var int
	 */
	public $SharePhone;

	/**
Customer's shipping address. 
	 * Optional
	 *
	 * @access public
	 * @var AddressType
	 */
	public $ShipToAddress;

	/**
	 * Email address of the buyer as entered during checkout. PayPal uses this value to pre-fill the login portion of the PayPal login page. 
	 * Optional
	 * Character length and limit: 127 single-byte alphanumeric characters 
	 *
	 * @access public
	 * @var string
	 */
	public $BuyerEmail;


	public function __construct($ItemAmount = null, $ItemName = null, $ReturnURL = null) {
		$this->ItemAmount  = $ItemAmount;
		$this->ItemName  = $ItemName;
		$this->ReturnURL  = $ReturnURL;
	}

	public function toXMLString()  {
		$str = '';
		if($this->BuyerPhone != null ) {
			$str .='<ebl:BuyerPhone>';
			$str .= $this->BuyerPhone->toXMLString();
			$str .=  '</ebl:BuyerPhone>';
		 }
		if($this->ItemAmount != null ) {
			$str .='<ebl:ItemAmount';
			$str .= $this->ItemAmount->toXMLString();
			$str .=  '</ebl:ItemAmount>';
		 }
		if($this->Tax != null ) {
			$str .='<ebl:Tax';
			$str .= $this->Tax->toXMLString();
			$str .=  '</ebl:Tax>';
		 }
		if($this->Shipping != null ) {
			$str .='<ebl:Shipping';
			$str .= $this->Shipping->toXMLString();
			$str .=  '</ebl:Shipping>';
		 }
		if($this->ItemName != null ) {
			$str .= '<ebl:ItemName>'.$this->ItemName.'</ebl:ItemName>';
		 }
		if($this->ItemNumber != null ) {
			$str .= '<ebl:ItemNumber>'.$this->ItemNumber.'</ebl:ItemNumber>';
		 }
		if($this->Custom != null ) {
			$str .= '<ebl:Custom>'.$this->Custom.'</ebl:Custom>';
		 }
		if($this->InvoiceID != null ) {
			$str .= '<ebl:InvoiceID>'.$this->InvoiceID.'</ebl:InvoiceID>';
		 }
		if($this->ReturnURL != null ) {
			$str .= '<ebl:ReturnURL>'.$this->ReturnURL.'</ebl:ReturnURL>';
		 }
		if($this->CancelURL != null ) {
			$str .= '<ebl:CancelURL>'.$this->CancelURL.'</ebl:CancelURL>';
		 }
		if($this->AddressDisplayOptions != null ) {
			$str .= '<ebl:AddressDisplayOptions>'.$this->AddressDisplayOptions.'</ebl:AddressDisplayOptions>';
		 }
		if($this->SharePhone != null ) {
			$str .= '<ebl:SharePhone>'.$this->SharePhone.'</ebl:SharePhone>';
		 }
		if($this->ShipToAddress != null ) {
			$str .='<ebl:ShipToAddress>';
			$str .= $this->ShipToAddress->toXMLString();
			$str .=  '</ebl:ShipToAddress>';
		 }
		if($this->BuyerEmail != null ) {
			$str .= '<ebl:BuyerEmail>'.$this->BuyerEmail.'</ebl:BuyerEmail>';
		 }

		return $str;
	}

}

/**
 * DoMobileCheckoutPaymentResponseDetailsType
 * A free-form field for your own use, such as a tracking number or other value you want returned to you in IPN.
 * Optional
 * Character length and limitations: 256 single-byte alphanumeric characters
 */
class DoMobileCheckoutPaymentResponseDetailsType {
	/**
A free-form field for your own use, such as a tracking number or other value you want returned to you in IPN.
	 * Optional
	 * Character length and limitations: 256 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $Custom;

	/**
Your own unique invoice or tracking number.
	 * Optional
	 * Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $InvoiceID;

	/**
Information about the payer	 *
	 * @access public
	 * @var PayerInfoType
	 */
	public $PayerInfo;

	/**
Information about the transaction	 *
	 * @access public
	 * @var PaymentInfoType
	 */
	public $PaymentInfo;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='custom') {
				$this->Custom = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='invoiceid') {
				$this->InvoiceID = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="payerinfo") {
				$this->PayerInfo = new PayerInfoType();
				$this->PayerInfo->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="paymentinfo") {
				$this->PaymentInfo = new PaymentInfoType();
				$this->PaymentInfo->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * SetEbayMobileCheckoutRequestDetailsType
 * The value 'Auction' indicates that user is coming to checkout after an auction ended. A value of 'BuyItNow' indicates if the user is coming to checkout by clicking on the 'buy it now' button in a chinese auction. A value of 'FixedPriceItem' indicates that user clicked on 'Buy it now' on  a fixed price item. A value of Autopay indicates autopay (or immediate pay) which is not supported at the moment.
 * Required
 */
class SetEbayMobileCheckoutRequestDetailsType {
	/**
The value 'Auction' indicates that user is coming to checkout after an auction ended. A value of 'BuyItNow' indicates if the user is coming to checkout by clicking on the 'buy it now' button in a chinese auction. A value of 'FixedPriceItem' indicates that user clicked on 'Buy it now' on  a fixed price item. A value of Autopay indicates autopay (or immediate pay) which is not supported at the moment.
	 * Required
	 *
	 * @access public
	 * @var EbayCheckoutType
	 */
	public $CheckoutType;

	/**
An item number assigned to the item in eBay database. 
	 * Required
	 * Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $ItemId;

	/**
An Transaction id assigned to the item in eBay database. In case of Chinese auction Item Id itself indicates Transaction Id. Transaction Id in this case is Zero.
	 * Required
	 * Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $TransactionId;

	/**
An id indicating the site on which the item was listed. 
	 * Required
	 * Character length and limitations: 2 alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $SiteId;

	/**
Buyers ebay Id. 
	 * Required
	 * Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $BuyerId;

	/**
Indicating the client type. Weather it is WAP or J2ME. A value of 'WAP' indicates WAP. A value of 'J2MEClient' indicates J2ME client. 
	 * Required
	 *
	 * @access public
	 * @var DyneticClientType
	 */
	public $ClientType;

	/**
The phone number of the buyer's mobile device, if available.
	 * Optional
	 *
	 * @access public
	 * @var PhoneNumberType
	 */
	public $BuyerPhone;

	/**
URL to which the customer's browser is returned after choosing to pay with PayPal. PayPal recommends that the value of ReturnURL be the final review page on which the customer confirms the order and payment. 
	 * Optional
	 * Character length and limitations: no limit. 
	 *
	 * @access public
	 * @var string
	 */
	public $ReturnURL;

	/**
URL to which the customer is returned if he does not approve the use of PayPal to pay you. PayPal recommends that the value of CancelURL be the original page on which the customer chose to pay with PayPal. 
	 * Optional
	 * Character length and limitations: no limit
	 *
	 * @access public
	 * @var string
	 */
	public $CancelURL;

	/**
Specify quantity in case it is an immediate pay (or autopay) item. 
	 * Optional
	 *
	 * @access public
	 * @var int
	 */
	public $Quantity;

	/**
Cost of this item before tax and shipping.You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies.Used only for autopay items.
	 * Optional
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $ItemAmount;

}

/**
 * UATPDetailsType
 * UATP Card Details Type 
 */
class UATPDetailsType {
	/**
UATP Card Number	 *
	 * @access public
	 * @var string
	 */
	public $UATPNumber;

	/**
	 * UATP Card expirty month	 *
	 * @access public
	 * @var int
	 */
	public $ExpMonth;

	/**
	 * UATP Card expirty year	 *
	 * @access public
	 * @var int
	 */
	public $ExpYear;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='uatpnumber') {
				$this->UATPNumber = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='expmonth') {
				$this->ExpMonth = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='expyear') {
				$this->ExpYear = $arry["text"];
			}
		}
		}
	}

	public function toXMLString()  {
		$str = '';
		if($this->UATPNumber != null ) {
			$str .= '<ebl:UATPNumber>'.$this->UATPNumber.'</ebl:UATPNumber>';
		 }
		if($this->ExpMonth != null ) {
			$str .= '<ebl:ExpMonth>'.$this->ExpMonth.'</ebl:ExpMonth>';
		 }
		if($this->ExpYear != null ) {
			$str .= '<ebl:ExpYear>'.$this->ExpYear.'</ebl:ExpYear>';
		 }

		return $str;
	}

}

/**
 * RecurringPaymentsSummaryType
 */
class RecurringPaymentsSummaryType {
	/**
	 *
	 * @access public
	 * @var dateTime
	 */
	public $NextBillingDate;

	/**
	 *
	 * @access public
	 * @var int
	 */
	public $NumberCyclesCompleted;

	/**
	 *
	 * @access public
	 * @var int
	 */
	public $NumberCyclesRemaining;

	/**
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $OutstandingBalance;

	/**
	 *
	 * @access public
	 * @var int
	 */
	public $FailedPaymentCount;

	/**
	 *
	 * @access public
	 * @var dateTime
	 */
	public $LastPaymentDate;

	/**
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $LastPaymentAmount;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='nextbillingdate') {
				$this->NextBillingDate = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='numbercyclescompleted') {
				$this->NumberCyclesCompleted = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='numbercyclesremaining') {
				$this->NumberCyclesRemaining = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="outstandingbalance") {
				$this->OutstandingBalance = new BasicAmountType();
				$this->OutstandingBalance->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='failedpaymentcount') {
				$this->FailedPaymentCount = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='lastpaymentdate') {
				$this->LastPaymentDate = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="lastpaymentamount") {
				$this->LastPaymentAmount = new BasicAmountType();
				$this->LastPaymentAmount->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * ActivationDetailsType
 */
class ActivationDetailsType {
	/**
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $InitialAmount;

	/**
	 *
	 * @access public
	 * @var FailedPaymentActionType
	 */
	public $FailedInitialAmountAction;


	public function __construct($InitialAmount = null) {
		$this->InitialAmount  = $InitialAmount;
	}

	public function toXMLString()  {
		$str = '';
		if($this->InitialAmount != null ) {
			$str .='<ebl:InitialAmount';
			$str .= $this->InitialAmount->toXMLString();
			$str .=  '</ebl:InitialAmount>';
		 }
		if($this->FailedInitialAmountAction != null ) {
			$str .= '<ebl:FailedInitialAmountAction>'.$this->FailedInitialAmountAction.'</ebl:FailedInitialAmountAction>';
		 }

		return $str;
	}

}

/**
 * BillingPeriodDetailsType
 * Unit of meausre for billing cycle
 */
class BillingPeriodDetailsType {
	/**
	 * Unit of meausre for billing cycle
	 *
	 * @access public
	 * @var BillingPeriodType
	 */
	public $BillingPeriod;

	/**
	 * Number of BillingPeriod that make up one billing cycle
	 *
	 * @access public
	 * @var int
	 */
	public $BillingFrequency;

	/**
	 * Total billing cycles in this portion of the schedule
	 *
	 * @access public
	 * @var int
	 */
	public $TotalBillingCycles;

	/**
	 * Amount to charge
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Amount;

	/**
	 * Additional shipping amount to charge
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $ShippingAmount;

	/**
	 * Additional tax amount to charge
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $TaxAmount;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='billingperiod') {
				$this->BillingPeriod = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='billingfrequency') {
				$this->BillingFrequency = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='totalbillingcycles') {
				$this->TotalBillingCycles = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="amount") {
				$this->Amount = new BasicAmountType();
				$this->Amount->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="shippingamount") {
				$this->ShippingAmount = new BasicAmountType();
				$this->ShippingAmount->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="taxamount") {
				$this->TaxAmount = new BasicAmountType();
				$this->TaxAmount->init($arry["children"]);
					}
			}
		}
		}
	}

	public function __construct($BillingPeriod = null, $BillingFrequency = null, $Amount = null) {
		$this->BillingPeriod  = $BillingPeriod;
		$this->BillingFrequency  = $BillingFrequency;
		$this->Amount  = $Amount;
	}

	public function toXMLString()  {
		$str = '';
		if($this->BillingPeriod != null ) {
			$str .= '<ebl:BillingPeriod>'.$this->BillingPeriod.'</ebl:BillingPeriod>';
		 }
		if($this->BillingFrequency != null ) {
			$str .= '<ebl:BillingFrequency>'.$this->BillingFrequency.'</ebl:BillingFrequency>';
		 }
		if($this->TotalBillingCycles != null ) {
			$str .= '<ebl:TotalBillingCycles>'.$this->TotalBillingCycles.'</ebl:TotalBillingCycles>';
		 }
		if($this->Amount != null ) {
			$str .='<ebl:Amount';
			$str .= $this->Amount->toXMLString();
			$str .=  '</ebl:Amount>';
		 }
		if($this->ShippingAmount != null ) {
			$str .='<ebl:ShippingAmount';
			$str .= $this->ShippingAmount->toXMLString();
			$str .=  '</ebl:ShippingAmount>';
		 }
		if($this->TaxAmount != null ) {
			$str .='<ebl:TaxAmount';
			$str .= $this->TaxAmount->toXMLString();
			$str .=  '</ebl:TaxAmount>';
		 }

		return $str;
	}

}

/**
 * BillingPeriodDetailsType_Update
 * Unit of meausre for billing cycle
 */
class BillingPeriodDetailsType_Update {
	/**
	 * Unit of meausre for billing cycle
	 *
	 * @access public
	 * @var BillingPeriodType
	 */
	public $BillingPeriod;

	/**
	 * Number of BillingPeriod that make up one billing cycle
	 *
	 * @access public
	 * @var int
	 */
	public $BillingFrequency;

	/**
	 * Total billing cycles in this portion of the schedule
	 *
	 * @access public
	 * @var int
	 */
	public $TotalBillingCycles;

	/**
	 * Amount to charge
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Amount;

	/**
	 * Additional shipping amount to charge
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $ShippingAmount;

	/**
	 * Additional tax amount to charge
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $TaxAmount;


	public function toXMLString()  {
		$str = '';
		if($this->BillingPeriod != null ) {
			$str .= '<ebl:BillingPeriod>'.$this->BillingPeriod.'</ebl:BillingPeriod>';
		 }
		if($this->BillingFrequency != null ) {
			$str .= '<ebl:BillingFrequency>'.$this->BillingFrequency.'</ebl:BillingFrequency>';
		 }
		if($this->TotalBillingCycles != null ) {
			$str .= '<ebl:TotalBillingCycles>'.$this->TotalBillingCycles.'</ebl:TotalBillingCycles>';
		 }
		if($this->Amount != null ) {
			$str .='<ebl:Amount';
			$str .= $this->Amount->toXMLString();
			$str .=  '</ebl:Amount>';
		 }
		if($this->ShippingAmount != null ) {
			$str .='<ebl:ShippingAmount';
			$str .= $this->ShippingAmount->toXMLString();
			$str .=  '</ebl:ShippingAmount>';
		 }
		if($this->TaxAmount != null ) {
			$str .='<ebl:TaxAmount';
			$str .= $this->TaxAmount->toXMLString();
			$str .=  '</ebl:TaxAmount>';
		 }

		return $str;
	}

}

/**
 * ScheduleDetailsType
 * Schedule details for the Recurring Payment
 */
class ScheduleDetailsType {
	/**
	 * Schedule details for the Recurring Payment
	 *
	 * @access public
	 * @var string
	 */
	public $Description;

	/**
	 * Trial period of this schedule
	 *
	 * @access public
	 * @var BillingPeriodDetailsType
	 */
	public $TrialPeriod;

	/**
	 *
	 * @access public
	 * @var BillingPeriodDetailsType
	 */
	public $PaymentPeriod;

	/**
	 * The max number of payments the buyer can fail before this Recurring Payments profile is cancelled
	 *
	 * @access public
	 * @var int
	 */
	public $MaxFailedPayments;

	/**
	 *
	 * @access public
	 * @var ActivationDetailsType
	 */
	public $ActivationDetails;

	/**
	 *
	 * @access public
	 * @var AutoBillType
	 */
	public $AutoBillOutstandingAmount;


	public function __construct($Description = null, $PaymentPeriod = null) {
		$this->Description  = $Description;
		$this->PaymentPeriod  = $PaymentPeriod;
	}

	public function toXMLString()  {
		$str = '';
		if($this->Description != null ) {
			$str .= '<ebl:Description>'.$this->Description.'</ebl:Description>';
		 }
		if($this->TrialPeriod != null ) {
			$str .='<ebl:TrialPeriod>';
			$str .= $this->TrialPeriod->toXMLString();
			$str .=  '</ebl:TrialPeriod>';
		 }
		if($this->PaymentPeriod != null ) {
			$str .='<ebl:PaymentPeriod>';
			$str .= $this->PaymentPeriod->toXMLString();
			$str .=  '</ebl:PaymentPeriod>';
		 }
		if($this->MaxFailedPayments != null ) {
			$str .= '<ebl:MaxFailedPayments>'.$this->MaxFailedPayments.'</ebl:MaxFailedPayments>';
		 }
		if($this->ActivationDetails != null ) {
			$str .='<ebl:ActivationDetails>';
			$str .= $this->ActivationDetails->toXMLString();
			$str .=  '</ebl:ActivationDetails>';
		 }
		if($this->AutoBillOutstandingAmount != null ) {
			$str .= '<ebl:AutoBillOutstandingAmount>'.$this->AutoBillOutstandingAmount.'</ebl:AutoBillOutstandingAmount>';
		 }

		return $str;
	}

}

/**
 * RecurringPaymentsProfileDetailsType
 * Subscriber name - if missing, will use name in buyer's account 
 */
class RecurringPaymentsProfileDetailsType {
	/**
	 * Subscriber name - if missing, will use name in buyer's account 
	 *
	 * @access public
	 * @var string
	 */
	public $SubscriberName;

	/**
	 * Subscriber address - if missing, will use address in buyer's account
	 *
	 * @access public
	 * @var AddressType
	 */
	public $SubscriberShippingAddress;

	/**
	 * When does this Profile begin billing?
	 *
	 * @access public
	 * @var dateTime
	 */
	public $BillingStartDate;

	/**
Your own unique invoice or tracking number.
	 * Optional
	 * Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $ProfileReference;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='subscribername') {
				$this->SubscriberName = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="subscribershippingaddress") {
				$this->SubscriberShippingAddress = new AddressType();
				$this->SubscriberShippingAddress->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='billingstartdate') {
				$this->BillingStartDate = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='profilereference') {
				$this->ProfileReference = $arry["text"];
			}
		}
		}
	}

	public function __construct($BillingStartDate = null) {
		$this->BillingStartDate  = $BillingStartDate;
	}

	public function toXMLString()  {
		$str = '';
		if($this->SubscriberName != null ) {
			$str .= '<ebl:SubscriberName>'.$this->SubscriberName.'</ebl:SubscriberName>';
		 }
		if($this->SubscriberShippingAddress != null ) {
			$str .='<ebl:SubscriberShippingAddress>';
			$str .= $this->SubscriberShippingAddress->toXMLString();
			$str .=  '</ebl:SubscriberShippingAddress>';
		 }
		if($this->BillingStartDate != null ) {
			$str .= '<ebl:BillingStartDate>'.$this->BillingStartDate.'</ebl:BillingStartDate>';
		 }
		if($this->ProfileReference != null ) {
			$str .= '<ebl:ProfileReference>'.$this->ProfileReference.'</ebl:ProfileReference>';
		 }

		return $str;
	}

}

/**
 * CreateRecurringPaymentsProfileRequestDetailsType
 * Billing Agreement token (required if Express Checkout)
 */
class CreateRecurringPaymentsProfileRequestDetailsType {
	/**
	 * Billing Agreement token (required if Express Checkout)
	 *
	 * @access public
	 * @var string
	 */
	public $Token;

	/**
	 * Information about the credit card to be charged (required if Direct Payment)
	 *
	 * @access public
	 * @var CreditCardDetailsType
	 */
	public $CreditCard;

	/**
	 * Customer Information for this Recurring Payments
	 *
	 * @access public
	 * @var RecurringPaymentsProfileDetailsType
	 */
	public $RecurringPaymentsProfileDetails;

	/**
	 * Schedule Information for this Recurring Payments
	 *
	 * @access public
	 * @var ScheduleDetailsType
	 */
	public $ScheduleDetails;

	/**
	 * Information about the Item Details.
	 *
	 * array
	 * @access public
	 * @var PaymentDetailsItemType
	 */
	public $PaymentDetailsItem;


	public function __construct($RecurringPaymentsProfileDetails = null, $ScheduleDetails = null) {
		$this->RecurringPaymentsProfileDetails  = $RecurringPaymentsProfileDetails;
		$this->ScheduleDetails  = $ScheduleDetails;
	}

	public function toXMLString()  {
		$str = '';
		if($this->Token != null ) {
			$str .= '<ebl:Token>'.$this->Token.'</ebl:Token>';
		 }
		if($this->CreditCard != null ) {
			$str .='<ebl:CreditCard>';
			$str .= $this->CreditCard->toXMLString();
			$str .=  '</ebl:CreditCard>';
		 }
		if($this->RecurringPaymentsProfileDetails != null ) {
			$str .='<ebl:RecurringPaymentsProfileDetails>';
			$str .= $this->RecurringPaymentsProfileDetails->toXMLString();
			$str .=  '</ebl:RecurringPaymentsProfileDetails>';
		 }
		if($this->ScheduleDetails != null ) {
			$str .='<ebl:ScheduleDetails>';
			$str .= $this->ScheduleDetails->toXMLString();
			$str .=  '</ebl:ScheduleDetails>';
		 }
		if($this->PaymentDetailsItem != null ) {
		for($i=0; $i<count($this->PaymentDetailsItem);$i++) {
			$str .= '<ebl:PaymentDetailsItem>';
			$str .= $this->PaymentDetailsItem[$i]->toXMLString();
			$str .=  '</ebl:PaymentDetailsItem>';
		 }
		 }

		return $str;
	}

}

/**
 * CreateRecurringPaymentsProfileResponseDetailsType
 * Recurring Billing Profile ID
 */
class CreateRecurringPaymentsProfileResponseDetailsType {
	/**
	 * Recurring Billing Profile ID
	 *
	 * @access public
	 * @var string
	 */
	public $ProfileID;

	/**
	 * Recurring Billing Profile Status
	 *
	 * @access public
	 * @var RecurringPaymentsProfileStatusType
	 */
	public $ProfileStatus;

	/**
	 * Transaction id from DCC initial payment
	 *
	 * @access public
	 * @var string
	 */
	public $TransactionID;

	/**
	 * Response from DCC initial payment
	 *
	 * @access public
	 * @var string
	 */
	public $DCCProcessorResponse;

	/**
	 * Return code if DCC initial payment fails
	 *
	 * @access public
	 * @var string
	 */
	public $DCCReturnCode;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='profileid') {
				$this->ProfileID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='profilestatus') {
				$this->ProfileStatus = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='transactionid') {
				$this->TransactionID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='dccprocessorresponse') {
				$this->DCCProcessorResponse = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='dccreturncode') {
				$this->DCCReturnCode = $arry["text"];
			}
		}
		}
	}
}

/**
 * GetRecurringPaymentsProfileDetailsResponseDetailsType
 * Recurring Billing Profile ID
 */
class GetRecurringPaymentsProfileDetailsResponseDetailsType {
	/**
	 * Recurring Billing Profile ID
	 *
	 * @access public
	 * @var string
	 */
	public $ProfileID;

	/**
	 *
	 * @access public
	 * @var RecurringPaymentsProfileStatusType
	 */
	public $ProfileStatus;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $Description;

	/**
	 *
	 * @access public
	 * @var AutoBillType
	 */
	public $AutoBillOutstandingAmount;

	/**
	 *
	 * @access public
	 * @var int
	 */
	public $MaxFailedPayments;

	/**
	 *
	 * @access public
	 * @var RecurringPaymentsProfileDetailsType
	 */
	public $RecurringPaymentsProfileDetails;

	/**
	 *
	 * @access public
	 * @var BillingPeriodDetailsType
	 */
	public $CurrentRecurringPaymentsPeriod;

	/**
	 *
	 * @access public
	 * @var RecurringPaymentsSummaryType
	 */
	public $RecurringPaymentsSummary;

	/**
	 *
	 * @access public
	 * @var CreditCardDetailsType
	 */
	public $CreditCard;

	/**
	 *
	 * @access public
	 * @var BillingPeriodDetailsType
	 */
	public $TrialRecurringPaymentsPeriod;

	/**
	 *
	 * @access public
	 * @var BillingPeriodDetailsType
	 */
	public $RegularRecurringPaymentsPeriod;

	/**
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $TrialAmountPaid;

	/**
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $RegularAmountPaid;

	/**
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $AggregateAmount;

	/**
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $AggregateOptionalAmount;

	/**
	 *
	 * @access public
	 * @var dateTime
	 */
	public $FinalPaymentDueDate;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='profileid') {
				$this->ProfileID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='profilestatus') {
				$this->ProfileStatus = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='description') {
				$this->Description = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='autobilloutstandingamount') {
				$this->AutoBillOutstandingAmount = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='maxfailedpayments') {
				$this->MaxFailedPayments = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="recurringpaymentsprofiledetails") {
				$this->RecurringPaymentsProfileDetails = new RecurringPaymentsProfileDetailsType();
				$this->RecurringPaymentsProfileDetails->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="currentrecurringpaymentsperiod") {
				$this->CurrentRecurringPaymentsPeriod = new BillingPeriodDetailsType();
				$this->CurrentRecurringPaymentsPeriod->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="recurringpaymentssummary") {
				$this->RecurringPaymentsSummary = new RecurringPaymentsSummaryType();
				$this->RecurringPaymentsSummary->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="creditcard") {
				$this->CreditCard = new CreditCardDetailsType();
				$this->CreditCard->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="trialrecurringpaymentsperiod") {
				$this->TrialRecurringPaymentsPeriod = new BillingPeriodDetailsType();
				$this->TrialRecurringPaymentsPeriod->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="regularrecurringpaymentsperiod") {
				$this->RegularRecurringPaymentsPeriod = new BillingPeriodDetailsType();
				$this->RegularRecurringPaymentsPeriod->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="trialamountpaid") {
				$this->TrialAmountPaid = new BasicAmountType();
				$this->TrialAmountPaid->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="regularamountpaid") {
				$this->RegularAmountPaid = new BasicAmountType();
				$this->RegularAmountPaid->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="aggregateamount") {
				$this->AggregateAmount = new BasicAmountType();
				$this->AggregateAmount->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="aggregateoptionalamount") {
				$this->AggregateOptionalAmount = new BasicAmountType();
				$this->AggregateOptionalAmount->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='finalpaymentduedate') {
				$this->FinalPaymentDueDate = $arry["text"];
			}
		}
		}
	}
}

/**
 * ManageRecurringPaymentsProfileStatusRequestDetailsType
 */
class ManageRecurringPaymentsProfileStatusRequestDetailsType {
	/**
	 *
	 * @access public
	 * @var string
	 */
	public $ProfileID;

	/**
	 *
	 * @access public
	 * @var StatusChangeActionType
	 */
	public $Action;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $Note;


	public function __construct($ProfileID = null, $Action = null) {
		$this->ProfileID  = $ProfileID;
		$this->Action  = $Action;
	}

	public function toXMLString()  {
		$str = '';
		if($this->ProfileID != null ) {
			$str .= '<ebl:ProfileID>'.$this->ProfileID.'</ebl:ProfileID>';
		 }
		if($this->Action != null ) {
			$str .= '<ebl:Action>'.$this->Action.'</ebl:Action>';
		 }
		if($this->Note != null ) {
			$str .= '<ebl:Note>'.$this->Note.'</ebl:Note>';
		 }

		return $str;
	}

}

/**
 * ManageRecurringPaymentsProfileStatusResponseDetailsType
 */
class ManageRecurringPaymentsProfileStatusResponseDetailsType {
	/**
	 *
	 * @access public
	 * @var string
	 */
	public $ProfileID;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='profileid') {
				$this->ProfileID = $arry["text"];
			}
		}
		}
	}
}

/**
 * BillOutstandingAmountRequestDetailsType
 */
class BillOutstandingAmountRequestDetailsType {
	/**
	 *
	 * @access public
	 * @var string
	 */
	public $ProfileID;

	/**
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Amount;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $Note;


	public function __construct($ProfileID = null) {
		$this->ProfileID  = $ProfileID;
	}

	public function toXMLString()  {
		$str = '';
		if($this->ProfileID != null ) {
			$str .= '<ebl:ProfileID>'.$this->ProfileID.'</ebl:ProfileID>';
		 }
		if($this->Amount != null ) {
			$str .='<ebl:Amount';
			$str .= $this->Amount->toXMLString();
			$str .=  '</ebl:Amount>';
		 }
		if($this->Note != null ) {
			$str .= '<ebl:Note>'.$this->Note.'</ebl:Note>';
		 }

		return $str;
	}

}

/**
 * BillOutstandingAmountResponseDetailsType
 */
class BillOutstandingAmountResponseDetailsType {
	/**
	 *
	 * @access public
	 * @var string
	 */
	public $ProfileID;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='profileid') {
				$this->ProfileID = $arry["text"];
			}
		}
		}
	}
}

/**
 * UpdateRecurringPaymentsProfileRequestDetailsType
 */
class UpdateRecurringPaymentsProfileRequestDetailsType {
	/**
	 *
	 * @access public
	 * @var string
	 */
	public $ProfileID;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $Note;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $Description;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $SubscriberName;

	/**
	 *
	 * @access public
	 * @var AddressType
	 */
	public $SubscriberShippingAddress;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $ProfileReference;

	/**
	 *
	 * @access public
	 * @var int
	 */
	public $AdditionalBillingCycles;

	/**
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Amount;

	/**
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $ShippingAmount;

	/**
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $TaxAmount;

	/**
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $OutstandingBalance;

	/**
	 *
	 * @access public
	 * @var AutoBillType
	 */
	public $AutoBillOutstandingAmount;

	/**
	 *
	 * @access public
	 * @var int
	 */
	public $MaxFailedPayments;

	/**
	 * Information about the credit card to be charged (required if Direct Payment)
	 *
	 * @access public
	 * @var CreditCardDetailsType
	 */
	public $CreditCard;

	/**
	 * When does this Profile begin billing?
	 *
	 * @access public
	 * @var dateTime
	 */
	public $BillingStartDate;

	/**
	 * Trial period of this schedule
	 *
	 * @access public
	 * @var BillingPeriodDetailsType_Update
	 */
	public $TrialPeriod;

	/**
	 *
	 * @access public
	 * @var BillingPeriodDetailsType_Update
	 */
	public $PaymentPeriod;


	public function __construct($ProfileID = null) {
		$this->ProfileID  = $ProfileID;
	}

	public function toXMLString()  {
		$str = '';
		if($this->ProfileID != null ) {
			$str .= '<ebl:ProfileID>'.$this->ProfileID.'</ebl:ProfileID>';
		 }
		if($this->Note != null ) {
			$str .= '<ebl:Note>'.$this->Note.'</ebl:Note>';
		 }
		if($this->Description != null ) {
			$str .= '<ebl:Description>'.$this->Description.'</ebl:Description>';
		 }
		if($this->SubscriberName != null ) {
			$str .= '<ebl:SubscriberName>'.$this->SubscriberName.'</ebl:SubscriberName>';
		 }
		if($this->SubscriberShippingAddress != null ) {
			$str .='<ebl:SubscriberShippingAddress>';
			$str .= $this->SubscriberShippingAddress->toXMLString();
			$str .=  '</ebl:SubscriberShippingAddress>';
		 }
		if($this->ProfileReference != null ) {
			$str .= '<ebl:ProfileReference>'.$this->ProfileReference.'</ebl:ProfileReference>';
		 }
		if($this->AdditionalBillingCycles != null ) {
			$str .= '<ebl:AdditionalBillingCycles>'.$this->AdditionalBillingCycles.'</ebl:AdditionalBillingCycles>';
		 }
		if($this->Amount != null ) {
			$str .='<ebl:Amount';
			$str .= $this->Amount->toXMLString();
			$str .=  '</ebl:Amount>';
		 }
		if($this->ShippingAmount != null ) {
			$str .='<ebl:ShippingAmount';
			$str .= $this->ShippingAmount->toXMLString();
			$str .=  '</ebl:ShippingAmount>';
		 }
		if($this->TaxAmount != null ) {
			$str .='<ebl:TaxAmount';
			$str .= $this->TaxAmount->toXMLString();
			$str .=  '</ebl:TaxAmount>';
		 }
		if($this->OutstandingBalance != null ) {
			$str .='<ebl:OutstandingBalance';
			$str .= $this->OutstandingBalance->toXMLString();
			$str .=  '</ebl:OutstandingBalance>';
		 }
		if($this->AutoBillOutstandingAmount != null ) {
			$str .= '<ebl:AutoBillOutstandingAmount>'.$this->AutoBillOutstandingAmount.'</ebl:AutoBillOutstandingAmount>';
		 }
		if($this->MaxFailedPayments != null ) {
			$str .= '<ebl:MaxFailedPayments>'.$this->MaxFailedPayments.'</ebl:MaxFailedPayments>';
		 }
		if($this->CreditCard != null ) {
			$str .='<ebl:CreditCard>';
			$str .= $this->CreditCard->toXMLString();
			$str .=  '</ebl:CreditCard>';
		 }
		if($this->BillingStartDate != null ) {
			$str .= '<ebl:BillingStartDate>'.$this->BillingStartDate.'</ebl:BillingStartDate>';
		 }
		if($this->TrialPeriod != null ) {
			$str .='<ebl:TrialPeriod>';
			$str .= $this->TrialPeriod->toXMLString();
			$str .=  '</ebl:TrialPeriod>';
		 }
		if($this->PaymentPeriod != null ) {
			$str .='<ebl:PaymentPeriod>';
			$str .= $this->PaymentPeriod->toXMLString();
			$str .=  '</ebl:PaymentPeriod>';
		 }

		return $str;
	}

}

/**
 * UpdateRecurringPaymentsProfileResponseDetailsType
 */
class UpdateRecurringPaymentsProfileResponseDetailsType {
	/**
	 *
	 * @access public
	 * @var string
	 */
	public $ProfileID;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='profileid') {
				$this->ProfileID = $arry["text"];
			}
		}
		}
	}
}

/**
 * RiskFilterDetailsType
 * Details of Risk Filter.
 */
class RiskFilterDetailsType {
	/**
	 * @access public
	 * @var int
	 */
	public $Id;

	/**
	 * @access public
	 * @var string
	 */
	public $Name;

	/**
	 * @access public
	 * @var string
	 */
	public $Description;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='id') {
				$this->Id = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='name') {
				$this->Name = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='description') {
				$this->Description = $arry["text"];
			}
		}
		}
	}
}

/**
 * RiskFilterListType
 * Details of Risk Filter.
 */
class RiskFilterListType {
	/**
	 * array
	 * @access public
	 * @var RiskFilterDetailsType
	 */
	public $Filters;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if (is_array($arry["children"])&& ($arry["children"])!=null) 	{
			$i=0;
			while(true) {
			if($arry["name"]=="filters[$i]") {
				$this->Filters[$i] = new RiskFilterDetailsType();
				$this->Filters[$i]->init($arry["children"]);
			}
			else break;
			$i++;
			}
		}
				if(is_array($arry["children"]) && ($arry["children"])!=null && $arry["name"]=="filters") {
				$this->Filters = new RiskFilterDetailsType();
				$this->Filters->init($arry["children"]);
					}
		}
		}
	}
}

/**
 * FMFDetailsType
 * Thes are filters that could result in accept/deny/pending action.
 */
class FMFDetailsType {
	/**
	 * @access public
	 * @var RiskFilterListType
	 */
	public $AcceptFilters;

	/**
	 * @access public
	 * @var RiskFilterListType
	 */
	public $PendingFilters;

	/**
	 * @access public
	 * @var RiskFilterListType
	 */
	public $DenyFilters;

	/**
	 * @access public
	 * @var RiskFilterListType
	 */
	public $ReportFilters;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="acceptfilters") {
				$this->AcceptFilters = new RiskFilterListType();
				$this->AcceptFilters->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="pendingfilters") {
				$this->PendingFilters = new RiskFilterListType();
				$this->PendingFilters->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="denyfilters") {
				$this->DenyFilters = new RiskFilterListType();
				$this->DenyFilters->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="reportfilters") {
				$this->ReportFilters = new RiskFilterListType();
				$this->ReportFilters->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * EnhancedDataType
 * Enhanced Data Information. Example: AID for Airlines
 */
class EnhancedDataType {
	/**
	 * @access public
	 * @var AirlineItineraryType
	 */
	public $AirlineItinerary;


	public function toXMLString()  {
		$str = '';
		if($this->AirlineItinerary != null ) {
			$str .='<ebl:AirlineItinerary>';
			$str .= $this->AirlineItinerary->toXMLString();
			$str .=  '</ebl:AirlineItinerary>';
		 }

		return $str;
	}

}

/**
 * AirlineItineraryType
 * AID for Airlines
 */
class AirlineItineraryType {
	/**
	 * @access public
	 * @var string
	 */
	public $PassengerName;

	/**
	 * @access public
	 * @var string
	 */
	public $IssueDate;

	/**
	 * @access public
	 * @var string
	 */
	public $TravelAgencyName;

	/**
	 * @access public
	 * @var string
	 */
	public $TravelAgencyCode;

	/**
	 * @access public
	 * @var string
	 */
	public $TicketNumber;

	/**
	 * @access public
	 * @var string
	 */
	public $IssuingCarrierCode;

	/**
	 * @access public
	 * @var string
	 */
	public $CustomerCode;

	/**
	 * @access public
	 * @var BasicAmountType
	 */
	public $TotalFare;

	/**
	 * @access public
	 * @var BasicAmountType
	 */
	public $TotalTaxes;

	/**
	 * @access public
	 * @var BasicAmountType
	 */
	public $TotalFee;

	/**
	 * @access public
	 * @var string
	 */
	public $RestrictedTicket;

	/**
	 * @access public
	 * @var string
	 */
	public $ClearingSequence;

	/**
	 * @access public
	 * @var string
	 */
	public $ClearingCount;

	/**
	 * array
	 * @access public
	 * @var FlightDetailsType
	 */
	public $FlightDetails;


	public function toXMLString()  {
		$str = '';
		if($this->PassengerName != null ) {
			$str .= '<ebl:PassengerName>'.$this->PassengerName.'</ebl:PassengerName>';
		 }
		if($this->IssueDate != null ) {
			$str .= '<ebl:IssueDate>'.$this->IssueDate.'</ebl:IssueDate>';
		 }
		if($this->TravelAgencyName != null ) {
			$str .= '<ebl:TravelAgencyName>'.$this->TravelAgencyName.'</ebl:TravelAgencyName>';
		 }
		if($this->TravelAgencyCode != null ) {
			$str .= '<ebl:TravelAgencyCode>'.$this->TravelAgencyCode.'</ebl:TravelAgencyCode>';
		 }
		if($this->TicketNumber != null ) {
			$str .= '<ebl:TicketNumber>'.$this->TicketNumber.'</ebl:TicketNumber>';
		 }
		if($this->IssuingCarrierCode != null ) {
			$str .= '<ebl:IssuingCarrierCode>'.$this->IssuingCarrierCode.'</ebl:IssuingCarrierCode>';
		 }
		if($this->CustomerCode != null ) {
			$str .= '<ebl:CustomerCode>'.$this->CustomerCode.'</ebl:CustomerCode>';
		 }
		if($this->TotalFare != null ) {
			$str .='<ebl:TotalFare';
			$str .= $this->TotalFare->toXMLString();
			$str .=  '</ebl:TotalFare>';
		 }
		if($this->TotalTaxes != null ) {
			$str .='<ebl:TotalTaxes';
			$str .= $this->TotalTaxes->toXMLString();
			$str .=  '</ebl:TotalTaxes>';
		 }
		if($this->TotalFee != null ) {
			$str .='<ebl:TotalFee';
			$str .= $this->TotalFee->toXMLString();
			$str .=  '</ebl:TotalFee>';
		 }
		if($this->RestrictedTicket != null ) {
			$str .= '<ebl:RestrictedTicket>'.$this->RestrictedTicket.'</ebl:RestrictedTicket>';
		 }
		if($this->ClearingSequence != null ) {
			$str .= '<ebl:ClearingSequence>'.$this->ClearingSequence.'</ebl:ClearingSequence>';
		 }
		if($this->ClearingCount != null ) {
			$str .= '<ebl:ClearingCount>'.$this->ClearingCount.'</ebl:ClearingCount>';
		 }
		if($this->FlightDetails != null ) {
		for($i=0; $i<count($this->FlightDetails);$i++) {
			$str .= '<ebl:FlightDetails>';
			$str .= $this->FlightDetails[$i]->toXMLString();
			$str .=  '</ebl:FlightDetails>';
		 }
		 }

		return $str;
	}

}

/**
 * FlightDetailsType
 * Details of leg information
 */
class FlightDetailsType {
	/**
	 * @access public
	 * @var string
	 */
	public $ConjuctionTicket;

	/**
	 * @access public
	 * @var string
	 */
	public $ExchangeTicket;

	/**
	 * @access public
	 * @var string
	 */
	public $CouponNumber;

	/**
	 * @access public
	 * @var string
	 */
	public $ServiceClass;

	/**
	 * @access public
	 * @var string
	 */
	public $TravelDate;

	/**
	 * @access public
	 * @var string
	 */
	public $CarrierCode;

	/**
	 * @access public
	 * @var string
	 */
	public $StopOverPermitted;

	/**
	 * @access public
	 * @var string
	 */
	public $DepartureAirport;

	/**
	 * @access public
	 * @var string
	 */
	public $ArrivalAirport;

	/**
	 * @access public
	 * @var string
	 */
	public $FlightNumber;

	/**
	 * @access public
	 * @var string
	 */
	public $DepartureTime;

	/**
	 * @access public
	 * @var string
	 */
	public $ArrivalTime;

	/**
	 * @access public
	 * @var string
	 */
	public $FareBasisCode;

	/**
	 * @access public
	 * @var BasicAmountType
	 */
	public $Fare;

	/**
	 * @access public
	 * @var BasicAmountType
	 */
	public $Taxes;

	/**
	 * @access public
	 * @var BasicAmountType
	 */
	public $Fee;

	/**
	 * @access public
	 * @var string
	 */
	public $EndorsementOrRestrictions;


	public function toXMLString()  {
		$str = '';
		if($this->ConjuctionTicket != null ) {
			$str .= '<ebl:ConjuctionTicket>'.$this->ConjuctionTicket.'</ebl:ConjuctionTicket>';
		 }
		if($this->ExchangeTicket != null ) {
			$str .= '<ebl:ExchangeTicket>'.$this->ExchangeTicket.'</ebl:ExchangeTicket>';
		 }
		if($this->CouponNumber != null ) {
			$str .= '<ebl:CouponNumber>'.$this->CouponNumber.'</ebl:CouponNumber>';
		 }
		if($this->ServiceClass != null ) {
			$str .= '<ebl:ServiceClass>'.$this->ServiceClass.'</ebl:ServiceClass>';
		 }
		if($this->TravelDate != null ) {
			$str .= '<ebl:TravelDate>'.$this->TravelDate.'</ebl:TravelDate>';
		 }
		if($this->CarrierCode != null ) {
			$str .= '<ebl:CarrierCode>'.$this->CarrierCode.'</ebl:CarrierCode>';
		 }
		if($this->StopOverPermitted != null ) {
			$str .= '<ebl:StopOverPermitted>'.$this->StopOverPermitted.'</ebl:StopOverPermitted>';
		 }
		if($this->DepartureAirport != null ) {
			$str .= '<ebl:DepartureAirport>'.$this->DepartureAirport.'</ebl:DepartureAirport>';
		 }
		if($this->ArrivalAirport != null ) {
			$str .= '<ebl:ArrivalAirport>'.$this->ArrivalAirport.'</ebl:ArrivalAirport>';
		 }
		if($this->FlightNumber != null ) {
			$str .= '<ebl:FlightNumber>'.$this->FlightNumber.'</ebl:FlightNumber>';
		 }
		if($this->DepartureTime != null ) {
			$str .= '<ebl:DepartureTime>'.$this->DepartureTime.'</ebl:DepartureTime>';
		 }
		if($this->ArrivalTime != null ) {
			$str .= '<ebl:ArrivalTime>'.$this->ArrivalTime.'</ebl:ArrivalTime>';
		 }
		if($this->FareBasisCode != null ) {
			$str .= '<ebl:FareBasisCode>'.$this->FareBasisCode.'</ebl:FareBasisCode>';
		 }
		if($this->Fare != null ) {
			$str .='<ebl:Fare';
			$str .= $this->Fare->toXMLString();
			$str .=  '</ebl:Fare>';
		 }
		if($this->Taxes != null ) {
			$str .='<ebl:Taxes';
			$str .= $this->Taxes->toXMLString();
			$str .=  '</ebl:Taxes>';
		 }
		if($this->Fee != null ) {
			$str .='<ebl:Fee';
			$str .= $this->Fee->toXMLString();
			$str .=  '</ebl:Fee>';
		 }
		if($this->EndorsementOrRestrictions != null ) {
			$str .= '<ebl:EndorsementOrRestrictions>'.$this->EndorsementOrRestrictions.'</ebl:EndorsementOrRestrictions>';
		 }

		return $str;
	}

}

/**
 * AuthorizationInfoType
 * Authorization details
 */
class AuthorizationInfoType {
	/**
	 * The status of the payment:
	 * Pending: The payment is pending. See "PendingReason" for more information.
	 *
	 * @access public
	 * @var PaymentStatusCodeType
	 */
	public $PaymentStatus;

	/**
	 * The reason the payment is pending:
none: No pending reason
	 * address: The payment is pending because your customer did not include a confirmed shipping address and your Payment Receiving Preferences is set such that you want to manually accept or deny each of these payments. To change your preference, go to the Preferences section of your Profile.
	 * authorization: The authorization is pending at time of creation if payment is not under review
	 * echeck: The payment is pending because it was made by an eCheck that has not yet cleared.
	 * intl: The payment is pending because you hold a non-U.S. account and do not have a withdrawal mechanism. You must manually accept or deny this payment from your Account Overview.
	 * multi-currency: You do not have a balance in the currency sent, and you do not have your Payment Receiving Preferences set to automatically convert and accept this payment. You must manually accept or deny this payment.
	 * unilateral: The payment is pending because it was made to an email address that is not yet registered or confirmed.
	 * upgrade: The payment is pending because it was made via credit card and you must upgrade your account to Business or Premier status in order to receive the funds. upgrade can also mean that you have reached the monthly limit for transactions on your account.
	 * verify: The payment is pending because you are not yet verified. You must verify your account before you can accept this payment.
	 * payment_review: The payment is pending because it is under payment review.
	 * other: The payment is pending for a reason other than those listed above. For more information, contact PayPal Customer Service.
	 *
	 * @access public
	 * @var PendingStatusCodeType
	 */
	public $PendingReason;

	/**
	 * Protection Eligibility for this Transaction - None, SPP or ESPP
	 *
	 * @access public
	 * @var string
	 */
	public $ProtectionEligibility;

	/**
	 * Protection Eligibility Type  for this Transaction
	 *
	 * @access public
	 * @var string
	 */
	public $ProtectionEligibilityType;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='paymentstatus') {
				$this->PaymentStatus = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='pendingreason') {
				$this->PendingReason = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='protectioneligibility') {
				$this->ProtectionEligibility = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='protectioneligibilitytype') {
				$this->ProtectionEligibilityType = $arry["text"];
			}
		}
		}
	}
}

/**
 * OptionTrackingDetailsType
 * Option Number.
 * Optional
 */
class OptionTrackingDetailsType {
	/**
	 * Option Number.
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $OptionNumber;

	/**
	 * Option Quantity.
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $OptionQty;

	/**
	 * Option Select Name.
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $OptionSelect;

	/**
	 * Option Quantity Delta.
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $OptionQtyDelta;

	/**
	 * Option Alert.
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $OptionAlert;

	/**
	 * Option Cost.
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $OptionCost;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='optionnumber') {
				$this->OptionNumber = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='optionqty') {
				$this->OptionQty = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='optionselect') {
				$this->OptionSelect = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='optionqtydelta') {
				$this->OptionQtyDelta = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='optionalert') {
				$this->OptionAlert = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='optioncost') {
				$this->OptionCost = $arry["text"];
			}
		}
		}
	}

	public function toXMLString()  {
		$str = '';
		if($this->OptionNumber != null ) {
			$str .= '<ebl:OptionNumber>'.$this->OptionNumber.'</ebl:OptionNumber>';
		 }
		if($this->OptionQty != null ) {
			$str .= '<ebl:OptionQty>'.$this->OptionQty.'</ebl:OptionQty>';
		 }
		if($this->OptionSelect != null ) {
			$str .= '<ebl:OptionSelect>'.$this->OptionSelect.'</ebl:OptionSelect>';
		 }
		if($this->OptionQtyDelta != null ) {
			$str .= '<ebl:OptionQtyDelta>'.$this->OptionQtyDelta.'</ebl:OptionQtyDelta>';
		 }
		if($this->OptionAlert != null ) {
			$str .= '<ebl:OptionAlert>'.$this->OptionAlert.'</ebl:OptionAlert>';
		 }
		if($this->OptionCost != null ) {
			$str .= '<ebl:OptionCost>'.$this->OptionCost.'</ebl:OptionCost>';
		 }

		return $str;
	}

}

/**
 * ItemTrackingDetailsType
 * Item Number.
 * Required
 */
class ItemTrackingDetailsType {
	/**
	 * Item Number.
	 * Required
	 *
	 * @access public
	 * @var string
	 */
	public $ItemNumber;

	/**
	 * Option Quantity.
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $ItemQty;

	/**
	 * Item Quantity Delta.
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $ItemQtyDelta;

	/**
	 * Item Alert.
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $ItemAlert;

	/**
	 * Item Cost.
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $ItemCost;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='itemnumber') {
				$this->ItemNumber = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='itemqty') {
				$this->ItemQty = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='itemqtydelta') {
				$this->ItemQtyDelta = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='itemalert') {
				$this->ItemAlert = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='itemcost') {
				$this->ItemCost = $arry["text"];
			}
		}
		}
	}

	public function toXMLString()  {
		$str = '';
		if($this->ItemNumber != null ) {
			$str .= '<ebl:ItemNumber>'.$this->ItemNumber.'</ebl:ItemNumber>';
		 }
		if($this->ItemQty != null ) {
			$str .= '<ebl:ItemQty>'.$this->ItemQty.'</ebl:ItemQty>';
		 }
		if($this->ItemQtyDelta != null ) {
			$str .= '<ebl:ItemQtyDelta>'.$this->ItemQtyDelta.'</ebl:ItemQtyDelta>';
		 }
		if($this->ItemAlert != null ) {
			$str .= '<ebl:ItemAlert>'.$this->ItemAlert.'</ebl:ItemAlert>';
		 }
		if($this->ItemCost != null ) {
			$str .= '<ebl:ItemCost>'.$this->ItemCost.'</ebl:ItemCost>';
		 }

		return $str;
	}

}

/**
 * ButtonSearchResultType
 */
class ButtonSearchResultType {
	/**
	 * @access public
	 * @var string
	 */
	public $HostedButtonID;

	/**
	 * @access public
	 * @var string
	 */
	public $ButtonType;

	/**
	 * @access public
	 * @var string
	 */
	public $ItemName;

	/**
	 * @access public
	 * @var dateTime
	 */
	public $ModifyDate;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='hostedbuttonid') {
				$this->HostedButtonID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='buttontype') {
				$this->ButtonType = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='itemname') {
				$this->ItemName = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='modifydate') {
				$this->ModifyDate = $arry["text"];
			}
		}
		}
	}
}

/**
 * ReverseTransactionRequestDetailsType
 * Identifier of the transaction to reverse.
 * Required
 * Character length and limitations: 17 single-byte alphanumeric characters
 */
class ReverseTransactionRequestDetailsType {
	/**
Identifier of the transaction to reverse.
	 * Required
	 * Character length and limitations: 17 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $TransactionID;


	public function toXMLString()  {
		$str = '';
		if($this->TransactionID != null ) {
			$str .= '<ebl:TransactionID>'.$this->TransactionID.'</ebl:TransactionID>';
		 }

		return $str;
	}

}

/**
 * ReverseTransactionResponseDetailsType
 * Unique transaction identifier of the reversal transaction created.
 * Character length and limitations:17 single-byte characters
 */
class ReverseTransactionResponseDetailsType {
	/**
Unique transaction identifier of the reversal transaction created.
	 * Character length and limitations:17 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $ReverseTransactionID;

	/**
Status of reversal request.
	 * Required
	 *
	 * @access public
	 * @var string
	 */
	public $Status;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='reversetransactionid') {
				$this->ReverseTransactionID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='status') {
				$this->Status = $arry["text"];
			}
		}
		}
	}
}

/**
 * IncentiveInfoType
 * Details of incentive application on individual bucket.  
 */
class IncentiveInfoType {
	/**
	 * Incentive redemption code.
	 *
	 * @access public
	 * @var string
	 */
	public $IncentiveCode;

	/**
	 * Defines which bucket or item that the incentive should be applied to. 
	 *
	 * array
	 * @access public
	 * @var IncentiveApplyIndicationType
	 */
	public $ApplyIndication;


	public function toXMLString()  {
		$str = '';
		if($this->IncentiveCode != null ) {
			$str .= '<ebl:IncentiveCode>'.$this->IncentiveCode.'</ebl:IncentiveCode>';
		 }
		if($this->ApplyIndication != null ) {
		for($i=0; $i<count($this->ApplyIndication);$i++) {
			$str .= '<ebl:ApplyIndication>';
			$str .= $this->ApplyIndication[$i]->toXMLString();
			$str .=  '</ebl:ApplyIndication>';
		 }
		 }

		return $str;
	}

}

/**
 * IncentiveApplyIndicationType
 * Defines which bucket or item that the incentive should be applied to.  
 */
class IncentiveApplyIndicationType {
	/**
	 * The Bucket ID that the incentive is applied to.
	 *
	 * @access public
	 * @var string
	 */
	public $PaymentRequestID;

	/**
	 * The item that the incentive is applied to. 
	 *
	 * @access public
	 * @var string
	 */
	public $ItemId;


	public function toXMLString()  {
		$str = '';
		if($this->PaymentRequestID != null ) {
			$str .= '<ebl:PaymentRequestID>'.$this->PaymentRequestID.'</ebl:PaymentRequestID>';
		 }
		if($this->ItemId != null ) {
			$str .= '<ebl:ItemId>'.$this->ItemId.'</ebl:ItemId>';
		 }

		return $str;
	}

}

/**
 * PaymentRequestInfoType
 * Contains payment request information for each bucket in the cart.
 */
class PaymentRequestInfoType {
	/**
	 * Contains the transaction id of the bucket.
	 *
	 * @access public
	 * @var string
	 */
	public $TransactionId;

	/**
	 * Contains the bucket id.
	 *
	 * @access public
	 * @var string
	 */
	public $PaymentRequestID;

	/**
	 * Contains the error details.
	 *
	 * @access public
	 * @var ErrorType
	 */
	public $PaymentError;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='transactionid') {
				$this->TransactionId = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='paymentrequestid') {
				$this->PaymentRequestID = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="paymenterror") {
				$this->PaymentError = new ErrorType();
				$this->PaymentError->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * ExternalRememberMeOwnerDetailsType
 * E-mail address or secure merchant account ID of merchant to associate with new external remember-me.
 */
class ExternalRememberMeOwnerDetailsType {
	/**
	 * A discriminant that tells SetEC what kind of data the ExternalRememberMeOwnerID parameter contains.
	 * Currently, the owner must be either the API actor or omitted/none.  In the future, we may allow the
	 * owner to be a 3rd party merchant account.
	 * Possible values are:
	 * None, ignore the ExternalRememberMeOwnerID.  An empty value for this field also signifies None.
	 * Email, the owner ID is an email address
	 * SecureMerchantAccountID, the owner id is a string representing the secure merchant account ID
	 *
	 * @access public
	 * @var string
	 */
	public $ExternalRememberMeOwnerIDType;

	/**
	 * When opting in to bypass login via remember me, this parameter specifies the merchant account
	 * associated with the remembered login.  Currentl, the owner must be either the API actor or omitted/none.
	 * In the future, we may allow the owner to be a 3rd party merchant account.
	 * If the Owner ID Type field is not present or "None", this parameter is ignored.
	 *
	 * @access public
	 * @var string
	 */
	public $ExternalRememberMeOwnerID;


	public function toXMLString()  {
		$str = '';
		if($this->ExternalRememberMeOwnerIDType != null ) {
			$str .= '<ebl:ExternalRememberMeOwnerIDType>'.$this->ExternalRememberMeOwnerIDType.'</ebl:ExternalRememberMeOwnerIDType>';
		 }
		if($this->ExternalRememberMeOwnerID != null ) {
			$str .= '<ebl:ExternalRememberMeOwnerID>'.$this->ExternalRememberMeOwnerID.'</ebl:ExternalRememberMeOwnerID>';
		 }

		return $str;
	}

}

/**
 * ExternalRememberMeOptInDetailsType
 * This element contains information that allows the merchant to request to
 * opt into external remember me on behalf of the buyer or to request login
 * bypass using external remember me.
 */
class ExternalRememberMeOptInDetailsType {
	/**
	 * 1 = opt in to external remember me.
	 * 0 or omitted = no opt-in
	 * Other values are invalid
	 *
	 * @access public
	 * @var string
	 */
	public $ExternalRememberMeOptIn;

	/**
	 * E-mail address or secure merchant account ID of merchant to associate with new external remember-me. Currently,
	 * the owner must be either the API actor or omitted/none.  In the future, we may allow the owner to be a 3rd party
	 * merchant account.
	 *
	 * @access public
	 * @var ExternalRememberMeOwnerDetailsType
	 */
	public $ExternalRememberMeOwnerDetails;


	public function toXMLString()  {
		$str = '';
		if($this->ExternalRememberMeOptIn != null ) {
			$str .= '<ebl:ExternalRememberMeOptIn>'.$this->ExternalRememberMeOptIn.'</ebl:ExternalRememberMeOptIn>';
		 }
		if($this->ExternalRememberMeOwnerDetails != null ) {
			$str .='<ebl:ExternalRememberMeOwnerDetails>';
			$str .= $this->ExternalRememberMeOwnerDetails->toXMLString();
			$str .=  '</ebl:ExternalRememberMeOwnerDetails>';
		 }

		return $str;
	}

}

/**
 * FlowControlDetailsType
 * An optional set of values related to flow-specific details.
 */
class FlowControlDetailsType {
	/**
	 * The URL to redirect to for an unpayable transaction.  This field is currently used only
	 * for the inline checkout flow.
	 *
	 * @access public
	 * @var string
	 */
	public $ErrorURL;

	/**
	 * The URL to redirect to after a user clicks the "Pay" or "Continue" button on the merchant's
	 * site.  This field is currently used only for the inline checkout flow.
	 *
	 * @access public
	 * @var string
	 */
	public $InContextReturnURL;


	public function toXMLString()  {
		$str = '';
		if($this->ErrorURL != null ) {
			$str .= '<ebl:ErrorURL>'.$this->ErrorURL.'</ebl:ErrorURL>';
		 }
		if($this->InContextReturnURL != null ) {
			$str .= '<ebl:InContextReturnURL>'.$this->InContextReturnURL.'</ebl:InContextReturnURL>';
		 }

		return $str;
	}

}

/**
 * ExternalRememberMeStatusDetailsType
 * Response information resulting from opt-in operation or current login bypass status.
 */
class ExternalRememberMeStatusDetailsType {
	/**
	 * Required field that reports status of opt-in or login bypass attempt.
	 * 0 = Success - successful opt-in or ExternalRememberMeID specified in SetExpressCheckout
	 * is valid.
	 * 1 = Invalid ID - ExternalRememberMeID specified in SetExpressCheckout is invalid.
	 * 2 = Internal Error - System error or outage during opt-in or login bypass.  Can retry
	 * opt-in or login bypass next time.  Flow will force full authentication and allow buyer
	 * to complete transaction.
	 * -1 = None - the return value does not signify any valid remember me status.
	 *
	 * @access public
	 * @var integer
	 */
	public $ExternalRememberMeStatus;

	/**
	 * Identifier returned on external-remember-me-opt-in to allow the merchant to request
	 * bypass of PayPal login through external remember me on behalf of the buyer in future
	 * transactions.  The ExternalRememberMeID is a 17-character alphanumeric (encrypted)
	 * string.  This field has meaning only to the merchant.
	 *
	 * @access public
	 * @var string
	 */
	public $ExternalRememberMeID;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='externalremembermestatus') {
				$this->ExternalRememberMeStatus = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='externalremembermeid') {
				$this->ExternalRememberMeID = $arry["text"];
			}
		}
		}
	}
}

/**
 * DisplayControlDetailsType
 * Contains elements that allows customization of display (user interface) elements.
 */
class DisplayControlDetailsType {
	/**
	 * Optional URL to pay button image for the inline checkout flow.  Currently applicable
	 * only to the inline checkout flow when the FlowControlDetails/InlineReturnURL is present.
	 *
	 * @access public
	 * @var string
	 */
	public $InContextPaymentButtonImage;


	public function toXMLString()  {
		$str = '';
		if($this->InContextPaymentButtonImage != null ) {
			$str .= '<ebl:InContextPaymentButtonImage>'.$this->InContextPaymentButtonImage.'</ebl:InContextPaymentButtonImage>';
		 }

		return $str;
	}

}

/**
 * ExternalPartnerTrackingDetailsType
 * Contains elements that allow tracking for an external partner.
 */
class ExternalPartnerTrackingDetailsType {
	/**
	 * PayPal will just log this string. There will NOT be any business logic around it, nor any decisions made based on the value of the string that is passed in.
	 * From a tracking/analytical perspective, PayPal would not infer any meaning to any specific value.
	 * We would just segment the traffic based on the value passed (Cart and None as an example) and track different
	 * metrics like risk/conversion etc based on these segments.
	 * The external partner would control the value of what gets passed and we take that value as is and generate data based on it. 
	 * Optional 
	 *
	 * @access public
	 * @var string
	 */
	public $ExternalPartnerSegmentID;


	public function toXMLString()  {
		$str = '';
		if($this->ExternalPartnerSegmentID != null ) {
			$str .= '<ebl:ExternalPartnerSegmentID>'.$this->ExternalPartnerSegmentID.'</ebl:ExternalPartnerSegmentID>';
		 }

		return $str;
	}

}

/**
 * MerchantStoreDetailsType
 * Store IDOptional
 * Character length and limits: 50 single-byte characters
 */
class MerchantStoreDetailsType {
	/**
Store IDOptional
	 * Character length and limits: 50 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $StoreID;

	/**
Terminal IDOptional
	 * Character length and limits: 50 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $TerminalID;


	public function __construct($StoreID = null) {
		$this->StoreID  = $StoreID;
	}

	public function toXMLString()  {
		$str = '';
		if($this->StoreID != null ) {
			$str .= '<ebl:StoreID>'.$this->StoreID.'</ebl:StoreID>';
		 }
		if($this->TerminalID != null ) {
			$str .= '<ebl:TerminalID>'.$this->TerminalID.'</ebl:TerminalID>';
		 }

		return $str;
	}

}

/**
 * AdditionalFeeType
 */
class AdditionalFeeType {
	/**
	 * @access public
	 * @var string
	 */
	public $Type;

	/**
	 * @access public
	 * @var BasicAmountType
	 */
	public $Amount;


	public function toXMLString()  {
		$str = '';
		if($this->Type != null ) {
			$str .= '<ebl:Type>'.$this->Type.'</ebl:Type>';
		 }
		if($this->Amount != null ) {
			$str .='<ebl:Amount';
			$str .= $this->Amount->toXMLString();
			$str .=  '</ebl:Amount>';
		 }

		return $str;
	}

}

/**
 * DiscountType
 * Describes discount information
 */
class DiscountType {
	/**
Item nameOptional
	 * Character length and limits: 127 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $Name;

	/**
description of the discountOptional
	 * Character length and limits: 127 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $Description;

	/**
amount discountedOptional
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Amount;

	/**
offer typeOptional
	 *
	 * @access public
	 * @var RedeemedOfferType
	 */
	public $RedeemedOfferType;

	/**
offer IDOptional
	 * Character length and limits: 64 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $RedeemedOfferID;


	public function __construct($Amount = null) {
		$this->Amount  = $Amount;
	}

	public function toXMLString()  {
		$str = '';
		if($this->Name != null ) {
			$str .= '<ebl:Name>'.$this->Name.'</ebl:Name>';
		 }
		if($this->Description != null ) {
			$str .= '<ebl:Description>'.$this->Description.'</ebl:Description>';
		 }
		if($this->Amount != null ) {
			$str .='<ebl:Amount';
			$str .= $this->Amount->toXMLString();
			$str .=  '</ebl:Amount>';
		 }
		if($this->RedeemedOfferType != null ) {
			$str .= '<ebl:RedeemedOfferType>'.$this->RedeemedOfferType.'</ebl:RedeemedOfferType>';
		 }
		if($this->RedeemedOfferID != null ) {
			$str .= '<ebl:RedeemedOfferID>'.$this->RedeemedOfferID.'</ebl:RedeemedOfferID>';
		 }

		return $str;
	}

}

/**
 * InvoiceItemType
 * Describes an individual item for an invoice.
 */
class InvoiceItemType {
	/**
a human readable item nameOptional
	 * Character length and limits: 127 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $Name;

	/**
a human readable item descriptionOptional
	 * Character length and limits: 127 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $Description;

	/**
	 * The International Article Number or 
	 * Universal Product Code (UPC) for the item.
	 * Empty string is allowed.
	 * Character length and limits: 17 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $EAN;

	/**
	 * The Stock-Keeping Unit or other identification 
	 * code assigned to the item.
	 * Character length and limits: 64 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $SKU;

	/**
	 * A retailer could apply different return policies on different items.
	 * Each return policy would be identified using a label or identifier.
	 * This return policy identifier should be set here.  
	 * This identifier will be displayed next to the item in the e-Receipt.
	 * Character length and limits: 8 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $ReturnPolicyIdentifier;

	/**
	 * total price of this item
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Price;

	/**
	 * price per item quantity
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $ItemPrice;

	/**
	 * quantity of the item (non-negative)
	 *
	 * @access public
	 * @var double
	 */
	public $ItemCount;

	/**
	 * Unit of measure for the itemCount
	 *
	 * @access public
	 * @var UnitOfMeasure
	 */
	public $ItemCountUnit;

	/**
	 * discount applied to this item
	 *
	 * array
	 * @access public
	 * @var DiscountType
	 */
	public $Discount;

	/**
	 * identifies whether this item is taxable or not.  
	 * If not passed, this will be assumed to be true.
	 *
	 * @access public
	 * @var boolean
	 */
	public $Taxable;

	/**
	 * The tax percentage applied to the item.
	 * This is only used for displaying in the receipt, it is not used in pricing calculations.
	 * Note: we have totalTax at invoice level. It's up to the caller to do the calculations for setting that other element.
	 *
	 * @access public
	 * @var double
	 */
	public $TaxRate;

	/**
	 * Additional fees to this item
	 *
	 * array
	 * @access public
	 * @var AdditionalFeeType
	 */
	public $AdditionalFees;

	/**
	 * identifies whether this is reimbursable or not.
	 * If not pass, this will be assumed to be true.
	 *
	 * @access public
	 * @var boolean
	 */
	public $Reimbursable;

	/**
	 * Manufacturer part number.
	 *
	 * @access public
	 * @var string
	 */
	public $MPN;

	/**
	 * International Standard Book Number.
	 * Reference http://en.wikipedia.org/wiki/ISBN
	 * Character length and limits: 32 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $ISBN;

	/**
	 * Price Look-Up code
	 * Reference http://en.wikipedia.org/wiki/Price_Look-Up_code
	 * Character length and limits: 5 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $PLU;

	/**
	 * Character length and limits: 32 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $ModelNumber;

	/**
	 * Character length and limits: 32 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $StyleNumber;


	public function toXMLString()  {
		$str = '';
		if($this->Name != null ) {
			$str .= '<ebl:Name>'.$this->Name.'</ebl:Name>';
		 }
		if($this->Description != null ) {
			$str .= '<ebl:Description>'.$this->Description.'</ebl:Description>';
		 }
		if($this->EAN != null ) {
			$str .= '<ebl:EAN>'.$this->EAN.'</ebl:EAN>';
		 }
		if($this->SKU != null ) {
			$str .= '<ebl:SKU>'.$this->SKU.'</ebl:SKU>';
		 }
		if($this->ReturnPolicyIdentifier != null ) {
			$str .= '<ebl:ReturnPolicyIdentifier>'.$this->ReturnPolicyIdentifier.'</ebl:ReturnPolicyIdentifier>';
		 }
		if($this->Price != null ) {
			$str .='<ebl:Price';
			$str .= $this->Price->toXMLString();
			$str .=  '</ebl:Price>';
		 }
		if($this->ItemPrice != null ) {
			$str .='<ebl:ItemPrice';
			$str .= $this->ItemPrice->toXMLString();
			$str .=  '</ebl:ItemPrice>';
		 }
		if($this->ItemCount != null ) {
			$str .= '<ebl:ItemCount>'.$this->ItemCount.'</ebl:ItemCount>';
		 }
		if($this->ItemCountUnit != null ) {
			$str .= '<ebl:ItemCountUnit>'.$this->ItemCountUnit.'</ebl:ItemCountUnit>';
		 }
		if($this->Discount != null ) {
		for($i=0; $i<count($this->Discount);$i++) {
			$str .= '<ebl:Discount>';
			$str .= $this->Discount[$i]->toXMLString();
			$str .=  '</ebl:Discount>';
		 }
		 }
		if($this->Taxable != null ) {
			$str .= '<ebl:Taxable>'.$this->Taxable.'</ebl:Taxable>';
		 }
		if($this->TaxRate != null ) {
			$str .= '<ebl:TaxRate>'.$this->TaxRate.'</ebl:TaxRate>';
		 }
		if($this->AdditionalFees != null ) {
		for($i=0; $i<count($this->AdditionalFees);$i++) {
			$str .= '<ebl:AdditionalFees>';
			$str .= $this->AdditionalFees[$i]->toXMLString();
			$str .=  '</ebl:AdditionalFees>';
		 }
		 }
		if($this->Reimbursable != null ) {
			$str .= '<ebl:Reimbursable>'.$this->Reimbursable.'</ebl:Reimbursable>';
		 }
		if($this->MPN != null ) {
			$str .= '<ebl:MPN>'.$this->MPN.'</ebl:MPN>';
		 }
		if($this->ISBN != null ) {
			$str .= '<ebl:ISBN>'.$this->ISBN.'</ebl:ISBN>';
		 }
		if($this->PLU != null ) {
			$str .= '<ebl:PLU>'.$this->PLU.'</ebl:PLU>';
		 }
		if($this->ModelNumber != null ) {
			$str .= '<ebl:ModelNumber>'.$this->ModelNumber.'</ebl:ModelNumber>';
		 }
		if($this->StyleNumber != null ) {
			$str .= '<ebl:StyleNumber>'.$this->StyleNumber.'</ebl:StyleNumber>';
		 }

		return $str;
	}

}

/**
 * RefundInfoType
 * Holds refunds payment status information
 */
class RefundInfoType {
	/**
	 * Refund status whether it is Instant or Delayed.
	 *
	 * @access public
	 * @var PaymentStatusCodeType
	 */
	public $RefundStatus;

	/**
	 * Tells us the reason when refund payment status is Delayed.
	 *
	 * @access public
	 * @var PendingStatusCodeType
	 */
	public $PendingReason;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='refundstatus') {
				$this->RefundStatus = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='pendingreason') {
				$this->PendingReason = $arry["text"];
			}
		}
		}
	}
}

/**
 * EnhancedCheckoutDataType
 */
class EnhancedCheckoutDataType {

	public function toXMLString()  {
		$str = '';

		return $str;
	}

}

/**
 * EnhancedPaymentDataType
 */
class EnhancedPaymentDataType {

	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
		}
		}
	}

	public function toXMLString()  {
		$str = '';

		return $str;
	}

}

/**
 * EnhancedItemDataType
 */
class EnhancedItemDataType {

	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
		}
		}
	}

	public function toXMLString()  {
		$str = '';

		return $str;
	}

}

/**
 * EnhancedPaymentInfoType
 */
class EnhancedPaymentInfoType {

	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
		}
		}
	}
}

/**
 * EnhancedInitiateRecoupRequestDetailsType
 */
class EnhancedInitiateRecoupRequestDetailsType {

	public function toXMLString()  {
		$str = '';

		return $str;
	}

}

/**
 * EnhancedCompleteRecoupRequestDetailsType
 */
class EnhancedCompleteRecoupRequestDetailsType {

	public function toXMLString()  {
		$str = '';

		return $str;
	}

}

/**
 * EnhancedCompleteRecoupResponseDetailsType
 */
class EnhancedCompleteRecoupResponseDetailsType {

	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
		}
		}
	}
}

/**
 * EnhancedCancelRecoupRequestDetailsType
 */
class EnhancedCancelRecoupRequestDetailsType {

	public function toXMLString()  {
		$str = '';

		return $str;
	}

}

/**
 * EnhancedPayerInfoType
 */
class EnhancedPayerInfoType {

	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
		}
		}
	}

	public function toXMLString()  {
		$str = '';

		return $str;
	}

}

/**
 * InstallmentDetailsType
 * Installment Period.
 * Optional
 */
class InstallmentDetailsType {
	/**
	 * Installment Period.
	 * Optional
	 *
	 * @access public
	 * @var BillingPeriodType
	 */
	public $BillingPeriod;

	/**
	 * Installment Frequency.
	 * Optional     
	 *
	 * @access public
	 * @var int
	 */
	public $BillingFrequency;

	/**
	 * Installment Cycles.
	 * Optional     
	 *
	 * @access public
	 * @var int
	 */
	public $TotalBillingCycles;

	/**
	 * Installment Amount.
	 * Optional     
	 *
	 * @access public
	 * @var string
	 */
	public $Amount;

	/**
	 * Installment Amount.
	 * Optional     
	 *
	 * @access public
	 * @var string
	 */
	public $ShippingAmount;

	/**
	 * Installment Amount.
	 * Optional     
	 *
	 * @access public
	 * @var string
	 */
	public $TaxAmount;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='billingperiod') {
				$this->BillingPeriod = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='billingfrequency') {
				$this->BillingFrequency = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='totalbillingcycles') {
				$this->TotalBillingCycles = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='amount') {
				$this->Amount = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='shippingamount') {
				$this->ShippingAmount = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='taxamount') {
				$this->TaxAmount = $arry["text"];
			}
		}
		}
	}

	public function toXMLString()  {
		$str = '';
		if($this->BillingPeriod != null ) {
			$str .= '<urn:BillingPeriod>'.$this->BillingPeriod.'</urn:BillingPeriod>';
		 }
		if($this->BillingFrequency != null ) {
			$str .= '<urn:BillingFrequency>'.$this->BillingFrequency.'</urn:BillingFrequency>';
		 }
		if($this->TotalBillingCycles != null ) {
			$str .= '<urn:TotalBillingCycles>'.$this->TotalBillingCycles.'</urn:TotalBillingCycles>';
		 }
		if($this->Amount != null ) {
			$str .= '<urn:Amount>'.$this->Amount.'</urn:Amount>';
		 }
		if($this->ShippingAmount != null ) {
			$str .= '<urn:ShippingAmount>'.$this->ShippingAmount.'</urn:ShippingAmount>';
		 }
		if($this->TaxAmount != null ) {
			$str .= '<urn:TaxAmount>'.$this->TaxAmount.'</urn:TaxAmount>';
		 }

		return $str;
	}

}

/**
 * OptionSelectionDetailsType
 * Option Selection.
 * Required
 * Character length and limitations: 12 single-byte alphanumeric characters
 */
class OptionSelectionDetailsType {
	/**
	 * Option Selection.
	 * Required
	 * Character length and limitations: 12 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $OptionSelection;

	/**
	 * Option Price.
	 * Optional     
	 *
	 * @access public
	 * @var string
	 */
	public $Price;

	/**
	 * Option Type
	 * Optional
	 *
	 * @access public
	 * @var OptionTypeListType
	 */
	public $OptionType;

	/**
	 * array
	 * @access public
	 * @var InstallmentDetailsType
	 */
	public $PaymentPeriod;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='optionselection') {
				$this->OptionSelection = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='price') {
				$this->Price = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='optiontype') {
				$this->OptionType = $arry["text"];
			}
			if (is_array($arry["children"])&& ($arry["children"])!=null) 	{
			$i=0;
			while(true) {
			if($arry["name"]=="paymentperiod[$i]") {
				$this->PaymentPeriod[$i] = new InstallmentDetailsType();
				$this->PaymentPeriod[$i]->init($arry["children"]);
			}
			else break;
			$i++;
			}
		}
				if(is_array($arry["children"]) && ($arry["children"])!=null && $arry["name"]=="paymentperiod") {
				$this->PaymentPeriod = new InstallmentDetailsType();
				$this->PaymentPeriod->init($arry["children"]);
					}
		}
		}
	}

	public function __construct($OptionSelection = null) {
		$this->OptionSelection  = $OptionSelection;
	}

	public function toXMLString()  {
		$str = '';
		if($this->OptionSelection != null ) {
			$str .= '<urn:OptionSelection>'.$this->OptionSelection.'</urn:OptionSelection>';
		 }
		if($this->Price != null ) {
			$str .= '<urn:Price>'.$this->Price.'</urn:Price>';
		 }
		if($this->OptionType != null ) {
			$str .= '<urn:OptionType>'.$this->OptionType.'</urn:OptionType>';
		 }
		if($this->PaymentPeriod != null ) {
		for($i=0; $i<count($this->PaymentPeriod);$i++) {
			$str .= '<urn:PaymentPeriod>';
			$str .= $this->PaymentPeriod[$i]->toXMLString();
			$str .=  '</urn:PaymentPeriod>';
		 }
		 }

		return $str;
	}

}

/**
 * OptionDetailsType
 * Option Name.
 * Optional
 */
class OptionDetailsType {
	/**
	 * Option Name.
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $OptionName;

	/**
	 * array
	 * @access public
	 * @var OptionSelectionDetailsType
	 */
	public $OptionSelectionDetails;


	public function init($arr = null) {
		if($arr != null) {
			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='optionname') {
				$this->OptionName = $arry["text"];
			}
			if (is_array($arry["children"])&& ($arry["children"])!=null) 	{
			$i=0;
			while(true) {
			if($arry["name"]=="optionselectiondetails[$i]") {
				$this->OptionSelectionDetails[$i] = new OptionSelectionDetailsType();
				$this->OptionSelectionDetails[$i]->init($arry["children"]);
			}
			else break;
			$i++;
			}
		}
				if(is_array($arry["children"]) && ($arry["children"])!=null && $arry["name"]=="optionselectiondetails") {
				$this->OptionSelectionDetails = new OptionSelectionDetailsType();
				$this->OptionSelectionDetails->init($arry["children"]);
					}
		}
		}
	}

	public function __construct($OptionName = null) {
		$this->OptionName  = $OptionName;
	}

	public function toXMLString()  {
		$str = '';
		if($this->OptionName != null ) {
			$str .= '<urn:OptionName>'.$this->OptionName.'</urn:OptionName>';
		 }
		if($this->OptionSelectionDetails != null ) {
		for($i=0; $i<count($this->OptionSelectionDetails);$i++) {
			$str .= '<urn:OptionSelectionDetails>';
			$str .= $this->OptionSelectionDetails[$i]->toXMLString();
			$str .=  '</urn:OptionSelectionDetails>';
		 }
		 }

		return $str;
	}

}

/**
 * BMCreateButtonReq
 */
class BMCreateButtonReq {
	/**
	 * @access public
	 * @var BMCreateButtonRequestType
	 */
	public $BMCreateButtonRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:BMCreateButtonReq>';
		if($this->BMCreateButtonRequest != null ) {
			$str .='<urn:BMCreateButtonRequest>';
			$str .= $this->BMCreateButtonRequest->toXMLString();
			$str .=  '</urn:BMCreateButtonRequest>';
		 }
$str.='</urn:BMCreateButtonReq>';

		return $str;
	}

}

/**
 * BMCreateButtonRequestType
 * Type of Button to create.
 * Required
 * Must be one of the following: BUYNOW, CART, GIFTCERTIFICATE. SUBSCRIBE, PAYMENTPLAN, AUTOBILLING, DONATE, VIEWCART or UNSUBSCRIBE
 */
class BMCreateButtonRequestType extends AbstractRequestType {
	/**
	 * Type of Button to create.
	 * Required
	 * Must be one of the following: BUYNOW, CART, GIFTCERTIFICATE. SUBSCRIBE, PAYMENTPLAN, AUTOBILLING, DONATE, VIEWCART or UNSUBSCRIBE
	 *
	 * @access public
	 * @var ButtonTypeType
	 */
	public $ButtonType;

	/**
	 * button code.
	 * optional
	 * Must be one of the following: hosted, encrypted or cleartext
	 *
	 * @access public
	 * @var ButtonCodeType
	 */
	public $ButtonCode;

	/**
	 * Button sub type.
	 * optional for button types buynow and cart only
	 * Must Be either PRODUCTS or SERVICES
	 *
	 * @access public
	 * @var ButtonSubTypeType
	 */
	public $ButtonSubType;

	/**
	 * Button Variable information
	 * At least one required recurring
	 * Character length and limitations: 63 single-byte alphanumeric characters
	 *
	 * array
	 * @access public
	 * @var string
	 */
	public $ButtonVar;

	/**
	 * array
	 * @access public
	 * @var OptionDetailsType
	 */
	public $OptionDetails;

	/**
	 * Details of each option for the button.
	 * Optional
	 *
	 * array
	 * @access public
	 * @var string
	 */
	public $TextBox;

	/**
	 * Button image to use.
	 * Optional
	 * Must be one of: REG, SML, or CC
	 *
	 * @access public
	 * @var ButtonImageType
	 */
	public $ButtonImage;

	/**
	 * Button URL for custom button image.
	 * Optional
	 * Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $ButtonImageURL;

	/**
	 * Text to use on Buy Now Button.
	 * Optional
	 * Must be either BUYNOW or PAYNOW
	 *
	 * @access public
	 * @var BuyNowTextType
	 */
	public $BuyNowText;

	/**
	 * Text to use on Subscribe button.
	 * Optional
	 * Must be either BUYNOW or SUBSCRIBE
	 *
	 * @access public
	 * @var SubscribeTextType
	 */
	public $SubscribeText;

	/**
	 * Button Country.
	 * Optional
	 * Must be valid ISO country code
	 *
	 * @access public
	 * @var CountryCodeType
	 */
	public $ButtonCountry;

	/**
	 * Button language code.
	 * Optional
	 * Character length and limitations: 3 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $ButtonLanguage;


	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->ButtonType != null ) {
			$str .= '<urn:ButtonType>'.$this->ButtonType.'</urn:ButtonType>';
		 }
		if($this->ButtonCode != null ) {
			$str .= '<urn:ButtonCode>'.$this->ButtonCode.'</urn:ButtonCode>';
		 }
		if($this->ButtonSubType != null ) {
			$str .= '<urn:ButtonSubType>'.$this->ButtonSubType.'</urn:ButtonSubType>';
		 }
		if($this->ButtonVar != null ) {
		for($i=0; $i<count($this->ButtonVar);$i++) {
			$str .= '<urn:ButtonVar>'.$this->ButtonVar[$i].'</urn:ButtonVar>';
		 }
		 }
		if($this->OptionDetails != null ) {
		for($i=0; $i<count($this->OptionDetails);$i++) {
			$str .= '<urn:OptionDetails>';
			$str .= $this->OptionDetails[$i]->toXMLString();
			$str .=  '</urn:OptionDetails>';
		 }
		 }
		if($this->TextBox != null ) {
		for($i=0; $i<count($this->TextBox);$i++) {
			$str .= '<urn:TextBox>'.$this->TextBox[$i].'</urn:TextBox>';
		 }
		 }
		if($this->ButtonImage != null ) {
			$str .= '<urn:ButtonImage>'.$this->ButtonImage.'</urn:ButtonImage>';
		 }
		if($this->ButtonImageURL != null ) {
			$str .= '<urn:ButtonImageURL>'.$this->ButtonImageURL.'</urn:ButtonImageURL>';
		 }
		if($this->BuyNowText != null ) {
			$str .= '<urn:BuyNowText>'.$this->BuyNowText.'</urn:BuyNowText>';
		 }
		if($this->SubscribeText != null ) {
			$str .= '<urn:SubscribeText>'.$this->SubscribeText.'</urn:SubscribeText>';
		 }
		if($this->ButtonCountry != null ) {
			$str .= '<urn:ButtonCountry>'.$this->ButtonCountry.'</urn:ButtonCountry>';
		 }
		if($this->ButtonLanguage != null ) {
			$str .= '<urn:ButtonLanguage>'.$this->ButtonLanguage.'</urn:ButtonLanguage>';
		 }

		return $str;
	}

}

/**
 * BMCreateButtonResponseType
 */
class BMCreateButtonResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var string
	 */
	public $Website;

	/**
	 * @access public
	 * @var string
	 */
	public $Email;

	/**
	 * @access public
	 * @var string
	 */
	public $Mobile;

	/**
	 * @access public
	 * @var string
	 */
	public $HostedButtonID;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='website') {
				$this->Website = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='email') {
				$this->Email = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='mobile') {
				$this->Mobile = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='hostedbuttonid') {
				$this->HostedButtonID = $arry["text"];
			}
		}
		}
	}
}

/**
 * BMUpdateButtonReq
 */
class BMUpdateButtonReq {
	/**
	 * @access public
	 * @var BMUpdateButtonRequestType
	 */
	public $BMUpdateButtonRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:BMUpdateButtonReq>';
		if($this->BMUpdateButtonRequest != null ) {
			$str .='<urn:BMUpdateButtonRequest>';
			$str .= $this->BMUpdateButtonRequest->toXMLString();
			$str .=  '</urn:BMUpdateButtonRequest>';
		 }
$str.='</urn:BMUpdateButtonReq>';

		return $str;
	}

}

/**
 * BMUpdateButtonRequestType
 * Hosted Button id of the button to update.
 * Required
 * Character length and limitations: 10 single-byte numeric characters
 */
class BMUpdateButtonRequestType extends AbstractRequestType {
	/**
	 * Hosted Button id of the button to update.
	 * Required
	 * Character length and limitations: 10 single-byte numeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $HostedButtonID;

	/**
	 * Type of Button to create.
	 * Required
	 * Must be one of the following: BUYNOW, CART, GIFTCERTIFICATE. SUBSCRIBE, PAYMENTPLAN, AUTOBILLING, DONATE, VIEWCART or UNSUBSCRIBE
	 *
	 * @access public
	 * @var ButtonTypeType
	 */
	public $ButtonType;

	/**
	 * button code.
	 * optional
	 * Must be one of the following: hosted, encrypted or cleartext
	 *
	 * @access public
	 * @var ButtonCodeType
	 */
	public $ButtonCode;

	/**
	 * Button sub type.
	 * optional for button types buynow and cart only
	 * Must Be either PRODUCTS or SERVICES
	 *
	 * @access public
	 * @var ButtonSubTypeType
	 */
	public $ButtonSubType;

	/**
	 * Button Variable information
	 * At least one required recurring
	 * Character length and limitations: 63 single-byte alphanumeric characters
	 *
	 * array
	 * @access public
	 * @var string
	 */
	public $ButtonVar;

	/**
	 * array
	 * @access public
	 * @var OptionDetailsType
	 */
	public $OptionDetails;

	/**
	 * Details of each option for the button.
	 * Optional
	 *
	 * array
	 * @access public
	 * @var string
	 */
	public $TextBox;

	/**
	 * Button image to use.
	 * Optional
	 * Must be one of: REG, SML, or CC
	 *
	 * @access public
	 * @var ButtonImageType
	 */
	public $ButtonImage;

	/**
	 * Button URL for custom button image.
	 * Optional
	 * Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $ButtonImageURL;

	/**
	 * Text to use on Buy Now Button.
	 * Optional
	 * Must be either BUYNOW or PAYNOW
	 *
	 * @access public
	 * @var BuyNowTextType
	 */
	public $BuyNowText;

	/**
	 * Text to use on Subscribe button.
	 * Optional
	 * Must be either BUYNOW or SUBSCRIBE
	 *
	 * @access public
	 * @var SubscribeTextType
	 */
	public $SubscribeText;

	/**
	 * Button Country.
	 * Optional
	 * Must be valid ISO country code
	 *
	 * @access public
	 * @var CountryCodeType
	 */
	public $ButtonCountry;

	/**
	 * Button language code.
	 * Optional
	 * Character length and limitations: 2 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $ButtonLanguage;


	public function __construct($HostedButtonID = null) {
		$this->HostedButtonID  = $HostedButtonID;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->HostedButtonID != null ) {
			$str .= '<urn:HostedButtonID>'.$this->HostedButtonID.'</urn:HostedButtonID>';
		 }
		if($this->ButtonType != null ) {
			$str .= '<urn:ButtonType>'.$this->ButtonType.'</urn:ButtonType>';
		 }
		if($this->ButtonCode != null ) {
			$str .= '<urn:ButtonCode>'.$this->ButtonCode.'</urn:ButtonCode>';
		 }
		if($this->ButtonSubType != null ) {
			$str .= '<urn:ButtonSubType>'.$this->ButtonSubType.'</urn:ButtonSubType>';
		 }
		if($this->ButtonVar != null ) {
		for($i=0; $i<count($this->ButtonVar);$i++) {
			$str .= '<urn:ButtonVar>'.$this->ButtonVar[$i].'</urn:ButtonVar>';
		 }
		 }
		if($this->OptionDetails != null ) {
		for($i=0; $i<count($this->OptionDetails);$i++) {
			$str .= '<urn:OptionDetails>';
			$str .= $this->OptionDetails[$i]->toXMLString();
			$str .=  '</urn:OptionDetails>';
		 }
		 }
		if($this->TextBox != null ) {
		for($i=0; $i<count($this->TextBox);$i++) {
			$str .= '<urn:TextBox>'.$this->TextBox[$i].'</urn:TextBox>';
		 }
		 }
		if($this->ButtonImage != null ) {
			$str .= '<urn:ButtonImage>'.$this->ButtonImage.'</urn:ButtonImage>';
		 }
		if($this->ButtonImageURL != null ) {
			$str .= '<urn:ButtonImageURL>'.$this->ButtonImageURL.'</urn:ButtonImageURL>';
		 }
		if($this->BuyNowText != null ) {
			$str .= '<urn:BuyNowText>'.$this->BuyNowText.'</urn:BuyNowText>';
		 }
		if($this->SubscribeText != null ) {
			$str .= '<urn:SubscribeText>'.$this->SubscribeText.'</urn:SubscribeText>';
		 }
		if($this->ButtonCountry != null ) {
			$str .= '<urn:ButtonCountry>'.$this->ButtonCountry.'</urn:ButtonCountry>';
		 }
		if($this->ButtonLanguage != null ) {
			$str .= '<urn:ButtonLanguage>'.$this->ButtonLanguage.'</urn:ButtonLanguage>';
		 }

		return $str;
	}

}

/**
 * BMUpdateButtonResponseType
 */
class BMUpdateButtonResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var string
	 */
	public $Website;

	/**
	 * @access public
	 * @var string
	 */
	public $Email;

	/**
	 * @access public
	 * @var string
	 */
	public $Mobile;

	/**
	 * @access public
	 * @var string
	 */
	public $HostedButtonID;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='website') {
				$this->Website = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='email') {
				$this->Email = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='mobile') {
				$this->Mobile = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='hostedbuttonid') {
				$this->HostedButtonID = $arry["text"];
			}
		}
		}
	}
}

/**
 * BMManageButtonStatusReq
 */
class BMManageButtonStatusReq {
	/**
	 * @access public
	 * @var BMManageButtonStatusRequestType
	 */
	public $BMManageButtonStatusRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:BMManageButtonStatusReq>';
		if($this->BMManageButtonStatusRequest != null ) {
			$str .='<urn:BMManageButtonStatusRequest>';
			$str .= $this->BMManageButtonStatusRequest->toXMLString();
			$str .=  '</urn:BMManageButtonStatusRequest>';
		 }
$str.='</urn:BMManageButtonStatusReq>';

		return $str;
	}

}

/**
 * BMManageButtonStatusRequestType
 * Button ID of Hosted button.
 * Required
 * Character length and limitations: 10 single-byte numeric characters
 */
class BMManageButtonStatusRequestType extends AbstractRequestType {
	/**
	 * Button ID of Hosted button.
	 * Required
	 * Character length and limitations: 10 single-byte numeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $HostedButtonID;

	/**
	 * Requested Status change for hosted button.
	 * Required
	 * Character length and limitations: 1 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var ButtonStatusType
	 */
	public $ButtonStatus;


	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->HostedButtonID != null ) {
			$str .= '<urn:HostedButtonID>'.$this->HostedButtonID.'</urn:HostedButtonID>';
		 }
		if($this->ButtonStatus != null ) {
			$str .= '<urn:ButtonStatus>'.$this->ButtonStatus.'</urn:ButtonStatus>';
		 }

		return $str;
	}

}

/**
 * BMManageButtonStatusResponseType
 */
class BMManageButtonStatusResponseType extends AbstractResponseType {

	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
		}
		}
	}
}

/**
 * BMGetButtonDetailsReq
 */
class BMGetButtonDetailsReq {
	/**
	 * @access public
	 * @var BMGetButtonDetailsRequestType
	 */
	public $BMGetButtonDetailsRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:BMGetButtonDetailsReq>';
		if($this->BMGetButtonDetailsRequest != null ) {
			$str .='<urn:BMGetButtonDetailsRequest>';
			$str .= $this->BMGetButtonDetailsRequest->toXMLString();
			$str .=  '</urn:BMGetButtonDetailsRequest>';
		 }
$str.='</urn:BMGetButtonDetailsReq>';

		return $str;
	}

}

/**
 * BMGetButtonDetailsRequestType
 * Button ID of button to return.
 * Required
 * Character length and limitations: 10 single-byte numeric characters
 */
class BMGetButtonDetailsRequestType extends AbstractRequestType {
	/**
	 * Button ID of button to return.
	 * Required
	 * Character length and limitations: 10 single-byte numeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $HostedButtonID;


	public function __construct($HostedButtonID = null) {
		$this->HostedButtonID  = $HostedButtonID;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->HostedButtonID != null ) {
			$str .= '<urn:HostedButtonID>'.$this->HostedButtonID.'</urn:HostedButtonID>';
		 }

		return $str;
	}

}

/**
 * BMGetButtonDetailsResponseType
 * Type of button.
 * One of the following: BUYNOW, CART, GIFTCERTIFICATE. SUBSCRIBE, PAYMENTPLAN, AUTOBILLING, DONATE, VIEWCART or UNSUBSCRIBE
 */
class BMGetButtonDetailsResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var string
	 */
	public $Website;

	/**
	 * @access public
	 * @var string
	 */
	public $Email;

	/**
	 * @access public
	 * @var string
	 */
	public $Mobile;

	/**
	 * @access public
	 * @var string
	 */
	public $HostedButtonID;

	/**
	 * Type of button.
	 * One of the following: BUYNOW, CART, GIFTCERTIFICATE. SUBSCRIBE, PAYMENTPLAN, AUTOBILLING, DONATE, VIEWCART or UNSUBSCRIBE
	 *
	 * @access public
	 * @var ButtonTypeType
	 */
	public $ButtonType;

	/**
	 * Type of button code.
	 * One of the following: hosted, encrypted or cleartext
	 *
	 * @access public
	 * @var ButtonCodeType
	 */
	public $ButtonCode;

	/**
	 * Button sub type.
	 * optional for button types buynow and cart only
	 * Either PRODUCTS or SERVICES
	 *
	 * @access public
	 * @var ButtonSubTypeType
	 */
	public $ButtonSubType;

	/**
	 * Button Variable information
	 * Character length and limitations: 63 single-byte alphanumeric characters
	 *
	 * array
	 * @access public
	 * @var string
	 */
	public $ButtonVar;

	/**
	 * array
	 * @access public
	 * @var OptionDetailsType
	 */
	public $OptionDetails;

	/**
	 * Text field
	 *
	 * array
	 * @access public
	 * @var string
	 */
	public $TextBox;

	/**
	 * Button image to use.
	 * One of: REG, SML, or CC
	 *
	 * @access public
	 * @var ButtonImageType
	 */
	public $ButtonImage;

	/**
	 * Button URL for custom button image.
	 *
	 * @access public
	 * @var string
	 */
	public $ButtonImageURL;

	/**
	 * Text to use on Buy Now Button.
	 * Either BUYNOW or PAYNOW
	 *
	 * @access public
	 * @var BuyNowTextType
	 */
	public $BuyNowText;

	/**
	 * Text to use on Subscribe button.
	 * Must be either BUYNOW or SUBSCRIBE
	 *
	 * @access public
	 * @var SubscribeTextType
	 */
	public $SubscribeText;

	/**
	 * Button Country.
	 * Valid ISO country code or 'International'
	 *
	 * @access public
	 * @var CountryCodeType
	 */
	public $ButtonCountry;

	/**
	 * Button language code.
	 * Character length and limitations: 3 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $ButtonLanguage;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='website') {
				$this->Website = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='email') {
				$this->Email = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='mobile') {
				$this->Mobile = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='hostedbuttonid') {
				$this->HostedButtonID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='buttontype') {
				$this->ButtonType = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='buttoncode') {
				$this->ButtonCode = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='buttonsubtype') {
				$this->ButtonSubType = $arry["text"];
			}
			if (is_array($arry["children"])&& ($arry["children"])!=null) 	{
			$i=0;
			while(true) {
			if($arry["name"]=="optiondetails[$i]") {
				$this->OptionDetails[$i] = new OptionDetailsType();
				$this->OptionDetails[$i]->init($arry["children"]);
			}
			else break;
			$i++;
			}
		}
				if(is_array($arry["children"]) && ($arry["children"])!=null && $arry["name"]=="optiondetails") {
				$this->OptionDetails = new OptionDetailsType();
				$this->OptionDetails->init($arry["children"]);
					}
			if($arry != null && isset($arry['text']) && $arry['name']=='buttonimage') {
				$this->ButtonImage = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='buttonimageurl') {
				$this->ButtonImageURL = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='buynowtext') {
				$this->BuyNowText = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='subscribetext') {
				$this->SubscribeText = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='buttoncountry') {
				$this->ButtonCountry = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='buttonlanguage') {
				$this->ButtonLanguage = $arry["text"];
			}
		}
		}
	}
}

/**
 * BMSetInventoryReq
 */
class BMSetInventoryReq {
	/**
	 * @access public
	 * @var BMSetInventoryRequestType
	 */
	public $BMSetInventoryRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:BMSetInventoryReq>';
		if($this->BMSetInventoryRequest != null ) {
			$str .='<urn:BMSetInventoryRequest>';
			$str .= $this->BMSetInventoryRequest->toXMLString();
			$str .=  '</urn:BMSetInventoryRequest>';
		 }
$str.='</urn:BMSetInventoryReq>';

		return $str;
	}

}

/**
 * BMSetInventoryRequestType
 * Hosted Button ID of button you wish to change.
 * Required
 * Character length and limitations: 10 single-byte numeric characters
 */
class BMSetInventoryRequestType extends AbstractRequestType {
	/**
	 * Hosted Button ID of button you wish to change.
	 * Required
	 * Character length and limitations: 10 single-byte numeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $HostedButtonID;

	/**
	 * Is Inventory tracked.
	 * Required
	 * 0 or 1
	 *
	 * @access public
	 * @var string
	 */
	public $TrackInv;

	/**
	 * Is PNL Tracked.
	 * Required
	 * 0 or 1
	 *
	 * @access public
	 * @var string
	 */
	public $TrackPnl;

	/**
	 * @access public
	 * @var ItemTrackingDetailsType
	 */
	public $ItemTrackingDetails;

	/**
	 * Option Index.
	 * Optional
	 * Character length and limitations: 1 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $OptionIndex;

	/**
	 * array
	 * @access public
	 * @var OptionTrackingDetailsType
	 */
	public $OptionTrackingDetails;

	/**
	 * URL of page to display when an item is soldout.
	 * Optional
	 * Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $SoldoutURL;

	/**
	 * Whether to use the same digital download key repeatedly.
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $ReuseDigitalDownloadKeys;

	/**
	 * Whether to append these keys to the list or not (replace).
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $AppendDigitalDownloadKeys;

	/**
	 * Zero or more digital download keys to distribute to customers after transaction is completed.
	 * Optional
	 * Character length and limitations: 1000 single-byte alphanumeric characters
	 *
	 * array
	 * @access public
	 * @var string
	 */
	public $DigitalDownloadKeys;


	public function __construct($HostedButtonID = null, $TrackInv = null, $TrackPnl = null) {
		$this->HostedButtonID  = $HostedButtonID;
		$this->TrackInv  = $TrackInv;
		$this->TrackPnl  = $TrackPnl;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->HostedButtonID != null ) {
			$str .= '<urn:HostedButtonID>'.$this->HostedButtonID.'</urn:HostedButtonID>';
		 }
		if($this->TrackInv != null ) {
			$str .= '<urn:TrackInv>'.$this->TrackInv.'</urn:TrackInv>';
		 }
		if($this->TrackPnl != null ) {
			$str .= '<urn:TrackPnl>'.$this->TrackPnl.'</urn:TrackPnl>';
		 }
		if($this->ItemTrackingDetails != null ) {
			$str .='<ebl:ItemTrackingDetails>';
			$str .= $this->ItemTrackingDetails->toXMLString();
			$str .=  '</ebl:ItemTrackingDetails>';
		 }
		if($this->OptionIndex != null ) {
			$str .= '<urn:OptionIndex>'.$this->OptionIndex.'</urn:OptionIndex>';
		 }
		if($this->OptionTrackingDetails != null ) {
		for($i=0; $i<count($this->OptionTrackingDetails);$i++) {
			$str .= '<ebl:OptionTrackingDetails>';
			$str .= $this->OptionTrackingDetails[$i]->toXMLString();
			$str .=  '</ebl:OptionTrackingDetails>';
		 }
		 }
		if($this->SoldoutURL != null ) {
			$str .= '<urn:SoldoutURL>'.$this->SoldoutURL.'</urn:SoldoutURL>';
		 }
		if($this->ReuseDigitalDownloadKeys != null ) {
			$str .= '<urn:ReuseDigitalDownloadKeys>'.$this->ReuseDigitalDownloadKeys.'</urn:ReuseDigitalDownloadKeys>';
		 }
		if($this->AppendDigitalDownloadKeys != null ) {
			$str .= '<urn:AppendDigitalDownloadKeys>'.$this->AppendDigitalDownloadKeys.'</urn:AppendDigitalDownloadKeys>';
		 }
		if($this->DigitalDownloadKeys != null ) {
		for($i=0; $i<count($this->DigitalDownloadKeys);$i++) {
			$str .= '<urn:DigitalDownloadKeys>'.$this->DigitalDownloadKeys[$i].'</urn:DigitalDownloadKeys>';
		 }
		 }

		return $str;
	}

}

/**
 * BMSetInventoryResponseType
 */
class BMSetInventoryResponseType extends AbstractResponseType {

	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
		}
		}
	}
}

/**
 * BMGetInventoryReq
 */
class BMGetInventoryReq {
	/**
	 * @access public
	 * @var BMGetInventoryRequestType
	 */
	public $BMGetInventoryRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:BMGetInventoryReq>';
		if($this->BMGetInventoryRequest != null ) {
			$str .='<urn:BMGetInventoryRequest>';
			$str .= $this->BMGetInventoryRequest->toXMLString();
			$str .=  '</urn:BMGetInventoryRequest>';
		 }
$str.='</urn:BMGetInventoryReq>';

		return $str;
	}

}

/**
 * BMGetInventoryRequestType
 * Hosted Button ID of the button to return inventory for.
 * Required
 * Character length and limitations: 10 single-byte numeric characters
 */
class BMGetInventoryRequestType extends AbstractRequestType {
	/**
	 * Hosted Button ID of the button to return inventory for.
	 * Required
	 * Character length and limitations: 10 single-byte numeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $HostedButtonID;


	public function __construct($HostedButtonID = null) {
		$this->HostedButtonID  = $HostedButtonID;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->HostedButtonID != null ) {
			$str .= '<urn:HostedButtonID>'.$this->HostedButtonID.'</urn:HostedButtonID>';
		 }

		return $str;
	}

}

/**
 * BMGetInventoryResponseType
 */
class BMGetInventoryResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var string
	 */
	public $HostedButtonID;

	/**
	 * @access public
	 * @var string
	 */
	public $TrackInv;

	/**
	 * @access public
	 * @var string
	 */
	public $TrackPnl;

	/**
	 * @access public
	 * @var ItemTrackingDetailsType
	 */
	public $ItemTrackingDetails;

	/**
	 * @access public
	 * @var string
	 */
	public $OptionIndex;

	/**
	 * @access public
	 * @var string
	 */
	public $OptionName;

	/**
	 * array
	 * @access public
	 * @var OptionTrackingDetailsType
	 */
	public $OptionTrackingDetails;

	/**
	 * @access public
	 * @var string
	 */
	public $SoldoutURL;

	/**
	 * array
	 * @access public
	 * @var string
	 */
	public $DigitalDownloadKeys;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='hostedbuttonid') {
				$this->HostedButtonID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='trackinv') {
				$this->TrackInv = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='trackpnl') {
				$this->TrackPnl = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="itemtrackingdetails") {
				$this->ItemTrackingDetails = new ItemTrackingDetailsType();
				$this->ItemTrackingDetails->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='optionindex') {
				$this->OptionIndex = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='optionname') {
				$this->OptionName = $arry["text"];
			}
			if (is_array($arry["children"])&& ($arry["children"])!=null) 	{
			$i=0;
			while(true) {
			if($arry["name"]=="optiontrackingdetails[$i]") {
				$this->OptionTrackingDetails[$i] = new OptionTrackingDetailsType();
				$this->OptionTrackingDetails[$i]->init($arry["children"]);
			}
			else break;
			$i++;
			}
		}
				if(is_array($arry["children"]) && ($arry["children"])!=null && $arry["name"]=="optiontrackingdetails") {
				$this->OptionTrackingDetails = new OptionTrackingDetailsType();
				$this->OptionTrackingDetails->init($arry["children"]);
					}
			if($arry != null && isset($arry['text']) && $arry['name']=='soldouturl') {
				$this->SoldoutURL = $arry["text"];
			}
		}
		}
	}
}

/**
 * BMButtonSearchReq
 */
class BMButtonSearchReq {
	/**
	 * @access public
	 * @var BMButtonSearchRequestType
	 */
	public $BMButtonSearchRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:BMButtonSearchReq>';
		if($this->BMButtonSearchRequest != null ) {
			$str .='<urn:BMButtonSearchRequest>';
			$str .= $this->BMButtonSearchRequest->toXMLString();
			$str .=  '</urn:BMButtonSearchRequest>';
		 }
$str.='</urn:BMButtonSearchReq>';

		return $str;
	}

}

/**
 * BMButtonSearchRequestType
 * The earliest transaction date at which to start the search. No wildcards are allowed. 
 * Required
 */
class BMButtonSearchRequestType extends AbstractRequestType {
	/**
	 * The earliest transaction date at which to start the search. No wildcards are allowed. 
	 * Required
	 *
	 * @access public
	 * @var dateTime
	 */
	public $StartDate;

	/**
	 * The latest transaction date to be included in the search 
	 * Optional
	 *
	 * @access public
	 * @var dateTime
	 */
	public $EndDate;


	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->StartDate != null ) {
			$str .= '<urn:StartDate>'.$this->StartDate.'</urn:StartDate>';
		 }
		if($this->EndDate != null ) {
			$str .= '<urn:EndDate>'.$this->EndDate.'</urn:EndDate>';
		 }

		return $str;
	}

}

/**
 * BMButtonSearchResponseType
 */
class BMButtonSearchResponseType extends AbstractResponseType {
	/**
	 * array
	 * @access public
	 * @var ButtonSearchResultType
	 */
	public $ButtonSearchResult;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if (is_array($arry["children"])&& ($arry["children"])!=null) 	{
			$i=0;
			while(true) {
			if($arry["name"]=="buttonsearchresult[$i]") {
				$this->ButtonSearchResult[$i] = new ButtonSearchResultType();
				$this->ButtonSearchResult[$i]->init($arry["children"]);
			}
			else break;
			$i++;
			}
		}
				if(is_array($arry["children"]) && ($arry["children"])!=null && $arry["name"]=="buttonsearchresult") {
				$this->ButtonSearchResult = new ButtonSearchResultType();
				$this->ButtonSearchResult->init($arry["children"]);
					}
		}
		}
	}
}

/**
 * RefundTransactionReq
 */
class RefundTransactionReq {
	/**
	 * @access public
	 * @var RefundTransactionRequestType
	 */
	public $RefundTransactionRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:RefundTransactionReq>';
		if($this->RefundTransactionRequest != null ) {
			$str .='<urn:RefundTransactionRequest>';
			$str .= $this->RefundTransactionRequest->toXMLString();
			$str .=  '</urn:RefundTransactionRequest>';
		 }
$str.='</urn:RefundTransactionReq>';

		return $str;
	}

}

/**
 * RefundTransactionRequestType
 * Unique identifier of the  transaction you are refunding.
 * Required
 * Character length and limitations: 17 single-byte alphanumeric characters 
 */
class RefundTransactionRequestType extends AbstractRequestType {
	/**
Unique identifier of the  transaction you are refunding.
	 * Required
	 * Character length and limitations: 17 single-byte alphanumeric characters 
	 *
	 * @access public
	 * @var string
	 */
	public $TransactionID;

	/**
Invoice number corresponding to transaction details for tracking the refund of a payment. This parameter is passed by the merchant or recipient while refunding the transaction. This parameter does not affect the business logic, it is persisted in the DB for transaction reference
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $InvoiceID;

	/**
Type of refund you are making
	 * Required
	 *
	 * @access public
	 * @var RefundType
	 */
	public $RefundType;

	/**
Refund amount. 
	 * Amount is required  if RefundType is Partial.
	 * NOTE: If RefundType is Full, do not set Amount.
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Amount;

	/**
Custom memo about the refund. 
	 * Optional
	 * Character length and limitations: 255 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $Memo;

	/**
The maximum time till which refund must be tried.
	 * Optional
	 *
	 * @access public
	 * @var dateTime
	 */
	public $RetryUntil;

	/**
The type of funding source for refund.
	 * Optional
	 *
	 * @access public
	 * @var RefundSourceCodeType
	 */
	public $RefundSource;

	/**
Flag to indicate that the customer was already given store credit for a given transaction. This will allow us to make sure we do not double refund.
	 * Optional
	 *
	 * @access public
	 * @var boolean
	 */
	public $RefundAdvice;

	/**
To pass the Merchant store informationOptional
	 *
	 * @access public
	 * @var MerchantStoreDetailsType
	 */
	public $MerchantStoreDetails;

	/**
Information about the individual details of the items to be refunded.Optional
	 *
	 * array
	 * @access public
	 * @var InvoiceItemType
	 */
	public $RefundItemDetails;


	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->TransactionID != null ) {
			$str .= '<urn:TransactionID>'.$this->TransactionID.'</urn:TransactionID>';
		 }
		if($this->InvoiceID != null ) {
			$str .= '<urn:InvoiceID>'.$this->InvoiceID.'</urn:InvoiceID>';
		 }
		if($this->RefundType != null ) {
			$str .= '<urn:RefundType>'.$this->RefundType.'</urn:RefundType>';
		 }
		if($this->Amount != null ) {
			$str .='<urn:Amount';
			$str .= $this->Amount->toXMLString();
			$str .=  '</urn:Amount>';
		 }
		if($this->Memo != null ) {
			$str .= '<urn:Memo>'.$this->Memo.'</urn:Memo>';
		 }
		if($this->RetryUntil != null ) {
			$str .= '<urn:RetryUntil>'.$this->RetryUntil.'</urn:RetryUntil>';
		 }
		if($this->RefundSource != null ) {
			$str .= '<urn:RefundSource>'.$this->RefundSource.'</urn:RefundSource>';
		 }
		if($this->RefundAdvice != null ) {
			$str .= '<urn:RefundAdvice>'.$this->RefundAdvice.'</urn:RefundAdvice>';
		 }
		if($this->MerchantStoreDetails != null ) {
			$str .='<ebl:MerchantStoreDetails>';
			$str .= $this->MerchantStoreDetails->toXMLString();
			$str .=  '</ebl:MerchantStoreDetails>';
		 }
		if($this->RefundItemDetails != null ) {
		for($i=0; $i<count($this->RefundItemDetails);$i++) {
			$str .= '<ebl:RefundItemDetails>';
			$str .= $this->RefundItemDetails[$i]->toXMLString();
			$str .=  '</ebl:RefundItemDetails>';
		 }
		 }

		return $str;
	}

}

/**
 * RefundTransactionResponseType
 * Unique transaction ID of the refund. 
 * Character length and limitations:17 single-byte characters
 */
class RefundTransactionResponseType extends AbstractResponseType {
	/**
Unique transaction ID of the refund. 
	 * Character length and limitations:17 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $RefundTransactionID;

	/**
Amount subtracted from PayPal balance of original recipient of payment to make this refund 
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $NetRefundAmount;

	/**
Transaction fee refunded to original recipient of payment 
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $FeeRefundAmount;

	/**
Amount of money refunded to original payer 	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $GrossRefundAmount;

	/**
Total of all previous refunds	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $TotalRefundedAmount;

	/**
Contains Refund Payment status information.	 *
	 * @access public
	 * @var RefundInfoType
	 */
	public $RefundInfo;

	/**
Any general information like offer details that is reinstated or any other marketing data	 *
	 * @access public
	 * @var string
	 */
	public $ReceiptData;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='refundtransactionid') {
				$this->RefundTransactionID = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="netrefundamount") {
				$this->NetRefundAmount = new BasicAmountType();
				$this->NetRefundAmount->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="feerefundamount") {
				$this->FeeRefundAmount = new BasicAmountType();
				$this->FeeRefundAmount->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="grossrefundamount") {
				$this->GrossRefundAmount = new BasicAmountType();
				$this->GrossRefundAmount->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="totalrefundedamount") {
				$this->TotalRefundedAmount = new BasicAmountType();
				$this->TotalRefundedAmount->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="refundinfo") {
				$this->RefundInfo = new RefundInfoType();
				$this->RefundInfo->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='receiptdata') {
				$this->ReceiptData = $arry["text"];
			}
		}
		}
	}
}

/**
 * InitiateRecoupReq
 */
class InitiateRecoupReq {
	/**
	 * @access public
	 * @var InitiateRecoupRequestType
	 */
	public $InitiateRecoupRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:InitiateRecoupReq>';
		if($this->InitiateRecoupRequest != null ) {
			$str .='<urn:InitiateRecoupRequest>';
			$str .= $this->InitiateRecoupRequest->toXMLString();
			$str .=  '</urn:InitiateRecoupRequest>';
		 }
$str.='</urn:InitiateRecoupReq>';

		return $str;
	}

}

/**
 * InitiateRecoupRequestType
 */
class InitiateRecoupRequestType extends AbstractRequestType {
	/**
	 * @access public
	 * @var EnhancedInitiateRecoupRequestDetailsType
	 */
	public $EnhancedInitiateRecoupRequestDetails;


	public function __construct($EnhancedInitiateRecoupRequestDetails = null) {
		$this->EnhancedInitiateRecoupRequestDetails  = $EnhancedInitiateRecoupRequestDetails;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->EnhancedInitiateRecoupRequestDetails != null ) {
			$str .='<ed:EnhancedInitiateRecoupRequestDetails>';
			$str .= $this->EnhancedInitiateRecoupRequestDetails->toXMLString();
			$str .=  '</ed:EnhancedInitiateRecoupRequestDetails>';
		 }

		return $str;
	}

}

/**
 * InitiateRecoupResponseType
 */
class InitiateRecoupResponseType extends AbstractResponseType {

	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
		}
		}
	}
}

/**
 * CompleteRecoupReq
 */
class CompleteRecoupReq {
	/**
	 * @access public
	 * @var CompleteRecoupRequestType
	 */
	public $CompleteRecoupRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:CompleteRecoupReq>';
		if($this->CompleteRecoupRequest != null ) {
			$str .='<urn:CompleteRecoupRequest>';
			$str .= $this->CompleteRecoupRequest->toXMLString();
			$str .=  '</urn:CompleteRecoupRequest>';
		 }
$str.='</urn:CompleteRecoupReq>';

		return $str;
	}

}

/**
 * CompleteRecoupRequestType
 */
class CompleteRecoupRequestType extends AbstractRequestType {
	/**
	 * @access public
	 * @var EnhancedCompleteRecoupRequestDetailsType
	 */
	public $EnhancedCompleteRecoupRequestDetails;


	public function __construct($EnhancedCompleteRecoupRequestDetails = null) {
		$this->EnhancedCompleteRecoupRequestDetails  = $EnhancedCompleteRecoupRequestDetails;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->EnhancedCompleteRecoupRequestDetails != null ) {
			$str .='<ed:EnhancedCompleteRecoupRequestDetails>';
			$str .= $this->EnhancedCompleteRecoupRequestDetails->toXMLString();
			$str .=  '</ed:EnhancedCompleteRecoupRequestDetails>';
		 }

		return $str;
	}

}

/**
 * CompleteRecoupResponseType
 */
class CompleteRecoupResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var EnhancedCompleteRecoupResponseDetailsType
	 */
	public $EnhancedCompleteRecoupResponseDetails;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="enhancedcompleterecoupresponsedetails") {
				$this->EnhancedCompleteRecoupResponseDetails = new EnhancedCompleteRecoupResponseDetailsType();
				$this->EnhancedCompleteRecoupResponseDetails->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * CancelRecoupReq
 */
class CancelRecoupReq {
	/**
	 * @access public
	 * @var CancelRecoupRequestType
	 */
	public $CancelRecoupRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:CancelRecoupReq>';
		if($this->CancelRecoupRequest != null ) {
			$str .='<urn:CancelRecoupRequest>';
			$str .= $this->CancelRecoupRequest->toXMLString();
			$str .=  '</urn:CancelRecoupRequest>';
		 }
$str.='</urn:CancelRecoupReq>';

		return $str;
	}

}

/**
 * CancelRecoupRequestType
 */
class CancelRecoupRequestType extends AbstractRequestType {
	/**
	 * @access public
	 * @var EnhancedCancelRecoupRequestDetailsType
	 */
	public $EnhancedCancelRecoupRequestDetails;


	public function __construct($EnhancedCancelRecoupRequestDetails = null) {
		$this->EnhancedCancelRecoupRequestDetails  = $EnhancedCancelRecoupRequestDetails;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->EnhancedCancelRecoupRequestDetails != null ) {
			$str .='<ed:EnhancedCancelRecoupRequestDetails>';
			$str .= $this->EnhancedCancelRecoupRequestDetails->toXMLString();
			$str .=  '</ed:EnhancedCancelRecoupRequestDetails>';
		 }

		return $str;
	}

}

/**
 * CancelRecoupResponseType
 */
class CancelRecoupResponseType extends AbstractResponseType {

	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
		}
		}
	}
}

/**
 * GetTransactionDetailsReq
 */
class GetTransactionDetailsReq {
	/**
	 * @access public
	 * @var GetTransactionDetailsRequestType
	 */
	public $GetTransactionDetailsRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:GetTransactionDetailsReq>';
		if($this->GetTransactionDetailsRequest != null ) {
			$str .='<urn:GetTransactionDetailsRequest>';
			$str .= $this->GetTransactionDetailsRequest->toXMLString();
			$str .=  '</urn:GetTransactionDetailsRequest>';
		 }
$str.='</urn:GetTransactionDetailsReq>';

		return $str;
	}

}

/**
 * GetTransactionDetailsRequestType
Unique identifier of a transaction. 
 * Required
 * The details for some kinds of transactions cannot be retrieved with GetTransactionDetailsRequest. You cannot obtain details of bank transfer withdrawals, for example. 
 * Character length and limitations: 17 single-byte alphanumeric characters
 */
class GetTransactionDetailsRequestType extends AbstractRequestType {
	/**
Unique identifier of a transaction. 
	 * Required
	 * The details for some kinds of transactions cannot be retrieved with GetTransactionDetailsRequest. You cannot obtain details of bank transfer withdrawals, for example. 
	 * Character length and limitations: 17 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $TransactionID;


	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->TransactionID != null ) {
			$str .= '<urn:TransactionID>'.$this->TransactionID.'</urn:TransactionID>';
		 }

		return $str;
	}

}

/**
 * GetTransactionDetailsResponseType
 */
class GetTransactionDetailsResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var PaymentTransactionType
	 */
	public $PaymentTransactionDetails;

	/**
	 * @access public
	 * @var ThreeDSecureInfoType
	 */
	public $ThreeDSecureDetails;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="paymenttransactiondetails") {
				$this->PaymentTransactionDetails = new PaymentTransactionType();
				$this->PaymentTransactionDetails->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="threedsecuredetails") {
				$this->ThreeDSecureDetails = new ThreeDSecureInfoType();
				$this->ThreeDSecureDetails->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * BillUserReq
 */
class BillUserReq {
	/**
	 * @access public
	 * @var BillUserRequestType
	 */
	public $BillUserRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:BillUserReq>';
		if($this->BillUserRequest != null ) {
			$str .='<urn:BillUserRequest>';
			$str .= $this->BillUserRequest->toXMLString();
			$str .=  '</urn:BillUserRequest>';
		 }
$str.='</urn:BillUserReq>';

		return $str;
	}

}

/**
 * BillUserRequestType
 * This flag indicates that the response should include FMFDetails
 */
class BillUserRequestType extends AbstractRequestType {
	/**
	 * @access public
	 * @var MerchantPullPaymentType
	 */
	public $MerchantPullPaymentDetails;

	/**
This flag indicates that the response should include FMFDetails	 *
	 * @access public
	 * @var int
	 */
	public $ReturnFMFDetails;


	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->MerchantPullPaymentDetails != null ) {
			$str .='<ebl:MerchantPullPaymentDetails>';
			$str .= $this->MerchantPullPaymentDetails->toXMLString();
			$str .=  '</ebl:MerchantPullPaymentDetails>';
		 }
		if($this->ReturnFMFDetails != null ) {
			$str .= '<urn:ReturnFMFDetails>'.$this->ReturnFMFDetails.'</urn:ReturnFMFDetails>';
		 }

		return $str;
	}

}

/**
 * BillUserResponseType
 */
class BillUserResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var MerchantPullPaymentResponseType
	 */
	public $BillUserResponseDetails;

	/**
	 * @access public
	 * @var FMFDetailsType
	 */
	public $FMFDetails;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="billuserresponsedetails") {
				$this->BillUserResponseDetails = new MerchantPullPaymentResponseType();
				$this->BillUserResponseDetails->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="fmfdetails") {
				$this->FMFDetails = new FMFDetailsType();
				$this->FMFDetails->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * TransactionSearchReq
 */
class TransactionSearchReq {
	/**
	 * @access public
	 * @var TransactionSearchRequestType
	 */
	public $TransactionSearchRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:TransactionSearchReq>';
		if($this->TransactionSearchRequest != null ) {
			$str .='<urn:TransactionSearchRequest>';
			$str .= $this->TransactionSearchRequest->toXMLString();
			$str .=  '</urn:TransactionSearchRequest>';
		 }
$str.='</urn:TransactionSearchReq>';

		return $str;
	}

}

/**
 * TransactionSearchRequestType
The earliest transaction date at which to start the search. No wildcards are allowed. 
 * Required
 */
class TransactionSearchRequestType extends AbstractRequestType {
	/**
The earliest transaction date at which to start the search. No wildcards are allowed. 
	 * Required
	 *
	 * @access public
	 * @var dateTime
	 */
	public $StartDate;

	/**
The latest transaction date to be included in the search 
	 * Optional
	 *
	 * @access public
	 * @var dateTime
	 */
	public $EndDate;

	/**
Search by the buyer's email address 
	 * Optional
	 * Character length and limitations: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $Payer;

	/**
Search by the receiver's email address. If the merchant account has only one email, this is the primary email. Can also be a non-primary email.
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $Receiver;

	/**
Search by the PayPal Account Optional receipt ID
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $ReceiptID;

	/**
Search by the transaction ID. 
	 * Optional
	 * The returned results are from the merchant's transaction records. 
	 * Character length and limitations: 19 single-byte characters maximum
	 *
	 * @access public
	 * @var string
	 */
	public $TransactionID;

	/**
Search by Recurring Payment Profile id.  The ProfileID is returned as part of the CreateRecurringPaymentsProfile API response. 
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $ProfileID;

	/**
Search by Store Id. It is mandatory field if Terminal Id is specified as one of the search parameters.
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $StoreID;

	/**
Search by Store Id and Terminal Id. If the Terminal Id field is specified as one of the search parameters, then there should be a valid Store Id value set in the StoreID field.
	 * Optional
	 *
	 * @access public
	 * @var string
	 */
	public $TerminalID;

	/**
Search by the buyer's name 
	 * Optional
	 * Salutation: 20 single-byte character limit.
	 * FirstName: 25 single-byte character limit.
	 * MiddleName: 25 single-byte character limit.
	 * LastName: 25 single-byte character limit.
	 * Suffix: 12 single-byte character limit.
	 *
	 * @access public
	 * @var PersonNameType
	 */
	public $PayerName;

	/**
Search by item number of the purchased goods.
	 * Optional
	 * To search for purchased items not related to auctions, set the AuctionItemNumber element to the value of the HTML item_number variable set in the shopping cart for the original transaction.	 *
	 * @access public
	 * @var string
	 */
	public $AuctionItemNumber;

	/**
Search by invoice identification key, as set by you for the original transaction. InvoiceID searches the invoice records for items sold by the merchant, not the items purchased. 
	 * Optional
	 * The value for InvoiceID must exactly match an invoice identification number. No wildcards are allowed. 
	 * Character length and limitations: 127 single-byte characters maximum	 *
	 * @access public
	 * @var string
	 */
	public $InvoiceID;

	/**
	 * @access public
	 * @var string
	 */
	public $CardNumber;

	/**
	 * Search by classification of transaction. Some kinds of possible classes of transactions are not searchable with TransactionSearchRequest. You cannot search for bank transfer withdrawals, for example. 
	 * Optional
	 * All: all transaction classifications.
	 * Sent: only payments sent.
	 * Received: only payments received.
	 * MassPay: only mass payments.
	 * MoneyRequest: only money requests.
	 * FundsAdded: only funds added to balance.
	 * FundsWithdrawn: only funds withdrawn from balance.
	 * Referral: only transactions involving referrals.
	 * Fee: only transactions involving fees.
	 * Subscription: only transactions involving subscriptions.
	 * Dividend: only transactions involving dividends.
	 * Billpay: only transactions involving BillPay Transactions.
	 * Refund: only transactions involving funds.
	 * CurrencyConversions: only transactions involving currency conversions.
	 * BalanceTransfer: only transactions involving balance transfers.
	 * Reversal: only transactions involving BillPay reversals.
	 * Shipping: only transactions involving UPS shipping fees.
	 * BalanceAffecting: only transactions that affect the account balance.
	 * ECheck: only transactions involving eCheck
	 *
	 * @access public
	 * @var PaymentTransactionClassCodeType
	 */
	public $TransactionClass;

	/**
Search by transaction amount 
	 * Optional
	 * You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. 	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Amount;

	/**
Search by currency code
	 * Optional
	 *
	 * @access public
	 * @var CurrencyCodeType
	 */
	public $CurrencyCode;

	/**
Search by transaction status 
	 * Optional
	 * Pending: The payment is pending. The specific reason the payment is pending is returned by the GetTransactionDetails APIPendingReason element. For more information, see PendingReason.
	 * Processing: The payment is being processed.
	 * Success: The payment has been completed and the funds have been added successfully to your account balance.
	 * Denied: You denied the payment. This happens only if the payment was previously pending.
	 * Reversed: A payment was reversed due to a chargeback or other type of reversal. The funds have been removed from your account balance and returned to the buyer.
	 *
	 * @access public
	 * @var PaymentTransactionStatusCodeType
	 */
	public $Status;


	public function __construct($StartDate = null) {
		$this->StartDate  = $StartDate;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->StartDate != null ) {
			$str .= '<urn:StartDate>'.$this->StartDate.'</urn:StartDate>';
		 }
		if($this->EndDate != null ) {
			$str .= '<urn:EndDate>'.$this->EndDate.'</urn:EndDate>';
		 }
		if($this->Payer != null ) {
			$str .= '<urn:Payer>'.$this->Payer.'</urn:Payer>';
		 }
		if($this->Receiver != null ) {
			$str .= '<urn:Receiver>'.$this->Receiver.'</urn:Receiver>';
		 }
		if($this->ReceiptID != null ) {
			$str .= '<urn:ReceiptID>'.$this->ReceiptID.'</urn:ReceiptID>';
		 }
		if($this->TransactionID != null ) {
			$str .= '<urn:TransactionID>'.$this->TransactionID.'</urn:TransactionID>';
		 }
		if($this->ProfileID != null ) {
			$str .= '<urn:ProfileID>'.$this->ProfileID.'</urn:ProfileID>';
		 }
		if($this->StoreID != null ) {
			$str .= '<urn:StoreID>'.$this->StoreID.'</urn:StoreID>';
		 }
		if($this->TerminalID != null ) {
			$str .= '<urn:TerminalID>'.$this->TerminalID.'</urn:TerminalID>';
		 }
		if($this->PayerName != null ) {
			$str .='<urn:PayerName>';
			$str .= $this->PayerName->toXMLString();
			$str .=  '</urn:PayerName>';
		 }
		if($this->AuctionItemNumber != null ) {
			$str .= '<urn:AuctionItemNumber>'.$this->AuctionItemNumber.'</urn:AuctionItemNumber>';
		 }
		if($this->InvoiceID != null ) {
			$str .= '<urn:InvoiceID>'.$this->InvoiceID.'</urn:InvoiceID>';
		 }
		if($this->CardNumber != null ) {
			$str .= '<urn:CardNumber>'.$this->CardNumber.'</urn:CardNumber>';
		 }
		if($this->TransactionClass != null ) {
			$str .= '<urn:TransactionClass>'.$this->TransactionClass.'</urn:TransactionClass>';
		 }
		if($this->Amount != null ) {
			$str .='<urn:Amount';
			$str .= $this->Amount->toXMLString();
			$str .=  '</urn:Amount>';
		 }
		if($this->CurrencyCode != null ) {
			$str .= '<urn:CurrencyCode>'.$this->CurrencyCode.'</urn:CurrencyCode>';
		 }
		if($this->Status != null ) {
			$str .= '<urn:Status>'.$this->Status.'</urn:Status>';
		 }

		return $str;
	}

}

/**
 * TransactionSearchResponseType
Results of a Transaction Search. */
class TransactionSearchResponseType extends AbstractResponseType {
	/**
Results of a Transaction Search.	 *
	 * array
	 * @access public
	 * @var PaymentTransactionSearchResultType
	 */
	public $PaymentTransactions;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if (is_array($arry["children"])&& ($arry["children"])!=null) 	{
			$i=0;
			while(true) {
			if($arry["name"]=="paymenttransactions[$i]") {
				$this->PaymentTransactions[$i] = new PaymentTransactionSearchResultType();
				$this->PaymentTransactions[$i]->init($arry["children"]);
			}
			else break;
			$i++;
			}
		}
				if(is_array($arry["children"]) && ($arry["children"])!=null && $arry["name"]=="paymenttransactions") {
				$this->PaymentTransactions = new PaymentTransactionSearchResultType();
				$this->PaymentTransactions->init($arry["children"]);
					}
		}
		}
	}
}

/**
 * MassPayReq
 */
class MassPayReq {
	/**
	 * @access public
	 * @var MassPayRequestType
	 */
	public $MassPayRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:MassPayReq>';
		if($this->MassPayRequest != null ) {
			$str .='<urn:MassPayRequest>';
			$str .= $this->MassPayRequest->toXMLString();
			$str .=  '</urn:MassPayRequest>';
		 }
$str.='</urn:MassPayReq>';

		return $str;
	}

}

/**
 * MassPayRequestType
 * Subject line of the email sent to all recipients. This subject is not contained in the input file; you must create it with your application. 
 * Optional
 * Character length and limitations: 255 single-byte alphanumeric characters
 */
class MassPayRequestType extends AbstractRequestType {
	/**
Subject line of the email sent to all recipients. This subject is not contained in the input file; you must create it with your application. 
	 * Optional
	 * Character length and limitations: 255 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $EmailSubject;

	/**
Indicates how you identify the recipients of payments in all MassPayItems: either by EmailAddress (ReceiverEmail in MassPayItem), PhoneNumber (ReceiverPhone in MassPayItem), or by UserID (ReceiverID in MassPayItem). 
	 * Required. You must specify one or the other of EmailAddress or UserID.
	 *
	 * @access public
	 * @var ReceiverInfoCodeType
	 */
	public $ReceiverType;

	/**
Known as BN code, to track the partner referred merchant transactions. 
	 * Optional
	 * Character length and limitations: 32 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $ButtonSource;

	/**
Details of each payment. A single MassPayRequest can include up to 250 MassPayItems. 
	 * Required
	 *
	 * array
	 * @access public
	 * @var MassPayRequestItemType
	 */
	public $MassPayItem;


	public function __construct($MassPayItem = null) {
		$this->MassPayItem  = $MassPayItem;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->EmailSubject != null ) {
			$str .= '<urn:EmailSubject>'.$this->EmailSubject.'</urn:EmailSubject>';
		 }
		if($this->ReceiverType != null ) {
			$str .= '<urn:ReceiverType>'.$this->ReceiverType.'</urn:ReceiverType>';
		 }
		if($this->ButtonSource != null ) {
			$str .= '<urn:ButtonSource>'.$this->ButtonSource.'</urn:ButtonSource>';
		 }
		if($this->MassPayItem != null ) {
		for($i=0; $i<count($this->MassPayItem);$i++) {
			$str .= '<urn:MassPayItem>';
			$str .= $this->MassPayItem[$i]->toXMLString();
			$str .=  '</urn:MassPayItem>';
		 }
		 }

		return $str;
	}

}

/**
 * MassPayResponseType
 */
class MassPayResponseType extends AbstractResponseType {

	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
		}
		}
	}
}

/**
 * MassPayRequestItemType
 * MassPayRequestItemType
 */
class MassPayRequestItemType {
	/**
Email address of recipient. 
	 * Required
	 * You must specify ReceiverEmail, ReceiverPhone, or ReceiverID, but all MassPayItems in a request must use the same field to specify recipients.
	 * Character length and limitations: 127 single-byte characters maximum.
	 *
	 * @access public
	 * @var string
	 */
	public $ReceiverEmail;

	/**
Phone number of recipient. 
	 * Required
	 * You must specify ReceiverEmail, ReceiverPhone, or ReceiverID, but all MassPayItems in a request must use the same field to specify recipients.
	 *
	 * @access public
	 * @var string
	 */
	public $ReceiverPhone;

	/**
Unique PayPal customer account number. This value corresponds to the value of PayerID returned by GetTransactionDetails. 
	 * Required
	 * You must specify ReceiverEmail, ReceiverPhone, or ReceiverID, but all MassPayItems in a request must use the same field to specify recipients.
	 * Character length and limitations: 17 single-byte characters maximum.
	 *
	 * @access public
	 * @var string
	 */
	public $ReceiverID;

	/**
Payment amount. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. 
	 * Required
	 * You cannot mix currencies in a single MassPayRequest. A single request must include items that are of the same currency.
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Amount;

	/**
Transaction-specific identification number for tracking in an accounting system. 
	 * Optional
	 * Character length and limitations: 30 single-byte characters. No whitespace allowed.
	 *
	 * @access public
	 * @var string
	 */
	public $UniqueId;

	/**
Custom note for each recipient. 
	 * Optional
	 * Character length and limitations: 4,000 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $Note;


	public function __construct($Amount = null) {
		$this->Amount  = $Amount;
	}

	public function toXMLString()  {
		$str = '';
		if($this->ReceiverEmail != null ) {
			$str .= '<urn:ReceiverEmail>'.$this->ReceiverEmail.'</urn:ReceiverEmail>';
		 }
		if($this->ReceiverPhone != null ) {
			$str .= '<urn:ReceiverPhone>'.$this->ReceiverPhone.'</urn:ReceiverPhone>';
		 }
		if($this->ReceiverID != null ) {
			$str .= '<urn:ReceiverID>'.$this->ReceiverID.'</urn:ReceiverID>';
		 }
		if($this->Amount != null ) {
			$str .='<urn:Amount';
			$str .= $this->Amount->toXMLString();
			$str .=  '</urn:Amount>';
		 }
		if($this->UniqueId != null ) {
			$str .= '<urn:UniqueId>'.$this->UniqueId.'</urn:UniqueId>';
		 }
		if($this->Note != null ) {
			$str .= '<urn:Note>'.$this->Note.'</urn:Note>';
		 }

		return $str;
	}

}

/**
 * BillAgreementUpdateReq
 */
class BillAgreementUpdateReq {
	/**
	 * @access public
	 * @var BAUpdateRequestType
	 */
	public $BAUpdateRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:BillAgreementUpdateReq>';
		if($this->BAUpdateRequest != null ) {
			$str .='<urn:BAUpdateRequest>';
			$str .= $this->BAUpdateRequest->toXMLString();
			$str .=  '</urn:BAUpdateRequest>';
		 }
$str.='</urn:BillAgreementUpdateReq>';

		return $str;
	}

}

/**
 * BAUpdateRequestType
 */
class BAUpdateRequestType extends AbstractRequestType {
	/**
	 *
	 * @access public
	 * @var string
	 */
	public $ReferenceID;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $BillingAgreementDescription;

	/**
	 *
	 * @access public
	 * @var MerchantPullStatusCodeType
	 */
	public $BillingAgreementStatus;

	/**
	 *
	 * @access public
	 * @var string
	 */
	public $BillingAgreementCustom;


	public function __construct($ReferenceID = null) {
		$this->ReferenceID  = $ReferenceID;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->ReferenceID != null ) {
			$str .= '<urn:ReferenceID>'.$this->ReferenceID.'</urn:ReferenceID>';
		 }
		if($this->BillingAgreementDescription != null ) {
			$str .= '<urn:BillingAgreementDescription>'.$this->BillingAgreementDescription.'</urn:BillingAgreementDescription>';
		 }
		if($this->BillingAgreementStatus != null ) {
			$str .= '<urn:BillingAgreementStatus>'.$this->BillingAgreementStatus.'</urn:BillingAgreementStatus>';
		 }
		if($this->BillingAgreementCustom != null ) {
			$str .= '<urn:BillingAgreementCustom>'.$this->BillingAgreementCustom.'</urn:BillingAgreementCustom>';
		 }

		return $str;
	}

}

/**
 * BAUpdateResponseType
 */
class BAUpdateResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var BAUpdateResponseDetailsType
	 */
	public $BAUpdateResponseDetails;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="baupdateresponsedetails") {
				$this->BAUpdateResponseDetails = new BAUpdateResponseDetailsType();
				$this->BAUpdateResponseDetails->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * AddressVerifyReq
 */
class AddressVerifyReq {
	/**
	 * @access public
	 * @var AddressVerifyRequestType
	 */
	public $AddressVerifyRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:AddressVerifyReq>';
		if($this->AddressVerifyRequest != null ) {
			$str .='<urn:AddressVerifyRequest>';
			$str .= $this->AddressVerifyRequest->toXMLString();
			$str .=  '</urn:AddressVerifyRequest>';
		 }
$str.='</urn:AddressVerifyReq>';

		return $str;
	}

}

/**
 * AddressVerifyRequestType
 * Email address of buyer to be verified. 
 * Required
 * Maximum string length: 255 single-byte characters Input mask: ?@?.??
 */
class AddressVerifyRequestType extends AbstractRequestType {
	/**
Email address of buyer to be verified. 
	 * Required
	 * Maximum string length: 255 single-byte characters Input mask: ?@?.??
	 *
	 * @access public
	 * @var string
	 */
	public $Email;

	/**
First line of buyer’s billing or shipping street address to be verified. 
	 * Required
	 * For verification, input value of street address must match the first three single-byte characters of the street address on file for the PayPal account.
	 * Maximum string length: 35 single-byte characters Alphanumeric plus - , . ‘ # \ Whitespace and case of input value are ignored.
	 *
	 * @access public
	 * @var string
	 */
	public $Street;

	/**
Postal code to be verified. 
	 * Required
	 * For verification, input value of postal code must match the first five single-byte characters of the postal code on file for the PayPal account.
	 * Maximum string length: 16 single-byte characters Whitespace and case of input value are ignored.
	 *
	 * @access public
	 * @var string
	 */
	public $Zip;


	public function __construct($Email = null, $Street = null, $Zip = null) {
		$this->Email  = $Email;
		$this->Street  = $Street;
		$this->Zip  = $Zip;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->Email != null ) {
			$str .= '<urn:Email>'.$this->Email.'</urn:Email>';
		 }
		if($this->Street != null ) {
			$str .= '<urn:Street>'.$this->Street.'</urn:Street>';
		 }
		if($this->Zip != null ) {
			$str .= '<urn:Zip>'.$this->Zip.'</urn:Zip>';
		 }

		return $str;
	}

}

/**
 * AddressVerifyResponseType
 * Confirmation of a match, with one of the following tokens:
 * None: The input value of the Email object does not match any email address on file at PayPal.
 * Confirmed: If the value of the StreetMatch object is Matched, PayPal responds that the entire postal address is confirmed.
 * Unconfirmed: PayPal responds that the postal address is unconfirmed
 */
class AddressVerifyResponseType extends AbstractResponseType {
	/**
Confirmation of a match, with one of the following tokens:
	 * None: The input value of the Email object does not match any email address on file at PayPal.
	 * Confirmed: If the value of the StreetMatch object is Matched, PayPal responds that the entire postal address is confirmed.
	 * Unconfirmed: PayPal responds that the postal address is unconfirmed	 *
	 * @access public
	 * @var AddressStatusCodeType
	 */
	public $ConfirmationCode;

	/**
PayPal has compared the postal address you want to verify with the postal address on file at PayPal.
	 * None: The input value of the Email object does not match any email address on file at PayPal. In addition, an error response is returned. No further comparison of other input values has been made.
	 * Matched: The street address matches the street address on file at PayPal.
	 * Unmatched: The street address does not match the street address on file at PayPal. 
	 *
	 * @access public
	 * @var MatchStatusCodeType
	 */
	public $StreetMatch;

	/**
PayPal has compared the zip code you want to verify with the zip code on file for the email address. 
	 * None: The street address was unmatched. No further comparison of other input values has been made.
	 * Matched: The zip code matches the zip code on file at PayPal.
	 * Unmatched: The zip code does not match the zip code on file at PayPal. 
	 *
	 * @access public
	 * @var MatchStatusCodeType
	 */
	public $ZipMatch;

	/**
Two-character country code (ISO 3166) on file for the PayPal email address. 	 *
	 * @access public
	 * @var CountryCodeType
	 */
	public $CountryCode;

	/**
The token prevents a buyer from using any street address other than the address on file at PayPal during additional purchases he might make from the merchant. It contains encrypted information about the user’s street address and email address. You can pass the value of the token with the Buy Now button HTML address_api_token variable so that PayPal prevents the buyer from using any street address or email address other than those verified by PayPal. The token is valid for 24 hours. 
	 * Character length and limitations: 94 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $PayPalToken;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='confirmationcode') {
				$this->ConfirmationCode = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='streetmatch') {
				$this->StreetMatch = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='zipmatch') {
				$this->ZipMatch = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='countrycode') {
				$this->CountryCode = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='paypaltoken') {
				$this->PayPalToken = $arry["text"];
			}
		}
		}
	}
}

/**
 * EnterBoardingReq
 */
class EnterBoardingReq {
	/**
	 * @access public
	 * @var EnterBoardingRequestType
	 */
	public $EnterBoardingRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:EnterBoardingReq>';
		if($this->EnterBoardingRequest != null ) {
			$str .='<urn:EnterBoardingRequest>';
			$str .= $this->EnterBoardingRequest->toXMLString();
			$str .=  '</urn:EnterBoardingRequest>';
		 }
$str.='</urn:EnterBoardingReq>';

		return $str;
	}

}

/**
 * EnterBoardingRequestType
 */
class EnterBoardingRequestType extends AbstractRequestType {
	/**
	 * @access public
	 * @var EnterBoardingRequestDetailsType
	 */
	public $EnterBoardingRequestDetails;


	public function __construct($EnterBoardingRequestDetails = null) {
		$this->EnterBoardingRequestDetails  = $EnterBoardingRequestDetails;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->EnterBoardingRequestDetails != null ) {
			$str .='<ebl:EnterBoardingRequestDetails>';
			$str .= $this->EnterBoardingRequestDetails->toXMLString();
			$str .=  '</ebl:EnterBoardingRequestDetails>';
		 }

		return $str;
	}

}

/**
 * EnterBoardingResponseType
 * A unique token that identifies this boarding session. 
Use this token with the GetBoarding Details API call.
 * Character length and limitations: 64 alphanumeric characters. The token has the following format:
 * OB-61characterstring */
class EnterBoardingResponseType extends AbstractResponseType {
	/**
	 * A unique token that identifies this boarding session. 
Use this token with the GetBoarding Details API call.
	 * Character length and limitations: 64 alphanumeric characters. The token has the following format:
	 * OB-61characterstring	 *
	 * @access public
	 * @var string
	 */
	public $Token;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='token') {
				$this->Token = $arry["text"];
			}
		}
		}
	}
}

/**
 * GetBoardingDetailsReq
 */
class GetBoardingDetailsReq {
	/**
	 * @access public
	 * @var GetBoardingDetailsRequestType
	 */
	public $GetBoardingDetailsRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:GetBoardingDetailsReq>';
		if($this->GetBoardingDetailsRequest != null ) {
			$str .='<urn:GetBoardingDetailsRequest>';
			$str .= $this->GetBoardingDetailsRequest->toXMLString();
			$str .=  '</urn:GetBoardingDetailsRequest>';
		 }
$str.='</urn:GetBoardingDetailsReq>';

		return $str;
	}

}

/**
 * GetBoardingDetailsRequestType
 * A unique token returned by the EnterBoarding API call that identifies this boarding session. 
 * Required
 * Character length and limitations: 64 alphanumeric characters. The token has the following format:
 * OB-61characterstring */
class GetBoardingDetailsRequestType extends AbstractRequestType {
	/**
	 * A unique token returned by the EnterBoarding API call that identifies this boarding session. 
	 * Required
	 * Character length and limitations: 64 alphanumeric characters. The token has the following format:
	 * OB-61characterstring	 *
	 * @access public
	 * @var string
	 */
	public $Token;


	public function __construct($Token = null) {
		$this->Token  = $Token;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->Token != null ) {
			$str .= '<urn:Token>'.$this->Token.'</urn:Token>';
		 }

		return $str;
	}

}

/**
 * GetBoardingDetailsResponseType
 */
class GetBoardingDetailsResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var GetBoardingDetailsResponseDetailsType
	 */
	public $GetBoardingDetailsResponseDetails;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="getboardingdetailsresponsedetails") {
				$this->GetBoardingDetailsResponseDetails = new GetBoardingDetailsResponseDetailsType();
				$this->GetBoardingDetailsResponseDetails->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * SetAuthFlowParamReq
 */
class SetAuthFlowParamReq {
	/**
	 * @access public
	 * @var SetAuthFlowParamRequestType
	 */
	public $SetAuthFlowParamRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:SetAuthFlowParamReq>';
		if($this->SetAuthFlowParamRequest != null ) {
			$str .='<urn:SetAuthFlowParamRequest>';
			$str .= $this->SetAuthFlowParamRequest->toXMLString();
			$str .=  '</urn:SetAuthFlowParamRequest>';
		 }
$str.='</urn:SetAuthFlowParamReq>';

		return $str;
	}

}

/**
 * SetAuthFlowParamRequestType
 */
class SetAuthFlowParamRequestType extends AbstractRequestType {
	/**
	 * @access public
	 * @var SetAuthFlowParamRequestDetailsType
	 */
	public $SetAuthFlowParamRequestDetails;


	public function __construct($SetAuthFlowParamRequestDetails = null) {
		$this->SetAuthFlowParamRequestDetails  = $SetAuthFlowParamRequestDetails;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->SetAuthFlowParamRequestDetails != null ) {
			$str .='<ebl:SetAuthFlowParamRequestDetails>';
			$str .= $this->SetAuthFlowParamRequestDetails->toXMLString();
			$str .=  '</ebl:SetAuthFlowParamRequestDetails>';
		 }

		return $str;
	}

}

/**
 * SetAuthFlowParamResponseType
A timestamped token by which you identify to PayPal that you are processing this user. The token expires after three hours.
 * Character length and limitations: 20 single-byte characters
 */
class SetAuthFlowParamResponseType extends AbstractResponseType {
	/**
A timestamped token by which you identify to PayPal that you are processing this user. The token expires after three hours.
	 * Character length and limitations: 20 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $Token;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='token') {
				$this->Token = $arry["text"];
			}
		}
		}
	}
}

/**
 * GetAuthDetailsReq
 */
class GetAuthDetailsReq {
	/**
	 * @access public
	 * @var GetAuthDetailsRequestType
	 */
	public $GetAuthDetailsRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:GetAuthDetailsReq>';
		if($this->GetAuthDetailsRequest != null ) {
			$str .='<urn:GetAuthDetailsRequest>';
			$str .= $this->GetAuthDetailsRequest->toXMLString();
			$str .=  '</urn:GetAuthDetailsRequest>';
		 }
$str.='</urn:GetAuthDetailsReq>';

		return $str;
	}

}

/**
 * GetAuthDetailsRequestType
A timestamped token, the value of which was returned by SetAuthFlowParam Response. 
 * Required
 * Character length and limitations: 20 single-byte characters
 */
class GetAuthDetailsRequestType extends AbstractRequestType {
	/**
A timestamped token, the value of which was returned by SetAuthFlowParam Response. 
	 * Required
	 * Character length and limitations: 20 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $Token;


	public function __construct($Token = null) {
		$this->Token  = $Token;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->Token != null ) {
			$str .= '<urn:Token>'.$this->Token.'</urn:Token>';
		 }

		return $str;
	}

}

/**
 * GetAuthDetailsResponseType
 */
class GetAuthDetailsResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var GetAuthDetailsResponseDetailsType
	 */
	public $GetAuthDetailsResponseDetails;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="getauthdetailsresponsedetails") {
				$this->GetAuthDetailsResponseDetails = new GetAuthDetailsResponseDetailsType();
				$this->GetAuthDetailsResponseDetails->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * SetAccessPermissionsReq
 */
class SetAccessPermissionsReq {
	/**
	 * @access public
	 * @var SetAccessPermissionsRequestType
	 */
	public $SetAccessPermissionsRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:SetAccessPermissionsReq>';
		if($this->SetAccessPermissionsRequest != null ) {
			$str .='<urn:SetAccessPermissionsRequest>';
			$str .= $this->SetAccessPermissionsRequest->toXMLString();
			$str .=  '</urn:SetAccessPermissionsRequest>';
		 }
$str.='</urn:SetAccessPermissionsReq>';

		return $str;
	}

}

/**
 * SetAccessPermissionsRequestType
 */
class SetAccessPermissionsRequestType extends AbstractRequestType {
	/**
	 * @access public
	 * @var SetAccessPermissionsRequestDetailsType
	 */
	public $SetAccessPermissionsRequestDetails;


	public function __construct($SetAccessPermissionsRequestDetails = null) {
		$this->SetAccessPermissionsRequestDetails  = $SetAccessPermissionsRequestDetails;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->SetAccessPermissionsRequestDetails != null ) {
			$str .='<ebl:SetAccessPermissionsRequestDetails>';
			$str .= $this->SetAccessPermissionsRequestDetails->toXMLString();
			$str .=  '</ebl:SetAccessPermissionsRequestDetails>';
		 }

		return $str;
	}

}

/**
 * SetAccessPermissionsResponseType
A timestamped token by which you identify to PayPal that you are processing this user. The token expires after three hours.
 * Character length and limitations: 20 single-byte characters
 */
class SetAccessPermissionsResponseType extends AbstractResponseType {
	/**
A timestamped token by which you identify to PayPal that you are processing this user. The token expires after three hours.
	 * Character length and limitations: 20 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $Token;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='token') {
				$this->Token = $arry["text"];
			}
		}
		}
	}
}

/**
 * UpdateAccessPermissionsReq
 */
class UpdateAccessPermissionsReq {
	/**
	 * @access public
	 * @var UpdateAccessPermissionsRequestType
	 */
	public $UpdateAccessPermissionsRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:UpdateAccessPermissionsReq>';
		if($this->UpdateAccessPermissionsRequest != null ) {
			$str .='<urn:UpdateAccessPermissionsRequest>';
			$str .= $this->UpdateAccessPermissionsRequest->toXMLString();
			$str .=  '</urn:UpdateAccessPermissionsRequest>';
		 }
$str.='</urn:UpdateAccessPermissionsReq>';

		return $str;
	}

}

/**
 * UpdateAccessPermissionsRequestType
 * Unique PayPal customer account number, the value of which was returned by GetAuthDetails Response.
 * Required
 * Character length and limitations: 20 single-byte characters
 */
class UpdateAccessPermissionsRequestType extends AbstractRequestType {
	/**
Unique PayPal customer account number, the value of which was returned by GetAuthDetails Response.
	 * Required
	 * Character length and limitations: 20 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $PayerID;


	public function __construct($PayerID = null) {
		$this->PayerID  = $PayerID;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->PayerID != null ) {
			$str .= '<urn:PayerID>'.$this->PayerID.'</urn:PayerID>';
		 }

		return $str;
	}

}

/**
 * UpdateAccessPermissionsResponseType
 * The status of the update call, Success/Failure.
 * Character length and limitations: 20 single-byte characters
 */
class UpdateAccessPermissionsResponseType extends AbstractResponseType {
	/**
The status of the update call, Success/Failure.
	 * Character length and limitations: 20 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $Status;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='status') {
				$this->Status = $arry["text"];
			}
		}
		}
	}
}

/**
 * GetAccessPermissionDetailsReq
 */
class GetAccessPermissionDetailsReq {
	/**
	 * @access public
	 * @var GetAccessPermissionDetailsRequestType
	 */
	public $GetAccessPermissionDetailsRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:GetAccessPermissionDetailsReq>';
		if($this->GetAccessPermissionDetailsRequest != null ) {
			$str .='<urn:GetAccessPermissionDetailsRequest>';
			$str .= $this->GetAccessPermissionDetailsRequest->toXMLString();
			$str .=  '</urn:GetAccessPermissionDetailsRequest>';
		 }
$str.='</urn:GetAccessPermissionDetailsReq>';

		return $str;
	}

}

/**
 * GetAccessPermissionDetailsRequestType
A timestamped token, the value of which was returned by SetAuthFlowParam Response. 
 * Required
 * Character length and limitations: 20 single-byte characters
 */
class GetAccessPermissionDetailsRequestType extends AbstractRequestType {
	/**
A timestamped token, the value of which was returned by SetAuthFlowParam Response. 
	 * Required
	 * Character length and limitations: 20 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $Token;


	public function __construct($Token = null) {
		$this->Token  = $Token;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->Token != null ) {
			$str .= '<urn:Token>'.$this->Token.'</urn:Token>';
		 }

		return $str;
	}

}

/**
 * GetAccessPermissionDetailsResponseType
 */
class GetAccessPermissionDetailsResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var GetAccessPermissionDetailsResponseDetailsType
	 */
	public $GetAccessPermissionDetailsResponseDetails;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="getaccesspermissiondetailsresponsedetails") {
				$this->GetAccessPermissionDetailsResponseDetails = new GetAccessPermissionDetailsResponseDetailsType();
				$this->GetAccessPermissionDetailsResponseDetails->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * GetIncentiveEvaluationReq
 */
class GetIncentiveEvaluationReq {
	/**
	 * @access public
	 * @var GetIncentiveEvaluationRequestType
	 */
	public $GetIncentiveEvaluationRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:GetIncentiveEvaluationReq>';
		if($this->GetIncentiveEvaluationRequest != null ) {
			$str .='<urn:GetIncentiveEvaluationRequest>';
			$str .= $this->GetIncentiveEvaluationRequest->toXMLString();
			$str .=  '</urn:GetIncentiveEvaluationRequest>';
		 }
$str.='</urn:GetIncentiveEvaluationReq>';

		return $str;
	}

}

/**
 * GetIncentiveEvaluationRequestType
 */
class GetIncentiveEvaluationRequestType extends AbstractRequestType {
	/**
	 * @access public
	 * @var GetIncentiveEvaluationRequestDetailsType
	 */
	public $GetIncentiveEvaluationRequestDetails;


	public function __construct($GetIncentiveEvaluationRequestDetails = null) {
		$this->GetIncentiveEvaluationRequestDetails  = $GetIncentiveEvaluationRequestDetails;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->GetIncentiveEvaluationRequestDetails != null ) {
			$str .='<ebl:GetIncentiveEvaluationRequestDetails>';
			$str .= $this->GetIncentiveEvaluationRequestDetails->toXMLString();
			$str .=  '</ebl:GetIncentiveEvaluationRequestDetails>';
		 }

		return $str;
	}

}

/**
 * GetIncentiveEvaluationResponseType
 */
class GetIncentiveEvaluationResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var GetIncentiveEvaluationResponseDetailsType
	 */
	public $GetIncentiveEvaluationResponseDetails;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="getincentiveevaluationresponsedetails") {
				$this->GetIncentiveEvaluationResponseDetails = new GetIncentiveEvaluationResponseDetailsType();
				$this->GetIncentiveEvaluationResponseDetails->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * SetExpressCheckoutReq
 */
class SetExpressCheckoutReq {
	/**
	 * @access public
	 * @var SetExpressCheckoutRequestType
	 */
	public $SetExpressCheckoutRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:SetExpressCheckoutReq>';
		if($this->SetExpressCheckoutRequest != null ) {
			$str .='<urn:SetExpressCheckoutRequest>';
			$str .= $this->SetExpressCheckoutRequest->toXMLString();
			$str .=  '</urn:SetExpressCheckoutRequest>';
		 }
$str.='</urn:SetExpressCheckoutReq>';

		return $str;
	}

}

/**
 * SetExpressCheckoutRequestType
 */
class SetExpressCheckoutRequestType extends AbstractRequestType {
	/**
	 * @access public
	 * @var SetExpressCheckoutRequestDetailsType
	 */
	public $SetExpressCheckoutRequestDetails;


	public function __construct($SetExpressCheckoutRequestDetails = null) {
		$this->SetExpressCheckoutRequestDetails  = $SetExpressCheckoutRequestDetails;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->SetExpressCheckoutRequestDetails != null ) {
			$str .='<ebl:SetExpressCheckoutRequestDetails>';
			$str .= $this->SetExpressCheckoutRequestDetails->toXMLString();
			$str .=  '</ebl:SetExpressCheckoutRequestDetails>';
		 }

		return $str;
	}

}

/**
 * SetExpressCheckoutResponseType
A timestamped token by which you identify to PayPal that you are processing this payment with Express Checkout. The token expires after three hours. If you set Token in the SetExpressCheckoutRequest, the value of Token in the response is identical to the value in the request. 
 * Character length and limitations: 20 single-byte characters
 */
class SetExpressCheckoutResponseType extends AbstractResponseType {
	/**
A timestamped token by which you identify to PayPal that you are processing this payment with Express Checkout. The token expires after three hours. If you set Token in the SetExpressCheckoutRequest, the value of Token in the response is identical to the value in the request. 
	 * Character length and limitations: 20 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $Token;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='token') {
				$this->Token = $arry["text"];
			}
		}
		}
	}
}

/**
 * ExecuteCheckoutOperationsReq
 */
class ExecuteCheckoutOperationsReq {
	/**
	 * @access public
	 * @var ExecuteCheckoutOperationsRequestType
	 */
	public $ExecuteCheckoutOperationsRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:ExecuteCheckoutOperationsReq>';
		if($this->ExecuteCheckoutOperationsRequest != null ) {
			$str .='<urn:ExecuteCheckoutOperationsRequest>';
			$str .= $this->ExecuteCheckoutOperationsRequest->toXMLString();
			$str .=  '</urn:ExecuteCheckoutOperationsRequest>';
		 }
$str.='</urn:ExecuteCheckoutOperationsReq>';

		return $str;
	}

}

/**
 * ExecuteCheckoutOperationsRequestType
 */
class ExecuteCheckoutOperationsRequestType extends AbstractRequestType {
	/**
	 * @access public
	 * @var ExecuteCheckoutOperationsRequestDetailsType
	 */
	public $ExecuteCheckoutOperationsRequestDetails;


	public function __construct($ExecuteCheckoutOperationsRequestDetails = null) {
		$this->ExecuteCheckoutOperationsRequestDetails  = $ExecuteCheckoutOperationsRequestDetails;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->ExecuteCheckoutOperationsRequestDetails != null ) {
			$str .='<ebl:ExecuteCheckoutOperationsRequestDetails>';
			$str .= $this->ExecuteCheckoutOperationsRequestDetails->toXMLString();
			$str .=  '</ebl:ExecuteCheckoutOperationsRequestDetails>';
		 }

		return $str;
	}

}

/**
 * ExecuteCheckoutOperationsResponseType
 */
class ExecuteCheckoutOperationsResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var ExecuteCheckoutOperationsResponseDetailsType
	 */
	public $ExecuteCheckoutOperationsResponseDetails;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="executecheckoutoperationsresponsedetails") {
				$this->ExecuteCheckoutOperationsResponseDetails = new ExecuteCheckoutOperationsResponseDetailsType();
				$this->ExecuteCheckoutOperationsResponseDetails->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * GetExpressCheckoutDetailsReq
 */
class GetExpressCheckoutDetailsReq {
	/**
	 * @access public
	 * @var GetExpressCheckoutDetailsRequestType
	 */
	public $GetExpressCheckoutDetailsRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:GetExpressCheckoutDetailsReq>';
		if($this->GetExpressCheckoutDetailsRequest != null ) {
			$str .='<urn:GetExpressCheckoutDetailsRequest>';
			$str .= $this->GetExpressCheckoutDetailsRequest->toXMLString();
			$str .=  '</urn:GetExpressCheckoutDetailsRequest>';
		 }
$str.='</urn:GetExpressCheckoutDetailsReq>';

		return $str;
	}

}

/**
 * GetExpressCheckoutDetailsRequestType
A timestamped token, the value of which was returned by SetExpressCheckoutResponse. 
 * Required
 * Character length and limitations: 20 single-byte characters
 */
class GetExpressCheckoutDetailsRequestType extends AbstractRequestType {
	/**
A timestamped token, the value of which was returned by SetExpressCheckoutResponse. 
	 * Required
	 * Character length and limitations: 20 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $Token;


	public function __construct($Token = null) {
		$this->Token  = $Token;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->Token != null ) {
			$str .= '<urn:Token>'.$this->Token.'</urn:Token>';
		 }

		return $str;
	}

}

/**
 * GetExpressCheckoutDetailsResponseType
 */
class GetExpressCheckoutDetailsResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var GetExpressCheckoutDetailsResponseDetailsType
	 */
	public $GetExpressCheckoutDetailsResponseDetails;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="getexpresscheckoutdetailsresponsedetails") {
				$this->GetExpressCheckoutDetailsResponseDetails = new GetExpressCheckoutDetailsResponseDetailsType();
				$this->GetExpressCheckoutDetailsResponseDetails->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * DoExpressCheckoutPaymentReq
 */
class DoExpressCheckoutPaymentReq {
	/**
	 * @access public
	 * @var DoExpressCheckoutPaymentRequestType
	 */
	public $DoExpressCheckoutPaymentRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:DoExpressCheckoutPaymentReq>';
		if($this->DoExpressCheckoutPaymentRequest != null ) {
			$str .='<urn:DoExpressCheckoutPaymentRequest>';
			$str .= $this->DoExpressCheckoutPaymentRequest->toXMLString();
			$str .=  '</urn:DoExpressCheckoutPaymentRequest>';
		 }
$str.='</urn:DoExpressCheckoutPaymentReq>';

		return $str;
	}

}

/**
 * DoExpressCheckoutPaymentRequestType
 * This flag indicates that the response should include FMFDetails
 */
class DoExpressCheckoutPaymentRequestType extends AbstractRequestType {
	/**
	 * @access public
	 * @var DoExpressCheckoutPaymentRequestDetailsType
	 */
	public $DoExpressCheckoutPaymentRequestDetails;

	/**
This flag indicates that the response should include FMFDetails	 *
	 * @access public
	 * @var int
	 */
	public $ReturnFMFDetails;


	public function __construct($DoExpressCheckoutPaymentRequestDetails = null) {
		$this->DoExpressCheckoutPaymentRequestDetails  = $DoExpressCheckoutPaymentRequestDetails;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->DoExpressCheckoutPaymentRequestDetails != null ) {
			$str .='<ebl:DoExpressCheckoutPaymentRequestDetails>';
			$str .= $this->DoExpressCheckoutPaymentRequestDetails->toXMLString();
			$str .=  '</ebl:DoExpressCheckoutPaymentRequestDetails>';
		 }
		if($this->ReturnFMFDetails != null ) {
			$str .= '<urn:ReturnFMFDetails>'.$this->ReturnFMFDetails.'</urn:ReturnFMFDetails>';
		 }

		return $str;
	}

}

/**
 * DoExpressCheckoutPaymentResponseType
 */
class DoExpressCheckoutPaymentResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var DoExpressCheckoutPaymentResponseDetailsType
	 */
	public $DoExpressCheckoutPaymentResponseDetails;

	/**
	 * @access public
	 * @var FMFDetailsType
	 */
	public $FMFDetails;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="doexpresscheckoutpaymentresponsedetails") {
				$this->DoExpressCheckoutPaymentResponseDetails = new DoExpressCheckoutPaymentResponseDetailsType();
				$this->DoExpressCheckoutPaymentResponseDetails->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="fmfdetails") {
				$this->FMFDetails = new FMFDetailsType();
				$this->FMFDetails->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * DoUATPExpressCheckoutPaymentReq
 */
class DoUATPExpressCheckoutPaymentReq {
	/**
	 * @access public
	 * @var DoUATPExpressCheckoutPaymentRequestType
	 */
	public $DoUATPExpressCheckoutPaymentRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:DoUATPExpressCheckoutPaymentReq>';
		if($this->DoUATPExpressCheckoutPaymentRequest != null ) {
			$str .='<urn:DoUATPExpressCheckoutPaymentRequest>';
			$str .= $this->DoUATPExpressCheckoutPaymentRequest->toXMLString();
			$str .=  '</urn:DoUATPExpressCheckoutPaymentRequest>';
		 }
$str.='</urn:DoUATPExpressCheckoutPaymentReq>';

		return $str;
	}

}

/**
 * DoUATPExpressCheckoutPaymentRequestType
 */
class DoUATPExpressCheckoutPaymentRequestType extends DoExpressCheckoutPaymentRequestType {

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();

		return $str;
	}

}

/**
 * DoUATPExpressCheckoutPaymentResponseType
 */
class DoUATPExpressCheckoutPaymentResponseType extends DoExpressCheckoutPaymentResponseType {
	/**
	 * @access public
	 * @var UATPDetailsType
	 */
	public $UATPDetails;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="uatpdetails") {
				$this->UATPDetails = new UATPDetailsType();
				$this->UATPDetails->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * ManagePendingTransactionStatusReq
 */
class ManagePendingTransactionStatusReq {
	/**
	 * @access public
	 * @var ManagePendingTransactionStatusRequestType
	 */
	public $ManagePendingTransactionStatusRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:ManagePendingTransactionStatusReq>';
		if($this->ManagePendingTransactionStatusRequest != null ) {
			$str .='<urn:ManagePendingTransactionStatusRequest>';
			$str .= $this->ManagePendingTransactionStatusRequest->toXMLString();
			$str .=  '</urn:ManagePendingTransactionStatusRequest>';
		 }
$str.='</urn:ManagePendingTransactionStatusReq>';

		return $str;
	}

}

/**
 * ManagePendingTransactionStatusRequestType
 */
class ManagePendingTransactionStatusRequestType extends AbstractRequestType {
	/**
	 * @access public
	 * @var string
	 */
	public $TransactionID;

	/**
	 * @access public
	 * @var FMFPendingTransactionActionType
	 */
	public $Action;


	public function __construct($TransactionID = null, $Action = null) {
		$this->TransactionID  = $TransactionID;
		$this->Action  = $Action;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->TransactionID != null ) {
			$str .= '<urn:TransactionID>'.$this->TransactionID.'</urn:TransactionID>';
		 }
		if($this->Action != null ) {
			$str .= '<urn:Action>'.$this->Action.'</urn:Action>';
		 }

		return $str;
	}

}

/**
 * ManagePendingTransactionStatusResponseType
 */
class ManagePendingTransactionStatusResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var string
	 */
	public $TransactionID;

	/**
	 * @access public
	 * @var string
	 */
	public $Status;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='transactionid') {
				$this->TransactionID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='status') {
				$this->Status = $arry["text"];
			}
		}
		}
	}
}

/**
 * DoDirectPaymentReq
 */
class DoDirectPaymentReq {
	/**
	 * @access public
	 * @var DoDirectPaymentRequestType
	 */
	public $DoDirectPaymentRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:DoDirectPaymentReq>';
		if($this->DoDirectPaymentRequest != null ) {
			$str .='<urn:DoDirectPaymentRequest>';
			$str .= $this->DoDirectPaymentRequest->toXMLString();
			$str .=  '</urn:DoDirectPaymentRequest>';
		 }
$str.='</urn:DoDirectPaymentReq>';

		return $str;
	}

}

/**
 * DoDirectPaymentRequestType
 * This flag indicates that the response should include FMFDetails
 */
class DoDirectPaymentRequestType extends AbstractRequestType {
	/**
	 * @access public
	 * @var DoDirectPaymentRequestDetailsType
	 */
	public $DoDirectPaymentRequestDetails;

	/**
This flag indicates that the response should include FMFDetails	 *
	 * @access public
	 * @var int
	 */
	public $ReturnFMFDetails;


	public function __construct($DoDirectPaymentRequestDetails = null) {
		$this->DoDirectPaymentRequestDetails  = $DoDirectPaymentRequestDetails;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->DoDirectPaymentRequestDetails != null ) {
			$str .='<ebl:DoDirectPaymentRequestDetails>';
			$str .= $this->DoDirectPaymentRequestDetails->toXMLString();
			$str .=  '</ebl:DoDirectPaymentRequestDetails>';
		 }
		if($this->ReturnFMFDetails != null ) {
			$str .= '<urn:ReturnFMFDetails>'.$this->ReturnFMFDetails.'</urn:ReturnFMFDetails>';
		 }

		return $str;
	}

}

/**
 * DoDirectPaymentResponseType
 * The amount of the payment as specified by you on DoDirectPaymentRequest. */
class DoDirectPaymentResponseType extends AbstractResponseType {
	/**
	 * The amount of the payment as specified by you on DoDirectPaymentRequest.	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Amount;

	/**
	 * Address Verification System response code. Character limit: One single-byte alphanumeric character
	 * AVS CodeMeaningMatched Details 
A AddressAddress only (no ZIP)  
B International “A”Address only (no ZIP)  
CInternational “N” None  
DInternational “X” Address and Postal Code  
E Not allowed for MOTO (Internet/Phone) transactions Not applicable 
F UK-specific “X”Address and Postal Code  
G Global Unavailable Not applicable 
I International UnavailableNot applicable  
N NoNone  
PPostal (International “Z”)Postal Code only (no Address)   
RRetryNot applicable   
S Service not Supported Not applicable 
U UnavailableNot applicable  
W Whole ZIPNine-digit ZIP code (no Address)  
X Exact match Address and nine-digit ZIP code 
Y YesAddress and five-digit ZIP  
Z ZIP Five-digit ZIP code (no Address) 
All others Error Not applicable
	 *
	 * @access public
	 * @var string
	 */
	public $AVSCode;

	/**
	 * Result of the CVV2 check by PayPal.
	 * CVV2 CodeMeaningMatched Details   
M MatchCVV2  
N No match None 
P Not ProcessedNot applicable  
SService not SupportedNot applicable   
U UnavailableNot applicable  
XNo response  Not applicable 
All others ErrorNot applicable  
	 *
	 * @access public
	 * @var string
	 */
	public $CVV2Code;

	/**
	 * Transaction identification number.
	 * Character length and limitations: 19 characters maximum.	 *
	 * @access public
	 * @var string
	 */
	public $TransactionID;

	/**
	 * The reason why a particular transaction went in pending.
	 *
	 * @access public
	 * @var PendingStatusCodeType
	 */
	public $PendingReason;

	/**
	 * This will identify the actual transaction status.
	 *
	 * @access public
	 * @var PaymentStatusCodeType
	 */
	public $PaymentStatus;

	/**
	 * @access public
	 * @var FMFDetailsType
	 */
	public $FMFDetails;

	/**
	 * @access public
	 * @var ThreeDSecureResponseType
	 */
	public $ThreeDSecureResponse;

	/**
	 * Response code from the processor when a recurring transaction is declined.
	 *
	 * @access public
	 * @var string
	 */
	public $PaymentAdviceCode;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="amount") {
				$this->Amount = new BasicAmountType();
				$this->Amount->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='avscode') {
				$this->AVSCode = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='cvv2code') {
				$this->CVV2Code = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='transactionid') {
				$this->TransactionID = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='pendingreason') {
				$this->PendingReason = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='paymentstatus') {
				$this->PaymentStatus = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="fmfdetails") {
				$this->FMFDetails = new FMFDetailsType();
				$this->FMFDetails->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="threedsecureresponse") {
				$this->ThreeDSecureResponse = new ThreeDSecureResponseType();
				$this->ThreeDSecureResponse->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='paymentadvicecode') {
				$this->PaymentAdviceCode = $arry["text"];
			}
		}
		}
	}
}

/**
 * DoCancelReq
 */
class DoCancelReq {
	/**
	 * @access public
	 * @var DoCancelRequestType
	 */
	public $DoCancelRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:DoCancelReq>';
		if($this->DoCancelRequest != null ) {
			$str .='<urn:DoCancelRequest>';
			$str .= $this->DoCancelRequest->toXMLString();
			$str .=  '</urn:DoCancelRequest>';
		 }
$str.='</urn:DoCancelReq>';

		return $str;
	}

}

/**
 * DoCancelRequestType
 * Msg Sub Id that was used for the orginal operation. 
 */
class DoCancelRequestType extends AbstractRequestType {
	/**
Msg Sub Id that was used for the orginal operation. 	 *
	 * @access public
	 * @var string
	 */
	public $CancelMsgSubID;

	/**
Original API's type	 *
	 * @access public
	 * @var APIType
	 */
	public $APIType;


	public function __construct($CancelMsgSubID = null, $APIType = null) {
		$this->CancelMsgSubID  = $CancelMsgSubID;
		$this->APIType  = $APIType;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->CancelMsgSubID != null ) {
			$str .= '<urn:CancelMsgSubID>'.$this->CancelMsgSubID.'</urn:CancelMsgSubID>';
		 }
		if($this->APIType != null ) {
			$str .= '<urn:APIType>'.$this->APIType.'</urn:APIType>';
		 }

		return $str;
	}

}

/**
 * DoCancelResponseType
 */
class DoCancelResponseType extends AbstractResponseType {

	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
		}
		}
	}
}

/**
 * DoCaptureReq
 */
class DoCaptureReq {
	/**
	 * @access public
	 * @var DoCaptureRequestType
	 */
	public $DoCaptureRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:DoCaptureReq>';
		if($this->DoCaptureRequest != null ) {
			$str .='<urn:DoCaptureRequest>';
			$str .= $this->DoCaptureRequest->toXMLString();
			$str .=  '</urn:DoCaptureRequest>';
		 }
$str.='</urn:DoCaptureReq>';

		return $str;
	}

}

/**
 * DoCaptureRequestType
 * The authorization identification number of the payment you want to capture. 
 * Required
 * Character length and limits: 19 single-byte characters maximum
 */
class DoCaptureRequestType extends AbstractRequestType {
	/**
The authorization identification number of the payment you want to capture. 
	 * Required
	 * Character length and limits: 19 single-byte characters maximum
	 *
	 * @access public
	 * @var string
	 */
	public $AuthorizationID;

	/**
Amount to authorize. You must set the currencyID attribute to USD. 
	 * Required
	 * Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,)
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Amount;

	/**
Indicates if this capture is the last capture you intend to make. The default is Complete. If CompleteType is Complete, any remaining amount of the original reauthorized transaction is automatically voided. 
	 * Required
	 * Character length and limits: 12 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var CompleteCodeType
	 */
	public $CompleteType;

	/**
An informational note about this settlement that is displayed to the payer in email and in  transaction history. 
	 * Optional
	 * Character length and limits: 255 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $Note;

	/**
Your invoice number or other identification number. 
	 * The InvoiceID value is recorded only if the authorization you are capturing is an order authorization, not a basic authorization.
	 * Optional
	 * Character length and limits: 127 single-byte alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $InvoiceID;

	/**
Contains enhanced data like airline itinerary information.
	 * Not Required
	 *
	 * @access public
	 * @var EnhancedDataType
	 */
	public $EnhancedData;

	/**
dynamic descriptor
	 * Dynamic descriptor is used for merchant to provide detail of a transaction appears on statement
	 * Optional
	 * Character length and limits: <18 characters alphanumeric characters
	 *
	 * @access public
	 * @var string
	 */
	public $Descriptor;

	/**
To pass the Merchant store informationOptional
	 *
	 * @access public
	 * @var MerchantStoreDetailsType
	 */
	public $MerchantStoreDetails;


	public function __construct($AuthorizationID = null, $Amount = null, $CompleteType = null) {
		$this->AuthorizationID  = $AuthorizationID;
		$this->Amount  = $Amount;
		$this->CompleteType  = $CompleteType;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->AuthorizationID != null ) {
			$str .= '<urn:AuthorizationID>'.$this->AuthorizationID.'</urn:AuthorizationID>';
		 }
		if($this->Amount != null ) {
			$str .='<urn:Amount';
			$str .= $this->Amount->toXMLString();
			$str .=  '</urn:Amount>';
		 }
		if($this->CompleteType != null ) {
			$str .= '<urn:CompleteType>'.$this->CompleteType.'</urn:CompleteType>';
		 }
		if($this->Note != null ) {
			$str .= '<urn:Note>'.$this->Note.'</urn:Note>';
		 }
		if($this->InvoiceID != null ) {
			$str .= '<urn:InvoiceID>'.$this->InvoiceID.'</urn:InvoiceID>';
		 }
		if($this->EnhancedData != null ) {
			$str .='<ebl:EnhancedData>';
			$str .= $this->EnhancedData->toXMLString();
			$str .=  '</ebl:EnhancedData>';
		 }
		if($this->Descriptor != null ) {
			$str .= '<urn:Descriptor>'.$this->Descriptor.'</urn:Descriptor>';
		 }
		if($this->MerchantStoreDetails != null ) {
			$str .='<ebl:MerchantStoreDetails>';
			$str .= $this->MerchantStoreDetails->toXMLString();
			$str .=  '</ebl:MerchantStoreDetails>';
		 }

		return $str;
	}

}

/**
 * DoCaptureResponseType
 */
class DoCaptureResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var DoCaptureResponseDetailsType
	 */
	public $DoCaptureResponseDetails;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="docaptureresponsedetails") {
				$this->DoCaptureResponseDetails = new DoCaptureResponseDetailsType();
				$this->DoCaptureResponseDetails->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * DoReauthorizationReq
 */
class DoReauthorizationReq {
	/**
	 * @access public
	 * @var DoReauthorizationRequestType
	 */
	public $DoReauthorizationRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:DoReauthorizationReq>';
		if($this->DoReauthorizationRequest != null ) {
			$str .='<urn:DoReauthorizationRequest>';
			$str .= $this->DoReauthorizationRequest->toXMLString();
			$str .=  '</urn:DoReauthorizationRequest>';
		 }
$str.='</urn:DoReauthorizationReq>';

		return $str;
	}

}

/**
 * DoReauthorizationRequestType
 * The value of a previously authorized transaction identification number returned by a PayPal product. You can obtain a buyer's transaction number from the TransactionID element of the PayerInfo structure returned by GetTransactionDetailsResponse. 
 * Required
 * Character length and limits: 19 single-byte characters maximum
 */
class DoReauthorizationRequestType extends AbstractRequestType {
	/**
The value of a previously authorized transaction identification number returned by a PayPal product. You can obtain a buyer's transaction number from the TransactionID element of the PayerInfo structure returned by GetTransactionDetailsResponse. 
	 * Required
	 * Character length and limits: 19 single-byte characters maximum
	 *
	 * @access public
	 * @var string
	 */
	public $AuthorizationID;

	/**
Amount to reauthorize. 
	 * Required
	 * Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Amount;


	public function __construct($AuthorizationID = null, $Amount = null) {
		$this->AuthorizationID  = $AuthorizationID;
		$this->Amount  = $Amount;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->AuthorizationID != null ) {
			$str .= '<urn:AuthorizationID>'.$this->AuthorizationID.'</urn:AuthorizationID>';
		 }
		if($this->Amount != null ) {
			$str .='<urn:Amount';
			$str .= $this->Amount->toXMLString();
			$str .=  '</urn:Amount>';
		 }

		return $str;
	}

}

/**
 * DoReauthorizationResponseType
 * A new authorization identification number.
 * Character length and limits: 19 single-byte characters 
 */
class DoReauthorizationResponseType extends AbstractResponseType {
	/**
A new authorization identification number.
	 * Character length and limits: 19 single-byte characters 
	 *
	 * @access public
	 * @var string
	 */
	public $AuthorizationID;

	/**
	 * @access public
	 * @var AuthorizationInfoType
	 */
	public $AuthorizationInfo;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='authorizationid') {
				$this->AuthorizationID = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="authorizationinfo") {
				$this->AuthorizationInfo = new AuthorizationInfoType();
				$this->AuthorizationInfo->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * DoVoidReq
 */
class DoVoidReq {
	/**
	 * @access public
	 * @var DoVoidRequestType
	 */
	public $DoVoidRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:DoVoidReq>';
		if($this->DoVoidRequest != null ) {
			$str .='<urn:DoVoidRequest>';
			$str .= $this->DoVoidRequest->toXMLString();
			$str .=  '</urn:DoVoidRequest>';
		 }
$str.='</urn:DoVoidReq>';

		return $str;
	}

}

/**
 * DoVoidRequestType
 * The value of the original authorization identification number returned by a PayPal product. 
 * If you are voiding a transaction that has been reauthorized, use the ID from the original authorization, and not the reauthorization.
 * Required
 * Character length and limits: 19 single-byte characters
 */
class DoVoidRequestType extends AbstractRequestType {
	/**
The value of the original authorization identification number returned by a PayPal product. 
	 * If you are voiding a transaction that has been reauthorized, use the ID from the original authorization, and not the reauthorization.
	 * Required
	 * Character length and limits: 19 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $AuthorizationID;

	/**
An informational note about this settlement that is displayed to the payer in email and in  transaction history. 
	 * Optional
	 * Character length and limits: 255 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $Note;


	public function __construct($AuthorizationID = null) {
		$this->AuthorizationID  = $AuthorizationID;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->AuthorizationID != null ) {
			$str .= '<urn:AuthorizationID>'.$this->AuthorizationID.'</urn:AuthorizationID>';
		 }
		if($this->Note != null ) {
			$str .= '<urn:Note>'.$this->Note.'</urn:Note>';
		 }

		return $str;
	}

}

/**
 * DoVoidResponseType
 * The authorization identification number you specified in the request. 
 * Character length and limits: 19 single-byte characters
 */
class DoVoidResponseType extends AbstractResponseType {
	/**
The authorization identification number you specified in the request. 
	 * Character length and limits: 19 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $AuthorizationID;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='authorizationid') {
				$this->AuthorizationID = $arry["text"];
			}
		}
		}
	}
}

/**
 * DoAuthorizationReq
 */
class DoAuthorizationReq {
	/**
	 * @access public
	 * @var DoAuthorizationRequestType
	 */
	public $DoAuthorizationRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:DoAuthorizationReq>';
		if($this->DoAuthorizationRequest != null ) {
			$str .='<urn:DoAuthorizationRequest>';
			$str .= $this->DoAuthorizationRequest->toXMLString();
			$str .=  '</urn:DoAuthorizationRequest>';
		 }
$str.='</urn:DoAuthorizationReq>';

		return $str;
	}

}

/**
 * DoAuthorizationRequestType
 * The value of the order’s transaction identification number returned by a PayPal product. 
 * Required
 * Character length and limits: 19 single-byte characters maximum
 */
class DoAuthorizationRequestType extends AbstractRequestType {
	/**
The value of the order’s transaction identification number returned by a PayPal product. 
	 * Required
	 * Character length and limits: 19 single-byte characters maximum
	 *
	 * @access public
	 * @var string
	 */
	public $TransactionID;

	/**
Type of transaction to authorize. The only allowable value is Order, which means that the transaction represents a customer order that can be fulfilled over 29 days. 
	 * Optional
	 *
	 * @access public
	 * @var TransactionEntityType
	 */
	public $TransactionEntity;

	/**
Amount to authorize. 
	 * Required
	 * Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Amount;


	public function __construct($TransactionID = null, $Amount = null) {
		$this->TransactionID  = $TransactionID;
		$this->Amount  = $Amount;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->TransactionID != null ) {
			$str .= '<urn:TransactionID>'.$this->TransactionID.'</urn:TransactionID>';
		 }
		if($this->TransactionEntity != null ) {
			$str .= '<urn:TransactionEntity>'.$this->TransactionEntity.'</urn:TransactionEntity>';
		 }
		if($this->Amount != null ) {
			$str .='<urn:Amount';
			$str .= $this->Amount->toXMLString();
			$str .=  '</urn:Amount>';
		 }

		return $str;
	}

}

/**
 * DoAuthorizationResponseType
 * An authorization identification number. 
 * Character length and limits: 19 single-byte characters
 */
class DoAuthorizationResponseType extends AbstractResponseType {
	/**
An authorization identification number. 
	 * Character length and limits: 19 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $TransactionID;

	/**
The amount and currency you specified in the request. 
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Amount;

	/**
	 * @access public
	 * @var AuthorizationInfoType
	 */
	public $AuthorizationInfo;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='transactionid') {
				$this->TransactionID = $arry["text"];
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="amount") {
				$this->Amount = new BasicAmountType();
				$this->Amount->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="authorizationinfo") {
				$this->AuthorizationInfo = new AuthorizationInfoType();
				$this->AuthorizationInfo->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * DoUATPAuthorizationReq
 */
class DoUATPAuthorizationReq {
	/**
	 * @access public
	 * @var DoUATPAuthorizationRequestType
	 */
	public $DoUATPAuthorizationRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:DoUATPAuthorizationReq>';
		if($this->DoUATPAuthorizationRequest != null ) {
			$str .='<urn:DoUATPAuthorizationRequest>';
			$str .= $this->DoUATPAuthorizationRequest->toXMLString();
			$str .=  '</urn:DoUATPAuthorizationRequest>';
		 }
$str.='</urn:DoUATPAuthorizationReq>';

		return $str;
	}

}

/**
 * DoUATPAuthorizationRequestType
 * UATP card details
 * Required
 */
class DoUATPAuthorizationRequestType extends AbstractRequestType {
	/**
UATP card details
	 * Required
	 *
	 * @access public
	 * @var UATPDetailsType
	 */
	public $UATPDetails;

	/**
Type of transaction to authorize. The only allowable value is Order, which means that the transaction represents a customer order that can be fulfilled over 29 days. 
	 * Optional
	 *
	 * @access public
	 * @var TransactionEntityType
	 */
	public $TransactionEntity;

	/**
Amount to authorize. 
	 * Required
	 * Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 *
	 * @access public
	 * @var BasicAmountType
	 */
	public $Amount;

	/**
	 * Invoice ID. A pass through.
	 *
	 * @access public
	 * @var string
	 */
	public $InvoiceID;


	public function __construct($UATPDetails = null, $Amount = null) {
		$this->UATPDetails  = $UATPDetails;
		$this->Amount  = $Amount;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->UATPDetails != null ) {
			$str .='<ebl:UATPDetails>';
			$str .= $this->UATPDetails->toXMLString();
			$str .=  '</ebl:UATPDetails>';
		 }
		if($this->TransactionEntity != null ) {
			$str .= '<urn:TransactionEntity>'.$this->TransactionEntity.'</urn:TransactionEntity>';
		 }
		if($this->Amount != null ) {
			$str .='<urn:Amount';
			$str .= $this->Amount->toXMLString();
			$str .=  '</urn:Amount>';
		 }
		if($this->InvoiceID != null ) {
			$str .= '<urn:InvoiceID>'.$this->InvoiceID.'</urn:InvoiceID>';
		 }

		return $str;
	}

}

/**
 * DoUATPAuthorizationResponseType
 * Auth Authorization Code.
 */
class DoUATPAuthorizationResponseType extends DoAuthorizationResponseType {
	/**
	 * @access public
	 * @var UATPDetailsType
	 */
	public $UATPDetails;

	/**
	 * Auth Authorization Code.
	 *
	 * @access public
	 * @var string
	 */
	public $AuthorizationCode;

	/**
	 * Invoice ID. A pass through.
	 *
	 * @access public
	 * @var string
	 */
	public $InvoiceID;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="uatpdetails") {
				$this->UATPDetails = new UATPDetailsType();
				$this->UATPDetails->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='authorizationcode') {
				$this->AuthorizationCode = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='invoiceid') {
				$this->InvoiceID = $arry["text"];
			}
		}
		}
	}
}

/**
 * CreateMobilePaymentReq
 */
class CreateMobilePaymentReq {
	/**
	 * @access public
	 * @var CreateMobilePaymentRequestType
	 */
	public $CreateMobilePaymentRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:CreateMobilePaymentReq>';
		if($this->CreateMobilePaymentRequest != null ) {
			$str .='<urn:CreateMobilePaymentRequest>';
			$str .= $this->CreateMobilePaymentRequest->toXMLString();
			$str .=  '</urn:CreateMobilePaymentRequest>';
		 }
$str.='</urn:CreateMobilePaymentReq>';

		return $str;
	}

}

/**
 * CreateMobilePaymentRequestType
 */
class CreateMobilePaymentRequestType extends AbstractRequestType {
	/**
	 * @access public
	 * @var CreateMobilePaymentRequestDetailsType
	 */
	public $CreateMobilePaymentRequestDetails;


	public function __construct($CreateMobilePaymentRequestDetails = null) {
		$this->CreateMobilePaymentRequestDetails  = $CreateMobilePaymentRequestDetails;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->CreateMobilePaymentRequestDetails != null ) {
			$str .='<ebl:CreateMobilePaymentRequestDetails>';
			$str .= $this->CreateMobilePaymentRequestDetails->toXMLString();
			$str .=  '</ebl:CreateMobilePaymentRequestDetails>';
		 }

		return $str;
	}

}

/**
 * CreateMobilePaymentResponseType
 */
class CreateMobilePaymentResponseType extends AbstractResponseType {

	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
		}
		}
	}
}

/**
 * GetMobileStatusReq
 */
class GetMobileStatusReq {
	/**
	 * @access public
	 * @var GetMobileStatusRequestType
	 */
	public $GetMobileStatusRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:GetMobileStatusReq>';
		if($this->GetMobileStatusRequest != null ) {
			$str .='<urn:GetMobileStatusRequest>';
			$str .= $this->GetMobileStatusRequest->toXMLString();
			$str .=  '</urn:GetMobileStatusRequest>';
		 }
$str.='</urn:GetMobileStatusReq>';

		return $str;
	}

}

/**
 * GetMobileStatusRequestType
 */
class GetMobileStatusRequestType extends AbstractRequestType {
	/**
	 * @access public
	 * @var GetMobileStatusRequestDetailsType
	 */
	public $GetMobileStatusRequestDetails;


	public function __construct($GetMobileStatusRequestDetails = null) {
		$this->GetMobileStatusRequestDetails  = $GetMobileStatusRequestDetails;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->GetMobileStatusRequestDetails != null ) {
			$str .='<ebl:GetMobileStatusRequestDetails>';
			$str .= $this->GetMobileStatusRequestDetails->toXMLString();
			$str .=  '</ebl:GetMobileStatusRequestDetails>';
		 }

		return $str;
	}

}

/**
 * GetMobileStatusResponseType
 * Indicates whether the phone is activated for mobile payments
 */
class GetMobileStatusResponseType extends AbstractResponseType {
	/**
Indicates whether the phone is activated for mobile payments
	 *
	 * @access public
	 * @var integer
	 */
	public $IsActivated;

	/**
Indicates whether there is a payment pending from the phone
	 *
	 * @access public
	 * @var integer
	 */
	public $PaymentPending;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='isactivated') {
				$this->IsActivated = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='paymentpending') {
				$this->PaymentPending = $arry["text"];
			}
		}
		}
	}
}

/**
 * SetMobileCheckoutReq
 */
class SetMobileCheckoutReq {
	/**
	 * @access public
	 * @var SetMobileCheckoutRequestType
	 */
	public $SetMobileCheckoutRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:SetMobileCheckoutReq>';
		if($this->SetMobileCheckoutRequest != null ) {
			$str .='<urn:SetMobileCheckoutRequest>';
			$str .= $this->SetMobileCheckoutRequest->toXMLString();
			$str .=  '</urn:SetMobileCheckoutRequest>';
		 }
$str.='</urn:SetMobileCheckoutReq>';

		return $str;
	}

}

/**
 * SetMobileCheckoutRequestType
 */
class SetMobileCheckoutRequestType extends AbstractRequestType {
	/**
	 * @access public
	 * @var SetMobileCheckoutRequestDetailsType
	 */
	public $SetMobileCheckoutRequestDetails;


	public function __construct($SetMobileCheckoutRequestDetails = null) {
		$this->SetMobileCheckoutRequestDetails  = $SetMobileCheckoutRequestDetails;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->SetMobileCheckoutRequestDetails != null ) {
			$str .='<ebl:SetMobileCheckoutRequestDetails>';
			$str .= $this->SetMobileCheckoutRequestDetails->toXMLString();
			$str .=  '</ebl:SetMobileCheckoutRequestDetails>';
		 }

		return $str;
	}

}

/**
 * SetMobileCheckoutResponseType
A timestamped token by which you identify to PayPal that you are processing this payment with Mobile Checkout. The token expires after three hours.
 * Character length and limitations: 20 single-byte characters
 */
class SetMobileCheckoutResponseType extends AbstractResponseType {
	/**
A timestamped token by which you identify to PayPal that you are processing this payment with Mobile Checkout. The token expires after three hours.
	 * Character length and limitations: 20 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $Token;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='token') {
				$this->Token = $arry["text"];
			}
		}
		}
	}
}

/**
 * DoMobileCheckoutPaymentReq
 */
class DoMobileCheckoutPaymentReq {
	/**
	 * @access public
	 * @var DoMobileCheckoutPaymentRequestType
	 */
	public $DoMobileCheckoutPaymentRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:DoMobileCheckoutPaymentReq>';
		if($this->DoMobileCheckoutPaymentRequest != null ) {
			$str .='<urn:DoMobileCheckoutPaymentRequest>';
			$str .= $this->DoMobileCheckoutPaymentRequest->toXMLString();
			$str .=  '</urn:DoMobileCheckoutPaymentRequest>';
		 }
$str.='</urn:DoMobileCheckoutPaymentReq>';

		return $str;
	}

}

/**
 * DoMobileCheckoutPaymentRequestType
A timestamped token, the value of which was returned by SetMobileCheckoutResponse. 
 * Required
 * Character length and limitations: 20 single-byte characters
 */
class DoMobileCheckoutPaymentRequestType extends AbstractRequestType {
	/**
A timestamped token, the value of which was returned by SetMobileCheckoutResponse. 
	 * Required
	 * Character length and limitations: 20 single-byte characters
	 *
	 * @access public
	 * @var string
	 */
	public $Token;


	public function __construct($Token = null) {
		$this->Token  = $Token;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->Token != null ) {
			$str .= '<urn:Token>'.$this->Token.'</urn:Token>';
		 }

		return $str;
	}

}

/**
 * DoMobileCheckoutPaymentResponseType
 */
class DoMobileCheckoutPaymentResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var DoMobileCheckoutPaymentResponseDetailsType
	 */
	public $DoMobileCheckoutPaymentResponseDetails;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="domobilecheckoutpaymentresponsedetails") {
				$this->DoMobileCheckoutPaymentResponseDetails = new DoMobileCheckoutPaymentResponseDetailsType();
				$this->DoMobileCheckoutPaymentResponseDetails->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * GetBalanceReq
 */
class GetBalanceReq {
	/**
	 * @access public
	 * @var GetBalanceRequestType
	 */
	public $GetBalanceRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:GetBalanceReq>';
		if($this->GetBalanceRequest != null ) {
			$str .='<urn:GetBalanceRequest>';
			$str .= $this->GetBalanceRequest->toXMLString();
			$str .=  '</urn:GetBalanceRequest>';
		 }
$str.='</urn:GetBalanceReq>';

		return $str;
	}

}

/**
 * GetBalanceRequestType
 */
class GetBalanceRequestType extends AbstractRequestType {
	/**
	 * @access public
	 * @var string
	 */
	public $ReturnAllCurrencies;


	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->ReturnAllCurrencies != null ) {
			$str .= '<urn:ReturnAllCurrencies>'.$this->ReturnAllCurrencies.'</urn:ReturnAllCurrencies>';
		 }

		return $str;
	}

}

/**
 * GetBalanceResponseType
 */
class GetBalanceResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var BasicAmountType
	 */
	public $Balance;

	/**
	 * @access public
	 * @var dateTime
	 */
	public $BalanceTimeStamp;

	/**
	 * array
	 * @access public
	 * @var BasicAmountType
	 */
	public $BalanceHoldings;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="balance") {
				$this->Balance = new BasicAmountType();
				$this->Balance->init($arry["children"]);
					}
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='balancetimestamp') {
				$this->BalanceTimeStamp = $arry["text"];
			}
			if (is_array($arry["children"])&& ($arry["children"])!=null) 	{
			$i=0;
			while(true) {
			if($arry["name"]=="balanceholdings[$i]") {
				$this->BalanceHoldings[$i] = new BasicAmountType();
				$this->BalanceHoldings[$i]->init($arry["children"]);
			}
			else break;
			$i++;
			}
		}
				if(is_array($arry["children"]) && ($arry["children"])!=null && $arry["name"]=="balanceholdings") {
				$this->BalanceHoldings = new BasicAmountType();
				$this->BalanceHoldings->init($arry["children"]);
					}
		}
		}
	}
}

/**
 * SetCustomerBillingAgreementReq
 */
class SetCustomerBillingAgreementReq {
	/**
	 * @access public
	 * @var SetCustomerBillingAgreementRequestType
	 */
	public $SetCustomerBillingAgreementRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:SetCustomerBillingAgreementReq>';
		if($this->SetCustomerBillingAgreementRequest != null ) {
			$str .='<urn:SetCustomerBillingAgreementRequest>';
			$str .= $this->SetCustomerBillingAgreementRequest->toXMLString();
			$str .=  '</urn:SetCustomerBillingAgreementRequest>';
		 }
$str.='</urn:SetCustomerBillingAgreementReq>';

		return $str;
	}

}

/**
 * SetCustomerBillingAgreementRequestType
 */
class SetCustomerBillingAgreementRequestType extends AbstractRequestType {
	/**
	 * @access public
	 * @var SetCustomerBillingAgreementRequestDetailsType
	 */
	public $SetCustomerBillingAgreementRequestDetails;


	public function __construct($SetCustomerBillingAgreementRequestDetails = null) {
		$this->SetCustomerBillingAgreementRequestDetails  = $SetCustomerBillingAgreementRequestDetails;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->SetCustomerBillingAgreementRequestDetails != null ) {
			$str .='<ebl:SetCustomerBillingAgreementRequestDetails>';
			$str .= $this->SetCustomerBillingAgreementRequestDetails->toXMLString();
			$str .=  '</ebl:SetCustomerBillingAgreementRequestDetails>';
		 }

		return $str;
	}

}

/**
 * SetCustomerBillingAgreementResponseType
 */
class SetCustomerBillingAgreementResponseType extends AbstractResponseType {
	/**
	 *
	 * @access public
	 * @var string
	 */
	public $Token;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='token') {
				$this->Token = $arry["text"];
			}
		}
		}
	}
}

/**
 * GetBillingAgreementCustomerDetailsReq
 */
class GetBillingAgreementCustomerDetailsReq {
	/**
	 * @access public
	 * @var GetBillingAgreementCustomerDetailsRequestType
	 */
	public $GetBillingAgreementCustomerDetailsRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:GetBillingAgreementCustomerDetailsReq>';
		if($this->GetBillingAgreementCustomerDetailsRequest != null ) {
			$str .='<urn:GetBillingAgreementCustomerDetailsRequest>';
			$str .= $this->GetBillingAgreementCustomerDetailsRequest->toXMLString();
			$str .=  '</urn:GetBillingAgreementCustomerDetailsRequest>';
		 }
$str.='</urn:GetBillingAgreementCustomerDetailsReq>';

		return $str;
	}

}

/**
 * GetBillingAgreementCustomerDetailsRequestType
 */
class GetBillingAgreementCustomerDetailsRequestType extends AbstractRequestType {
	/**
	 *
	 * @access public
	 * @var string
	 */
	public $Token;


	public function __construct($Token = null) {
		$this->Token  = $Token;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->Token != null ) {
			$str .= '<urn:Token>'.$this->Token.'</urn:Token>';
		 }

		return $str;
	}

}

/**
 * GetBillingAgreementCustomerDetailsResponseType
 */
class GetBillingAgreementCustomerDetailsResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var GetBillingAgreementCustomerDetailsResponseDetailsType
	 */
	public $GetBillingAgreementCustomerDetailsResponseDetails;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="getbillingagreementcustomerdetailsresponsedetails") {
				$this->GetBillingAgreementCustomerDetailsResponseDetails = new GetBillingAgreementCustomerDetailsResponseDetailsType();
				$this->GetBillingAgreementCustomerDetailsResponseDetails->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * CreateBillingAgreementReq
 */
class CreateBillingAgreementReq {
	/**
	 * @access public
	 * @var CreateBillingAgreementRequestType
	 */
	public $CreateBillingAgreementRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:CreateBillingAgreementReq>';
		if($this->CreateBillingAgreementRequest != null ) {
			$str .='<urn:CreateBillingAgreementRequest>';
			$str .= $this->CreateBillingAgreementRequest->toXMLString();
			$str .=  '</urn:CreateBillingAgreementRequest>';
		 }
$str.='</urn:CreateBillingAgreementReq>';

		return $str;
	}

}

/**
 * CreateBillingAgreementRequestType
 */
class CreateBillingAgreementRequestType extends AbstractRequestType {
	/**
	 *
	 * @access public
	 * @var string
	 */
	public $Token;


	public function __construct($Token = null) {
		$this->Token  = $Token;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->Token != null ) {
			$str .= '<urn:Token>'.$this->Token.'</urn:Token>';
		 }

		return $str;
	}

}

/**
 * CreateBillingAgreementResponseType
 */
class CreateBillingAgreementResponseType extends AbstractResponseType {
	/**
	 *
	 * @access public
	 * @var string
	 */
	public $BillingAgreementID;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='billingagreementid') {
				$this->BillingAgreementID = $arry["text"];
			}
		}
		}
	}
}

/**
 * DoReferenceTransactionReq
 */
class DoReferenceTransactionReq {
	/**
	 * @access public
	 * @var DoReferenceTransactionRequestType
	 */
	public $DoReferenceTransactionRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:DoReferenceTransactionReq>';
		if($this->DoReferenceTransactionRequest != null ) {
			$str .='<urn:DoReferenceTransactionRequest>';
			$str .= $this->DoReferenceTransactionRequest->toXMLString();
			$str .=  '</urn:DoReferenceTransactionRequest>';
		 }
$str.='</urn:DoReferenceTransactionReq>';

		return $str;
	}

}

/**
 * DoReferenceTransactionRequestType
 * This flag indicates that the response should include FMFDetails
 */
class DoReferenceTransactionRequestType extends AbstractRequestType {
	/**
	 * @access public
	 * @var DoReferenceTransactionRequestDetailsType
	 */
	public $DoReferenceTransactionRequestDetails;

	/**
This flag indicates that the response should include FMFDetails	 *
	 * @access public
	 * @var int
	 */
	public $ReturnFMFDetails;


	public function __construct($DoReferenceTransactionRequestDetails = null) {
		$this->DoReferenceTransactionRequestDetails  = $DoReferenceTransactionRequestDetails;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->DoReferenceTransactionRequestDetails != null ) {
			$str .='<ebl:DoReferenceTransactionRequestDetails>';
			$str .= $this->DoReferenceTransactionRequestDetails->toXMLString();
			$str .=  '</ebl:DoReferenceTransactionRequestDetails>';
		 }
		if($this->ReturnFMFDetails != null ) {
			$str .= '<urn:ReturnFMFDetails>'.$this->ReturnFMFDetails.'</urn:ReturnFMFDetails>';
		 }

		return $str;
	}

}

/**
 * DoReferenceTransactionResponseType
 */
class DoReferenceTransactionResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var DoReferenceTransactionResponseDetailsType
	 */
	public $DoReferenceTransactionResponseDetails;

	/**
	 * @access public
	 * @var FMFDetailsType
	 */
	public $FMFDetails;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="doreferencetransactionresponsedetails") {
				$this->DoReferenceTransactionResponseDetails = new DoReferenceTransactionResponseDetailsType();
				$this->DoReferenceTransactionResponseDetails->init($arry["children"]);
					}
			}
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="fmfdetails") {
				$this->FMFDetails = new FMFDetailsType();
				$this->FMFDetails->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * DoNonReferencedCreditReq
 */
class DoNonReferencedCreditReq {
	/**
	 * @access public
	 * @var DoNonReferencedCreditRequestType
	 */
	public $DoNonReferencedCreditRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:DoNonReferencedCreditReq>';
		if($this->DoNonReferencedCreditRequest != null ) {
			$str .='<urn:DoNonReferencedCreditRequest>';
			$str .= $this->DoNonReferencedCreditRequest->toXMLString();
			$str .=  '</urn:DoNonReferencedCreditRequest>';
		 }
$str.='</urn:DoNonReferencedCreditReq>';

		return $str;
	}

}

/**
 * DoNonReferencedCreditRequestType
 */
class DoNonReferencedCreditRequestType extends AbstractRequestType {
	/**
	 * @access public
	 * @var DoNonReferencedCreditRequestDetailsType
	 */
	public $DoNonReferencedCreditRequestDetails;


	public function __construct($DoNonReferencedCreditRequestDetails = null) {
		$this->DoNonReferencedCreditRequestDetails  = $DoNonReferencedCreditRequestDetails;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->DoNonReferencedCreditRequestDetails != null ) {
			$str .='<ebl:DoNonReferencedCreditRequestDetails>';
			$str .= $this->DoNonReferencedCreditRequestDetails->toXMLString();
			$str .=  '</ebl:DoNonReferencedCreditRequestDetails>';
		 }

		return $str;
	}

}

/**
 * DoNonReferencedCreditResponseType
 */
class DoNonReferencedCreditResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var DoNonReferencedCreditResponseDetailsType
	 */
	public $DoNonReferencedCreditResponseDetails;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="dononreferencedcreditresponsedetails") {
				$this->DoNonReferencedCreditResponseDetails = new DoNonReferencedCreditResponseDetailsType();
				$this->DoNonReferencedCreditResponseDetails->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * CreateRecurringPaymentsProfileReq
 */
class CreateRecurringPaymentsProfileReq {
	/**
	 * @access public
	 * @var CreateRecurringPaymentsProfileRequestType
	 */
	public $CreateRecurringPaymentsProfileRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:CreateRecurringPaymentsProfileReq>';
		if($this->CreateRecurringPaymentsProfileRequest != null ) {
			$str .='<urn:CreateRecurringPaymentsProfileRequest>';
			$str .= $this->CreateRecurringPaymentsProfileRequest->toXMLString();
			$str .=  '</urn:CreateRecurringPaymentsProfileRequest>';
		 }
$str.='</urn:CreateRecurringPaymentsProfileReq>';

		return $str;
	}

}

/**
 * CreateRecurringPaymentsProfileRequestType
 */
class CreateRecurringPaymentsProfileRequestType extends AbstractRequestType {
	/**
	 * @access public
	 * @var CreateRecurringPaymentsProfileRequestDetailsType
	 */
	public $CreateRecurringPaymentsProfileRequestDetails;


	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->CreateRecurringPaymentsProfileRequestDetails != null ) {
			$str .='<ebl:CreateRecurringPaymentsProfileRequestDetails>';
			$str .= $this->CreateRecurringPaymentsProfileRequestDetails->toXMLString();
			$str .=  '</ebl:CreateRecurringPaymentsProfileRequestDetails>';
		 }

		return $str;
	}

}

/**
 * CreateRecurringPaymentsProfileResponseType
 */
class CreateRecurringPaymentsProfileResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var CreateRecurringPaymentsProfileResponseDetailsType
	 */
	public $CreateRecurringPaymentsProfileResponseDetails;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="createrecurringpaymentsprofileresponsedetails") {
				$this->CreateRecurringPaymentsProfileResponseDetails = new CreateRecurringPaymentsProfileResponseDetailsType();
				$this->CreateRecurringPaymentsProfileResponseDetails->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * GetRecurringPaymentsProfileDetailsReq
 */
class GetRecurringPaymentsProfileDetailsReq {
	/**
	 * @access public
	 * @var GetRecurringPaymentsProfileDetailsRequestType
	 */
	public $GetRecurringPaymentsProfileDetailsRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:GetRecurringPaymentsProfileDetailsReq>';
		if($this->GetRecurringPaymentsProfileDetailsRequest != null ) {
			$str .='<urn:GetRecurringPaymentsProfileDetailsRequest>';
			$str .= $this->GetRecurringPaymentsProfileDetailsRequest->toXMLString();
			$str .=  '</urn:GetRecurringPaymentsProfileDetailsRequest>';
		 }
$str.='</urn:GetRecurringPaymentsProfileDetailsReq>';

		return $str;
	}

}

/**
 * GetRecurringPaymentsProfileDetailsRequestType
 */
class GetRecurringPaymentsProfileDetailsRequestType extends AbstractRequestType {
	/**
	 *
	 * @access public
	 * @var string
	 */
	public $ProfileID;


	public function __construct($ProfileID = null) {
		$this->ProfileID  = $ProfileID;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->ProfileID != null ) {
			$str .= '<urn:ProfileID>'.$this->ProfileID.'</urn:ProfileID>';
		 }

		return $str;
	}

}

/**
 * GetRecurringPaymentsProfileDetailsResponseType
 */
class GetRecurringPaymentsProfileDetailsResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var GetRecurringPaymentsProfileDetailsResponseDetailsType
	 */
	public $GetRecurringPaymentsProfileDetailsResponseDetails;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="getrecurringpaymentsprofiledetailsresponsedetails") {
				$this->GetRecurringPaymentsProfileDetailsResponseDetails = new GetRecurringPaymentsProfileDetailsResponseDetailsType();
				$this->GetRecurringPaymentsProfileDetailsResponseDetails->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * ManageRecurringPaymentsProfileStatusReq
 */
class ManageRecurringPaymentsProfileStatusReq {
	/**
	 * @access public
	 * @var ManageRecurringPaymentsProfileStatusRequestType
	 */
	public $ManageRecurringPaymentsProfileStatusRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:ManageRecurringPaymentsProfileStatusReq>';
		if($this->ManageRecurringPaymentsProfileStatusRequest != null ) {
			$str .='<urn:ManageRecurringPaymentsProfileStatusRequest>';
			$str .= $this->ManageRecurringPaymentsProfileStatusRequest->toXMLString();
			$str .=  '</urn:ManageRecurringPaymentsProfileStatusRequest>';
		 }
$str.='</urn:ManageRecurringPaymentsProfileStatusReq>';

		return $str;
	}

}

/**
 * ManageRecurringPaymentsProfileStatusRequestType
 */
class ManageRecurringPaymentsProfileStatusRequestType extends AbstractRequestType {
	/**
	 * @access public
	 * @var ManageRecurringPaymentsProfileStatusRequestDetailsType
	 */
	public $ManageRecurringPaymentsProfileStatusRequestDetails;


	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->ManageRecurringPaymentsProfileStatusRequestDetails != null ) {
			$str .='<ebl:ManageRecurringPaymentsProfileStatusRequestDetails>';
			$str .= $this->ManageRecurringPaymentsProfileStatusRequestDetails->toXMLString();
			$str .=  '</ebl:ManageRecurringPaymentsProfileStatusRequestDetails>';
		 }

		return $str;
	}

}

/**
 * ManageRecurringPaymentsProfileStatusResponseType
 */
class ManageRecurringPaymentsProfileStatusResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var ManageRecurringPaymentsProfileStatusResponseDetailsType
	 */
	public $ManageRecurringPaymentsProfileStatusResponseDetails;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="managerecurringpaymentsprofilestatusresponsedetails") {
				$this->ManageRecurringPaymentsProfileStatusResponseDetails = new ManageRecurringPaymentsProfileStatusResponseDetailsType();
				$this->ManageRecurringPaymentsProfileStatusResponseDetails->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * BillOutstandingAmountReq
 */
class BillOutstandingAmountReq {
	/**
	 * @access public
	 * @var BillOutstandingAmountRequestType
	 */
	public $BillOutstandingAmountRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:BillOutstandingAmountReq>';
		if($this->BillOutstandingAmountRequest != null ) {
			$str .='<urn:BillOutstandingAmountRequest>';
			$str .= $this->BillOutstandingAmountRequest->toXMLString();
			$str .=  '</urn:BillOutstandingAmountRequest>';
		 }
$str.='</urn:BillOutstandingAmountReq>';

		return $str;
	}

}

/**
 * BillOutstandingAmountRequestType
 */
class BillOutstandingAmountRequestType extends AbstractRequestType {
	/**
	 * @access public
	 * @var BillOutstandingAmountRequestDetailsType
	 */
	public $BillOutstandingAmountRequestDetails;


	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->BillOutstandingAmountRequestDetails != null ) {
			$str .='<ebl:BillOutstandingAmountRequestDetails>';
			$str .= $this->BillOutstandingAmountRequestDetails->toXMLString();
			$str .=  '</ebl:BillOutstandingAmountRequestDetails>';
		 }

		return $str;
	}

}

/**
 * BillOutstandingAmountResponseType
 */
class BillOutstandingAmountResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var BillOutstandingAmountResponseDetailsType
	 */
	public $BillOutstandingAmountResponseDetails;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="billoutstandingamountresponsedetails") {
				$this->BillOutstandingAmountResponseDetails = new BillOutstandingAmountResponseDetailsType();
				$this->BillOutstandingAmountResponseDetails->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * UpdateRecurringPaymentsProfileReq
 */
class UpdateRecurringPaymentsProfileReq {
	/**
	 * @access public
	 * @var UpdateRecurringPaymentsProfileRequestType
	 */
	public $UpdateRecurringPaymentsProfileRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:UpdateRecurringPaymentsProfileReq>';
		if($this->UpdateRecurringPaymentsProfileRequest != null ) {
			$str .='<urn:UpdateRecurringPaymentsProfileRequest>';
			$str .= $this->UpdateRecurringPaymentsProfileRequest->toXMLString();
			$str .=  '</urn:UpdateRecurringPaymentsProfileRequest>';
		 }
$str.='</urn:UpdateRecurringPaymentsProfileReq>';

		return $str;
	}

}

/**
 * UpdateRecurringPaymentsProfileRequestType
 */
class UpdateRecurringPaymentsProfileRequestType extends AbstractRequestType {
	/**
	 * @access public
	 * @var UpdateRecurringPaymentsProfileRequestDetailsType
	 */
	public $UpdateRecurringPaymentsProfileRequestDetails;


	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->UpdateRecurringPaymentsProfileRequestDetails != null ) {
			$str .='<ebl:UpdateRecurringPaymentsProfileRequestDetails>';
			$str .= $this->UpdateRecurringPaymentsProfileRequestDetails->toXMLString();
			$str .=  '</ebl:UpdateRecurringPaymentsProfileRequestDetails>';
		 }

		return $str;
	}

}

/**
 * UpdateRecurringPaymentsProfileResponseType
 */
class UpdateRecurringPaymentsProfileResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var UpdateRecurringPaymentsProfileResponseDetailsType
	 */
	public $UpdateRecurringPaymentsProfileResponseDetails;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="updaterecurringpaymentsprofileresponsedetails") {
				$this->UpdateRecurringPaymentsProfileResponseDetails = new UpdateRecurringPaymentsProfileResponseDetailsType();
				$this->UpdateRecurringPaymentsProfileResponseDetails->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * GetPalDetailsReq
 */
class GetPalDetailsReq {
	/**
	 * @access public
	 * @var GetPalDetailsRequestType
	 */
	public $GetPalDetailsRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:GetPalDetailsReq>';
		if($this->GetPalDetailsRequest != null ) {
			$str .='<urn:GetPalDetailsRequest>';
			$str .= $this->GetPalDetailsRequest->toXMLString();
			$str .=  '</urn:GetPalDetailsRequest>';
		 }
$str.='</urn:GetPalDetailsReq>';

		return $str;
	}

}

/**
 * GetPalDetailsRequestType
 */
class GetPalDetailsRequestType extends AbstractRequestType {

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();

		return $str;
	}

}

/**
 * GetPalDetailsResponseType
 */
class GetPalDetailsResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var string
	 */
	public $Pal;

	/**
	 * @access public
	 * @var string
	 */
	public $Locale;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if($arry != null && isset($arry['text']) && $arry['name']=='pal') {
				$this->Pal = $arry["text"];
			}
			if($arry != null && isset($arry['text']) && $arry['name']=='locale') {
				$this->Locale = $arry["text"];
			}
		}
		}
	}
}

/**
 * ReverseTransactionReq
 */
class ReverseTransactionReq {
	/**
	 * @access public
	 * @var ReverseTransactionRequestType
	 */
	public $ReverseTransactionRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:ReverseTransactionReq>';
		if($this->ReverseTransactionRequest != null ) {
			$str .='<urn:ReverseTransactionRequest>';
			$str .= $this->ReverseTransactionRequest->toXMLString();
			$str .=  '</urn:ReverseTransactionRequest>';
		 }
$str.='</urn:ReverseTransactionReq>';

		return $str;
	}

}

/**
 * ReverseTransactionRequestType
 */
class ReverseTransactionRequestType extends AbstractRequestType {
	/**
	 * @access public
	 * @var ReverseTransactionRequestDetailsType
	 */
	public $ReverseTransactionRequestDetails;


	public function __construct($ReverseTransactionRequestDetails = null) {
		$this->ReverseTransactionRequestDetails  = $ReverseTransactionRequestDetails;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->ReverseTransactionRequestDetails != null ) {
			$str .='<ebl:ReverseTransactionRequestDetails>';
			$str .= $this->ReverseTransactionRequestDetails->toXMLString();
			$str .=  '</ebl:ReverseTransactionRequestDetails>';
		 }

		return $str;
	}

}

/**
 * ReverseTransactionResponseType
 */
class ReverseTransactionResponseType extends AbstractResponseType {
	/**
	 * @access public
	 * @var ReverseTransactionResponseDetailsType
	 */
	public $ReverseTransactionResponseDetails;


	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
			if ( is_array($arry["children"])&& ($arry["children"])!=null) 	{
			if( $arry["name"]=="reversetransactionresponsedetails") {
				$this->ReverseTransactionResponseDetails = new ReverseTransactionResponseDetailsType();
				$this->ReverseTransactionResponseDetails->init($arry["children"]);
					}
			}
		}
		}
	}
}

/**
 * ExternalRememberMeOptOutReq
 */
class ExternalRememberMeOptOutReq {
	/**
	 * @access public
	 * @var ExternalRememberMeOptOutRequestType
	 */
	public $ExternalRememberMeOptOutRequest;


	public function toXMLString()  {
		$str = '';
$str.='<urn:ExternalRememberMeOptOutReq>';
		if($this->ExternalRememberMeOptOutRequest != null ) {
			$str .='<urn:ExternalRememberMeOptOutRequest>';
			$str .= $this->ExternalRememberMeOptOutRequest->toXMLString();
			$str .=  '</urn:ExternalRememberMeOptOutRequest>';
		 }
$str.='</urn:ExternalRememberMeOptOutReq>';

		return $str;
	}

}

/**
 * ExternalRememberMeOptOutRequestType
 * The merchant passes in the ExternalRememberMeID to identify the user to opt out.  This is a 17-character
 * alphanumeric (encrypted) string that identifies the buyer's remembered login with a merchant and has
 * meaning only to the merchant.
 * Required
 */
class ExternalRememberMeOptOutRequestType extends AbstractRequestType {
	/**
	 * The merchant passes in the ExternalRememberMeID to identify the user to opt out.  This is a 17-character
	 * alphanumeric (encrypted) string that identifies the buyer's remembered login with a merchant and has
	 * meaning only to the merchant.
	 * Required
	 *
	 * @access public
	 * @var string
	 */
	public $ExternalRememberMeID;

	/**
	 * E-mail address or secure merchant account ID of merchant to associate with
	 * external remember-me.
	 *
	 * @access public
	 * @var ExternalRememberMeOwnerDetailsType
	 */
	public $ExternalRememberMeOwnerDetails;


	public function __construct($ExternalRememberMeID = null) {
		$this->ExternalRememberMeID  = $ExternalRememberMeID;
	}

	public function toXMLString()  {
		$str = '';
$str.=parent::toXMLString();
		if($this->ExternalRememberMeID != null ) {
			$str .= '<urn:ExternalRememberMeID>'.$this->ExternalRememberMeID.'</urn:ExternalRememberMeID>';
		 }
		if($this->ExternalRememberMeOwnerDetails != null ) {
			$str .='<urn:ExternalRememberMeOwnerDetails>';
			$str .= $this->ExternalRememberMeOwnerDetails->toXMLString();
			$str .=  '</urn:ExternalRememberMeOwnerDetails>';
		 }

		return $str;
	}

}

/**
 * ExternalRememberMeOptOutResponseType
 */
class ExternalRememberMeOptOutResponseType extends AbstractResponseType {

	public function init($arr = null) {
		if($arr != null) {
			parent::init($arr);			foreach ($arr as $arry){
		}
		}
	}
}

?>

