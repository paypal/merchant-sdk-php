<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\;
/**
 * 
 */
class BMGetButtonDetailsReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\\BMGetButtonDetailsRequestType	 
	 */ 
	public $BMGetButtonDetailsRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:BMGetButtonDetailsReq>';
			if($this->BMGetButtonDetailsRequest != NULL)
			{
		   		$str .= '<ns:BMGetButtonDetailsRequest>';
				$str .= $this->BMGetButtonDetailsRequest->toXMLString();
				$str .= '</ns:BMGetButtonDetailsRequest>';
			}
			$str .= '</ns:BMGetButtonDetailsReq>';
			return $str;
	}
   
}
