<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractResponseType;
use PayPal\EBLBaseComponents\DoCaptureResponseDetailsType;

class DoCaptureResponseType
  extends AbstractResponseType
{
    /**
     * @access    public
     * @namespace ebl
     * @var DoCaptureResponseDetailsType
     */
    public $DoCaptureResponseDetails;
}
