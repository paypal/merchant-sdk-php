<?php 
namespace PayPal\EBLBaseComponents;
use PayPal\Core\PPXmlMessage;
/**
 * Device ID Optional  Character length and limits: 256
 * single-byte characters DeviceID length morethan 256 is
 * truncated  
 */
class DeviceDetailsType  
   extends PPXmlMessage{

	/**
	 * Device ID Optional  Character length and limits: 256
	 * single-byte characters DeviceID length morethan 256 is
	 * truncated  
	 * @access public
	 
	 * @namespace ebl
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $DeviceID;


    
}
