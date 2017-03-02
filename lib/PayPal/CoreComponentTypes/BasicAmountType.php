<?php
namespace PayPal\CoreComponentTypes;

use PayPal\Core\PPXmlMessage;

/**
 * @hasAttribute
 * On requests, you must set the currencyID attribute to one of
 * the three-character currency codes for any of the supported
 * PayPal currencies. Limitations: Must not exceed $10,000 USD
 * in any currency. No currency symbol. Decimal separator must
 * be a period (.), and the thousands separator must be a comma
 * (,).
 */
class BasicAmountType
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace cc
     * @attribute
     * @var string
     */
    public $currencyID;

    /**
     *
     * @access    public
     * @namespace cc
     * @value
     * @var string
     */
    public $value;

    /**
     * Constructor with arguments
     */
    public function __construct($currencyID = null, $value = null)
    {
        $this->currencyID = $currencyID;
        $this->value = $value;
    }

}
