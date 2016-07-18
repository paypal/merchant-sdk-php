<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Onboarding program code given to you by PayPal. Required
 * Character length and limitations: 64 alphanumeric characters
 *
 */
class EnterBoardingRequestDetailsType
  extends PPXmlMessage
{

    /**
     * Onboarding program code given to you by PayPal. Required
     * Character length and limitations: 64 alphanumeric characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ProgramCode;

    /**
     * A list of comma-separated values that indicate the PayPal
     * products you are implementing for this merchant: Direct
     * Payment (dp) allows payments by credit card without
     * requiring the customer to have a PayPal account. Express
     * Checkout (ec) allows customers to fund transactions with
     * their PayPal account. Authorization and Capture
     * (auth_settle) allows merchants to verify availability of
     * funds in a PayPal account, but capture them at a later time.
     * Administrative APIs (admin_api) is a collection of the
     * PayPal APIs for transaction searching, getting transaction
     * details, refunding, and mass payments. Required Character
     * length and limitations: 64 alphanumeric characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ProductList;

    /**
     * Any custom information you want to store for this partner
     * Optional Character length and limitations: 256 alphanumeric
     * characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $PartnerCustom;

    /**
     * The URL for the logo displayed on the PayPal Partner Welcome
     * Page. Optional Character length and limitations: 2,048
     * alphanumeric characters
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ImageUrl;

    /**
     * Marketing category tha configures the graphic displayed n
     * the PayPal Partner Welcome page.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $MarketingCategory;

    /**
     * Information about the merchantâs business
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\BusinessInfoType
     */
    public $BusinessInfo;

    /**
     * Information about the merchant (the business owner)
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\BusinessOwnerInfoType
     */
    public $OwnerInfo;

    /**
     * Information about the merchant's bank account
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\BankAccountDetailsType
     */
    public $BankAccount;

}
