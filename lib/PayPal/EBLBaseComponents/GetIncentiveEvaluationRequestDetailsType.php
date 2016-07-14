<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;
use PayPal\CoreComponentTypes\BasicAmountType;

class GetIncentiveEvaluationRequestDetailsType
  extends PPXmlMessage
{
    /**
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ExternalBuyerId;

    /**
     * @access    public
     * @namespace ebl
     * @var string[]
     */
    public $IncentiveCodes;

    /**
     * @access    public
     * @namespace ebl
     * @var IncentiveApplyIndicationType[]
     */
    public $ApplyIndication;

    /**
     * @access    public
     * @namespace ebl
     * @var IncentiveBucketType[]
     */
    public $Buckets;

    /**
     * @access    public
     * @namespace ebl
     * @var BasicAmountType
     */
    public $CartTotalAmt;

    /**
     * @access    public
     * @namespace ebl
     * @var IncentiveRequestDetailsType
     */
    public $RequestDetails;
}
