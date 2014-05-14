<?php 
/**
 * Authorization details 
 */
class AuthorizationInfoType  
   extends PPXmlMessage{

	/**
	 * The status of the payment: Pending: The payment is pending.
	 * See "PendingReason" for more information.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $PaymentStatus;

	/**
	 * The reason the payment is pending:none: No pending reason
	 * address: The payment is pending because your customer did
	 * not include a confirmed shipping address and your Payment
	 * Receiving Preferences is set such that you want to manually
	 * accept or deny each of these payments. To change your
	 * preference, go to the Preferences section of your Profile.
	 * authorization: The authorization is pending at time of
	 * creation if payment is not under review echeck: The payment
	 * is pending because it was made by an eCheck that has not yet
	 * cleared. intl: The payment is pending because you hold a
	 * non-U.S. account and do not have a withdrawal mechanism. You
	 * must manually accept or deny this payment from your Account
	 * Overview. multi-currency: You do not have a balance in the
	 * currency sent, and you do not have your Payment Receiving
	 * Preferences set to automatically convert and accept this
	 * payment. You must manually accept or deny this payment.
	 * unilateral: The payment is pending because it was made to an
	 * email address that is not yet registered or confirmed.
	 * upgrade: The payment is pending because it was made via
	 * credit card and you must upgrade your account to Business or
	 * Premier status in order to receive the funds. upgrade can
	 * also mean that you have reached the monthly limit for
	 * transactions on your account. verify: The payment is pending
	 * because you are not yet verified. You must verify your
	 * account before you can accept this payment. payment_review:
	 * The payment is pending because it is under payment review.
	 * other: The payment is pending for a reason other than those
	 * listed above. For more information, contact PayPal Customer
	 * Service.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $PendingReason;

	/**
	 * Protection Eligibility for this Transaction - None, SPP or
	 * ESPP 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ProtectionEligibility;

	/**
	 * Protection Eligibility Type for this Transaction 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ProtectionEligibilityType;


}
