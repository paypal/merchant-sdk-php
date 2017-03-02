<?php
namespace PayPal\EnhancedDataTypes;

use PayPal\Core\PPXmlMessage;

/**
 * Enhanced data for different transactions.
 */
class EnhancedPaymentDataType
  extends PPXmlMessage
{

    /**
     * AID for Airlines
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\AirlineItineraryType
     */
    public $AirlineItinerary;

}
