<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * Details about Billing Agreements requested to be created. 
 */
class SetDataRequestType  
   extends PPXmlMessage{

	/**
	 * Details about Billing Agreements requested to be created. 
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\BillingApprovalDetailsType	 
	 */ 
	public $BillingApprovalDetails;

	/**
	 * Only needed if Auto Authorization is requested. The
	 * authentication session token will be passed in here. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\BuyerDetailType	 
	 */ 
	public $BuyerDetail;

	/**
	 * Requests for specific buyer information like Billing Address
	 * to be returned through GetExpressCheckoutDetails should be
	 * specified under this. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\InfoSharingDirectivesType	 
	 */ 
	public $InfoSharingDirectives;

	/**
	 * The value 1 indicates that you require to retrieve the
	 * customer's shipping address on file with PayPal. Any value
	 * other than 1 indicates that no such requirement. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var boolean	 
	 */ 
	public $RetrieveShippingAddress;

	/**
	 * the value is required by ACS team to specify the channel
	 * which the partners are in. the channel will be used for risk
	 * assessment the value is defined in
	 * biz/User/value_object/Channel.oml Optional 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $UserChannel;

	/**
	 * The value 1 indicates that you require that the customer's
	 * shipping address on file with PayPal be a confirmed address.
	 * Any value other than 1 indicates that the customer's
	 * shipping address on file with PayPal need NOT be a confirmed
	 * address. Setting this element overrides the setting you have
	 * specified in the recipient's Merchant Account Profile.
	 * Optional 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var boolean	 
	 */ 
	public $ReqConfirmShipping;

	/**
	 * Information about the payment. 
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\PaymentDetailsType	 
	 */ 
	public $PaymentDetails;

	/**
	 * An optional set of values related to tracking for external
	 * partner. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\ExternalPartnerTrackingDetailsType	 
	 */ 
	public $ExternalPartnerTrackingDetails;


    
}
