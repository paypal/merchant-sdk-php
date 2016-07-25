<?php
namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractRequestType;

/**
 *
 */
class SetAuthFlowParamRequestType
  extends AbstractRequestType
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\SetAuthFlowParamRequestDetailsType
     */
    public $SetAuthFlowParamRequestDetails;

    /**
     * Constructor with arguments
     */
    public function __construct($SetAuthFlowParamRequestDetails = null)
    {
        $this->SetAuthFlowParamRequestDetails = $SetAuthFlowParamRequestDetails;
    }

}
