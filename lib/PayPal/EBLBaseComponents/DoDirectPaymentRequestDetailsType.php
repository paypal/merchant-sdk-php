<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * How you want to obtain payment. Required Authorization
 * indicates that this payment is a basic authorization subject
 * to settlement with PayPal Authorization and Capture. Sale
 * indicates that this is a final sale for which you are
 * requesting payment. NOTE: Order is not allowed for Direct
 * Payment. Character length and limit: Up to 13 single-byte
 * alphabetic characters
 */
class DoDirectPaymentRequestDetailsType
  extends PPXmlMessage
{

    /**
     * How you want to obtain payment. Required Authorization
     * indicates that this payment is a basic authorization subject
     * to settlement with PayPal Authorization and Capture. Sale
     * indicates that this is a final sale for which you are
     * requesting payment. NOTE: Order is not allowed for Direct
     * Payment. Character length and limit: Up to 13 single-byte
     * alphabetic characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $PaymentAction;

    /**
     * Information about the payment Required
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\PaymentDetailsType
     */
    public $PaymentDetails;

    /**
     * Information about the credit card to be charged. Required
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\CreditCardDetailsType
     */
    public $CreditCard;

    /**
     * IP address of the payer's browser as recorded in its HTTP
     * request to your website. PayPal records this IP addresses as
     * a means to detect possible fraud. Required Character length
     * and limitations: 15 single-byte characters, including
     * periods, in dotted-quad format: ???.???.???.???
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $IPAddress;

    /**
     * Your customer session identification token. PayPal records
     * this optional session identification token as an additional
     * means to detect possible fraud. Optional Character length
     * and limitations: 64 single-byte numeric characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $MerchantSessionId;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var boolean
     */
    public $ReturnFMFDetails;

    /**
     * Use this optional parameter to pass in your business name
     * and other data describing the transaction. Optional This
     * information is usually displayed in the account holder's
     * statement. Example: RedCross Haiti, RedCross Uganda,
     * Realtor.com dues, Realtor.com list fee Length 25 characters.
     * Alphanumeric characters and dash(-), dot(.), asterisk(*),
     * space( ) On the customer's statement, an asterisk is used to
     * separate the DBA name and product name. The asterisk
     * delimiter can appear in position 4, 8, or 13.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $SoftDescriptor;

    /**
     * Use this optional parameter to pass information about how
     * consumer should contact the merchant. Optional This
     * information is usually displayed in the account holder's
     * statement. For Ecom trx: phone, email or URL is allowed For
     * Retail trx: only the actual city is allowed For details on
     * allowed characters in Soft Descriptor City refer to the API
     * documentation.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $SoftDescriptorCity;

}
