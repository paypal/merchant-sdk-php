<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class SetCustomerBillingAgreementRequestDetailsType
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\BillingAgreementDetailsType
     */
    public $BillingAgreementDetails;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ReturnURL;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $CancelURL;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $LocaleCode;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $PageStyle;

    /**
     *
     * @access    public
     * @namespace ebl
     * @name cpp-header-image
     * @var string
     */
    public $cppheaderimage;

    /**
     *
     * @access    public
     * @namespace ebl
     * @name cpp-header-border-color
     * @var string
     */
    public $cppheaderbordercolor;

    /**
     *
     * @access    public
     * @namespace ebl
     * @name cpp-header-back-color
     * @var string
     */
    public $cppheaderbackcolor;

    /**
     *
     * @access    public
     * @namespace ebl
     * @name cpp-payflow-color
     * @var string
     */
    public $cpppayflowcolor;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $BuyerEmail;

    /**
     * The value 1 indicates that you require that the customer's
     * billing address on file. Setting this element overrides the
     * setting you have specified in Admin. Optional Character
     * length and limitations: One single-byte numeric character.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ReqBillingAddress;

    /**
     * Constructor with arguments
     */
    public function __construct($BillingAgreementDetails = null, $ReturnURL = null, $CancelURL = null)
    {
        $this->BillingAgreementDetails = $BillingAgreementDetails;
        $this->ReturnURL = $ReturnURL;
        $this->CancelURL = $CancelURL;
    }

}
