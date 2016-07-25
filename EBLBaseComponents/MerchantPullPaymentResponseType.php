<?php

namespace PayPal\Merchant\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * MerchantPullPaymentResponseType Response data from the
 * merchant pull.
 */
class MerchantPullPaymentResponseType
  extends PPXmlMessage
{

    /**
     * information about the customer
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\PayerInfoType
     */
    public $PayerInfo;

    /**
     * Information about the transaction
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\PaymentInfoType
     */
    public $PaymentInfo;

    /**
     * Specific information about the preapproved payment
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\MerchantPullInfoType
     */
    public $MerchantPullInfo;

}
