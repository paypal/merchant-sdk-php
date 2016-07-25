<?php
namespace PayPal\Merchant\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class GetIncentiveEvaluationRequestDetailsType
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ExternalBuyerId;

    /**
     *
     * @array
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $IncentiveCodes;

    /**
     *
     * @array
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\IncentiveApplyIndicationType
     */
    public $ApplyIndication;

    /**
     *
     * @array
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\IncentiveBucketType
     */
    public $Buckets;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\CoreComponentTypes\BasicAmountType
     */
    public $CartTotalAmt;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\IncentiveRequestDetailsType
     */
    public $RequestDetails;

}
