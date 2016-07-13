<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;
use PayPal\EBLBaseComponents\SetCustomerBillingAgreementRequestDetailsType;

class SetCustomerBillingAgreementRequestType
  extends AbstractRequestType
{
    /**
     * @access    public
     * @namespace ebl
     * @var SetCustomerBillingAgreementRequestDetailsType
     */
    public $SetCustomerBillingAgreementRequestDetails;

    /**
     * Constructor with arguments
     *
     * @param SetCustomerBillingAgreementRequestDetailsType $SetCustomerBillingAgreementRequestDetails
     */
    public function __construct($SetCustomerBillingAgreementRequestDetails = null)
    {
        $this->SetCustomerBillingAgreementRequestDetails = $SetCustomerBillingAgreementRequestDetails;
    }
}
