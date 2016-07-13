<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;
use PayPal\EBLBaseComponents\SetAuthFlowParamRequestDetailsType;

class SetAuthFlowParamRequestType
  extends AbstractRequestType
{
    /**
     * @access    public
     * @namespace ebl
     * @var SetAuthFlowParamRequestDetailsType
     */
    public $SetAuthFlowParamRequestDetails;

    /**
     * Constructor with arguments
     *
     * @param SetAuthFlowParamRequestDetailsType $SetAuthFlowParamRequestDetails
     */
    public function __construct($SetAuthFlowParamRequestDetails = null)
    {
        $this->SetAuthFlowParamRequestDetails = $SetAuthFlowParamRequestDetails;
    }
}
