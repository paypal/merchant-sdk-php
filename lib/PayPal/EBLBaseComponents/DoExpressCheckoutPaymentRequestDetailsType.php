<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * How you want to obtain payment. Required Authorization
 * indicates that this payment is a basic authorization subject
 * to settlement with PayPal Authorization and Capture. Order
 * indicates that this payment is is an order authorization
 * subject to settlement with PayPal Authorization and Capture.
 * Sale indicates that this is a final sale for which you are
 * requesting payment. IMPORTANT: You cannot set PaymentAction
 * to Sale on SetExpressCheckoutRequest and then change
 * PaymentAction to Authorization on the final Express Checkout
 * API, DoExpressCheckoutPaymentRequest. Character length and
 * limit: Up to 13 single-byte alphabetic characters 
 */
class DoExpressCheckoutPaymentRequestDetailsType  
   extends PPXmlMessage{

	/**
	 * How you want to obtain payment. Required Authorization
	 * indicates that this payment is a basic authorization subject
	 * to settlement with PayPal Authorization and Capture. Order
	 * indicates that this payment is is an order authorization
	 * subject to settlement with PayPal Authorization and Capture.
	 * Sale indicates that this is a final sale for which you are
	 * requesting payment. IMPORTANT: You cannot set PaymentAction
	 * to Sale on SetExpressCheckoutRequest and then change
	 * PaymentAction to Authorization on the final Express Checkout
	 * API, DoExpressCheckoutPaymentRequest. Character length and
	 * limit: Up to 13 single-byte alphabetic characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $PaymentAction;

	/**
	 * The timestamped token value that was returned by
	 * SetExpressCheckoutResponse and passed on
	 * GetExpressCheckoutDetailsRequest. Required Character length
	 * and limitations: 20 single-byte characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\string	 
	 */ 
	public $Token;

	/**
	 * Encrypted PayPal customer account identification number as
	 * returned by GetExpressCheckoutDetailsResponse. Required
	 * Character length and limitations: 127 single-byte
	 * characters.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\string	 
	 */ 
	public $PayerID;

	/**
	 * URL on Merchant site pertaining to this invoice. Optional 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $OrderURL;

	/**
	 * Information about the payment Required 
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\PaymentDetailsType	 
	 */ 
	public $PaymentDetails;

	/**
	 * Flag to indicate if previously set promoCode shall be
	 * overriden. Value 1 indicates overriding.  
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $PromoOverrideFlag;

	/**
	 * Promotional financing code for item. Overrides any previous
	 * PromoCode setting. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $PromoCode;

	/**
	 * Contains data for enhanced data like Airline Itinerary Data.
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\EnhancedDataType	 
	 */ 
	public $EnhancedData;

	/**
	 * Soft Descriptor supported for Sale and Auth in DEC only. For
	 * Order this will be ignored. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $SoftDescriptor;

	/**
	 * Information about the user selected options. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\UserSelectedOptionType	 
	 */ 
	public $UserSelectedOptions;

	/**
	 * Information about the Gift message. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $GiftMessage;

	/**
	 * Information about the Gift receipt enable. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $GiftReceiptEnable;

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
	 
	 	 	 	 
	 * @var PayPal\CoreComponentTypes\BasicAmountType	 
	 */ 
	public $GiftWrapAmount;

	/**
	 * Information about the Buyer marketing email. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $BuyerMarketingEmail;

	/**
	 * Information about the survey question. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $SurveyQuestion;

	/**
	 * Information about the survey choice selected by the user. 
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $SurveyChoiceSelected;

	/**
	 * An identification code for use by third-party applications
	 * to identify transactions. Optional Character length and
	 * limitations: 32 single-byte alphanumeric characters 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $ButtonSource= "PayPal_SDK";

	/**
	 * Merchant specified flag which indicates whether to create
	 * billing agreement as part of DoEC or not. Optional 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var boolean	 
	 */ 
	public $SkipBACreation;

	/**
	 * Optional element that defines relationship between buckets 
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\CoupledBucketsType	 
	 */ 
	public $CoupledBuckets;


    
}
