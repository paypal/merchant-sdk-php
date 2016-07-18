<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * InstrumentDetailsType Promotional Instrument Information. 
 */
class InstrumentDetailsType  
   extends PPXmlMessage{

	/**
	 * This field holds the category of the instrument only when it
	 * is promotional. Return value 1 represents BML. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $InstrumentCategory;


}
