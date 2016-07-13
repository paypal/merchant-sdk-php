<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;
use PayPal\EBLBaseComponents\ExecuteCheckoutOperationsRequestDetailsType;

class ExecuteCheckoutOperationsRequestType
  extends AbstractRequestType
{
    /**
     * @access    public
     * @namespace ebl
     * @var ExecuteCheckoutOperationsRequestDetailsType
     */
    public $ExecuteCheckoutOperationsRequestDetails;

    /**
     * Constructor with arguments
     *
     * @param ExecuteCheckoutOperationsRequestDetailsType $ExecuteCheckoutOperationsRequestDetails
     */
    public function __construct($ExecuteCheckoutOperationsRequestDetails = null)
    {
        $this->ExecuteCheckoutOperationsRequestDetails = $ExecuteCheckoutOperationsRequestDetails;
    }
}
