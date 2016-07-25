<?php
namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractRequestType;

/**
 *
 */
class ExecuteCheckoutOperationsRequestType
  extends AbstractRequestType
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\ExecuteCheckoutOperationsRequestDetailsType
     */
    public $ExecuteCheckoutOperationsRequestDetails;

    /**
     * Constructor with arguments
     */
    public function __construct($ExecuteCheckoutOperationsRequestDetails = null)
    {
        $this->ExecuteCheckoutOperationsRequestDetails = $ExecuteCheckoutOperationsRequestDetails;
    }

}
