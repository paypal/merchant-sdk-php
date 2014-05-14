<?php 
/**
 * MassPayRequestItemType 
 */
class MassPayRequestItemType  
   extends PPXmlMessage{

	/**
	 * Email address of recipient. Required You must specify
	 * ReceiverEmail, ReceiverPhone, or ReceiverID, but all
	 * MassPayItems in a request must use the same field to specify
	 * recipients. Character length and limitations: 127
	 * single-byte characters maximum.
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ReceiverEmail;

	/**
	 * Phone number of recipient. Required You must specify
	 * ReceiverEmail, ReceiverPhone, or ReceiverID, but all
	 * MassPayItems in a request must use the same field to specify
	 * recipients.
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ReceiverPhone;

	/**
	 * Unique PayPal customer account number. This value
	 * corresponds to the value of PayerID returned by
	 * GetTransactionDetails. Required You must specify
	 * ReceiverEmail, ReceiverPhone, or ReceiverID, but all
	 * MassPayItems in a request must use the same field to specify
	 * recipients. Character length and limitations: 17 single-byte
	 * characters maximum.
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ReceiverID;

	/**
	 * Payment amount. You must set the currencyID attribute to one
	 * of the three-character currency codes for any of the
	 * supported PayPal currencies. Required You cannot mix
	 * currencies in a single MassPayRequest. A single request must
	 * include items that are of the same currency.
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var BasicAmountType 	 
	 */ 
	public $Amount;

	/**
	 * Transaction-specific identification number for tracking in
	 * an accounting system. Optional Character length and
	 * limitations: 30 single-byte characters. No whitespace
	 * allowed.
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $UniqueId;

	/**
	 * Custom note for each recipient. Optional Character length
	 * and limitations: 4,000 single-byte alphanumeric characters
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Note;

	/**
	 * Constructor with arguments
	 */
	public function __construct($Amount = NULL) {
		$this->Amount = $Amount;
	}


  
 
}
