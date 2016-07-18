<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Type of the Payment is it Instant or Echeck or Any.
 */
class PaymentDirectivesType
  extends PPXmlMessage
{

    /**
     * Type of the Payment is it Instant or Echeck or Any.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $PaymentType;

}
