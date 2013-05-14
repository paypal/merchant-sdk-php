<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\;
/**
 * 
 */
class GetPalDetailsReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\\GetPalDetailsRequestType	 
	 */ 
	public $GetPalDetailsRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:GetPalDetailsReq>';
			if($this->GetPalDetailsRequest != NULL)
			{
		   		$str .= '<ns:GetPalDetailsRequest>';
				$str .= $this->GetPalDetailsRequest->toXMLString();
				$str .= '</ns:GetPalDetailsRequest>';
			}
			$str .= '</ns:GetPalDetailsReq>';
			return $str;
	}
   
}
