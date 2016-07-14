<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractResponseType;
use PayPal\EBLBaseComponents\DoNonReferencedCreditResponseDetailsType;

class DoNonReferencedCreditResponseType
  extends AbstractResponseType
{
    /**
     * @access    public
     * @namespace ebl
     * @var DoNonReferencedCreditResponseDetailsType
     */
    public $DoNonReferencedCreditResponseDetails;
}
