<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractResponseType;
use PayPal\EBLBaseComponents\ReverseTransactionResponseDetailsType;

class ReverseTransactionResponseType
  extends AbstractResponseType
{
    /**
     * @access    public
     * @namespace ebl
     * @var ReverseTransactionResponseDetailsType
     */
    public $ReverseTransactionResponseDetails;
}
