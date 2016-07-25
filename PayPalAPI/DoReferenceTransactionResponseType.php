<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractResponseType;

/**
 *
 */
class DoReferenceTransactionResponseType
  extends AbstractResponseType
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\DoReferenceTransactionResponseDetailsType
     */
    public $DoReferenceTransactionResponseDetails;

    /**
     *
     * @access    public
     * @namespace ns
     * @var \PayPal\Merchant\EBLBaseComponents\FMFDetailsType
     */
    public $FMFDetails;

}
