<?php

namespace PayPal\Merchant\API;

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
