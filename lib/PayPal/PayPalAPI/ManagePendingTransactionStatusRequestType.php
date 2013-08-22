<?php 
namespace PayPal\PayPalAPI;
use PayPal\EBLBaseComponents\AbstractRequestType; 
/**
 * 
 */
class ManagePendingTransactionStatusRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\string	 
	 */ 
	public $TransactionID;

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Action;

	/**
	 * Constructor with arguments
	 */
	public function __construct($TransactionID = NULL, $Action = NULL) {
		$this->TransactionID = $TransactionID;
		$this->Action = $Action;
	}


    
}
