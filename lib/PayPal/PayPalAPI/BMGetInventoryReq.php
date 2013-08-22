<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\PPXmlMessage;
/**
 * 
 */
class BMGetInventoryReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\PayPalAPI\BMGetInventoryRequestType	 
	 */ 
	public $BMGetInventoryRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:BMGetInventoryReq>';
			if($this->BMGetInventoryRequest != NULL)
			{
		   		$str .= '<ns:BMGetInventoryRequest>';
				$str .= $this->BMGetInventoryRequest->toXMLString();
				$str .= '</ns:BMGetInventoryRequest>';
			}
			$str .= '</ns:BMGetInventoryReq>';
			return $str;
	}
    
}
