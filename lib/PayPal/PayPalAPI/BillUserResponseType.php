<?php 
namespace PayPal\PayPalAPI;
use PayPal\EBLBaseComponents\AbstractResponseType; 
/**
 * 
 */
class BillUserResponseType  extends AbstractResponseType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\MerchantPullPaymentResponseType	 
	 */ 
	public $BillUserResponseDetails;

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\EBLBaseComponents\FMFDetailsType	 
	 */ 
	public $FMFDetails;


}
