<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\PPXmlMessage;
/**
 * 
 */
class CompleteRecoupReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\PayPalAPI\CompleteRecoupRequestType	 
	 */ 
	public $CompleteRecoupRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:CompleteRecoupReq>';
			if($this->CompleteRecoupRequest != NULL)
			{
		   		$str .= '<ns:CompleteRecoupRequest>';
				$str .= $this->CompleteRecoupRequest->toXMLString();
				$str .= '</ns:CompleteRecoupRequest>';
			}
			$str .= '</ns:CompleteRecoupReq>';
			return $str;
	}
    
}
