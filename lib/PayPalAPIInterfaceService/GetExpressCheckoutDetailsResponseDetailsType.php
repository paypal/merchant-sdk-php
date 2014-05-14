<?php 
/**
 * The timestamped token value that was returned by
 * SetExpressCheckoutResponse and passed on
 * GetExpressCheckoutDetailsRequest. Character length and
 * limitations: 20 single-byte characters 
 */
class GetExpressCheckoutDetailsResponseDetailsType  
   extends PPXmlMessage{

	/**
	 * The timestamped token value that was returned by
	 * SetExpressCheckoutResponse and passed on
	 * GetExpressCheckoutDetailsRequest. Character length and
	 * limitations: 20 single-byte characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Token;

	/**
	 * Information about the payer
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayerInfoType 	 
	 */ 
	public $PayerInfo;

	/**
	 * A free-form field for your own use, as set by you in the
	 * Custom element of SetExpressCheckoutRequest. Character
	 * length and limitations: 256 single-byte alphanumeric
	 * characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Custom;

	/**
	 * Your own invoice or tracking number, as set by you in the
	 * InvoiceID element of SetExpressCheckoutRequest. Character
	 * length and limitations: 127 single-byte alphanumeric
	 * characters
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $InvoiceID;

	/**
	 * Payer's contact telephone number. PayPal returns a contact
	 * telephone number only if your Merchant account profile
	 * settings require that the buyer enter one.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ContactPhone;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var boolean 	 
	 */ 
	public $BillingAgreementAcceptedStatus;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $RedirectRequired;

	/**
	 * Customer's billing address. Optional If you have credit card
	 * mapped in your account then billing address of the credit
	 * card is returned otherwise your primary address is returned
	 * , PayPal returns this address in
	 * GetExpressCheckoutDetailsResponse.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var AddressType 	 
	 */ 
	public $BillingAddress;

	/**
	 * Text note entered by the buyer in PayPal flow. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Note;

	/**
	 * Returns the status of the EC checkout session. Values
	 * include 'PaymentActionNotInitiated', 'PaymentActionFailed',
	 * 'PaymentActionInProgress', 'PaymentCompleted'. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $CheckoutStatus;

	/**
	 * PayPal may offer a discount or gift certificate to the
	 * buyer, which will be represented by a negativeamount. If the
	 * buyer has a negative balance, PayPal will add that amount to
	 * the current charges, which will be represented as a positive
	 * amount. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var BasicAmountType 	 
	 */ 
	public $PayPalAdjustment;

	/**
	 * Information about the individual purchased items. 
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PaymentDetailsType 	 
	 */ 
	public $PaymentDetails;

	/**
	 * Information about the user selected options. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var UserSelectedOptionType 	 
	 */ 
	public $UserSelectedOptions;

	/**
	 * Information about the incentives that were applied from Ebay
	 * RYP page and PayPal RYP page. 
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var IncentiveDetailsType 	 
	 */ 
	public $IncentiveDetails;

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
	 
	 	 	 	 
	 * @var BasicAmountType 	 
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
	 * Contains payment request information about each bucket in
	 * the cart. 
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PaymentRequestInfoType 	 
	 */ 
	public $PaymentRequestInfo;

	/**
	 * Response information resulting from opt-in operation or
	 * current login bypass status. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var ExternalRememberMeStatusDetailsType 	 
	 */ 
	public $ExternalRememberMeStatusDetails;

	/**
	 * Response information resulting from opt-in operation or
	 * current login bypass status. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var RefreshTokenStatusDetailsType 	 
	 */ 
	public $RefreshTokenStatusDetails;


}
