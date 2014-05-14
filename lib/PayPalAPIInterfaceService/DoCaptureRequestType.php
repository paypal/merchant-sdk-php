<?php 
/**
 * The authorization identification number of the payment you
 * want to capture. Required Character length and limits: 19
 * single-byte characters maximum 
 */
class DoCaptureRequestType  extends AbstractRequestType  
  {

	/**
	 * The authorization identification number of the payment you
	 * want to capture. Required Character length and limits: 19
	 * single-byte characters maximum
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $AuthorizationID;

	/**
	 * Amount to authorize. You must set the currencyID attribute
	 * to USD. Required Limitations: Must not exceed $10,000 USD in
	 * any currency. No currency symbol. Decimal separator must be
	 * a period (.), and the thousands separator must be a comma
	 * (,)
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var BasicAmountType 	 
	 */ 
	public $Amount;

	/**
	 * Indicates if this capture is the last capture you intend to
	 * make. The default is Complete. If CompleteType is Complete,
	 * any remaining amount of the original reauthorized
	 * transaction is automatically voided. Required Character
	 * length and limits: 12 single-byte alphanumeric characters
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $CompleteType;

	/**
	 * An informational note about this settlement that is
	 * displayed to the payer in email and in transaction history.
	 * Optional Character length and limits: 255 single-byte
	 * characters
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Note;

	/**
	 * Your invoice number or other identification number. The
	 * InvoiceID value is recorded only if the authorization you
	 * are capturing is an order authorization, not a basic
	 * authorization. Optional Character length and limits: 127
	 * single-byte alphanumeric characters
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $InvoiceID;

	/**
	 * Contains enhanced data like airline itinerary information.
	 * Not Required 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var EnhancedDataType 	 
	 */ 
	public $EnhancedData;

	/**
	 * dynamic descriptor Dynamic descriptor is used for merchant
	 * to provide detail of a transaction appears on statement
	 * Optional Character length and limits: <18 characters
	 * alphanumeric characters
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Descriptor;

	/**
	 * To pass the Merchant store informationOptional 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var MerchantStoreDetailsType 	 
	 */ 
	public $MerchantStoreDetails;

	/**
	 * Unique id for each API request to prevent duplicate
	 * payments. Optional Character length and limits: 38
	 * single-byte characters maximum. 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $MsgSubID;

	/**
	 * This holds key-value pair which merchants wants to pass it
	 * to the open wallet-PLCC processorOptional 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var MerchantDataType 	 
	 */ 
	public $MerchantData;

	/**
	 * Constructor with arguments
	 */
	public function __construct($AuthorizationID = NULL, $Amount = NULL, $CompleteType = NULL) {
		$this->AuthorizationID = $AuthorizationID;
		$this->Amount = $Amount;
		$this->CompleteType = $CompleteType;
	}


  
 
}
