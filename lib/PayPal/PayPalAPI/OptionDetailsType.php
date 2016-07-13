<?php
namespace PayPal\PayPalAPI;

use PayPal\Core\PPXmlMessage;

/**
 * Option Name. Optional
 */
class OptionDetailsType
  extends PPXmlMessage
{
    /**
     * Option Name. Optional
     * @access    public
     * @namespace ns
     * @var string
     */
    public $OptionName;

    /**
     * @access    public
     * @namespace ns
     * @var OptionSelectionDetailsType[]
     */
    public $OptionSelectionDetails;

    /**
     * Constructor with arguments
     *
     * @param string $OptionName
     */
    public function __construct($OptionName = null)
    {
        $this->OptionName = $OptionName;
    }
}
