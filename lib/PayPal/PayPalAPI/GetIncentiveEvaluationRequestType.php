<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;
use PayPal\EBLBaseComponents\GetIncentiveEvaluationRequestDetailsType;

class GetIncentiveEvaluationRequestType
  extends AbstractRequestType
{
    /**
     * @access    public
     * @namespace ebl
     * @var GetIncentiveEvaluationRequestDetailsType
     */
    public $GetIncentiveEvaluationRequestDetails;

    /**
     * Constructor with arguments
     *
     * @param GetIncentiveEvaluationRequestDetailsType $GetIncentiveEvaluationRequestDetails
     */
    public function __construct($GetIncentiveEvaluationRequestDetails = null)
    {
        $this->GetIncentiveEvaluationRequestDetails = $GetIncentiveEvaluationRequestDetails;
    }
}
