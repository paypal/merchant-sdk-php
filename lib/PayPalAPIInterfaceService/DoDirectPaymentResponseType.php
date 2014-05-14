<?php 
/**
 * The amount of the payment as specified by you on
 * DoDirectPaymentRequest.
 */
class DoDirectPaymentResponseType  extends AbstractResponseType  
  {

	/**
	 * The amount of the payment as specified by you on
	 * DoDirectPaymentRequest.
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var BasicAmountType 	 
	 */ 
	public $Amount;

	/**
	 * Address Verification System response code. Character limit:
	 * One single-byte alphanumeric character AVS
	 * CodeMeaningMatched Details A AddressAddress only (no ZIP) B
	 * International “A”Address only (no ZIP) CInternational
	 * “N” None DInternational “X” Address and Postal Code
	 * E Not allowed for MOTO (Internet/Phone) transactions Not
	 * applicable F UK-specific “X”Address and Postal Code G
	 * Global Unavailable Not applicable I International
	 * UnavailableNot applicable N NoNone PPostal (International
	 * “Z”)Postal Code only (no Address) RRetryNot applicable S
	 * Service not Supported Not applicable U UnavailableNot
	 * applicable W Whole ZIPNine-digit ZIP code (no Address) X
	 * Exact match Address and nine-digit ZIP code Y YesAddress and
	 * five-digit ZIP Z ZIP Five-digit ZIP code (no Address) All
	 * others Error Not applicable
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $AVSCode;

	/**
	 * Result of the CVV2 check by PayPal. CVV2 CodeMeaningMatched
	 * Details M MatchCVV2 N No match None P Not ProcessedNot
	 * applicable SService not SupportedNot applicable U
	 * UnavailableNot applicable XNo response Not applicable All
	 * others ErrorNot applicable 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $CVV2Code;

	/**
	 * Transaction identification number. Character length and
	 * limitations: 19 characters maximum.
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $TransactionID;

	/**
	 * The reason why a particular transaction went in pending. 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $PendingReason;

	/**
	 * This will identify the actual transaction status. 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $PaymentStatus;

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var FMFDetailsType 	 
	 */ 
	public $FMFDetails;

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var ThreeDSecureResponseType 	 
	 */ 
	public $ThreeDSecureResponse;

	/**
	 * Response code from the processor when a recurring
	 * transaction is declined.  
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $PaymentAdviceCode;


}
