<?php

namespace PayPal\Merchant\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class GetIncentiveEvaluationResponseDetailsType
  extends PPXmlMessage
{

    /**
     *
     * @array
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\IncentiveDetailType
     */
    public $IncentiveDetails;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $RequestId;

}
