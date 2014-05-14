<?php 
/**
 * The earliest transaction date at which to start the search.
 * No wildcards are allowed. Required
 */
class TransactionSearchRequestType  extends AbstractRequestType  
  {

	/**
	 * The earliest transaction date at which to start the search.
	 * No wildcards are allowed. Required
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var dateTime 	 
	 */ 
	public $StartDate;

	/**
	 * The latest transaction date to be included in the search
	 * Optional
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var dateTime 	 
	 */ 
	public $EndDate;

	/**
	 * Search by the buyer's email address OptionalCharacter length
	 * and limitations: 127 single-byte alphanumeric characters
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Payer;

	/**
	 * Search by the receiver's email address. If the merchant
	 * account has only one email, this is the primary email. Can
	 * also be a non-primary email.Optional
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Receiver;

	/**
	 * Search by the PayPal Account Optional receipt IDOptional
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ReceiptID;

	/**
	 * Search by the transaction ID. OptionalThe returned results
	 * are from the merchant's transaction records. Character
	 * length and limitations: 19 single-byte characters maximum
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $TransactionID;

	/**
	 * Search by Recurring Payment Profile id. The ProfileID is
	 * returned as part of the CreateRecurringPaymentsProfile API
	 * response. Optional
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ProfileID;

	/**
	 * Search by the buyer's name OptionalSalutation: 20
	 * single-byte character limit.FirstName: 25 single-byte
	 * character limit.MiddleName: 25 single-byte character
	 * limit.LastName: 25 single-byte character limit.Suffix: 12
	 * single-byte character limit.
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PersonNameType 	 
	 */ 
	public $PayerName;

	/**
	 * Search by item number of the purchased goods.OptionalTo
	 * search for purchased items not related to auctions, set the
	 * AuctionItemNumber element to the value of the HTML
	 * item_number variable set in the shopping cart for the
	 * original transaction.
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $AuctionItemNumber;

	/**
	 * Search by invoice identification key, as set by you for the
	 * original transaction. InvoiceID searches the invoice records
	 * for items sold by the merchant, not the items purchased.
	 * OptionalThe value for InvoiceID must exactly match an
	 * invoice identification number. No wildcards are allowed.
	 * Character length and limitations: 127 single-byte characters
	 * maximum
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $InvoiceID;

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $CardNumber;

	/**
	 * Search by classification of transaction. Some kinds of
	 * possible classes of transactions are not searchable with
	 * TransactionSearchRequest. You cannot search for bank
	 * transfer withdrawals, for example. OptionalAll: all
	 * transaction classifications.Sent: only payments
	 * sent.Received: only payments received.MassPay: only mass
	 * payments.MoneyRequest: only money requests.FundsAdded: only
	 * funds added to balance.FundsWithdrawn: only funds withdrawn
	 * from balance.Referral: only transactions involving
	 * referrals.Fee: only transactions involving
	 * fees.Subscription: only transactions involving
	 * subscriptions.Dividend: only transactions involving
	 * dividends.Billpay: only transactions involving BillPay
	 * Transactions.Refund: only transactions involving
	 * funds.CurrencyConversions: only transactions involving
	 * currency conversions.BalanceTransfer: only transactions
	 * involving balance transfers.Reversal: only transactions
	 * involving BillPay reversals.Shipping: only transactions
	 * involving UPS shipping fees.BalanceAffecting: only
	 * transactions that affect the account balance.ECheck: only
	 * transactions involving eCheckForcedPostTransaction: forced
	 * post transaction.NonReferencedRefunds: non-referenced
	 * refunds.
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $TransactionClass;

	/**
	 * Search by transaction amount OptionalYou must set the
	 * currencyID attribute to one of the three-character currency
	 * codes for any of the supported PayPal currencies. 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var BasicAmountType 	 
	 */ 
	public $Amount;

	/**
	 * Search by currency codeOptional
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $CurrencyCode;

	/**
	 * Search by transaction status OptionalPending: The payment is
	 * pending. The specific reason the payment is pending is
	 * returned by the GetTransactionDetails APIPendingReason
	 * element. For more information, see PendingReason.Processing:
	 * The payment is being processed.Success: The payment has been
	 * completed and the funds have been added successfully to your
	 * account balance.Denied: You denied the payment. This happens
	 * only if the payment was previously pending.Reversed: A
	 * payment was reversed due to a chargeback or other type of
	 * reversal. The funds have been removed from your account
	 * balance and returned to the buyer.
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Status;

	/**
	 * Constructor with arguments
	 */
	public function __construct($StartDate = NULL) {
		$this->StartDate = $StartDate;
	}


  
 
}
