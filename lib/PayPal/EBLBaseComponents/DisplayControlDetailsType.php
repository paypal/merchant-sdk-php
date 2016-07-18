<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * Contains elements that allows customization of display (user
 * interface) elements. 
 */
class DisplayControlDetailsType  
   extends PPXmlMessage{

	/**
	 * Optional URL to pay button image for the inline checkout
	 * flow. Currently applicable only to the inline checkout flow
	 * when the FlowControlDetails/InlineReturnURL is present. 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $InContextPaymentButtonImage;


    
}
