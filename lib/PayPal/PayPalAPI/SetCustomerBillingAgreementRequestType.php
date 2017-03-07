<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;

/**
 *
 */
class SetCustomerBillingAgreementRequestType extends AbstractRequestType
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\SetCustomerBillingAgreementRequestDetailsType
     */
    public $SetCustomerBillingAgreementRequestDetails;

    /**
     * Constructor with arguments
     */
    public function __construct($SetCustomerBillingAgreementRequestDetails = null)
    {
        $this->SetCustomerBillingAgreementRequestDetails = $SetCustomerBillingAgreementRequestDetails;
    }

}
