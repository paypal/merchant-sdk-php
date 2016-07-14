<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Defines relationship between buckets
 */
class CoupledBucketsType
  extends PPXmlMessage
{
    /**
     * Relationship Type - LifeTime (default)
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $CoupleType;

    /**
     * Identifier for this relation
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $CoupledPaymentRequestID;

    /**
     * @access    public
     * @namespace ebl
     * @var string[]
     */
    public $PaymentRequestID;

    /**
     * Constructor with arguments
     *
     * @param string[] $PaymentRequestID
     */
    public function __construct($PaymentRequestID = null)
    {
        $this->PaymentRequestID = $PaymentRequestID;
    }
}
