<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractResponseType;
use PayPal\EBLBaseComponents\DoReferenceTransactionResponseDetailsType;
use PayPal\EBLBaseComponents\FMFDetailsType;

class DoReferenceTransactionResponseType
  extends AbstractResponseType
{
    /**
     * @access    public
     * @namespace ebl
     * @var DoReferenceTransactionResponseDetailsType
     */
    public $DoReferenceTransactionResponseDetails;

    /**
     * @access    public
     * @namespace ns
     * @var FMFDetailsType
     */
    public $FMFDetails;
}
