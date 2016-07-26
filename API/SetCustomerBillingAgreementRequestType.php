<?php

namespace PayPal\Merchant\API;

use PayPal\Merchant\EBLBaseComponents\AbstractRequestType;

/**
 *
 */
class SetCustomerBillingAgreementRequestType
  extends AbstractRequestType
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\SetCustomerBillingAgreementRequestDetailsType
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
