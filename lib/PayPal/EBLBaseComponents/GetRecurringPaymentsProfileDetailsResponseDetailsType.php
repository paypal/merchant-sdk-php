<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * Recurring Billing Profile ID 
 */
class GetRecurringPaymentsProfileDetailsResponseDetailsType  
   extends PPXmlMessage{

	/**
	 * Recurring Billing Profile ID 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $ProfileID;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ProfileStatus;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $Description;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $AutoBillOutstandingAmount;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var integer	 
	 */ 
	public $MaxFailedPayments;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\RecurringPaymentsProfileDetailsType	 
	 */ 
	public $RecurringPaymentsProfileDetails;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\BillingPeriodDetailsType	 
	 */ 
	public $CurrentRecurringPaymentsPeriod;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\RecurringPaymentsSummaryType	 
	 */ 
	public $RecurringPaymentsSummary;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\CreditCardDetailsType	 
	 */ 
	public $CreditCard;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\BillingPeriodDetailsType	 
	 */ 
	public $TrialRecurringPaymentsPeriod;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\BillingPeriodDetailsType	 
	 */ 
	public $RegularRecurringPaymentsPeriod;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\CoreComponentTypes\BasicAmountType	 
	 */ 
	public $TrialAmountPaid;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\CoreComponentTypes\BasicAmountType	 
	 */ 
	public $RegularAmountPaid;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\CoreComponentTypes\BasicAmountType	 
	 */ 
	public $AggregateAmount;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\CoreComponentTypes\BasicAmountType	 
	 */ 
	public $AggregateOptionalAmount;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var dateTime	 
	 */ 
	public $FinalPaymentDueDate;


}
