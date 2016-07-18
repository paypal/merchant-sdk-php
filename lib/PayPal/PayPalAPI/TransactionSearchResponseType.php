<?php 
namespace PayPal\PayPalAPI;
use PayPal\EBLBaseComponents\AbstractResponseType; 
/**
 * Results of a Transaction Search.
 */
class TransactionSearchResponseType  extends AbstractResponseType  
  {

	/**
	 * Results of a Transaction Search.
     * @array
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\PaymentTransactionSearchResultType	 
	 */ 
	public $PaymentTransactions;


}
