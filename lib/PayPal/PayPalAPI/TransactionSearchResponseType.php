<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractResponseType;
use PayPal\EBLBaseComponents\PaymentTransactionSearchResultType;

/**
 * Results of a Transaction Search.
 */
class TransactionSearchResponseType
  extends AbstractResponseType
{
    /**
     * Results of a Transaction Search.
     * @access    public
     * @namespace ebl
     * @var PaymentTransactionSearchResultType[]
     */
    public $PaymentTransactions;
}
