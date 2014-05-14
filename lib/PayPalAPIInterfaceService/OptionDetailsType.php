<?php 
/**
 * Option Name. Optional 
 */
class OptionDetailsType  
   extends PPXmlMessage{

	/**
	 * Option Name. Optional 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $OptionName;

	/**
	 * 
     * @array
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var OptionSelectionDetailsType 	 
	 */ 
	public $OptionSelectionDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($OptionName = NULL) {
		$this->OptionName = $OptionName;
	}


  
 
}
