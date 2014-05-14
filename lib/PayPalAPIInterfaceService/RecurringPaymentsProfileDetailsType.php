<?php 
/**
 * Subscriber name - if missing, will use name in buyer's
 * account 
 */
class RecurringPaymentsProfileDetailsType  
   extends PPXmlMessage{

	/**
	 * Subscriber name - if missing, will use name in buyer's
	 * account 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $SubscriberName;

	/**
	 * Subscriber address - if missing, will use address in buyer's
	 * account 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var AddressType 	 
	 */ 
	public $SubscriberShippingAddress;

	/**
	 * When does this Profile begin billing? 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var dateTime 	 
	 */ 
	public $BillingStartDate;

	/**
	 * Your own unique invoice or tracking number. Optional
	 * Character length and limitations: 127 single-byte
	 * alphanumeric characters 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ProfileReference;

	/**
	 * Constructor with arguments
	 */
	public function __construct($BillingStartDate = NULL) {
		$this->BillingStartDate = $BillingStartDate;
	}


  
 
}
