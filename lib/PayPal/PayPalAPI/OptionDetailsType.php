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
     *
     * @array
     * @access    public
     * @namespace ns
     * @var \PayPal\PayPalAPI\OptionSelectionDetailsType
     */
    public $OptionSelectionDetails;

    /**
     * Constructor with arguments
     */
    public function __construct($OptionName = null)
    {
        $this->OptionName = $OptionName;
    }

}
