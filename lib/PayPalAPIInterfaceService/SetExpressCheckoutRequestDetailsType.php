<?php 
/**
 * The total cost of the order to the customer. If shipping
 * cost and tax charges are known, include them in OrderTotal;
 * if not, OrderTotal should be the current sub-total of the
 * order. You must set the currencyID attribute to one of the
 * three-character currency codes for any of the supported
 * PayPal currencies. Limitations: Must not exceed $10,000 USD
 * in any currency. No currency symbol. Decimal separator must
 * be a period (.), and the thousands separator must be a comma
 * (,). 
 */
class SetExpressCheckoutRequestDetailsType  
   extends PPXmlMessage{

	/**
	 * The total cost of the order to the customer. If shipping
	 * cost and tax charges are known, include them in OrderTotal;
	 * if not, OrderTotal should be the current sub-total of the
	 * order. You must set the currencyID attribute to one of the
	 * three-character currency codes for any of the supported
	 * PayPal currencies. Limitations: Must not exceed $10,000 USD
	 * in any currency. No currency symbol. Decimal separator must
	 * be a period (.), and the thousands separator must be a comma
	 * (,).
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var BasicAmountType 	 
	 */ 
	public $OrderTotal;

	/**
	 * URL to which the customer's browser is returned after
	 * choosing to pay with PayPal. PayPal recommends that the
	 * value of ReturnURL be the final review page on which the
	 * customer confirms the order and payment. Required Character
	 * length and limitations: no limit. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ReturnURL;

	/**
	 * URL to which the customer is returned if he does not approve
	 * the use of PayPal to pay you. PayPal recommends that the
	 * value of CancelURL be the original page on which the
	 * customer chose to pay with PayPal. Required Character length
	 * and limitations: no limit
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $CancelURL;

	/**
	 * Tracking URL for ebay. Required Character length and
	 * limitations: no limit
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $TrackingImageURL;

	/**
	 * URL to which the customer's browser is returned after paying
	 * with giropay online. Optional Character length and
	 * limitations: no limit.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $giropaySuccessURL;

	/**
	 * URL to which the customer's browser is returned after fail
	 * to pay with giropay online. Optional Character length and
	 * limitations: no limit.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $giropayCancelURL;

	/**
	 * URL to which the customer's browser can be returned in the
	 * mEFT done page. Optional Character length and limitations:
	 * no limit.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $BanktxnPendingURL;

	/**
	 * On your first invocation of SetExpressCheckoutRequest, the
	 * value of this token is returned by
	 * SetExpressCheckoutResponse. Optional Include this element
	 * and its value only if you want to modify an existing
	 * checkout session with another invocation of
	 * SetExpressCheckoutRequest; for example, if you want the
	 * customer to edit his shipping address on PayPal. Character
	 * length and limitations: 20 single-byte characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Token;

	/**
	 * The expected maximum total amount of the complete order,
	 * including shipping cost and tax charges. Optional You must
	 * set the currencyID attribute to one of the three-character
	 * currency codes for any of the supported PayPal currencies.
	 * Limitations: Must not exceed $10,000 USD in any currency. No
	 * currency symbol. Decimal separator must be a period (.), and
	 * the thousands separator must be a comma (,).
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var BasicAmountType 	 
	 */ 
	public $MaxAmount;

	/**
	 * Description of items the customer is purchasing. Optional
	 * Character length and limitations: 127 single-byte
	 * alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $OrderDescription;

	/**
	 * A free-form field for your own use, such as a tracking
	 * number or other value you want PayPal to return on
	 * GetExpressCheckoutDetailsResponse and
	 * DoExpressCheckoutPaymentResponse. Optional Character length
	 * and limitations: 256 single-byte alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Custom;

	/**
	 * Your own unique invoice or tracking number. PayPal returns
	 * this value to you on DoExpressCheckoutPaymentResponse.
	 * Optional Character length and limitations: 127 single-byte
	 * alphanumeric characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $InvoiceID;

	/**
	 * The value 1 indicates that you require that the customer's
	 * shipping address on file with PayPal be a confirmed address.
	 * Any value other than 1 indicates that the customer's
	 * shipping address on file with PayPal need NOT be a confirmed
	 * address. Setting this element overrides the setting you have
	 * specified in the recipient's Merchant Account Profile.
	 * Optional Character length and limitations: One single-byte
	 * numeric character.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ReqConfirmShipping;

	/**
	 * The value 1 indicates that you require that the customer's
	 * billing address on file. Setting this element overrides the
	 * setting you have specified in Admin. Optional Character
	 * length and limitations: One single-byte numeric character. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ReqBillingAddress;

	/**
	 * The billing address for the buyer. Optional If you include
	 * the BillingAddress element, the AddressType elements are
	 * required: Name Street1 CityName CountryCode Do not set set
	 * the CountryName element. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var AddressType 	 
	 */ 
	public $BillingAddress;

	/**
	 * The value 1 indicates that on the PayPal pages, no shipping
	 * address fields should be displayed whatsoever. Optional
	 * Character length and limitations: Four single-byte numeric
	 * characters.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $NoShipping;

	/**
	 * The value 1 indicates that the PayPal pages should display
	 * the shipping address set by you in the Address element on
	 * this SetExpressCheckoutRequest, not the shipping address on
	 * file with PayPal for this customer. Displaying the PayPal
	 * street address on file does not allow the customer to edit
	 * that address. Optional Character length and limitations:
	 * Four single-byte numeric characters.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $AddressOverride;

	/**
	 * Locale of pages displayed by PayPal during Express Checkout.
	 * Optional Character length and limitations: Five single-byte
	 * alphabetic characters, upper- or lowercase. Allowable
	 * values: AU or en_AUDE or de_DEFR or fr_FRGB or en_GBIT or
	 * it_ITJP or ja_JPUS or en_US
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $LocaleCode;

	/**
	 * Sets the Custom Payment Page Style for payment pages
	 * associated with this button/link. PageStyle corresponds to
	 * the HTML variable page_style for customizing payment pages.
	 * The value is the same as the Page Style Name you chose when
	 * adding or editing the page style from the Profile subtab of
	 * the My Account tab of your PayPal account. Optional
	 * Character length and limitations: 30 single-byte alphabetic
	 * characters. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $PageStyle;

	/**
	 * A URL for the image you want to appear at the top left of
	 * the payment page. The image has a maximum size of 750 pixels
	 * wide by 90 pixels high. PayPal recommends that you provide
	 * an image that is stored on a secure (https) server. Optional
	 * Character length and limitations: 127
	 * @access public
	 
	 * @namespace ebl
	 
	 
	 * @name cpp-header-image
	 	 	 	 
	 * @var string 	 
	 */ 
	public $cppheaderimage;

	/**
	 * Sets the border color around the header of the payment page.
	 * The border is a 2-pixel perimeter around the header space,
	 * which is 750 pixels wide by 90 pixels high. Optional
	 * Character length and limitations: Six character HTML
	 * hexadecimal color code in ASCII
	 * @access public
	 
	 * @namespace ebl
	 
	 
	 * @name cpp-header-border-color
	 	 	 	 
	 * @var string 	 
	 */ 
	public $cppheaderbordercolor;

	/**
	 * Sets the background color for the header of the payment
	 * page. Optional Character length and limitation: Six
	 * character HTML hexadecimal color code in ASCII
	 * @access public
	 
	 * @namespace ebl
	 
	 
	 * @name cpp-header-back-color
	 	 	 	 
	 * @var string 	 
	 */ 
	public $cppheaderbackcolor;

	/**
	 * Sets the background color for the payment page. Optional
	 * Character length and limitation: Six character HTML
	 * hexadecimal color code in ASCII
	 * @access public
	 
	 * @namespace ebl
	 
	 
	 * @name cpp-payflow-color
	 	 	 	 
	 * @var string 	 
	 */ 
	public $cpppayflowcolor;

	/**
	 * Sets the cart gradient color for the Mini Cart on 1X flow.
	 * Optional Character length and limitation: Six character HTML
	 * hexadecimal color code in ASCII
	 * @access public
	 
	 * @namespace ebl
	 
	 
	 * @name cpp-cart-border-color
	 	 	 	 
	 * @var string 	 
	 */ 
	public $cppcartbordercolor;

	/**
	 * A URL for the image you want to appear above the mini-cart.
	 * The image has a maximum size of 190 pixels wide by 60 pixels
	 * high. PayPal recommends that you provide an image that is
	 * stored on a secure (https) server. Optional Character length
	 * and limitations: 127
	 * @access public
	 
	 * @namespace ebl
	 
	 
	 * @name cpp-logo-image
	 	 	 	 
	 * @var string 	 
	 */ 
	public $cpplogoimage;

	/**
	 * Customer's shipping address. Optional If you include a
	 * shipping address and set the AddressOverride element on the
	 * request, PayPal returns this same address in
	 * GetExpressCheckoutDetailsResponse. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var AddressType 	 
	 */ 
	public $Address;

	/**
	 * How you want to obtain payment. Required Authorization
	 * indicates that this payment is a basic authorization subject
	 * to settlement with PayPal Authorization and Capture. Order
	 * indicates that this payment is is an order authorization
	 * subject to settlement with PayPal Authorization and Capture.
	 * Sale indicates that this is a final sale for which you are
	 * requesting payment. IMPORTANT: You cannot set PaymentAction
	 * to Sale or Order on SetExpressCheckoutRequest and then
	 * change PaymentAction to Authorization on the final Express
	 * Checkout API, DoExpressCheckoutPaymentRequest. Character
	 * length and limit: Up to 13 single-byte alphabetic characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $PaymentAction;

	/**
	 * This will indicate which flow you are choosing
	 * (expresschecheckout or expresscheckout optional) Optional
	 * None Sole indicates that you are in the ExpressO flow Mark
	 * indicates that you are in the old express flow. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $SolutionType;

	/**
	 * This indicates Which page to display for ExpressO (Billing
	 * or Login) Optional None Billing indicates that you are not a
	 * paypal account holder Login indicates that you are a paypal
	 * account holder 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $LandingPage;

	/**
	 * Email address of the buyer as entered during checkout.
	 * PayPal uses this value to pre-fill the PayPal membership
	 * sign-up portion of the PayPal login page. Optional Character
	 * length and limit: 127 single-byte alphanumeric characters 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $BuyerEmail;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ChannelType;

	/**
	 * 
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var BillingAgreementDetailsType 	 
	 */ 
	public $BillingAgreementDetails;

	/**
	 * Promo Code Optional List of promo codes supplied by
	 * merchant. These promo codes enable the Merchant Services
	 * Promotion Financing feature. 
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $PromoCodes;

	/**
	 * Default Funding option for PayLater Checkout button. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $PayPalCheckOutBtnType;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ProductCategory;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ShippingMethod;

	/**
	 * Date and time (in GMT in the format yyyy-MM-ddTHH:mm:ssZ) at
	 * which address was changed by the user. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var dateTime 	 
	 */ 
	public $ProfileAddressChangeDate;

	/**
	 * The value 1 indicates that the customer may enter a note to
	 * the merchant on the PayPal page during checkout. The note is
	 * returned in the GetExpressCheckoutDetails response and the
	 * DoExpressCheckoutPayment response. Optional Character length
	 * and limitations: One single-byte numeric character.
	 * Allowable values: 0,1 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $AllowNote;

	/**
	 * Funding source preferences. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var FundingSourceDetailsType 	 
	 */ 
	public $FundingSourceDetails;

	/**
	 * The label that needs to be displayed on the cancel links in
	 * the PayPal hosted checkout pages. Optional Character length
	 * and limit: 127 single-byte alphanumeric characters 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $BrandName;

	/**
	 * URL for PayPal to use to retrieve shipping, handling,
	 * insurance, and tax details from your website. Optional
	 * Character length and limitations: 2048 characters. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $CallbackURL;

	/**
	 * Enhanced data for different industry segments. Optional 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var EnhancedCheckoutDataType 	 
	 */ 
	public $EnhancedCheckoutData;

	/**
	 * List of other payment methods the user can pay with.
	 * Optional Refer to the OtherPaymentMethodDetailsType for more
	 * details. 
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var OtherPaymentMethodDetailsType 	 
	 */ 
	public $OtherPaymentMethods;

	/**
	 * Details about the buyer's account. Optional Refer to the
	 * BuyerDetailsType for more details. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var BuyerDetailsType 	 
	 */ 
	public $BuyerDetails;

	/**
	 * Information about the payment. 
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PaymentDetailsType 	 
	 */ 
	public $PaymentDetails;

	/**
	 * List of Fall Back Shipping options provided by merchant. 
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var ShippingOptionType 	 
	 */ 
	public $FlatRateShippingOptions;

	/**
	 * Information about the call back timeout override. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $CallbackTimeout;

	/**
	 * Information about the call back version. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $CallbackVersion;

	/**
	 * Information about the Customer service number. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $CustomerServiceNumber;

	/**
	 * Information about the Gift message enable. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $GiftMessageEnable;

	/**
	 * Information about the Gift receipt enable. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $GiftReceiptEnable;

	/**
	 * Information about the Gift Wrap enable. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $GiftWrapEnable;

	/**
	 * Information about the Gift Wrap name. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $GiftWrapName;

	/**
	 * Information about the Gift Wrap amount. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var BasicAmountType 	 
	 */ 
	public $GiftWrapAmount;

	/**
	 * Information about the Buyer email option enable . 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $BuyerEmailOptInEnable;

	/**
	 * Information about the survey enable. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $SurveyEnable;

	/**
	 * Information about the survey question. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $SurveyQuestion;

	/**
	 * Information about the survey choices for survey question. 
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $SurveyChoice;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $TotalType;

	/**
	 * Any message the seller would like to be displayed in the
	 * Mini Cart for UX. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $NoteToBuyer;

	/**
	 * Incentive Code Optional List of incentive codes supplied by
	 * ebay/merchant. 
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var IncentiveInfoType 	 
	 */ 
	public $Incentives;

	/**
	 * Merchant specified flag which indicates whether to return
	 * Funding Instrument Details in DoEC or not. Optional 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ReqInstrumentDetails;

	/**
	 * This element contains information that allows the merchant
	 * to request to opt into external remember me on behalf of the
	 * buyer or to request login bypass using external remember me.
	 * Note the opt-in details are silently ignored if the
	 * ExternalRememberMeID is present. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var ExternalRememberMeOptInDetailsType 	 
	 */ 
	public $ExternalRememberMeOptInDetails;

	/**
	 * An optional set of values related to flow-specific details. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var FlowControlDetailsType 	 
	 */ 
	public $FlowControlDetails;

	/**
	 * An optional set of values related to display-specific
	 * details. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var DisplayControlDetailsType 	 
	 */ 
	public $DisplayControlDetails;

	/**
	 * An optional set of values related to tracking for external
	 * partner. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var ExternalPartnerTrackingDetailsType 	 
	 */ 
	public $ExternalPartnerTrackingDetails;

	/**
	 * Optional element that defines relationship between buckets 
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var CoupledBucketsType 	 
	 */ 
	public $CoupledBuckets;


  
 
}
