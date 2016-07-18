<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 *
 */
class CreditCardNumberTypeType
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $CreditCardType;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $CreditCardNumber;

}
