<?php

namespace PayPal\Merchant\PayPalAPI;

use PayPal\Merchant\EBLBaseComponents\AbstractResponseType;

/**
 *
 */
class BMGetInventoryResponseType
  extends AbstractResponseType
{

    /**
     *
     * @access    public
     * @namespace ns
     * @var string
     */
    public $HostedButtonID;

    /**
     *
     * @access    public
     * @namespace ns
     * @var string
     */
    public $TrackInv;

    /**
     *
     * @access    public
     * @namespace ns
     * @var string
     */
    public $TrackPnl;

    /**
     *
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\ItemTrackingDetailsType
     */
    public $ItemTrackingDetails;

    /**
     *
     * @access    public
     * @namespace ns
     * @var string
     */
    public $OptionIndex;

    /**
     *
     * @access    public
     * @namespace ns
     * @var string
     */
    public $OptionName;

    /**
     *
     * @array
     * @access    public
     * @namespace ebl
     * @var \PayPal\Merchant\EBLBaseComponents\OptionTrackingDetailsType
     */
    public $OptionTrackingDetails;

    /**
     *
     * @access    public
     * @namespace ns
     * @var string
     */
    public $SoldoutURL;

    /**
     *
     * @array
     * @access    public
     * @namespace ns
     * @var string
     */
    public $DigitalDownloadKeys;

}
