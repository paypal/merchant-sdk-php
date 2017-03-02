<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * The timestamped token value that was returned by
 * SetExpressCheckoutResponse and passed on
 * GetExpressCheckoutDetailsRequest. Character length and
 * limitations:20 single-byte characters
 */
class DoExpressCheckoutPaymentResponseDetailsType
  extends PPXmlMessage
{

    /**
     * The timestamped token value that was returned by
     * SetExpressCheckoutResponse and passed on
     * GetExpressCheckoutDetailsRequest. Character length and
     * limitations:20 single-byte characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Token;

    /**
     * Information about the transaction
     * @array
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\PaymentInfoType
     */
    public $PaymentInfo;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $BillingAgreementID;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $RedirectRequired;

    /**
     * Memo entered by sender in PayPal Review Page note field.
     * Optional Character length and limitations: 255 single-byte
     * alphanumeric characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $Note;

    /**
     * Unique id passed in the DoEC call.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $MsgSubID;

    /**
     * Redirect back to PayPal, PayPal can host the success page.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $SuccessPageRedirectRequested;

    /**
     * Information about the user selected options.
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\UserSelectedOptionType
     */
    public $UserSelectedOptions;

    /**
     * Information about Coupled Payment transactions.
     * @array
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\CoupledPaymentInfoType
     */
    public $CoupledPaymentInfo;

}
