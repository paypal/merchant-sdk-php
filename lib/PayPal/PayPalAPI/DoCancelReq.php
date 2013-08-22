<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\PPXmlMessage;
/**
 * 
 */
class DoCancelReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\PayPalAPI\DoCancelRequestType	 
	 */ 
	public $DoCancelRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:DoCancelReq>';
			if($this->DoCancelRequest != NULL)
			{
		   		$str .= '<ns:DoCancelRequest>';
				$str .= $this->DoCancelRequest->toXMLString();
				$str .= '</ns:DoCancelRequest>';
			}
			$str .= '</ns:DoCancelReq>';
			return $str;
	}
    
}
