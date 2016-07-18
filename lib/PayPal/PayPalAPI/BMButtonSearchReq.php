<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\PPXmlMessage;
/**
 * 
 */
class BMButtonSearchReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\PayPalAPI\BMButtonSearchRequestType	 
	 */ 
	public $BMButtonSearchRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:BMButtonSearchReq>';
			if($this->BMButtonSearchRequest != NULL)
			{
		   		$str .= '<ns:BMButtonSearchRequest>';
				$str .= $this->BMButtonSearchRequest->toXMLString();
				$str .= '</ns:BMButtonSearchRequest>';
			}
			$str .= '</ns:BMButtonSearchReq>';
			return $str;
	}
    
}
