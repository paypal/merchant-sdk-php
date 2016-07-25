<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractResponseType;

/**
 *
 */
class BillUserResponseType
  extends AbstractResponseType
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\MerchantPullPaymentResponseType
     */
    public $BillUserResponseDetails;

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\EBLBaseComponents\FMFDetailsType
     */
    public $FMFDetails;

}
