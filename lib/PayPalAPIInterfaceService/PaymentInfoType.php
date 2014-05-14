<?php 
/**
 * PaymentInfoType Payment information. 
 */
class PaymentInfoType  
   extends PPXmlMessage{

	/**
	 * A transaction identification number. Character length and
	 * limits: 19 single-byte characters maximum
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $TransactionID;

	/**
	 * Its Ebay transaction id. EbayTransactionID will returned for
	 * immediate pay item transaction in ECA 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $EbayTransactionID;

	/**
	 * Parent or related transaction identification number. This
	 * field is populated for the following transaction types:
	 * ReversalCapture of an authorized transaction.Reauthorization
	 * of a transaction.Capture of an order. The value of
	 * ParentTransactionID is the original OrderID.Authorization of
	 * an order. The value of ParentTransactionID is the original
	 * OrderID.Capture of an order authorization.Void of an order.
	 * The value of ParentTransactionID is the original OrderID.
	 * Character length and limits: 19 single-byte characters
	 * maximum
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ParentTransactionID;

	/**
	 * Receipt ID Character length and limitations: 16 digits in
	 * xxxx-xxxx-xxxx-xxxx format
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ReceiptID;

	/**
	 * The type of transaction cart: Transaction created via the
	 * PayPal Shopping Cart feature or by Express Checkout with
	 * multiple purchased item express-checkout: Transaction
	 * created by Express Checkout with a single purchased items
	 * send-money: Transaction created by customer from the Send
	 * Money tab on the PayPal website. web-accept: Transaction
	 * created by customer via Buy Now, Donation, or Auction Smart
	 * Logos. subscr-*: Transaction created by customer via
	 * Subscription. eot means "end of subscription term."
	 * merch-pmt: preapproved payment. mass-pay: Transaction
	 * created via MassPay. virtual-terminal: Transaction created
	 * via merchant virtual terminal. credit: Transaction created
	 * via merchant virtual terminal or API to credit a customer.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $TransactionType;

	/**
	 * The type of payment
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $PaymentType;

	/**
	 * The type of funding source
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $RefundSourceCodeType;

	/**
	 * eCheck latest expected clear date 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var dateTime 	 
	 */ 
	public $ExpectedeCheckClearDate;

	/**
	 * Date and time of payment 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var dateTime 	 
	 */ 
	public $PaymentDate;

	/**
	 * Full amount of the customer's payment, before transaction
	 * fee is subtracted
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var BasicAmountType 	 
	 */ 
	public $GrossAmount;

	/**
	 * Transaction fee associated with the payment 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var BasicAmountType 	 
	 */ 
	public $FeeAmount;

	/**
	 * Amount deposited into the account's primary balance after a
	 * currency conversion from automatic conversion through your
	 * Payment Receiving Preferences or manual conversion through
	 * manually accepting a payment. This amount is calculated
	 * after fees and taxes have been assessed. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var BasicAmountType 	 
	 */ 
	public $SettleAmount;

	/**
	 * Amount of tax for transaction 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var BasicAmountType 	 
	 */ 
	public $TaxAmount;

	/**
	 * Exchange rate for transaction 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ExchangeRate;

	/**
	 * The status of the payment: None: No status Created: A
	 * giropay payment has been initiated. Canceled-Reversal: A
	 * reversal has been canceled. For example, you won a dispute
	 * with the customer, and the funds for the transaction that
	 * was reversed have been returned to you. Completed: The
	 * payment has been completed, and the funds have been added
	 * successfully to your account balance. Denied: You denied the
	 * payment. This happens only if the payment was previously
	 * pending because of possible reasons described for the
	 * PendingReason element. Expired: This authorization has
	 * expired and cannot be captured. Failed: The payment has
	 * failed. This happens only if the payment was made from your
	 * customer's bank account. In-Progress: The transaction is in
	 * process of authorization and capture. Partially-Refunded:
	 * The transaction has been partially refunded. Pending: The
	 * payment is pending. See "PendingReason" for more
	 * information. Refunded: You refunded the payment. Reversed: A
	 * payment was reversed due to a chargeback or other type of
	 * reversal. The funds have been removed from your account
	 * balance and returned to the buyer. The reason for the
	 * reversal is specified in the ReasonCode element. Processed:
	 * A payment has been accepted. Voided: This authorization has
	 * been voided. Completed-Funds-Held: The payment has been
	 * completed, and the funds have been added successfully to
	 * your pending balance. See the "HoldDecision" field for more
	 * information.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $PaymentStatus;

	/**
	 * The reason the payment is pending: none: No pending reason
	 * address: The payment is pending because your customer did
	 * not include a confirmed shipping address and your Payment
	 * Receiving Preferences is set such that you want to manually
	 * accept or deny each of these payments. To change your
	 * preference, go to the Preferences section of your Profile.
	 * authorization: You set PaymentAction to Authorization on
	 * SetExpressCheckoutRequest and have not yet captured funds.
	 * echeck: The payment is pending because it was made by an
	 * eCheck that has not yet cleared. intl: The payment is
	 * pending because you hold a non-U.S. account and do not have
	 * a withdrawal mechanism. You must manually accept or deny
	 * this payment from your Account Overview. multi-currency: You
	 * do not have a balance in the currency sent, and you do not
	 * have your Payment Receiving Preferences set to automatically
	 * convert and accept this payment. You must manually accept or
	 * deny this payment. unilateral: The payment is pending
	 * because it was made to an email address that is not yet
	 * registered or confirmed. upgrade: The payment is pending
	 * because it was made via credit card and you must upgrade
	 * your account to Business or Premier status in order to
	 * receive the funds. upgrade can also mean that you have
	 * reached the monthly limit for transactions on your account.
	 * verify: The payment is pending because you are not yet
	 * verified. You must verify your account before you can accept
	 * this payment. regulatory-review: This payment is pending
	 * while we make sure it meets regulatory requirements. We'll
	 * contact you again in 24-72 hours with the outcome of our
	 * review. other: The payment is pending for a reason other
	 * than those listed above. For more information, contact
	 * PayPal Customer Service.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $PendingReason;

	/**
	 * The reason for a reversal if TransactionType is reversal:
	 * none: No reason code chargeback: A reversal has occurred on
	 * this transaction due to a chargeback by your customer.
	 * guarantee: A reversal has occurred on this transaction due
	 * to your customer triggering a money-back guarantee.
	 * buyer-complaint: A reversal has occurred on this transaction
	 * due to a complaint about the transaction from your customer.
	 * refund: A reversal has occurred on this transaction because
	 * you have given the customer a refund. other: A reversal has
	 * occurred on this transaction due to a reason not listed
	 * above.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ReasonCode;

	/**
	 * HoldDecision is returned in the response only if
	 * PaymentStatus is Completed-Funds-Held. The reason the funds
	 * are kept in pending balance: newsellerpaymenthold: The
	 * seller is new. paymenthold: A hold is placed on your
	 * transaction due to a reason not listed above. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $HoldDecision;

	/**
	 * Shipping method selected by the user during check-out. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ShippingMethod;

	/**
	 * Protection Eligibility for this Transaction - None, SPP or
	 * ESPP 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ProtectionEligibility;

	/**
	 * Protection Eligibility details for this Transaction 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ProtectionEligibilityType;

	/**
	 * Receipt Reference Number for this Transaction 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ReceiptReferenceNumber;

	/**
	 * The type of POS transaction F: Forced post transaction. POS
	 * merchant can send transactions at a later point if
	 * connectivity is lost. S: Single call checkout, and this is
	 * to identify PayPal Lite API usage. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $POSTransactionType;

	/**
	 * Amount of shipping charged on transaction
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ShipAmount;

	/**
	 * Amount of ship handling charged on transaction
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ShipHandleAmount;

	/**
	 * Amount of shipping discount on transaction
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ShipDiscount;

	/**
	 * Amount of Insurance amount on transaction
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $InsuranceAmount;

	/**
	 * Subject as entered in the transaction
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Subject;

	/**
	 * StoreID as entered in the transaction
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $StoreID;

	/**
	 * TerminalID as entered in the transaction
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $TerminalID;

	/**
	 * Details about the seller. Optional 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var SellerDetailsType 	 
	 */ 
	public $SellerDetails;

	/**
	 * Unique identifier and mandatory for each bucket in case of
	 * split payement 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $PaymentRequestID;

	/**
	 * Thes are filters that could result in accept/deny/pending
	 * action. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var FMFDetailsType 	 
	 */ 
	public $FMFDetails;

	/**
	 * This will be enhanced info for the payment: Example: UATP
	 * details 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var EnhancedPaymentInfoType 	 
	 */ 
	public $EnhancedPaymentInfo;

	/**
	 * This will indicate the payment status for individual payment
	 * request in case of split payment 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var ErrorType 	 
	 */ 
	public $PaymentError;

	/**
	 * Type of the payment instrument. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var InstrumentDetailsType 	 
	 */ 
	public $InstrumentDetails;

	/**
	 * Offer Details. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var OfferDetailsType 	 
	 */ 
	public $OfferDetails;

	/**
	 * This field indicates whether the credit card number used for
	 * this transaction is in a particular bin range registered
	 * with PayPal by the merchant. This filed is optional and will
	 * be present if merchant has a registered bin range. The value
	 * of this field will be "true" if merchant has a registered
	 * bin range and the credit card used in the transaction is
	 * within the registered bin range. The value of this field
	 * will be false if merchant has a registered bin range and
	 * credit card used in the transaction outside registered bin
	 * range or the transaction is not done using a credit card. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $BinEligibility;


}
