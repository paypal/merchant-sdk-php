<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * The Type of Approval requested - Billing Agreement or
 * Profile 
 */
class BillingApprovalDetailsType  
   extends PPXmlMessage{

	/**
	 * The Type of Approval requested - Billing Agreement or
	 * Profile
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ApprovalType;

	/**
	 * The Approval subtype - Must be MerchantInitiatedBilling for
	 * BillingAgreement ApprovalType
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ApprovalSubType;

	/**
	 * Description about the Order
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\OrderDetailsType	 
	 */ 
	public $OrderDetails;

	/**
	 * Directives about the type of payment
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\PaymentDirectivesType	 
	 */ 
	public $PaymentDirectives;

	/**
	 * Client may pass in its identification of this Billing
	 * Agreement. It used for the client's tracking purposes.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Custom;

	/**
	 * Constructor with arguments
	 */
	public function __construct($ApprovalType = NULL) {
		$this->ApprovalType = $ApprovalType;
	}


    
}
