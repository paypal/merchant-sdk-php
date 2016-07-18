<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\PPXmlMessage;
/**
 * 
 */
class BMSetInventoryReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\PayPalAPI\BMSetInventoryRequestType	 
	 */ 
	public $BMSetInventoryRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:BMSetInventoryReq>';
			if($this->BMSetInventoryRequest != NULL)
			{
		   		$str .= '<ns:BMSetInventoryRequest>';
				$str .= $this->BMSetInventoryRequest->toXMLString();
				$str .= '</ns:BMSetInventoryRequest>';
			}
			$str .= '</ns:BMSetInventoryReq>';
			return $str;
	}
    
}
