<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Details of leg information
 */
class FlightDetailsType
  extends PPXmlMessage
{

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ConjuctionTicket;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ExchangeTicket;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $CouponNumber;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ServiceClass;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $TravelDate;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $CarrierCode;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $StopOverPermitted;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $DepartureAirport;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ArrivalAirport;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $FlightNumber;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $DepartureTime;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $ArrivalTime;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $FareBasisCode;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $Fare;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $Taxes;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\CoreComponentTypes\BasicAmountType
     */
    public $Fee;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $EndorsementOrRestrictions;

}
