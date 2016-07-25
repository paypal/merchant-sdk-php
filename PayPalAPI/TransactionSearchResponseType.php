<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractResponseType;

/**
 * Results of a Transaction Search.
 */
class TransactionSearchResponseType
  extends AbstractResponseType
{

    /**
     * Results of a Transaction Search.
     * @array
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\PaymentTransactionSearchResultType
     */
    public $PaymentTransactions;

}
