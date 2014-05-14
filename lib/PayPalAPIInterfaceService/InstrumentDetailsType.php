<?php 
/**
 * InstrumentDetailsType Promotional Instrument Information. 
 */
class InstrumentDetailsType  
   extends PPXmlMessage{

	/**
	 * This field holds the category of the instrument only when it
	 * is promotional. Return value 1 represents BML, 2 reprasents
	 * PLCC/Cobranded. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $InstrumentCategory;

	/**
	 * This field holds the InstrumentID issued by external party
	 * corresponding to the funding source used in payment. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $InstrumentID;


}
