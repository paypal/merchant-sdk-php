<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractResponseType;
use PayPal\EBLBaseComponents\BAUpdateResponseDetailsType;

class BAUpdateResponseType
  extends AbstractResponseType
{
    /**
     * @access    public
     * @namespace ebl
     * @var BAUpdateResponseDetailsType
     */
    public $BAUpdateResponseDetails;
}
