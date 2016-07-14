<?php
namespace PayPal\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 * Option Selection. Required Character length and limitations:
 * 12 single-byte alphanumeric characters
 */
class OptionSelectionDetailsType
  extends PPXmlMessage
{
    /**
     * Option Selection. Required Character length and limitations:
     * 12 single-byte alphanumeric characters
     * @access    public
     * @namespace ns
     * @var string
     */
    public $OptionSelection;

    /**
     * Option Price. Optional
     * @access    public
     * @namespace ns
     * @var string
     */
    public $Price;

    /**
     * Option Type Optional
     * @access    public
     * @namespace ns
     * @var string
     */
    public $OptionType;

    /**
     * @access    public
     * @namespace ns
     * @var InstallmentDetailsType[]
     */
    public $PaymentPeriod;

    /**
     * Constructor with arguments
     *
     * @param string $OptionSelection
     */
    public function __construct($OptionSelection = null)
    {
        $this->OptionSelection = $OptionSelection;
    }
}
