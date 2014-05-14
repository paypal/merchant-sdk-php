<?php 
/**
 * Hosted Button ID of button you wish to change.  Required
 * Character length and limitations: 10 single-byte numeric
 * characters  
 */
class BMSetInventoryRequestType  extends AbstractRequestType  
  {

	/**
	 * Hosted Button ID of button you wish to change.  Required
	 * Character length and limitations: 10 single-byte numeric
	 * characters 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $HostedButtonID;

	/**
	 * Is Inventory tracked.  Required 0 or 1 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $TrackInv;

	/**
	 * Is PNL Tracked.  Required 0 or 1 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $TrackPnl;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var ItemTrackingDetailsType 	 
	 */ 
	public $ItemTrackingDetails;

	/**
	 * Option Index.  Optional Character length and limitations: 1
	 * single-byte alphanumeric characters 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $OptionIndex;

	/**
	 * 
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var OptionTrackingDetailsType 	 
	 */ 
	public $OptionTrackingDetails;

	/**
	 * URL of page to display when an item is soldout.  Optional
	 * Character length and limitations: 127 single-byte
	 * alphanumeric characters 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $SoldoutURL;

	/**
	 * Whether to use the same digital download key repeatedly. 
	 * Optional 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ReuseDigitalDownloadKeys;

	/**
	 * Whether to append these keys to the list or not (replace). 
	 * Optional 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $AppendDigitalDownloadKeys;

	/**
	 * Zero or more digital download keys to distribute to
	 * customers after transaction is completed.  Optional
	 * Character length and limitations: 1000 single-byte
	 * alphanumeric characters 
     * @array
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $DigitalDownloadKeys;

	/**
	 * Constructor with arguments
	 */
	public function __construct($HostedButtonID = NULL, $TrackInv = NULL, $TrackPnl = NULL) {
		$this->HostedButtonID = $HostedButtonID;
		$this->TrackInv = $TrackInv;
		$this->TrackPnl = $TrackPnl;
	}


  
 
}
