<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractResponseType;
use PayPal\EnhancedDataTypes\EnhancedCompleteRecoupResponseDetailsType;

class CompleteRecoupResponseType
  extends AbstractResponseType
{
    /**
     * @access    public
     * @namespace ed
     * @var EnhancedCompleteRecoupResponseDetailsType
     */
    public $EnhancedCompleteRecoupResponseDetails;
}
