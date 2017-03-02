<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;

/**
 *
 */
class CancelRecoupRequestType extends AbstractRequestType
{

    /**
     *
     * @access    public
     * @namespace ed
     * @var \PayPal\EnhancedDataTypes\EnhancedCancelRecoupRequestDetailsType
     */
    public $EnhancedCancelRecoupRequestDetails;

    /**
     * Constructor with arguments
     */
    public function __construct($EnhancedCancelRecoupRequestDetails = null)
    {
        $this->EnhancedCancelRecoupRequestDetails = $EnhancedCancelRecoupRequestDetails;
    }

}
