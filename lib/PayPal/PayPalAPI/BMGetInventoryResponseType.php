<?php
namespace PayPal\PayPalAPI;
use PayPal\EBLBaseComponents\AbstractResponseType;

class BMGetInventoryResponseType  extends AbstractResponseType
  {

	/**
	 * @access public
	 * @namespace ns
	 * @var string
	 */
	public $HostedButtonID;

	/**
	 * @access public
	 * @namespace ns
	 * @var string
	 */
	public $TrackInv;

	/**
	 * @access public
	 * @namespace ns
	 * @var string
	 */
	public $TrackPnl;

	/**
	 * @access public
	 * @namespace ebl
	 * @var \PayPal\EBLBaseComponents\ItemTrackingDetailsType
	 */
	public $ItemTrackingDetails;

	/**
	 * @access public
	 * @namespace ns
	 * @var string
	 */
	public $OptionIndex;

	/**
	 * @access public
	 * @namespace ns
	 * @var string
	 */
	public $OptionName;

	/**
	 * @access public
	 * @namespace ebl
	 * @var \PayPal\EBLBaseComponents\OptionTrackingDetailsType[]
	 */
	public $OptionTrackingDetails;

	/**
	 * @access public
	 * @namespace ns
	 * @var string
	 */
	public $SoldoutURL;

	/**
	 * @access public
	 * @namespace ns
	 * @var string[]
	 */
	public $DigitalDownloadKeys;


}
