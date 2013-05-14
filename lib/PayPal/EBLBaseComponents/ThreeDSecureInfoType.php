<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\;
/**
 * 3DSecureInfoType Information about 3D Secure parameters. 
 */
class ThreeDSecureInfoType  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\ThreeDSecureRequestType	 
	 */ 
	public $ThreeDSecureRequest;

	/**
	 * 
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\ThreeDSecureResponseType	 
	 */ 
	public $ThreeDSecureResponse;


}
