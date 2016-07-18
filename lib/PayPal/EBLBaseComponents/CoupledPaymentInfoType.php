<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Information about Coupled Payment transactions.
 */
class CoupledPaymentInfoType
  extends PPXmlMessage
{

    /**
     * ID received in the Coupled Payment Request
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $CoupledPaymentRequestID;

    /**
     * ID that uniquely identifies this CoupledPayment. Generated
     * by PP in Response
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $CoupledPaymentID;

}
