<?php

namespace PayPal\Merchant\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class GetBillingAgreementCustomerDetailsResponseDetailsType
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\PayerInfoType
     */
    public $PayerInfo;

    /**
     * Customer's billing address. Optional If you have a credit
     * card mapped in your PayPal account, PayPal returns the
     * billing address of the credit billing address otherwise your
     * primary address as billing address in
     * GetBillingAgreementCustomerDetails.
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\AddressType
     */
    public $BillingAddress;

}
