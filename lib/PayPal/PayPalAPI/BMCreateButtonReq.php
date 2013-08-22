<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\PPXmlMessage;
/**
 * 
 */
class BMCreateButtonReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\PayPalAPI\BMCreateButtonRequestType	 
	 */ 
	public $BMCreateButtonRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:BMCreateButtonReq>';
			if($this->BMCreateButtonRequest != NULL)
			{
		   		$str .= '<ns:BMCreateButtonRequest>';
				$str .= $this->BMCreateButtonRequest->toXMLString();
				$str .= '</ns:BMCreateButtonRequest>';
			}
			$str .= '</ns:BMCreateButtonReq>';
			return $str;
	}
    
}
