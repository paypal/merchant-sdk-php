<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Enhanced Data Information. Example: AID for Airlines
 */
class EnhancedDataType
  extends PPXmlMessage
{
    /**
     * @access    public
     * @namespace ebl
     * @var AirlineItineraryType
     */
    public $AirlineItinerary;
}
