<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\;
/**
 * 
 */
class BMUpdateButtonReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\\BMUpdateButtonRequestType	 
	 */ 
	public $BMUpdateButtonRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:BMUpdateButtonReq>';
			if($this->BMUpdateButtonRequest != NULL)
			{
		   		$str .= '<ns:BMUpdateButtonRequest>';
				$str .= $this->BMUpdateButtonRequest->toXMLString();
				$str .= '</ns:BMUpdateButtonRequest>';
			}
			$str .= '</ns:BMUpdateButtonReq>';
			return $str;
	}
   
}
