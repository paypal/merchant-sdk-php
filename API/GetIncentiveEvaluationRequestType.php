<?php

namespace PayPal\Merchant\API;

use PayPal\Merchant\EBLBaseComponents\AbstractRequestType;

/**
 *
 */
class GetIncentiveEvaluationRequestType
  extends AbstractRequestType
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\GetIncentiveEvaluationRequestDetailsType
     */
    public $GetIncentiveEvaluationRequestDetails;

    /**
     * Constructor with arguments
     */
    public function __construct($GetIncentiveEvaluationRequestDetails = null)
    {
        $this->GetIncentiveEvaluationRequestDetails = $GetIncentiveEvaluationRequestDetails;
    }

}
