<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * AID for Airlines
 */
class AirlineItineraryType
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $PassengerName;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $IssueDate;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $TravelAgencyName;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $TravelAgencyCode;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $TicketNumber;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $IssuingCarrierCode;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $CustomerCode;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $TotalFare;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $TotalTaxes;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $TotalFee;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $RestrictedTicket;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ClearingSequence;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ClearingCount;

    /**
     *
     * @array
     * @access    public
     * @namespace ebl
     * @var \PayPal\EBLBaseComponents\FlightDetailsType
     */
    public $FlightDetails;

}
