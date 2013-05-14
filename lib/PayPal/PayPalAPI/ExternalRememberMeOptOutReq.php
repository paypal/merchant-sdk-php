<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\;
/**
 * 
 */
class ExternalRememberMeOptOutReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\\ExternalRememberMeOptOutRequestType	 
	 */ 
	public $ExternalRememberMeOptOutRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:ExternalRememberMeOptOutReq>';
			if($this->ExternalRememberMeOptOutRequest != NULL)
			{
		   		$str .= '<ns:ExternalRememberMeOptOutRequest>';
				$str .= $this->ExternalRememberMeOptOutRequest->toXMLString();
				$str .= '</ns:ExternalRememberMeOptOutRequest>';
			}
			$str .= '</ns:ExternalRememberMeOptOutReq>';
			return $str;
	}
   
}
