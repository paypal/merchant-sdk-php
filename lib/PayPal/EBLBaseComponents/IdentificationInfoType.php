<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\;
/**
 * Mobile specific buyer identification. 
 */
class IdentificationInfoType  
   extends PPXmlMessage{

	/**
	 * Mobile specific buyer identification.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\MobileIDInfoType	 
	 */ 
	public $MobileIDInfo;

	/**
	 * Contains login bypass information.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\RememberMeIDInfoType	 
	 */ 
	public $RememberMeIDInfo;

	/**
	 * Identity Access Token.
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var PayPal\\IdentityTokenInfoType	 
	 */ 
	public $IdentityTokenInfo;


   
}
